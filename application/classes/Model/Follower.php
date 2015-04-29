<?php

class Model_Follower extends ORM{

	protected $_has_one = array('user' => array('user'));
    protected $_primary_key = 'follower_id';

	public function get_followers_by_profile($profile_id)
	{
		$followers = $this->select('follower.follower_id', 'follower.date', 'users.name', 'users.last_name', 'users.id','users.photo_id','photos.photo')
			->where('follower.user_id','=', $profile_id)
			->join('users')
			->on('follower.follower_id','=','users.id')
			->join('photos', 'LEFT')
			->on('users.photo_id','=','photos.id')
			->order_by('follower.date', 'DESC')
			->find_all();

		$followers = $followers->as_array();

		for($i = 0; $i < sizeof($followers); $i++)
		{
			$followers[$i] = $followers[$i]->as_array();
		}

		return $followers;	
	}


	public function save_follower($profile_id, $user_id)
	{
		// $model_follower = new Model_Follower();

		$this->user_id = $user_id;
		$this->follower_id = $profile_id;
		$id = $this->save();

		return $id;
	}

	public function remove_favourite($favourite_id, $user_id)
	{	
		$favourite = $this->where('follower_id', '=', $favourite_id)
						  ->and_where('user_id', '=', $user_id)
						  ->find();

		$favourite->delete();
	}

	public function get_who_follows_me($user_id)
	{
		$followers = $this->select('follower.user_id', 'follower.date', 'users.name', 'users.last_name', 'users.id','users.photo_id','photos.photo')
			->where('follower.follower_id','=', $user_id)
			->join('users')
			->on('follower.user_id','=','users.id')
			->join('photos', 'LEFT')
			->on('users.photo_id','=','photos.id')
			->order_by('follower.date', 'DESC')
			->find_all();

		$followers = $followers->as_array();

		for($i = 0; $i < sizeof($followers); $i++)
		{
			$followers[$i] = $followers[$i]->as_array();
		}

		return $followers;	
	}



}


?>