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
}