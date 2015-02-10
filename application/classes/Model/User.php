<?php

class Model_User extends ORM{
	
	public static function unique_email($email)
	{
	    // Check if the email already exists in the database
	    return ! DB::select(array(DB::expr('COUNT(email)'), 'total'))
	        ->from('users')
	        ->where('email', '=', $email)
	        ->execute()
	        ->get('total');
	}

	public function register($array)
    {
        // Create a new user record in the database
        $id = DB::insert('users', array_keys($array))
            ->values($array)
            ->execute();
 
        // Save the new user id to a cookie
        //cookie::set('user', $id);
 
        return $id;
    }
}