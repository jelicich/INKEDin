<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller {

	private $session; 

	public function before()
    {   
        parent::before();
        Session::$default = 'database';
        $this->session = Session::instance();
    }
	public function action_login()
	{
		$username = $this->request->post('username');
		$password = sha1($this->request->post('password'));
		
		$model = new Model_User();
		$user = $model->select('user.*','photos.*')
			->where('email', '=', $username)
			->and_where('password' , '=', $password)
			->join('photos','LEFT')
			->on('user.photo_id', '=', 'photos.id')
    		->find();
		
		if($user->loaded())
		{
			if($user->active == 0) HTTP::redirect('index');
			$user = $user->as_array();
			//SI guardo el objeto, despues no puedo levantar la foto desde el master controller
			$this->session->set('user', $user);
			$this->session->set('logged_in', true);
			HTTP::redirect('index');
		}
		else
		{
			
			$template = View::factory('login/loginview')->set('email', $username);

			$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
			$common_styles = Kohana::$config->load('common_assets')->get('styles');
			
			$template = View::factory('login/loginview')->set('email', $username) ;
			
	        $template->head = View::factory('common/head');
	        $template->header = View::factory('common/header');    
	        $template->footer = View::factory('common/footer'); 
	        $template->head->title = 'INKEDin - Login';
	        $template->head->common_scripts = $common_scripts;
	        $template->head->common_styles = $common_styles;
	        $template->head->custom_scripts = HTML::script('/assets/login/js/Login.js');


			$this->response->body($template);
			
		}
		

	}

	public function action_logout()
	{
		$this->session->delete('logged_in');
		$this->session->delete('user');
		HTTP::redirect('index');
	}

	

} // End Auth
