<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Terms extends Controller_Master {

	public $template = 'terms/termsview';


	public function before()
    {   
        parent::before();
        $this->template->head->title = "INKEDin - Terminos y condiciones";
        $this->template->head->custom_scripts = HTML::script('/assets/home/js/Home.js')
                                                .HTML::script('/assets/common/app/js/Modal.js');
        $this->template->head->custom_styles = HTML::style('/assets/home/css/home.css');
    }

	public function action_index()
	{
		
	}

} // End Welcome
