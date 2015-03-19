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



	public function get_conversations_by_profile($profile_id)
	{	
		$conversations = $this->select('conversation.id', 'messages.*', 'users.name' )
		->where('user_1_id','=', $profile_id)
		->or_where('user_2_id' , '=', $profile_id)
		->join('messages', 'LEFT')
        ->on('messages.conversation_id','=','conversation.id')
        ->join('users')
        ->on('users.id','=','conversation.user_1_id')
        ->or_where('users.id','=','conversation.user_2_id')
        // ->group_by('')
        ->order_by('messages.date', 'ASC')
		->find_all();

		$conversations = $conversations->as_array();

		for($i = 0; $i < sizeof($conversations); $i++)
		{
			$conversations[$i] = $conversations[$i]->as_array();
		}

		return $conversations;
	}
}
