<?php 
abstract class Controller_Master extends Controller_Template
{
    public $template = 'homeview'; // Default template
    public $title = 'INKEDin - Tattoo site'; //Default title;
    private $session;
    
    
    public function before()
    {
        //Session
        Session::$default = 'database';
        $this->session = Session::instance();

        // Set a local template variable to what template the controller wants to use, by default 'template'
        $template = $this->template; 
		
		$common_scripts = Kohana::$config->load('common_assets')->get('scripts');
		$common_styles = Kohana::$config->load('common_assets')->get('styles');	
        
        parent::before();
		
        if($this->is_logged_in() != true)
        {
            $this->template->header = View::factory('common/header');    
        }
        else
        {
            $this->template->header = View::factory('common/header_logged');
            $this->template->header->user = $this->session->get('user');
        }

        $this->template->head = View::factory('common/head');
        $this->template->footer = View::factory('common/footer'); 
        $this->template->head->title = $this->title;
        $this->template->head->common_scripts = $common_scripts;
        $this->template->head->common_styles = $common_styles;

        
        return;
    }

    public function is_logged_in()
    {
        return $this->session->get('logged_in');
    }
}