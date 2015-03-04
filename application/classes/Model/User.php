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

    	
        /*
        $user = $this->select('user.*','photos.*','styles.*')
			->where('email', '=', $username)
			->and_where('password' , '=', $password)
			->join('photos','LEFT')
			->on('user.photo_id', '=', 'photos.id')
            ->join('userstyles','RIGHT')
            ->on('user.id', '=', 'userstyles.user_id')
            ->join('styles','RIGHT')
            ->on('userstyles.style_id', '=', 'styles.id')
    		->find();
        */
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
                
                $q = DB::select('styles.*')
                ->from('userstyles')
                ->where('userstyles.user_id','=',$user->id)
                ->join('styles', 'LEFT')
                ->on('userstyles.style_id','=','styles.id');

                $styles = $q->execute();
                $styles = $styles->as_array();
                
                $user = $user->as_array();
                
                $user['styles'] = $styles;

	    		$this->session->set('logged_in', true);       
	    		$this->session->set('user', $user);	
                $result = true;
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
        if(empty($post['province']))
        {
            $post['province'] = null;
        }
        if(empty($post['city']))
        {
            $post['city'] = null;
        }
        
        $user_info = $this->get_user_info();
        $user_id = $user_info['id'];
        $user = $this->where('id', '=', $user_id )->find();
        $user->name = $post['name'];
        $user->last_name = $post['last_name'];
        $user->email = $post['email'];

        $user->province_id = $post['province'];
        $user->city_id = $post['city'];
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

    //UPDATE ACCOUNT INFO
    public function update_about($post)
    {        
        $user_info = $this->get_user_info();
        $user_id = $user_info['id'];
        $user = $this->where('id', '=', $user_id )->find();
        $user->about = $post['about'];
        $user->availability = $post['availability'];
        $user->phone = $post['phone'];
        $user->address = $post['address'];
        $r = $user->save();

        //DELETE CURRENT STYLES
        DB::delete('userstyles')
            ->where('user_id','=', $user_id)
            ->execute();

        //SAVE NEW ONES
        if(isset($post['styles']))
        {
            $query = DB::insert('userstyles', array('user_id', 'style_id'));
        
        
            foreach ($post['styles'] as $key => $value) {
                $query->values(array($user_id, $value));
            }    
            $result = $query->execute();
        }

        //update session info
        $session = $this->get_user_info();
        $session['about'] = $post['about'];
        $session['availability'] = $post['availability'];
        $session['phone'] = $post['phone'];
        $session['address'] = $post['address'];

        //REQUEST NEW STYLES
        $q = DB::select('styles.*')
            ->from('userstyles')
            ->where('userstyles.user_id','=',$user->id)
            ->join('styles', 'LEFT')
            ->on('userstyles.style_id','=','styles.id');

        $styles = $q->execute();
        $styles = $styles->as_array();
        $session['styles'] = $styles;

        $this->session->set('user', $session); 

    }

    public function update_profile_photo($photo_id)
    {
        $user = $this->get_user_info();
        
        $user = $this->where('id', '=', $user['id'] )->find();
        $user->photo_id = $photo_id;
        $r = $user->save();

        $session = $this->get_user_info();
        $session['photo_id'] = $photo_id;

        $this->session->set('user', $session); 
    }

    public function update_session()
    {
        $current_session = $this->get_user_info();
        $mu = new Model_User();
        $user = $mu->select('user.*','photos.*')
            ->where('user.id', '=', $current_session['id'])
            ->join('photos','LEFT')
            ->on('user.photo_id', '=', 'photos.id')
            ->find();

        $q = DB::select('styles.*')
            ->from('userstyles')
            ->where('userstyles.user_id','=',$user->id)
            ->join('styles', 'LEFT')
            ->on('userstyles.style_id','=','styles.id');

        $styles = $q->execute();
        $styles = $styles->as_array();
        
        $user = $user->as_array();
        
        $user['styles'] = $styles;
    
        $this->session->set('user', $user); 
    }

}