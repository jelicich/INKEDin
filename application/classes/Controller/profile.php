<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_Master {

	public $template = 'profile/profileaboutview';


	public function before()
    {   
        parent::before();
        $id = $this->request->param('profile_id');
        var_dump($this->request);
        die;
        if( empty($id) )
        {
        	HTTP::redirect('index');
        }
        $id = $this->request->param('profile_id');
        $model_user = new Model_User();
        $profile = $model_user->get_profile_info_by_id($id);
        
        $this->template->head->title = "INKEDin - Nombre";//.$profile['name']." ".$profile['last_name'];
        $this->template->head->custom_scripts = HTML::script('/assets/profile/js/Profile.js');

        
        

        //CHECK PROFILE PIC


        $this->template->profile = $profile;

    }

	public function action_index()
	{
		//$this->response->body('hello, world!');
	}

} // End Welcome
