<?php

class Model_Favourite extends ORM{
	
	public function save_photo($user_id, $photo_id)
	{
		$this->user_id = $user_id;
		$this->photo_id = $photo_id;
		$this->save();	
	}

	public function get_favourites($user_id)
	{
		$photos = $this->select('favourite.*','photos.*',array('photos.date','photo-date'),array('users.id', 'owner_id'), 'users.name', 'users.last_name', 'users.photo_id', 'users.city_id', 'users.province_id', array('profile.photo', "profile_photo"), 'cities.city', 'provinces.province', 'users.delete')
			->where('favourite.user_id', '=', $user_id)
			->and_where('users.delete','=',0)
			->join('photos')
            ->on('favourite.photo_id', '=', 'photos.id')
            ->join('users')
            ->on('photos.user_id','=','users.id')
            ->join(array('photos', 'profile'), 'LEFT')
            ->on('users.photo_id', '=', 'profile.id')
            ->join('cities','LEFT')
            ->on('users.city_id','=','cities.id')
            ->join('provinces', 'LEFT')
            ->on('users.province_id','=','provinces.id')
            ->order_by('favourite.date','DESC')
			->find_all();

		$photos = $photos->as_array();
		
		for($i = 0; $i < sizeof($photos); $i++)
		{
			$photos[$i] = $photos[$i]->as_array();
		}
		
		return $photos;
	}

	public function delete_favourite($user_id, $photo_id)
	{
		/*$fav = $this->where('user_id', '=', $user_id)
		->and_where('photo_id','=',$photo_id)
		->find();
		$fav->remove();*/
		$q = DB::delete('favourites')
			->where('user_id', '=', $user_id)
            ->and_where('photo_id', '=', $photo_id);
		$r = $q->execute(Database::instance());
		
	}
}