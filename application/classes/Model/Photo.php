<?php

class Model_Photo extends ORM{

	public function save_photo($photo, $album, $user)
	{
		$this->photo = $photo;
		$this->album_id = $album;
		$this->user_id = $user;
		$id = $this->save();

	}

	public function getPhotosByAlbum($id)
	{
		$photos = $this->where('album_id','=',$id)
			->find();
		$photos = $photos->as_array();
		return $photos;
	}
}