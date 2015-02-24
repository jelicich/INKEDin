<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Photo extends Controller_Master {

	public $template = 'user/myaccountview';

	public function before()
    {   
        parent::before();
        if($this->is_logged_in())
        {
        	$this->template->head->title = "INKEDin - Mi cuenta";
        	$this->template->head->custom_scripts = HTML::script('/assets/common/app/js/jquery.validate.min.js').HTML::script('/assets/common/app/js/messages_es.min.js').HTML::script('/assets/user/js/User.js');
			$this->template->head->custom_styles = HTML::style('/assets/user/css/user.css').HTML::style('/assets/user/css/upload.css');
			
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

	public function action_photo_edit()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}
		$params = $this->request->post();
		
	

		$photo_model = new Model_Photo();

		$photos = $params['photos'];
		foreach($photos as $photo)
		{
			$photo_model->update_photo($photo);
		}

	}


} // End Welcome
