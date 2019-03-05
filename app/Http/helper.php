<?php

	function checkPermission($permission){
		$user = getPermission(auth()->user()->role);
		foreach($permission as $key => $value){
			if($value==$user){
				return true;
			}
		}
	}

	function getPermission($role){
		switch ($role){
			case '1';
				return 'admin';
			break;
			case '2';
				return 'user';
			break;
		}		
	}


























