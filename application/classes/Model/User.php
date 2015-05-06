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
        $user = $this->select('user.*',array('profile.photo','photo'),array('cover.photo', 'cover'))
            ->where('email', '=', $username)
            ->and_where('password' , '=', $password)
            ->join(array('photos','profile'),'LEFT')
            ->on('user.photo_id', '=', 'profile.id')
            ->join(array('photos','cover'),'LEFT')
            ->on('user.cover_id', '=', 'cover.id')
            ->find();


    	if($user->loaded())
    	{
    		if($user->active == 0 || $user->delete == 1)
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
    
    ////////////
    //FACEBOOK//
    ////////////
    public function fb_user_exists($email)
    {
        $user = $this->select('email')
            ->where('email', '=', $email)
            ->find();

        if($user->loaded())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function fb_login($email)
    {

        $user = $this->select('user.*',array('profile.photo','photo'),array('cover.photo', 'cover'))
            ->where('email', '=', $email)
            ->join(array('photos','profile'),'LEFT')
            ->on('user.photo_id', '=', 'profile.id')
            ->join(array('photos','cover'),'LEFT')
            ->on('user.cover_id', '=', 'cover.id')
            ->find();


        if($user->loaded())
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
        else
        {
            $result = false;
        }

        return $result;
    }

    public function fb_keep_in_session($array)
    {
        $this->session->set('fb_user', $array); 
    }

    public function fb_register($role)
    {
        $array = $this->session->get('fb_user');
        $this->name = $array['name'];
        $this->last_name = $array['last_name'];
        $this->email = $array['email'];
        $this->password = sha1($array['id']);
        $this->role = $role;
        $this->hash = sha1(rand(0,1000));
        $this->active = 1;
        $this->save();
        
        $t = new Model_User();
        $t->fb_login($array['email']);
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
        $this->update_session();

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
        $this->update_session();
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
        $this->update_session();
    }

    public function update_profile_photo($photo_id)
    {
        $user = $this->get_user_info();
        
        $user = $this->where('id', '=', $user['id'] )->find();
        $user->photo_id = $photo_id;
        $r = $user->save();

        $this->update_session();
    }

    public function update_cover_photo($cover_id)
    {
        $user = $this->get_user_info();
        
        $user = $this->where('id', '=', $user['id'] )->find();
        $user->cover_id = $cover_id;
        $r = $user->save();

        $this->update_session();
    }

    public function update_session()
    {
        $current_session = $this->get_user_info();
        $mu = new Model_User();
        $user = $mu->select('user.*',array('profile.photo','photo'),array('cover.photo', 'cover'))
            ->where('user.id', '=', $current_session['id'])
            ->join(array('photos','profile'),'LEFT')
            ->on('user.photo_id', '=', 'profile.id')
            ->join(array('photos','cover'),'LEFT')
            ->on('user.cover_id', '=', 'cover.id')
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

    public function get_profile_info_by_id($id)
    {
        $user = $this->select('user.*',array('profile.photo','photo'), array('cover.photo', 'cover'), array('provinces.province', 'province_name'), array('cities.city', 'city_name') )
            ->where('user.id', '=', $id)
            ->join(array('photos','profile'),'LEFT')
            ->on('user.photo_id', '=', 'profile.id')
            ->join(array('photos','cover'),'LEFT')
            ->on('user.cover_id', '=', 'cover.id')
            ->join('provinces', 'LEFT')
            ->on('user.province_id', '=', 'provinces.id')
            ->join('cities', 'LEFT')
            ->on('user.city_id', '=', 'cities.id')
            ->find();

        $q = DB::select('styles.*')
            ->from('userstyles')
            ->where('userstyles.user_id','=',$id)
            ->join('styles', 'LEFT')
            ->on('userstyles.style_id','=','styles.id');

        $styles = $q->execute();
        $styles = $styles->as_array();

        $q = DB::select('followers.user_id')
            ->from('followers')
            ->where('followers.follower_id','=', $id);

        $profile_followers = $q->execute();
        $profile_followers = $profile_followers->as_array();

        $user = $user->as_array();
        
        $user['styles'] = $styles;
        $user['profile_followers'] = $profile_followers;

        return $user;
    }

    public function search_users($param, $offset, $province, $city)
    {
        $this->select('user.name', 'user.last_name', 'user.id', 'user.role', 'user.photo_id', 'user.city_id', 'user.province_id', 'photos.photo', 'cities.city', 'provinces.province', 'styles.style', 'userstyles.*', 'user.delete')
            ->where('user.role','=', '1')
            ->and_where('user.delete','=', '0');
        if(empty($param) && empty($province))
        {
            $this->and_where('user.name','LIKE', '%'.$param.'%');
            
            $this->or_where('user.last_name','LIKE', '%'.$param.'%');
            $this->and_where('user.role','=', '1');
            $this->and_where('user.delete','=', '0');

        }
        elseif(empty($param) && !empty($province))
        {
            if(empty($city))
            {
                $this->and_where('user.province_id','=', $province);
            }
            else
            {
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.city_id','=', $city);    
            }            
        }
        elseif(!empty($param) && empty($province))
        {
            $this->and_where('user.name','LIKE', '%'.$param.'%');
            
            $this->or_where('user.last_name','LIKE', '%'.$param.'%');
            $this->and_where('user.role','=', '1'); 
            $this->and_where('user.delete','=', '0');  

            $this->or_where(array(DB::expr('CONCAT(user.name," ",user.last_name)'), 'full_name'),'LIKE', '%'.$param.'%');
            $this->and_where('user.role','=', '1');  

            $this->or_where('styles.style','LIKE','%'.$param.'%');
            $this->and_where('user.role','=', '1');
            $this->and_where('user.delete','=', '0');
        }
        elseif(!empty($param) && !empty($province))
        {
            if(empty($city))
            {
                $this->and_where('user.name','LIKE', '%'.$param.'%');
                $this->and_where('user.province_id','=', $province);    

                $this->or_where('user.last_name','LIKE', '%'.$param.'%');
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.role','=', '1');
                $this->and_where('user.delete','=', '0');

                $this->or_where(array(DB::expr('CONCAT(user.name," ",user.last_name)'), 'full_name'),'LIKE', '%'.$param.'%');
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.role','=', '1');  
                $this->and_where('user.delete','=', '0');

                $this->or_where('styles.style','LIKE','%'.$param.'%');
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.role','=', '1');
                $this->and_where('user.delete','=', '0');
            }
            else
            {
                $this->and_where('user.name','LIKE', '%'.$param.'%');
                $this->and_where('user.province_id','=', $province);  
                $this->and_where('user.city_id','=', $city);    

                $this->or_where('user.last_name','LIKE', '%'.$param.'%');
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.city_id','=', $city);    
                $this->and_where('user.role','=', '1');
                $this->and_where('user.delete','=', '0');

                $this->or_where(array(DB::expr('CONCAT(user.name," ",user.last_name)'), 'full_name'),'LIKE', '%'.$param.'%');
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.city_id','=', $city);    
                $this->and_where('user.role','=', '1');
                $this->and_where('user.delete','=', '0');

                $this->or_where('styles.style','LIKE','%'.$param.'%');
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.city_id','=', $city);    
                $this->and_where('user.role','=', '1');
                $this->and_where('user.delete','=', '0');
            }
        }

        $users = $this->join('cities','LEFT')
            ->on('user.city_id','=','cities.id')
            ->join('provinces','LEFT')
            ->on('user.province_id','=','provinces.id')
            ->join('photos','LEFT')
            ->on('user.photo_id','=','photos.id')
            ->join('userstyles', 'LEFT')
            ->on('user.id','=','userstyles.user_id')
            ->join('styles','LEFT')
            ->on('userstyles.style_id','=','styles.id')
            ->group_by('user.id')
            ->limit(20)
            ->offset($offset)
            ->find_all();

        $users = $users->as_array();
        
        for($i = 0; $i < sizeof($users); $i++)
        {
            $users[$i] = $users[$i]->as_array();
        }

        return $users;
    }

    public function count_users($param)
    {

        $this->select('user.name', 'user.last_name', 'user.id', 'user.role', 'user.photo_id', 'user.city_id', 'user.province_id', 'photos.photo', 'cities.city', 'provinces.province', 'styles.style', 'userstyles.*')
            ->where('user.role','=', '1')
            ->and_where('user.delete','=', '0');
        if(empty($param) && empty($province))
        {
            $this->and_where('user.name','LIKE', '%'.$param.'%');
            
            $this->or_where('user.last_name','LIKE', '%'.$param.'%');
            $this->and_where('user.role','=', '1');
            $this->and_where('user.delete','=', '0');
        }
        elseif(empty($param) && !empty($province))
        {
            if(empty($city))
            {
                $this->and_where('user.province_id','=', $province);
            }
            else
            {
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.city_id','=', $city);    
            }            
        }
        elseif(!empty($param) && empty($province))
        {
            $this->and_where('user.name','LIKE', '%'.$param.'%');
            
            $this->or_where('user.last_name','LIKE', '%'.$param.'%');
            $this->and_where('user.role','=', '1');   
            $this->and_where('user.delete','=', '0');

            $this->or_where(array(DB::expr('CONCAT(user.name," ",user.last_name)'), 'full_name'),'LIKE', '%'.$param.'%');
            $this->and_where('user.role','=', '1');  
            $this->and_where('user.delete','=', '0');

            $this->or_where('styles.style','LIKE','%'.$param.'%');
            $this->and_where('user.role','=', '1');
            $this->and_where('user.delete','=', '0');
        }
        elseif(!empty($param) && !empty($province))
        {
            if(empty($city))
            {
                $this->and_where('user.name','LIKE', '%'.$param.'%');
                $this->and_where('user.province_id','=', $province);    

                $this->or_where('user.last_name','LIKE', '%'.$param.'%');
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.role','=', '1');
                $this->and_where('user.delete','=', '0');

                $this->or_where(array(DB::expr('CONCAT(user.name," ",user.last_name)'), 'full_name'),'LIKE', '%'.$param.'%');
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.role','=', '1');  
                $this->and_where('user.delete','=', '0');

                $this->or_where('styles.style','LIKE','%'.$param.'%');
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.role','=', '1');
                $this->and_where('user.delete','=', '0');
            }
            else
            {
                $this->and_where('user.name','LIKE', '%'.$param.'%');
                $this->and_where('user.province_id','=', $province);  
                $this->and_where('user.city_id','=', $city);    

                $this->or_where('user.last_name','LIKE', '%'.$param.'%');
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.city_id','=', $city);    
                $this->and_where('user.role','=', '1');
                $this->and_where('user.delete','=', '0');

                $this->or_where(array(DB::expr('CONCAT(user.name," ",user.last_name)'), 'full_name'),'LIKE', '%'.$param.'%');
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.city_id','=', $city);    
                $this->and_where('user.role','=', '1');
                $this->and_where('user.delete','=', '0');

                $this->or_where('styles.style','LIKE','%'.$param.'%');
                $this->and_where('user.province_id','=', $province);
                $this->and_where('user.city_id','=', $city);    
                $this->and_where('user.role','=', '1');
                $this->and_where('user.delete','=', '0');
            }
        }

        $users = $this->join('cities','LEFT')
            ->on('user.city_id','=','cities.id')
            ->join('provinces','LEFT')
            ->on('user.province_id','=','provinces.id')
            ->join('photos','LEFT')
            ->on('user.photo_id','=','photos.id')
            ->join('userstyles', 'LEFT')
            ->on('user.id','=','userstyles.user_id')
            ->join('styles','LEFT')
            ->on('userstyles.style_id','=','styles.id')
            ->group_by('user.id')
            ->find_all();

        return $users->count();
    }

    public function get_top_users()
    {
        $users = $this->select('user.name', 'user.last_name', 'user.id', 'user.role', 'user.photo_id', 'user.city_id', 'user.province_id', 'photos.photo', 'cities.city', 'provinces.province', array(DB::expr('(ratings.total_value/ratings.total_votes)'), 'rating'), 'ratings.total_votes')
            ->where('user.active','=', '1')
            ->and_where('user.delete','=', '0')
            ->join('cities','LEFT')
            ->on('user.city_id','=','cities.id')
            ->join('provinces','LEFT')
            ->on('user.province_id','=','provinces.id')
            ->join('photos','LEFT')
            ->on('user.photo_id','=','photos.id')
            ->join('ratings')
            ->on('user.id','=','ratings.id')
            ->order_by('rating', 'DESC')
            ->order_by('total_votes', 'DESC')
            ->limit(50)
            ->find_all();

        $users = $users->as_array();
        
        for($i = 0; $i < sizeof($users); $i++)
        {
            $users[$i] = $users[$i]->as_array();
        }

        return $users;
    }

    public function delete_account($user_id)
    {
        $user = $this->where('id', '=', $user_id )->find();
        $user->delete = 1;
        $user->save();
    }

    public function get_hash($email)
    {
        $user = $this->select('hash')
            ->where('email','=',$email)
            ->find();
        $user = $user->as_array();
        return $user['hash'];
    }

}