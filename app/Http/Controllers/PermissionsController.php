<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Helpers\Helper;
use Validator, Redirect,DB, Session, Hashids, Auth, Input;
use App\User;
class PermissionsController extends Controller
{
	public function __construct() {
		$user = User::whereId(Auth::user()->id)->with('roles')->first();
        $user_role = $user->roles[0]->role_slug;

    	if($user_role == 'administrator') {
    		return $layout = 'administrator';
    	}else{
    		return redirect('auth/logout');
    	}
	}
    public function create() {
    	return $layout;
    }
}
