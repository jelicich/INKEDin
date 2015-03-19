<?php

class Model_Message extends ORM{

	public function save_message($profile_id, $user_id, $message, $conversation_id)
	{	 
		$model_message = new Model_Message();
		$this->user_id = $user_id;
		$this->message = $message;
		$this->conversation_id = $conversation_id;

		$id = $this->save();

		return $id;
	}


	public function get_messages_by_conversation_id($conversation_id)
	{	
		$messages = $this->select()
		->where('conversation_id','=', $conversation_id)
		->find_all();

		$messages = $conversations->as_array();

		for($i = 0; $i < sizeof($messages); $i++)
		{
			$messages[$i] = $messages[$i]->as_array();
		}

		return $messages;
	}
}
