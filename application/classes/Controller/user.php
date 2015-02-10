<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Master {

	public $template = 'user/myaccountview';

	public function before()
    {   
        parent::before();
        $this->template->head->title = "INKEDin - Tattoo Site";
        $this->template->user = $this->session->get('user');
    }

	public function action_index()
	{
		//$this->response->body('hello, world!');
	}

} // End Welcome
