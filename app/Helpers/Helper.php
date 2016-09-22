<?php

    namespace App\Helpers;

    use File, Response, Session, Auth;
	use App\User;

    class Helper
    {
        public static function prettyJson($inputArray, $statusCode)
        {
            return response()->json($inputArray, $statusCode, array('Content-Type' => 'application/json'), JSON_PRETTY_PRINT);
        }

        public static function getRole( $user_id = null) {
        	$user = User::whereId($user_id)->with('roles')->first();
    		return $user->roles[0]->name;
        }
    }