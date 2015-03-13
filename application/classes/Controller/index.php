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
		$model_photos = new Model_Photo();
		$photos = $model_photos->search_photos('', 0, TRUE);
        
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
        $this->template->leftcol = $leftcol;
        $this->template->rightcol = $rightcol;
        
	}

} // End Welcome
