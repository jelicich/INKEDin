<?php

class Model_Favourite extends ORM{
	
	public function save_photo($user_id, $photo_id)
	{
		$this->user_id = $user_id;
		$this->photo_id = $photo_id;
		$this->save();	
	}
}