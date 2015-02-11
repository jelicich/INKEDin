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

		if ($val_post->check())
        {
            // Data has been validated, update info


            $model_user->register($this->request->post());

            // Send confirmation email
            $this->send_confirmation($this->request->post());
 
            // Always redirect after a successful POST to prevent refresh warnings
            $this->redirect('/register/success', 303);
        }
 
        // Validation failed, collect the errors
        $errors = $val_post->errors('model_user');

		return $errors;
	}

	public function action_update_password()
	{
		echo 'TODO';
		die;
	}

} // End Welcome
