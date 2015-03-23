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

	public function action_recover()
	{
		$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
		$common_styles = Kohana::$config->load('common_assets')->get('styles');
		
		$template = View::factory('login/recoverview');
		
        $template->head = View::factory('common/head');
        $template->header = View::factory('common/header');    
        $template->footer = View::factory('common/footer'); 
        $template->head->title = 'INKEDin - Login';
        $template->head->common_scripts = $common_scripts;
        $template->head->common_styles = $common_styles;
        $template->head->custom_scripts = HTML::script('/assets/login/js/Login.js');

		$this->response->body($template);	
	}

	public function action_reset_password()
	{
		$email = $this->request->post('username');
		if(!Model_User::unique_email($email))
		{
			$to      = $email; // Send email to our user
			$subject = 'INEDin - Nueva Contraseña'; // Give the email a subject 
			$message = '
			 
			Te enviamos este mensaje ya que solicistaste una nueva contraseña. Para ver tu nueva contraseña hace click en el siguiente link:
			http://inked.loc/auth/new_password?email='.$email.'&hash='.$hash.'

			Tu cuenta fue creada con exito, para poder empezar a usarla hacé click en el siguiente link: 

			 
			http://inked.loc/register/activation?email='.$post['email'].'&hash='.$post['hash'].'
			 
			'; // Our message above including the link
			                     
			$headers = 'From:noreply@inkedin.loc' . "\r\n"; // Set from headers
			mail($to, $subject, $message, $headers); // Send our email
		}
		
	}

	

} // End Auth
