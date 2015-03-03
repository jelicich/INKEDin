<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Master {

	public $template = 'user/myaccountview';

	public function before()
    {   
        parent::before();
        if($this->is_logged_in())
        {
        	$this->template->head->title = "INKEDin - Mi cuenta";
        	$this->template->head->custom_scripts = HTML::script('/assets/common/app/js/jquery.validate.min.js')
        											.HTML::script('/assets/common/app/js/messages_es.min.js')
        											.HTML::script('/assets/user/js/User.js')
        											.HTML::script('/assets/album/js/Album.js')
        											.HTML::script('/assets/album/js/jquery.knob.js')
        											.HTML::script('/assets/album/js/jquery.ui.widget.js')
        											.HTML::script('/assets/album/js/jquery.iframe-transport.js')
													.HTML::script('/assets/album/js/jquery.fileupload.js')
													.HTML::script('/assets/album/js/upload.script.js')
													.HTML::script('/assets/photo/js/Photo.js');
													
        											

			$this->template->head->custom_styles = HTML::style('/assets/user/css/user.css').HTML::style('/assets/album/css/upload.css');
	
        	$user = $this->get_user_info();
        	if(empty($user['photo']))
        	{
        		$user['photo_path'] = '/assets/common/app/img/default.jpg';
        	}
        	else
        	{
        		$user['photo_path'] = '/users/'.$user['id'].'/img/sm/'.$user['photo'];
        	}
        	$this->template->user = $user;

        	$styles_model = new Model_Style();
        	$styles = $styles_model->get_styles();
        	$this->template->styles = $styles;

        	//LOAD SUBVIEWS
        	$this->template->create_album_view = View::factory('album/createalbumview');
        	$this->template->profile_picture_view = View::factory('photo/uploadprofilepictureview');
        	$this->template->profile_picture_view->user = $user;
        	
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

	public function action_create_album()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}
		$result;
		$post = $this->request->post();
		$model_album = Model::factory('album');

        $id_album = $model_album->create_album($this->request->post());
        $result = '{"status":"success","album":"'.$id_album.'"}';

 		
 		$this->response->body($result);
        
	}

	

	public function action_load_album_edit()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}

		$post = $this->request->post();
		$photos_model = new Model_Photo();
		$photos = $photos_model->get_photos_by_album($post['album_id']);
		$view = View::factory('user/editalbumview');
		//$view->$photos = $photos;

		$this->response->body($view);
	}

} // End Welcome
