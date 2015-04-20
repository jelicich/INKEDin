<?php 
abstract class Controller_Master extends Controller_Template
{
    
    public $template = 'home/homeview'; // Default template
    public $title = 'INKEDin - Tattoo site'; //Default title;
    private $model_user;
    
    public function before()
    {
        $this->model_user = new Model_User();

        // Set a local template variable to what template the controller wants to use, by default 'template'
        $template = $this->template; 
		
		$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
		$common_styles = Kohana::$config->load('common_assets')->get('styles');	
        
        parent::before();
		
        if($this->is_logged_in() != true)
        {
            $this->template->header = View::factory('common/header');    
        }
        else
        {
            $user_info = $this->get_user_info();

            $this->template->header = View::factory('common/header_logged');
            $this->template->header->user = $user_info;

            // messages alert
            $model_conversation = new Model_Conversation();
            $messages_amount = $model_conversation->get_messages_amount( $user_info['id'] );
            
            $this->template->header->messages_amount = $messages_amount;

             //Profile pic path
            if(!isset($this->template->header->user['photo']) || empty($this->template->header->user['photo']))
            {
                $photo = HTML::image('/assets/common/app/img/default.jpg', array('alt' => 'Profile picture', 'class' => 'user-menu-photo col-md-3 img-circle'));
            }
            else
            {
                $user_id = $this->template->header->user['id'];
                $user_photo = $this->template->header->user['photo'];
                $name = $this->template->header->user['name'].' '.$this->template->header->user['last_name'];;
                $photo = HTML::image('users/'.$user_id.'/img/sm/'.$user_photo, array('alt' => $name, 'class' => 'user-menu-photo col-md-3 img-circle'));
            }
            $this->template->header->user['photo'] = $photo;
        }

        $this->template->head = View::factory('common/head');
        $this->template->footer = View::factory('common/footer'); 
        $this->template->footer->styles = Helper_Footer::get_styles();
        $this->template->footer->searches = Helper_Footer::get_searches();
        $this->template->head->title = $this->title;
        $this->template->head->common_scripts = $common_scripts;
        $this->template->head->common_styles = $common_styles;
        
        return;
    }

    public function is_logged_in()
    {
        return $this->model_user->is_logged_in();
    }

    public function get_user_info()
    {
        return $this->model_user->get_user_info();
    }

}