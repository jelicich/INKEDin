<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Message extends Controller_Master {

    public $template = 'user/inboxview';

    public function action_inbox()
    {   
        $this->template->is_logged_in = $this->is_logged_in();
        $user = $this->get_user_info();
        $profile_id = $user['id']; 

        if($this->is_logged_in())
        {   
            $model_conversation = new Model_Conversation();
            $conversations = $model_conversation->get_conversations_by_profile($profile_id);
            
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



    public function action_save_message()
    {   
        $this->template->is_logged_in = $this->is_logged_in();

        $profile_id = $this->request->param('profile_id'); // cambiar por user id
        $user_id = $this->request->param('user_id');
        $message = $this->request->post('message');

        $model_conversation = new Model_Conversation();
        $conversation_id = $model_conversation->save_conversation($profile_id, $user_id);

        $model_message = new Model_Message();
        $message_id = $model_message->save_message($profile_id, $user_id, $message, $conversation_id);

        HTTP::redirect('/profile/'.$profile_id);
    }




    // public function action_messages_list()
    // {   
    //     $this->template->is_logged_in = $this->is_logged_in();
    //     $user = $this->get_user_info();
    //     $profile_id = $user['id']; 

    //     if($this->is_logged_in())
    //     {   
    //         $model_conversation = new Model_Conversation();
    //         $conversations = $model_conversation->get_conversations_by_profile($profile_id);
            
    //         for ($i=0; $i < sizeof($conversations) ; $i++) { 
                    
    //                 if(empty($conversations[$i]['photo']))
    //                 {
    //                     $conversations[$i]['photo'] = HTML::image('/assets/common/app/img/default.jpg', array('alt' => $conversations[$i]['name'].' '.$conversations[$i]['name'], 'class' => 'img-circle'));
    //                 }
    //                 else
    //                 {
    //                     $conversations[$i]['photo'] = HTML::image('/users/'.$conversations[$i]['from_id'].'/img/sm/'.$conversations[$i]['photo'], array('alt' => $conversations[$i]['name'].' '.$conversations[$i]['name'], 'class' => 'img-circle'));   
    //                 }
    //         }

    //         $this->template->head->title = "INKEDin - Inbox";
    //         $this->template->head->custom_styles = HTML::style('/assets/user/css/user.css');
    //         $this->template->user = $user;
    //         $this->template->conversations = $conversations;

    //     }
    // }




}