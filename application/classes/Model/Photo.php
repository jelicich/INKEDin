<?php

class Model_Photo extends ORM{

	public function save_photo($photo, $album, $user)
	{
		$this->photo = $photo;
		$this->album_id = $album;
		$this->user_id = $user;
		$id = $this->save();
		return $id;
	}

	public function get_photos_by_album($id)
	{
		$photos = $this->select('photo.*','albums.*')
			->where('album_id','=',$id)
			->join('albums')
            ->on('photo.album_id', '=', 'albums.id')
			->find_all();
		$photos = $photos->as_array();
		for($i = 0; $i < sizeof($photos); $i++)
		{
			$photos[$i] = $photos[$i]->as_array();
		}
		return $photos;
	}

	public function update_photo($photo_arr)
	{
		
		$query = DB::update('photos')->set(array('description' => $photo_arr['description'], 'tags' => $photo_arr['tags']))->where('id', '=', $photo_arr['photoId']);
		$r = $query->execute();

	}

	public function delete_photo($photo)
	{
		$photo = $this->where('id', '=', $photo)->find();
		$photo->delete();
	}

	public function get_photos_by_album_and_user($album_id, $user_id)
	{
		$photos = $this->select('photo.*','albums.*')
			->where('album_id','=',$album_id)
			->and_where('photo.user_id', '=', $user_id)
			->join('albums')
            ->on('photo.album_id', '=', 'albums.id')
			->find_all();
		$photos = $photos->as_array();
		for($i = 0; $i < sizeof($photos); $i++)
		{
			$photos[$i] = $photos[$i]->as_array();
		}
		return $photos;
	}

	public function search_photos($param, $offset, $limit)
	{
		$this->select('photo.*','users.id', 'users.name', 'users.last_name', 'users.photo_id', 'users.city_id', 'users.province_id', array('profile.photo', "profile_photo"), 'cities.city', 'provinces.province', 'users.delete')
			->where('photo.tags', 'LIKE', '%'.$param.'%')
			->and_where('users.delete','=',0)
			->or_where('photo.description', 'LIKE', '%'.$param.'%')
			->and_where('users.delete','=',0)
			->join('users')
            ->on('photo.user_id', '=', 'users.id')
            ->join(array('photos', 'profile' ), 'LEFT')
            ->on('users.photo_id', '=', 'profile.id')
            ->join('cities','LEFT')
            ->on('users.city_id','=','cities.id')
            ->join('provinces', 'LEFT')
            ->on('users.province_id','=','provinces.id')
            ->order_by('photo.date','DESC');

        $photos = $this->limit($limit)
            ->offset($offset)
			->find_all();

		$photos = $photos->as_array();
		
		for($i = 0; $i < sizeof($photos); $i++)
		{
			$photos[$i] = $photos[$i]->as_array();
		}
		return $photos;
	}

	public function show_latest_photos($limit, $offset)
	{
		$this->select('photo.*','users.id', 'users.name', 'users.last_name', 'users.photo_id', 'users.city_id', 'users.province_id', array('profile.photo', "profile_photo"), 'cities.city', 'provinces.province', 'users.delete')
			->where('users.delete','=',0)
			->and_where('users.role','=',1)
			->join('users')
            ->on('photo.user_id', '=', 'users.id')
            ->join(array('photos', 'profile' ), 'LEFT')
            ->on('users.photo_id', '=', 'profile.id')
            ->join('cities','LEFT')
            ->on('users.city_id','=','cities.id')
            ->join('provinces', 'LEFT')
            ->on('users.province_id','=','provinces.id')
            ->order_by('photo.date','DESC');

        $photos = $this->limit($limit)
            ->offset($offset)
			->find_all();

		$photos = $photos->as_array();
		$latest_photos = array();
		$ignore_users = array();
		foreach($photos as $photo) {
			$user_id = $photo->user_id;
			$is_ignored = (in_array($user_id, $ignore_users));
			if (!$is_ignored) {
				$latest_photos[] = $photo->as_array();
				$ignore_users[] = $user_id;
			}
		}

		return $latest_photos;
	}

	public function count_photos($param)
	{
		$photos = $this->select('photo.*','users.id', 'users.name', 'users.last_name', 'users.photo_id', 'users.city_id', 'users.province_id', array('profile.photo', "profile_photo"), 'cities.city', 'provinces.province')
			->where('photo.tags', 'LIKE', '%'.$param.'%')
			->and_where('users.delete','=',0)
			->or_where('photo.description', 'LIKE', '%'.$param.'%')
			->and_where('users.delete','=',0)
			->join('users')
            ->on('photo.user_id', '=', 'users.id')
            ->join(array('photos', 'profile' ), 'LEFT')
            ->on('users.photo_id', '=', 'profile.id')
            ->join('cities','LEFT')
            ->on('users.city_id','=','cities.id')
            ->join('provinces', 'LEFT')
            ->on('users.province_id','=','provinces.id')
            ->order_by('photo.date','DESC')
			->count_all();

		return $photos;
	}

}