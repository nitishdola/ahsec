<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Helpers\Helper;
use Gate, Auth, Log, DB;
use App\User;
class PagesController extends Controller
{
    public function getHome() {
    	$user = User::whereId(Auth::user()->id)->with('roles')->first();
    	return $user_role = $user->roles[0]->role_slug;

    	if($user_role == 'admin') {
    		return view('admin.home', compact('departments', 'courses', 'students', 'course_fee_paid', 'exam_fee_paid', 'hostel_fee_paid'));
    	}else if($user_role == 'employee'){
           
    		return view('department.home', compact('departments', 'courses', 'students', 'course_fee_paid', 'exam_fee_paid', 'hostel_fee_paid'));
    	}else{
    		return redirect('auth/logout');
    	}
    }
}
