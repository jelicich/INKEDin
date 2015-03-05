<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_Master {

	public $template = 'profile/profileaboutview';


	public function before()
    {   
        parent::before();
        
        
        $this->template->head->title = "INKEDin - Nombre";//.$profile['name']." ".$profile['last_name'];
        $this->template->head->custom_scripts = HTML::script('/assets/profile/js/Profile.js');
    }

	public function action_index()
	{
		//$this->response->body('hello, world!');
	}

} // End Welcome
