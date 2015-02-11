<?php

class Model_User extends ORM{
	
	private $session;

	function __construct()
	{
		parent::__construct();
		Session::$default = 'database';	
		$this->session = Session::instance();
	}

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

    public function login_user($username, $password)
    {
    	$result;

    	$user = $this->select('user.*','photos.*')
			->where('email', '=', $username)
			->and_where('password' , '=', $password)
			->join('photos','LEFT')
			->on('user.photo_id', '=', 'photos.id')
    		->find();

    	if($user->loaded())
    	{
    		if($user->active == 0)
    		{
    			$result = false;	
    		} 
    		else
    		{
    			$result = true;
	    		$this->session->set('logged_in', true);
	    		//SI guardo el objeto, despues no puedo levantar la foto desde el master controller
	    		$user = $user->as_array();
	    		$this->session->set('user', $user);	
    		}
    	}
    	else
    	{
    		$result = false;
    	}

    	return $result;
    }

    public function logout_user()
    {
    	$this->session->delete('logged_in');
		$this->session->delete('user');
    }

    public function is_logged_in()
    {
        return $this->session->get('logged_in');
    }

    public function get_user_info()
    {
        return $this->session->get('user');
    }
    
    

}