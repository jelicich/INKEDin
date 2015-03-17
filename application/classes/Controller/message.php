<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Message extends Controller_Master {

    public function action_save_message()
    {   
        $this->template->is_logged_in = $this->is_logged_in();

        $profile_id = $this->request->param('profile_id');
        $user_id = $this->request->param('user_id');
        $message = $this->request->post('message');

        // mandar a controller
        $model_conversation = new Model_Conversation();
        $conversation_id = $model_conversation->save_conversation($profile_id, $user_id);

        $model_message = new Model_Message();
        $message_id = $model_message->save_message($profile_id, $user_id, $message, $conversation_id);

        HTTP::redirect('/profile/'.$profile_id);
    }

}