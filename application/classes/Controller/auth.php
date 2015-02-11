<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller {

	private $session; 


	public function action_login()
	{
		$username = $this->request->post('username');
		$password = sha1($this->request->post('password'));
		
		$model_user = new Model_User();
		
		if($model_user->login_user($username, $password))
		{
			HTTP::redirect('index');
		}
		else
		{	
			$template = View::factory('login/loginview')->set('email', $username);

			$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
			$common_styles = Kohana::$config->load('common_assets')->get('styles');
			
			$template = View::factory('login/loginview')->set('email', $username) ;
			
	        $template->head = View::factory('common/head');
	        $template->header = View::factory('common/header');    
	        $template->footer = View::factory('common/footer'); 
	        $template->head->title = 'INKEDin - Login';
	        $template->head->common_scripts = $common_scripts;
	        $template->head->common_styles = $common_styles;
	        $template->head->custom_scripts = HTML::script('/assets/login/js/Login.js');


			$this->response->body($template);	
		}

	}

	public function action_logout()
	{
		$model_user = new Model_User();
		$model_user->logout_user();
		HTTP::redirect('index');
	}

	

} // End Auth
