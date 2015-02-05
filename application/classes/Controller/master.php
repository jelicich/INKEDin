<?php 
abstract class Controller_Master extends Controller_Template
{
    public $template = 'homeview'; // Default template
    public $title = 'INKEDin - Tattoo site'; //Default title;

    
    
    public function before()
    {
        // Set a local template variable to what template the controller wants to use, by default 'template'
        $template = $this->template; 
		
		$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
		$common_styles = Kohana::$config->load('common_assets')->get('styles');	
        
        parent::before();
		

        $this->template->head = View::factory('common/head'); 
        $this->template->header = View::factory('common/header');  
        $this->template->footer = View::factory('common/footer'); 
        $this->template->head->title = $this->title;
        $this->template->head->common_scripts = $common_scripts;
        $this->template->head->common_styles = $common_styles;

        return;
    }
}