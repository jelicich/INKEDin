<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Message extends Controller_Master {

    public $template = 'user/inboxview';

    public function action_inbox()
    {   
          $this->load_common_inbox_stuff();
    }

    public function action_save_message()
    {   
        $this->template->is_logged_in = $this->is_logged_in();

        $profile_id = $this->request->param('param_2'); // cambiar por user id
        $user_id = $this->request->param('param_1');
        $message = $this->request->post('message');

        $model_conversation = new Model_Conversation();
        $conversation_id = $model_conversation->save_conversation($profile_id, $user_id);

        $model_message = new Model_Message();
        $message_id = $model_message->save_message($profile_id, $user_id, $message, $conversation_id);

        HTTP::redirect('/profile/'.$profile_id);
    }

    public function action_messages_list()
    {   
        $conversation_id = $this->request->param('param_1');
        $user_from = $this->request->param('param_2');
        
        $model_user = new Model_User();
        $user_from = $model_user->get_profile_info_by_id($user_from);

        $model_message = new Model_Message();
        $messages = $model_message->get_messages_by_conversation_id($conversation_id);

        $this->load_common_inbox_stuff();
        $this->template->user_from = $user_from;
        $this->template->messages = $messages;
        $this->template->head->custom_scripts = HTML::script('/assets/Message/js/Message.js');
    }

    private function load_common_inbox_stuff()
    {   
        $this->template->is_logged_in = $this->is_logged_in();

        if($this->is_logged_in())
        { 
        
            $user = $this->get_user_info();
            $profile_id = $user['id']; 

            $model_conversation = new Model_Conversation();
            $conversations = $model_conversation->get_inbox_headers_by_profile($profile_id);
            
            for ($i=0; $i < sizeof($conversations) ; $i++) { 
                    
                    if(empty($conversations[$i]['photo']))
                    {
                        $conversations[$i]['photo'] = HTML::image('/assets/common/app/img/default.jpg', array('alt' => $conversations[$i]['name'].' '.$conversations[$i]['name'], 'class' => 'img-circle'));
                    }
                    else
                    {
                        $conversations[$i]['photo'] = HTML::image('/users/'.$conversations[$i]['from_id'].'/img/sm/'.$conversations[$i]['photo'], array('alt' => $conversations[$i]['name'].' '.$conversations[$i]['name'], 'class' => 'img-circle'));   
                    }
            }

            $this->template->head->title = "INKEDin - Inbox";
            $this->template->head->custom_styles = HTML::style('/assets/user/css/user.css');
            $this->template->user = $user;
            $this->template->conversations = $conversations;
        }
    }



}