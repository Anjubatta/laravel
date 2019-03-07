<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
class ProfileController extends Controller
{
	const active = 'profile';
	const title = 'Profile';
	const slug = 'profile';
	
	
   public function index(){	   
	   
	   $title = array(
			'active' => self::active,
			'title' => self::title,
			'slug' => self::slug
		);		
		$use = auth()->user();
					
		$profile = User::whereId($use->id)->first();
		return view('admin.profile.index', compact('title','profile'));
	   
	   }
   
   
   
   /**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Models\settings $settings
	* @return \Illuminate\Http\Response
	*/
	public function edit(User $profile)
	{
	
		$title = array(
			'active' => self::active,
			'title' => self::title,
			'slug' => self::slug
		);
		
		
		return view('admin.profile.edit', compact('title', 'profile'));
	}
public function show(User $profile)
	{
	
		$title = array(
			'active' => self::active,
			'title' => self::title,
			'slug' => self::slug
		);
		
		
		return view('admin.profile.edit', compact('title', 'profile'));
	}

	/**
	* Update the specified resource in storage.
	*
	* @param CompanyRequest $request
	* @param  \App\Models\Company $company
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, User $profile)
	{
	
	if ($request->file('image')) {
			$request->file('image');
        	
			$path = public_path('uploads/users/');
        	$image = time().'.png'; 
			$image_path = $path.$image;  
			
			
			if (file_exists($image_path)) {
				   @unlink($image_path);
				}
        	Image::make($request->file('image'))->save($path.$image);
        }
		
			$update = new User;
			$update->exists = true;
			$update->id = $profile->id;
			 if ($request->file('image')) {
			$update->image = $image;
			 }
			$update->fname = $request->fname;
			$update->lname = $request->lname;			
			$update->update();
	
			alert()->success('Success Message', 'updated');
		
		return redirect()->route('admin.profile.index');
	}

}
