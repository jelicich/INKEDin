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

}