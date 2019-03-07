<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Web_settings extends Model
{
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
		'sitetitle', 'logo', 'admin_email', 'support_email', 'company_address', 'maintenance_mode', 'active'
	];
}
