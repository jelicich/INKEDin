<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_MasterAjax {

	//public $template = 'user/myaccountview';
	private $user;

	public function before()
    {   
        parent::before();
        if($this->is_logged_in())
        {
        	$this->user = $this->get_user_info();

			if($this->user['role'] == 1)
        	{
        		$this->template = View::factory('user/myaccountview');	
        	}
        	else
        	{
        		$this->template = View::factory('user/clientaccountview');	
        	}
        }
    }

	public function action_index()
	{
		parent::action_index();

		if($this->is_logged_in())
        {
			$user = $this->user;
			if(empty($user['photo']))
        	{
        		$user['photo_path'] = '/assets/common/app/img/default.jpg';
        	}
        	else
        	{
        		$user['photo_path'] = '/users/'.$user['id'].'/img/sm/'.$user['photo'];
        	}
        	
    	
        	if(empty($user['cover']))
        	{
        		$user['cover_path'] = '/assets/common/app/img/cover_thumb.jpg';
        	}
        	else
        	{
        		$user['cover_path'] = '/users/'.$user['id'].'/img/sm/'.$user['cover'];
        	}

        	//BIND STYLTES
        	$styles_model = new Model_Style();
        	$styles = $styles_model->get_styles();
        	$this->template->styles = $styles;

        	//BIND PROVINCES
        	$prov_model = new Model_Province();
        	$provinces = $prov_model->get_provinces();
        	$this->template->provinces = $provinces;

        	//BIND CITIES
        	if(!empty($user['province_id']))
        	{
				$model_cities = new Model_City();
        		$cities = $model_cities->get_cities_by_province($user['province_id']);
				$this->template->cities = $cities;
        	}

        	//LOAD SUBVIEWS
        	$this->template->create_album_view = View::factory('album/createalbumview');
        	$this->template->profile_picture_view = View::factory('photo/uploadprofilepictureview');
        	$this->template->profile_picture_view->user = $user;
    	
        	//BIND USER
			$this->template->user = $user;
        	
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

			$this->template->head->custom_styles = HTML::style('/assets/user/css/user.css')
													.HTML::style('/assets/album/css/upload.css')
													.HTML::style('/assets/album/css/album.css')
													.HTML::style('/assets/photo/css/photo.css');
        }
        else
        {
        	HTTP::redirect('index');	
        }
	}

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

	public function action_get_cities()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}

		$model_cities = new Model_City();
		$post = $this->request->post();
		$cities = $model_cities->get_cities_by_province($post['province_id']);
		$view = View::factory('user/citiesview');
		$view->cities = $cities;
		$view->user = $this->user;
		$this->response->body($view);
	}

	public function action_save_to_favourites()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}
		if($this->is_logged_in())
		{
			$user = $this->user;
			$photo_id = $this->request->post('photo_id');
			$model_favourite = new Model_Favourite();
			try 
			{
				$model_favourite->save_photo($user['id'],$photo_id);
				$response = '{"status" : "success"}';
			} 
			catch (Exception $e) 
			{
				if($e->getCode() === 1062)
				{
					$message = 'Ya tenes esta foto';
				}
				else
				{
					$message = 'Error en la BD';
				}
				$response = '{"status" : "error", "message" : "'.$message.'"}';
			}
			$this->response->body($response);
		}
	}

	public function action_delete_account()
	{
		$user = $this->get_user_info();
		$model_user = new Model_User();
		try 
		{
			$model_user->delete_account($user['id']);
			$this->delete_path('/users/'.$user['id']);	
		} 
		catch (Exception $e) 
		{
			echo $e;
		}
		
	}

	private function delete_path($path)
	{
	    if (is_dir($path) === true)
	    {
	        $files = array_diff(scandir($path), array('.', '..'));

	        foreach ($files as $file)
	        {
	            Delete(realpath($path) . '/' . $file);
	        }

	        return rmdir($path);
	    }

	    else if (is_file($path) === true)
	    {
	        return unlink($path);
	    }

	    return false;
	}
} // End Welcome
