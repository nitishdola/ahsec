<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class QualificationsController extends Controller
{
    public function __construct() {
        $this->_user = Auth::guard('user')->user();
    }

    public function create() {
    	if($this->_user->can(['create_qualification'])) { 

    	}
    }
}
