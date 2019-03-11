<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangePasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class ChangePasswordController extends Controller
{	
	const active = 'changepassword';
	const title = 'Change Password';
	const slug = 'changepassword';
	
    public function index(){
	   $title = array(
			'active' => self::active,
			'title' => self::title,
			'slug' => self::slug
		);
		return view('admin.changepassword.index', compact('title'));
	   
	   }
	   
	   
    public function store(Request $request)
    {
	
	
        $this->validate($request, [
            'current' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::find(Auth::id());

        if (!Hash::check($request->current, $user->password)) {
		alert()->error('Failed', 'Current password does not match');
        }else{
			
		
			$user->password = Hash::make($request->password);
			$user->save();
			alert()->success('Success Message', 'Password Change Successfully');
		}

        
		return redirect()->route('admin.changepassword.index');
        return $user;
    }


}
