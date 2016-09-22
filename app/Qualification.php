<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable = array('name');
	protected $table    = 'qualifications';
    protected $guarded  = ['_token'];

    public static $rules = [
    	'name' =>  'required|unique:qualifications|max:127',
    ];
}
