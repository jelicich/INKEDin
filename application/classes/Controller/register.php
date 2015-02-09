<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends Controller_Master {

	public $template = 'registerview';

	public function before()
    {   
        parent::before();
        $this->template->head->title = "INKEDin - Registrate";
       
    }

	public function action_index()
	{

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
        	
            $model_user->register($this->request->post());
 
            // Always redirect after a successful POST to prevent refresh warnings
            $this->redirect('register/success', 303);
        }
 
        // Validation failed, collect the errors
        $errors = $val_post->errors('model_user');
 
        // Display the registration form
        $this->template->post = $this->request->post();
        $this->template->errors = $errors;
	}

	public function action_success()
	{
		$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
		$common_styles = Kohana::$config->load('common_assets')->get('styles');	
		
		$this->template = View::factory('successview');
		if($this->is_logged_in() != true)
        {
            $this->template->header = View::factory('common/header');    
        }
        else
        {
            $this->template->header = View::factory('common/header_logged');
            $this->template->header->user = $this->session->get('user');
        }

        $this->template->head = View::factory('common/head');
        $this->template->footer = View::factory('common/footer'); 
        $this->template->head->title = $this->title;
        $this->template->head->common_scripts = $common_scripts;
        $this->template->head->common_styles = $common_styles;

	}

} // End Welcome
