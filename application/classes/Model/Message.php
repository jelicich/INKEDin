<?php

class Model_Message extends ORM{

	public function save_message($user_id, $message, $conversation_id)
	{	 
		$model_message = new Model_Message();
		$this->user_id = $user_id;
		$this->message = $message;
		$this->conversation_id = $conversation_id;

		$id = $this->save();

		return $id;
	}


	public function get_messages_by_conversation_id($user_from, $user_id)
	{	

		$model_conversation = new Model_Conversation();
		$conversation_id = $model_conversation->get_conversation_id( $user_from, $user_id );

		$messages = $this->select('message.*') 
		->where('conversation_id','=', $conversation_id)
		->order_by('date', 'DESC')
		->find_all();

		$messages = $messages->as_array();

		for($i = 0; $i < sizeof($messages); $i++)
		{
			$messages[$i] = $messages[$i]->as_array();
		}

		 $query = DB::update('messages')
            ->set( array('status' => 1) )
            ->where('conversation_id', '=', $conversation_id )
            ->and_where('user_id', '!=', $user_id);
            $query->execute();

		return $messages;
	}


	
}
