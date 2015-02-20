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
}