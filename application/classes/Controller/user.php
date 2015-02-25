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
													.HTML::script('/assets/album/js/upload.script.js');
													
        											

			$this->template->head->custom_styles = HTML::style('/assets/user/css/user.css').HTML::style('/assets/album/css/upload.css');
	
        	$this->template->user = $this->get_user_info();

        	$styles_model = new Model_Style();
        	$styles = $styles_model->get_styles();
        	$this->template->styles = $styles;

        	$this->template->create_album_view = View::factory('album/createalbumview');
        	
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

	public function action_upload_photo()
	{
		
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}

		$user = $this->get_user_info();
		$path = './users/'.$user['id'].'/img/reg/';
		$path_th = './users/'.$user['id'].'/img/thumb/';
		$path_md = './users/'.$user['id'].'/img/md/';
		$path_sm = './users/'.$user['id'].'/img/sm/';
		
		
		if (!file_exists($path)) 
		{
		    mkdir($path, 0777, true);
		    mkdir($path_th, 0777, true);
		    mkdir($path_md, 0777, true);
		    mkdir($path_sm, 0777, true);

		}
		// A list of permitted file extensions
		$allowed = array('png', 'jpg', 'jpeg', 'gif');

		if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0)
		{

			$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
			
			//NEW NAME
			$rand = rand(1000,9999);      
	        $new_name = $rand . "_" . time() .'.' . $extension;  
			if(!in_array(strtolower($extension), $allowed)){
				$restul ='{"status":"error"}';
				//exit;
			}
			elseif ($file = Upload::save($_FILES['upl'], NULL, './temp'))
			{
 
	            //SAVE MAIN IMG
	            Image::factory($file)
	                ->resize(1024, 1024, Image::AUTO)
	                ->save($path.$new_name);

				//SAVE THUMBNAIL IMG
	            Image::factory($file)
	                ->resize(250, NULL)
	                ->save($path_th.$new_name);

	            //SAVE SQUARE MD IMG
	            Image::factory($file)
	            	->resize(560, 560, Image::INVERSE)
	                ->crop(560, 560)
                	->save($path_md.$new_name);

	            //SAVE SQUARE SM IMG
	            Image::factory($file)
	            	->resize(250, 250, Image::INVERSE)
	                ->crop(250, 250)
                	->save($path_sm.$new_name);
	                
	 
	            // Delete the temporary file
	            unlink($file);
	 			
	 			$album_id = $this->request->post();
				$user = $this->get_user_info();
	 			$result = '{"status":"success"}';
	            
	            $photo_model = new Model_Photo();
	            $user = $this->get_user_info();
	            $album = $post = $this->request->post();
	            $photo_model->save_photo($new_name, $album['album_id'], $user['id']);


			}
		}
		else
		{
			$result = '{"status":"error"}';	
		}
		
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
