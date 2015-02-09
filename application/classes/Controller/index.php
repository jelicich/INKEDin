<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Master {

	public $template = 'home/homeview';


	public function before()
    {   
        parent::before();
        $this->template->head->title = "INKEDin - Tattoo Site";
    }

	public function action_index()
	{
		//$this->response->body('hello, world!');
	}

} // End Welcome
