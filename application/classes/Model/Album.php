<?php

class Model_Album extends ORM{
	
	public function create_album($post)
	{
		$model_user = new Model_User();
		$user = $model_user->get_user_info();
		$this->name = $post['name'];
		$this->user_id = $user['id'];
		$this->save();
		return $this->id;
	}

	public function get_albums_by_user($id)
	{
		$albums = $this->select('album.*', 'photos.*')
			->where('album.user_id','=', $id)
			->join('photos')
			->on('album.id','=','photos.album_id')
			->group_by('album.id')
			->order_by('album.date', 'DESC')
			->find_all();

		$albums = $albums->as_array();
		for($i = 0; $i < sizeof($albums); $i++)
		{
			$albums[$i] = $albums[$i]->as_array();
		}
		return $albums;	
	}

	public function delete_album($id)
	{
		$album = $this->where('id', '=', $id)->find();
		$album->delete();
	}

}