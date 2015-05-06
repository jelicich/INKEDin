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
			HTTP::redirect('/');
		}
		else
		{	
			$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
			$common_styles = Kohana::$config->load('common_assets')->get('styles');
			
			$template = View::factory('login/loginview')->set('email', $username) ;
			
	        $template->head = View::factory('common/head');
	        $template->header = View::factory('common/header');    
	        $template->footer = View::factory('common/footer'); 
	        $template->footer->styles = Helper_Footer::get_styles();
	        $template->footer->searches = Helper_Footer::get_searches();
	        $template->head->title = 'INKEDin - Login';
	        $template->head->common_scripts = $common_scripts;
	        $template->head->common_styles = $common_styles;
	        $template->head->custom_scripts = HTML::script('/assets/login/js/Login.js');


			$this->response->body($template);	
		}

	}

	public function action_login_fb()
	{
		$email = $this->request->post('email');
		$model_user = new Model_User();
		if($model_user->fb_user_exists($email))
		{
			$model_user = new Model_User();
			if($model_user->fb_login($email))
			{
				HTTP::redirect('index');
			}
		}
		else
		{
			
			$model_user->fb_keep_in_session($this->request->post());
			

			$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
			$common_styles = Kohana::$config->load('common_assets')->get('styles');
			
			$template = View::factory('login/fbaccountview');
			
	        $template->head = View::factory('common/head');
	        $template->header = View::factory('common/header');    
	        $template->footer = View::factory('common/footer'); 
	        $template->footer->styles = Helper_Footer::get_styles();
	        $template->footer->searches = Helper_Footer::get_searches();
	        $template->head->title = 'INKEDin - Login';
	        $template->head->common_scripts = $common_scripts;
	        $template->head->common_styles = $common_styles;
	        $template->head->custom_scripts = HTML::script('/assets/login/js/Login.js');
	        $template->head->custom_styles = HTML::style('/assets/login/css/login.css');

	        $this->response->body($template);	
		}
	}

	public function action_set_account_fb()
	{
		$role = $this->request->post('role');
		$model_user = new Model_User();
		$model_user->fb_register($role);
		HTTP::redirect('index');
	}

	public function action_logout()
	{
		$model_user = new Model_User();
		$model_user->logout_user();
		HTTP::redirect('index');
	}

	public function action_recover()
	{
		$model_user = new Model_User();
		if($model_user->is_logged_in())
		{
			HTTP::redirect('index');
		}
		$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
		$common_styles = Kohana::$config->load('common_assets')->get('styles');
		
		$template = View::factory('login/recoverview');
		
        $template->head = View::factory('common/head');
        $template->header = View::factory('common/header');    
        $template->footer = View::factory('common/footer'); 
        $template->footer->styles = Helper_Footer::get_styles();
        $template->footer->searches = Helper_Footer::get_searches();
        $template->head->title = 'INKEDin - Recuperar contraseña';
        $template->head->common_scripts = $common_scripts;
        $template->head->common_styles = $common_styles;
        $template->head->custom_scripts = HTML::script('/assets/login/js/Login.js');

		$this->response->body($template);	
	}

	public function action_reset_password()
	{
		$model_user = new Model_User();
		if($model_user->is_logged_in())
		{
			HTTP::redirect('index');
		}

		$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
		$common_styles = Kohana::$config->load('common_assets')->get('styles');
		
		$template = View::factory('login/sentrecoverview');
		
        $template->head = View::factory('common/head');
        $template->header = View::factory('common/header');    
        $template->footer = View::factory('common/footer'); 
        $template->footer->styles = Helper_Footer::get_styles();
        $template->footer->searches = Helper_Footer::get_searches();
        $template->head->title = 'INKEDin - Resetear contraseña';
        $template->head->common_scripts = $common_scripts;
        $template->head->common_styles = $common_styles;
        $template->head->custom_scripts = HTML::script('/assets/login/js/Login.js');
        $template->head->custom_styles = HTML::style('/assets/login/css/login.css');

		$email = $this->request->post('username');
		if(!Model_User::unique_email($email))
		{
			$model_user = new Model_User();
			$hash = $model_user->get_hash($email);

			$to      = $email; // Send email to our user
			$subject = 'INEDin - Nueva Contraseña'; // Give the email a subject 
			$message = '
			 
			Te enviamos este mensaje ya que solicistaste una nueva contraseña. Para ver tu nueva contraseña hace click en el siguiente link:
			http://inked.loc/auth/new_password?email='.$email.'&hash='.$hash.'

			Si no solicitaste una nueva contraseña ignora este email.		 
			'; 
			                     
			$headers = 'From:noreply@inkedin.loc' . "\r\n"; // Set from headers
			mail($to, $subject, $message, $headers); // Send our email

			$template->result = "Te enviamos un email a tu casilla. Asegurate de chequear el correo no deseado.";

		}
		else
		{
			$errors[] = "El mail ingresado no existe.";
			$template->errors = $errors;
		}

		$this->response->body($template);	
	}

	public function action_new_password()
	{
		$email = $this->request->query('email');
		$hash = $this->request->query('hash');

		$model = new Model_User();
		// if($model_user->is_logged_in())
		// {
		// 	HTTP::redirect('index');
		// }

		$user = $model->select('user.email','user.hash')
			->where('email', '=', $email)
    		->find();

		if($user->loaded() && $user->hash == $hash)
		{
			$new_password = uniqid();
			$user->password = sha1($new_password);
			$user->save();
			
			$template = View::factory('login/newpasswordview');
	        $template->new_password = $new_password;
		}
		else
		{
			$template = View::factory('login/newpassworderrorview');	
		}

		$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
		$common_styles = Kohana::$config->load('common_assets')->get('styles');	

		$template->head = View::factory('common/head');
        $template->header = View::factory('common/header');    
        $template->footer = View::factory('common/footer'); 
        $template->footer->styles = Helper_Footer::get_styles();
        $template->footer->searches = Helper_Footer::get_searches();
        $template->head->title = 'INKEDin - Nueva Contraseña';
        $template->head->common_scripts = $common_scripts;
        $template->head->common_styles = $common_styles;

		$this->response->body($template);
	}

} // End Auth
