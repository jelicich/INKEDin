<?php

class Model_Conversation extends ORM{

	public function save_conversation($profile_id, $user_id)
	{
		$model_conversation = new Model_Conversation();
		
		$this->user_2_id = $profile_id;
		$this->user_1_id = $user_id;

		$id = $this->save(); 
		return $id;
	}
}
