<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Master {

	public $template = 'homeview';


	/*
	public function __construct($request, $response)
	{
	   parent::__construct($request, $response);

	   $this->$template->scripts = HTML::script('application/views/Header.js');
	}
	*/

	public function action_index()
	{
		$this->template->head->title = "Sarasa";
	
		//$this->response->body('hello, world!');
	}

} // End Welcome
