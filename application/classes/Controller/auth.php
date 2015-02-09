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
			->join('photos')
			->on('user.photo_id', '=', 'photos.id')
    		->find();

		if($user->loaded())
		{
			$user = $user->as_array();
			//SI guardo el objeto, despues no puedo levantar la foto desde el master controller
			$this->session->set('user', $user);
			$this->session->set('logged_in', true);
		}
		HTTP::redirect('index');

	}

	public function action_logout()
	{
		$this->session->delete('logged_in');
		$this->session->delete('user');
		HTTP::redirect('index');
	}

	

} // End Auth
