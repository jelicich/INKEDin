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
		$album = $this->where('id', '=', $photo)->find();
		$album->delete();
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

	public function search_photos($param, $offset)
	{
		$photos = $this->select('photo.*','users.id', 'users.name', 'users.last_name', 'users.photo_id', 'users.city_id', 'users.province_id', array('profile.photo', "profile_photo"), 'cities.city', 'provinces.province')
			->where('photo.tags', 'LIKE', '%'.$param.'%')
			->or_where('photo.description', 'LIKE', '%'.$param.'%')
			->join('users')
            ->on('photo.user_id', '=', 'users.id')
            ->join(array('photos', 'profile' ), 'LEFT')
            ->on('users.photo_id', '=', 'profile.id')
            ->join('cities','LEFT')
            ->on('users.city_id','=','cities.id')
            ->join('provinces', 'LEFT')
            ->on('users.province_id','=','provinces.id')
            ->order_by('photo.date','DESC')
            ->limit(15)
            ->offset($offset)
			->find_all();

		$photos = $photos->as_array();

		for($i = 0; $i < sizeof($photos); $i++)
		{
			$photos[$i] = $photos[$i]->as_array();
		}
		return $photos;
	}
}