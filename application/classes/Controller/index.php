<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Master {

	public $template = 'home/homeview';


	public function before()
    {   
        parent::before();
        $this->template->head->title = "INKEDin - Tattoo Site";
        $this->template->head->custom_scripts = HTML::script('/assets/home/js/Home.js')
                                                .HTML::script('/assets/common/app/js/Modal.js');
        $this->template->head->custom_styles = HTML::style('/assets/home/css/home.css');

        $this->template->is_logged_in = $this->is_logged_in();
        if($this->is_logged_in())
        {
            $user = $this->get_user_info();
            $this->template->role = $user['role'];
        }
    }

	public function action_index()
	{
		if($this->request->is_ajax())
		{	
			$this->auto_render = false;
			$offset = $this->request->post('offset');
		}
		else
		{
			$offset = 0;
		}
		$model_photos = new Model_Photo();
		$photos = $model_photos->show_latest_photos(10, $offset);
        $leftcol = '';
        $rightcol = '';
        $l_count = 1;
        $r_count = 1;
        for ($i=0; $i < sizeof($photos); $i++) 
        { 
        	if(empty($photos[$i]['profile_photo']))
            {
                $photos[$i]['profile_photo'] = '/assets/common/app/img/default.jpg';
            }
            else
            {
                $photos[$i]['profile_photo'] = '/users/'.$photos[$i]['user_id'].'/img/sm/'.$photos[$i]['profile_photo'];
            }

        	if(($i % 2) == 0)
        	{
        		if($l_count > 5)
        		{
        			$l_count = 1;
        		}	
        		
        		if($l_count == 1)
        		{
        			$photos[$i]['photo'] = '/users/'.$photos[$i]['user_id'].'/img/md/'.$photos[$i]['photo'];
        		}	            	
	            else
	            {
	            	$photos[$i]['photo'] = '/users/'.$photos[$i]['user_id'].'/img/sm/'.$photos[$i]['photo'];
	            }
	            $leftcol[] = $photos[$i];
	            $l_count++;
        	}
        	else
        	{
        		if($r_count > 5)
        		{
        			$r_count = 1;
        		}

        		if($l_count == 3)
        		{
        			$photos[$i]['photo'] = '/users/'.$photos[$i]['user_id'].'/img/md/'.$photos[$i]['photo'];
        		}	            	
	            else
	            {
	            	$photos[$i]['photo'] = '/users/'.$photos[$i]['user_id'].'/img/sm/'.$photos[$i]['photo'];
	            }
	            $rightcol[] = $photos[$i];
	            $r_count++;
        	}
        }
        if($this->request->is_ajax())
		{	
			$view_odd = View::factory('home/leftcolrendererview');
            $view_odd->leftcol = $leftcol;
            $view_odd->module = 0;
            $view['leftcol'] = $view_odd->render();

            $view_even = View::factory('home/rightcolrendererview');
            $view_even->rightcol = $rightcol;
            $view_even->module = 0;
            $view['rightcol'] = $view_even->render();

            $view = json_encode($view);
            $this->response->body($view);
		}
		else
		{
			$this->template->leftcol = $leftcol;
        	$this->template->rightcol = $rightcol;
		}

        $this->template->is_logged_in = $this->is_logged_in();
	}

} // End Welcome
