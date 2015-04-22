<?php

class Model_Conversation extends ORM{

	public function get_conversation_id($user_id, $profile_id = NULL){

		// $model_conversation = new Model_Conversation();

		if ( $profile_id != NULL ) {
			
			$conversation_id =  $this->select('conversation.id')
							    	->where('user_1_id','=', $profile_id)
							        ->and_where('user_2_id' , '=', $user_id)
							        ->or_where('user_1_id','=', $user_id)
							        ->and_where('user_2_id' , '=', $profile_id)
							        ->find();

		}else{

			$conversation_id =  $this->select('conversation.id')
							         ->where('user_2_id' , '=', $user_id)
							         ->or_where('user_1_id','=', $user_id)
							         ->find_all();
		}

		return $conversation_id;
	}

	public function save_conversation($profile_id, $user_id)
	{
		$existing_conversations = $this->get_conversation_id( $profile_id, $user_id );

	   if( $existing_conversations->loaded() ) { 

	   		//$existing_conversations =  $existing_conversations->as_array();

       		return $existing_conversations->id;

       }else{

       		// $model_conversation = new Model_Conversation();
       		$this->user_1_id = $user_id;
       		$this->user_2_id = $profile_id;

       		$id = $this->save(); 
   			// $id = $id->as_array();
			// return $id;
			return $this->id;
		}
    }

    public function get_inbox_headers_by_profile($profile_id)
	{	

		$conversations = DB::query(Database::SELECT, "
			SELECT u.id as from_id, c.id as conversation_id, u.name, u.last_name, u.photo_id, p.photo
            FROM conversations c, users u
            LEFT JOIN photos p
            ON u.photo_id = p.id
            WHERE CASE
            WHEN c.user_1_id = '".$profile_id."'
            THEN c.user_2_id = u.id
            WHEN c.user_2_id = '".$profile_id."'
            THEN c.user_1_id = u.id
            END
            AND (
                c.user_1_id = '".$profile_id."'
                or c.user_2_id = '".$profile_id."'
            )
            ORDER BY c.date DESC")
		->execute();

		$conversations = $conversations->as_array();

		for ($i=0; $i < sizeof($conversations); $i++) { 
			
			$conversation_id = $conversations[$i]['conversation_id'];

			$last_message_piece = DB::query(Database::SELECT, "
				SELECT m.id, m.date,
				LEFT(m.message, 30) as message, 
				m.user_id, 
				m.status FROM messages m WHERE m.conversation_id = '$conversation_id' ORDER BY m.date DESC LIMIT 1")
			->execute();

			$last_message_piece = $last_message_piece->as_array();

			array_push($conversations[$i], $last_message_piece[0]);
		}

		return $conversations;
	}


	public function get_messages_amount($user_id)
	{	
		$conversation_id = $this->get_conversation_id($user_id);
		$conversation_id =  $conversation_id->as_array();

		for($i = 0; $i < sizeof($conversation_id); $i++)
        {
            $conversation_id[$i] = $conversation_id[$i]->as_array();

             $messages_amount =  DB::select(array(DB::expr('COUNT(message)'), 'total_messages'))
    	        ->from('messages')
		        ->where('messages.conversation_id', '=', $conversation_id[$i]['id'])
		        ->and_where('messages.status', '=', 0)
		        ->and_where('messages.user_id', '!=', $user_id)
		        ->execute();
        }
        
        	
        	$messages_amount = $messages_amount->as_array();
			return $messages_amount;
    }
}
