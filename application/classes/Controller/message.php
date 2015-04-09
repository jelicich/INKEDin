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

        $user_id = $this->get_user_info()['id'];
        $profile_id = $this->request->param('id'); 
        $message = $this->request->post('message');
        $inbox_reply_button = $this->request->post('inbox_reply_button');
       
        $model_conversation = new Model_Conversation();
        $conversation_id = $model_conversation->save_conversation($profile_id, $user_id);

        $model_message = new Model_Message();
        $message_id = $model_message->save_message($user_id, $message, $conversation_id);

        if ( isset($inbox_reply_button) ) {
             
             HTTP::redirect("message/messages_list/".$profile_id);

        }else{

            HTTP::redirect('/profile/'.$profile_id);

        }
    }

    public function action_messages_list()
    {   
        $user_from = $this->request->param();
        
        $model_user = new Model_User();
        $user_from = $model_user->get_profile_info_by_id($user_from);
        $user = $model_user->get_user_info();
       
        $model_message = new Model_Message();
        $messages = $model_message->get_messages_by_conversation_id($user_from['id'], $user['id']);

        $this->load_common_inbox_stuff();
        $this->template->user_from = $user_from;
        $this->template->messages = $messages;
        $this->template->head->custom_scripts = HTML::script('/assets/Message/js/Message.js');
    }


    private function img_path_alt($user_id, $user_photo, $alt_name, $alt_lastname) // ver si esta funcion agiliza o no...
    {
        return  HTML::image('/users/'.$user_id.'/img/sm/'.$user_photo, array('alt' => $alt_name.' '.$alt_lastname, 'class' => 'img-circle'));   
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

            $default_img = HTML::image('/assets/common/app/img/default.jpg', array('alt' => ' ', 'class' => 'img-circle'));
            
            for ($i=0; $i < sizeof($conversations) ; $i++) { 
                    
                    if( empty($conversations[$i]['photo']) )
                    {
                        $conversations[$i]['photo'] = $default_img;

                    }else{
                       
                        $conversations[$i]['photo'] = $this->img_path_alt($conversations[$i]['from_id'], $conversations[$i]['photo'], $conversations[$i]['name'], $conversations[$i]['name']);
                    }

                    if( empty($user['photo']) ){
                         
                         $conversations[$i]['profile_photo'] = $default_img;

                    }else{

                         $conversations[$i]['profile_photo'] = $this->img_path_alt($user['id'], $user['photo'], $conversations[$i]['name'], $conversations[$i]['name']);
                    }
            }

            $this->template->head->title = "INKEDin - Inbox";
            $this->template->head->custom_styles = HTML::style('/assets/user/css/user.css');
            $this->template->user = $user;
            $this->template->conversations = $conversations;
        }
    }



}
