<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Master {

	public $template = 'user/myaccountview';

	public function before()
    {   
        parent::before();
        if($this->is_logged_in())
        {
        	$this->template->head->title = "INKEDin - Mi cuenta";
        	$this->template->head->custom_scripts = HTML::script('/assets/common/app/js/jquery.validate.min.js').HTML::script('/assets/common/app/js/messages_es.min.js').HTML::script('/assets/user/js/User.js');
			$this->template->head->custom_styles = HTML::style('/assets/register/css/user.css');
        	$this->template->user = $this->get_user_info();
        	
        }
        else
        {
        	HTTP::redirect('index');	
        }
        
    }

	public function action_index(){}

	public function action_update_account()
	{
		echo 'TODO';
		die;
	}

	public function action_update_password()
	{
		echo 'TODO';
		die;
	}

} // End Welcome
