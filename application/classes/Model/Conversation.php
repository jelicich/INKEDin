<?php

class Model_Conversation extends ORM{

	public function save_conversation($profile_id, $user_id)
	{
		
		$model_conversation = new Model_Conversation();

		$existing_conversations =  $this->select('conversation.id')
							    	->where('user_1_id','=', $profile_id)
							        ->and_where('user_2_id' , '=', $user_id)
							        ->or_where('user_1_id','=', $user_id)
							        ->and_where('user_2_id' , '=', $profile_id)
							        ->find();

       if( $existing_conversations->loaded() ) { 

       		return $existing_conversations->id;

       }else{

       		$this->user_1_id = $user_id;
       		$this->user_2_id = $profile_id;

       		$id = $this->save(); 
			return $id;
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
				SELECT m.id, 
				DATE_FORMAT(m.date, '%W %d %M %Y %H:%i') as date, 
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
		$messages_amount =  DB::select(array(DB::expr('COUNT(message)'), 'total_messages'))
    	        ->from('conversations')
		        ->join('messages')
		        ->on('messages.conversation_id', '=', 'conversations.id')
		        ->where('messages.status', '=', 0)
		        ->and_where('messages.user_id', '!=', $user_id)
		        ->execute();

		$messages_amount = $messages_amount->as_array();
		return $messages_amount;
	}
}
