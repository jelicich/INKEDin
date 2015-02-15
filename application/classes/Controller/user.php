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
			$this->template->head->custom_styles = HTML::style('/assets/user/css/user.css');
        	$this->template->user = $this->get_user_info();

        	$styles_model = new Model_Style();
        	$styles = $styles_model->get_styles();
        	$this->template->styles = $styles;
        	
        }
        else
        {
        	HTTP::redirect('index');	
        }

    }

	public function action_index(){}

	public function action_update_account()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}
		$result;
		$post = $this->request->post();
		$model_user = Model::factory('user');
		$current_info = $model_user->get_user_info();

		$val_post = Validation::factory($post);

		$val_post->rule('name', 'not_empty')
			->rule('name', 'max_length', array(':value','60'))
			->label('name', 'Nombre')

			->rule('last_name', 'not_empty')
			->rule('last_name', 'max_length', array(':value','60'))
			->label('last_name', 'Apellido')

			->rule('email', 'not_empty')
			->rule('email', 'email')
			->rule('email', 'Model_User::equals_email', array(':value', $current_info['email']))
			->label('email', 'Email');

		if ($val_post->check())
        {
            $model_user->update_account($this->request->post());
            $result = true;
        }
 		else
 		{
 			// Validation failed, collect the errors
	        $errors = $val_post->errors('models/users');
	        //$this->template->errors = $errors;
	        $result = json_encode($errors);
 		}
 		
 		$this->response->body($result);
        
	}

	public function action_update_password()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}
		$result;
		$post = $this->request->post();
		$model_user = Model::factory('user');
		$current_info = $model_user->get_user_info();

		$val_post = Validation::factory($post);

		$val_post->rule('old_password', 'not_empty')
			->rule('old_password', 'min_length', array(':value','4'))
			->label('old_password', 'Contraseña')

			->rule('new_password', 'not_empty')
			->rule('new_password', 'min_length', array(':value','4'))
			->label('new_password', 'Nueva Contraseña');

		if ($val_post->check())
        {
        	if($current_info['password'] == sha1($post['old_password']))
			{
				$model_user->update_password(sha1($post['new_password']));
            	$result = true;	
			}
			else
			{
				$result = array('email' => 'La contraseña actual es incorrecta');
				$result = json_encode($result);
			}
            
        }
 		else
 		{
 			// Validation failed, collect the errors
	        $errors = $val_post->errors('models/users');
	        //$this->template->errors = $errors;
	        $result = json_encode($errors);
 		}
 		
 		$this->response->body($result);
     
	}

	public function action_update_about()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}
		$result;
		$post = $this->request->post();
		$model_user = Model::factory('user');
        $model_user->update_about($this->request->post());
        $result = true;
 		
 		$this->response->body($result);
        
	}

} // End Welcome
