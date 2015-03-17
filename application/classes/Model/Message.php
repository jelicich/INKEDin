<?php

class Model_Message extends ORM{

	public function get_conversation_by_profile($id)
	{
		
	}

	public function save_message($profile_id, $user_id, $message, $conversation_id)
	{	 


		$model_message = new Model_Message();
		$this->user_id = $user_id;
		$this->message = $message;
		$this->conversation_id = $conversation_id;

		$id = $this->save();

		return $id;
	}
}
