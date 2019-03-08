<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	
	const active = 'dashboard';
	const title = 'Dashboard';
	const slug = 'dashboard';
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
	
		$title = array(
			'active' => self::active,
			'title' => self::title,
			'slug' => self::slug
		);
		
        return view('home');
    }
}
