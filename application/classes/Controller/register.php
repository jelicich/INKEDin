<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends Controller_Master {

	public $template = 'register/registerview';

	public function before()
    {   
        parent::before();
        
        //Check if is logged in
        if($this->is_logged_in())
        {
        	$this->redirect('/', 303);	
        }
        
        $this->template->head->title = "INKEDin - Registrate";
    }

	public function action_index()
	{
		$this->template->head->custom_scripts = HTML::script('/assets/common/app/js/jquery.validate.min.js').HTML::script('/assets/common/app/js/messages_es.min.js').HTML::script('/assets/register/js/Register.js');
		$this->template->head->custom_styles = HTML::style('/assets/register/css/register.css');
	}

	public function action_register()
	{
		$model_user = Model::factory('user');

		$val_post = Validation::factory($this->request->post());

		$val_post->rule('name', 'not_empty')
			->rule('name', 'max_length', array(':value','60'))
			->label('name', 'Nombre')

			->rule('last_name', 'not_empty')
			->rule('last_name', 'max_length', array(':value','60'))
			->label('last_name', 'Apellido')

			->rule('email', 'not_empty')
			->rule('email', 'email')
			->rule('email', 'Model_User::unique_email')
			->label('email', 'Email')

			->rule('password', 'not_empty')
			->rule('password', 'min_length', array(':value','4'))
			->label('password', 'Contraseña')

			->rule('role', 'not_empty')
			->label('role', 'Tipo de usuario');

		if ($val_post->check())
        {
            // Data has been validated, register the user hash the password
        	$pass = sha1($this->request->post('password'));
        	$this->request->post('password', $pass);

        	$hash = sha1(rand(0,1000));
        	$this->request->post('hash', $hash);

            $model_user->register($this->request->post());

            // Send confirmation email
            $this->send_confirmation($this->request->post());
 
            // Always redirect after a successful POST to prevent refresh warnings
            $this->redirect('/register/success', 303);
        }
 
        // Validation failed, collect the errors
        $errors = $val_post->errors('models/user');
 
        // Display the registration form
        $this->template->post = $this->request->post();
        $this->template->errors = $errors;
	}

	public function action_success()
	{
		$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
		$common_styles = Kohana::$config->load('common_assets')->get('styles');	
		
		$this->template = View::factory('register/successview');
		
        $this->template->head = View::factory('common/head');
        $this->template->header = View::factory('common/header');    
        $this->template->footer = View::factory('common/footer'); 
        $this->template->head->title = $this->title;
        $this->template->head->common_scripts = $common_scripts;
        $this->template->head->common_styles = $common_styles;

	}

	public function action_activate()
	{
		$email = $this->request->query('email');
		$hash = $this->request->query('hash');

		$model = new Model_User();
		$user = $model->select('user.email','user.hash')
			->where('email', '=', $email)
    		->find();

		if($user->loaded() && $user->hash == $hash)
		{
			$user->active = '1';
			$user->save();

			$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
			$common_styles = Kohana::$config->load('common_assets')->get('styles');	
			
			$this->template = View::factory('register/activateview');
			
	        $this->template->head = View::factory('common/head');
	        $this->template->header = View::factory('common/header');    
	        $this->template->footer = View::factory('common/footer'); 
	        $this->template->head->title = $this->title;
	        $this->template->head->common_scripts = $common_scripts;
	        $this->template->head->common_styles = $common_styles;
		}
		else
		{
			$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
			$common_styles = Kohana::$config->load('common_assets')->get('styles');	
			
			$this->template = View::factory('register/errorview');
			
	        $this->template->head = View::factory('common/head');
	        $this->template->header = View::factory('common/header');    
	        $this->template->footer = View::factory('common/footer'); 
	        $this->template->head->title = $this->title;
	        $this->template->head->common_scripts = $common_scripts;
	        $this->template->head->common_styles = $common_styles;
		}
	}

	private function send_confirmation($post)
	{
		$to      = $post['email']; // Send email to our user
		$subject = 'INEDin - Activa tu cuenta'; // Give the email a subject 
		$message = '
		 
		Gracias por registrarte!
		Tu cuenta fue creada con exito, para poder empezar a usarla hacé click en el siguiente link: 

		 
		http://inked.loc/register/activation?email='.$post['email'].'&hash='.$post['hash'].'
		 
		'; // Our message above including the link
		                     
		$headers = 'From:noreply@inkedin.loc' . "\r\n"; // Set from headers
		mail($to, $subject, $message, $headers); // Send our email
	}

} // End Welcome
