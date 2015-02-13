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

    public static function equals_email($email_set, $email_current)
    {
        $result;
        
        if($email_set == $email_current)
        {
            $result = true;
        }
        else
        {
            $result = Model_User::unique_email($email_set);
        }
        return $result;
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
    
    //SESSION METHODS
    public function is_logged_in()
    {
        return $this->session->get('logged_in');
    }

    public function get_user_info()
    {
        return $this->session->get('user');
    }
    
    //UPDATE ACCOUNT INFO
    public function update_account($post)
    {        
        $user_info = $this->get_user_info();
        $user_id = $user_info['id'];
        $user = $this->where('id', '=', $user_id )->find();
        $user->name = $post['name'];
        $user->last_name = $post['last_name'];
        $user->email = $post['email'];
        $r = $user->save();

        //update session info
        $session = $this->get_user_info();
        $session['name'] = $post['name'];
        $session['last_name'] = $post['last_name'];
        $session['email'] = $post['email'];
        $this->session->set('user', $session); 

    }

    //UPDATE ACCOUNT INFO
    public function update_password($password)
    {        
        $user_info = $this->get_user_info();
        $user_id = $user_info['id'];
        $user = $this->where('id', '=', $user_id )->find();
        $user->password = $password;
        $r = $user->save();

        //update session info
        $session = $this->get_user_info();
        $session['password'] = $password;
        $this->session->set('user', $session); 

    }

}