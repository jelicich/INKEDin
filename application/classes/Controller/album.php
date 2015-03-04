<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Album extends Controller_Master {

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
		$view = View::factory('album/editalbumview');
		$view->photos = $photos;

		$this->response->body($view);
	}

	public function action_save_album_edit()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}
		$post = $this->request->post();
		
	

		$photo_model = new Model_Photo();

		$photos = $post['photos'];
		
		foreach($photos as $photo)
		{
			if($photo['del'] == 'true')
			{
				$photo_model->delete_photo($photo['photoId']);	
			}
			else
			{
				$photo_model->update_photo($photo);	
			}
			
		}

		//CHECK IF ALBUM IS EMPTY, THEN DELETE
		$current_photos = $photo_model->get_photos_by_album($post['album_id']);
		if(sizeof($current_photos) < 1)
		{
			$album_model = new Model_Album();
			$album_model->delete_album($post['album_id']);
		}

		$this->action_load_album_list();


	}

	public function action_load_album_list()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}

		$user = $this->get_user_info();

		$album_model = new Model_Album();
		$albums = $album_model->get_albums_by_user($user['id']);
		$view = View::factory('album/albumlistview');
		$view->albums = $albums;

		$this->response->body($view);
	}

	public function action_load_create_album()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}

		$view = View::factory('album/createalbumview');
		$this->response->body($view);
	}

	public function action_delete_album()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}
		
		$user = $this->get_user_info();
		
		$post = $this->request->post();
		$photos_model = new Model_Photo();
		$photos = $photos_model->get_photos_by_album($post['album_id']);

		$album_model = new Model_Album();
		$album_model->delete_album($post['album_id']);

		foreach ($photos as $photo) 
		{
			unlink('./users/'.$user['id'].'/img/md/'.$photo['photo']);
			unlink('./users/'.$user['id'].'/img/reg/'.$photo['photo']);
			unlink('./users/'.$user['id'].'/img/sm/'.$photo['photo']);
			unlink('./users/'.$user['id'].'/img/thumb/'.$photo['photo']);	
		}

		$albums = $album_model->get_albums_by_user($user['id']);
		$view = View::factory('album/albumlistview');
		$view->albums = $albums;

		$this->response->body($view);

	}

	public function action_add_photos()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
		}
		
		$post = $this->request->post();

		$album_model = new Model_Album();
		$album = $album_model->get_album_by_id($post['album_id']);

		$view = View::factory('album/addphotosview');
		$view->album = $album;

		$this->response->body($view);

	}

} // End Welcome
