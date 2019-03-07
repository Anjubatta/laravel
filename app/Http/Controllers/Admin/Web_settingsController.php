<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class Web_settingsController extends Controller
{
    const active = 'settings';
	const title = 'Setting';
	const slug = 'settings';
	
	
   public function index(){
	   
	   $title = array(
			'active' => self::active,
			'title' => self::title,
			'slug' => self::slug
		);
		
		$setting = Settings::first();
		return view('admin.settings.index', compact('title','setting'));
	   
	   }
   
   
   public function store(Request $request)
	{

	if ($request->file('logo')) {
			$request->file('logo');
        	
			$path = public_path('uploads/site/');
        	 $image = time().'.png';
			$image_path = $path.$image;  
			
			
			if (file_exists($image_path)) {
				   @unlink($image_path);
				}
        	Image::make($request->file('logo'))->save($path.$image);
        }
		
			$update = new Settings;			
			
			 if ($request->file('logo')) {
			$update->logo = $image;
			 }
			$update->sitetitle = $request->sitetitle;
			$update->admin_email = $request->admin_email;
			$update->support_email = $request->support_email;
			$update->company_address = $request->company_address;
			$update->maintenance_mode = $request->maintenance_mode;		
			$update->save();
		
			
		alert()->success('Success', ' updated!');
		return redirect()->route('admin.settings.index');
	}

	
   /**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Models\settings $settings
	* @return \Illuminate\Http\Response
	*/
	public function edit(Settings $setting)
	{
	
		$title = array(
			'active' => self::active,
			'title' => self::title,
			'slug' => self::slug
		);
		
		
		return view('admin.settings.edit', compact('title', 'setting'));
	}

	/**
	* Update the specified resource in storage.
	*
	* @param CompanyRequest $request
	* @param  \App\Models\Company $company
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, Settings $setting)
	{
	
	if ($request->file('logo')) {
			$request->file('logo');
        	
			$path = public_path('uploads/site/');
        	$image = time().'.png';
			$image_path = $path.$image;  
			
			
			if (file_exists($image_path)) {
				   @unlink($image_path);
				}
        	Image::make($request->file('logo'))->save($path.$image);
        }
		
			$update = new Settings;
			$update->exists = true;
			$update->id = $setting->id;
			 if ($request->file('logo')) {
			$update->logo = $image;
			 }
			$update->sitetitle = $request->sitetitle;
			$update->admin_email = $request->admin_email;
			$update->support_email = $request->support_email;
			$update->company_address = $request->company_address;
			$update->maintenance_mode = $request->maintenance_mode;		
			$update->update();
		
			alert()->success('Success Message', 'updated');
		
		return redirect()->route('admin.settings.index');
	}

	
}
