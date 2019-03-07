<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	
	const active = 'dashboard';
	const title = 'Dashboard';
	const slug = 'dashboard';

	
	
 public  function index(){
		$title = array(
			'active' => self::active,
			'title' => self::title,
			'slug' => self::slug
		);

		return view('admin.dashboard.index', compact('title'));
		
	}
}
