<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Search extends Controller_Master {

	public $template = 'search/searchview';
    private $id;
    private $profile;

	public function before()
    {   
        parent::before();
        
        $this->template->head->title = "INKEDin - Resultados de busqueda: ".$this->request->param('id');
        $this->template->head->custom_scripts = HTML::script('/assets/search/js/Search.js')
                                                .HTML::script('/assets/search/js/Modal.js');
        $this->template->head->custom_styles = HTML::style('/assets/search/css/search.css');

    }

	//SET AS INDEX IN BOOTSTRAP
    public function action_all()
	{
        $this->template->content = View::factory('search/searchresultview');
        $this->template->content->search = $this->request->param('param');
        $param = $this->request->param('param');
        
        if(empty($param))
        {
            $photos = '';
            $users = '';
        }
        else
        {
            $photos = $this->search_photos($param, 0);
            $users = $this->search_users($param, 0);    
        }
        
        $this->template->content->photos = $photos;
        $this->template->content->users = $users;
	}

    public function action_photos()
    {
        if($this->request->is_ajax())
        {   
            $this->auto_render = false;

            $param = $this->request->param('param');
            $offset = $this->request->post('offset');
            $photos = $this->search_photos($param, $offset);
            
            $view_even = View::factory('search/twocolphotorenderview');
            $view_even->photos = $photos;
            $view_even->module = 0;
            $view['even'] = $view_even->render();

            $view_odd = View::factory('search/twocolphotorenderview');
            $view_odd->photos = $photos;
            $view_odd->module = 1;
            $view['odd'] = $view_odd->render();
            
            $view = json_encode($view);
            $this->response->body($view);
        }
        else
        {
            $this->template->content = View::factory('search/searchphotosview');
            $this->template->content->search = $this->request->param('param');
            $param = $this->request->param('param');
            
            $photos = $this->search_photos($param, 0);
            $this->template->content->photos = $photos;
        }
    }

    public function action_artists()
    {
        if($this->request->is_ajax())
        {   
            $this->auto_render = false;

            $param = $this->request->param('param');
            $offset = $this->request->post('offset');
            $cw = $this->request->post('cw');
            $users = $this->search_users($param, $offset);

            $view = View::factory('search/artistsview');
            $view->users = $users;
            //VAR TO SET COLUMN WIDTH of the new results
            $view->cw = $cw;
            $this->response->body($view);
        }
        else
        {

            $this->template->content = View::factory('search/searchartistsview');
            $this->template->content->search = $this->request->param('param');
            $param = $this->request->param('param');
            
            $users = $this->search_users($param, 0);
            $this->template->content->users = $users;

        }

    }

    //PRIVATE METHODS ====================================================

    private function search_photos($param, $offset)
    {
        $model_photos = new Model_Photo();
        
        $photos = $model_photos->search_photos($param, $offset);

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

            $photos[$i]['photo'] = '/users/'.$photos[$i]['user_id'].'/img/thumb/'.$photos[$i]['photo'];
        }
        
        return $photos;
    }

    private function search_users($param, $offset)
    {
        $model_users = new Model_User();

        $users = $model_users->search_users($param, $offset);
        for ($i=0; $i < sizeof($users); $i++) { 
           
            if(empty($users[$i]['photo']))
            {
                $users[$i]['photo'] = '/assets/common/app/img/default.jpg';
            }
            else
            {
                $users[$i]['photo'] = '/users/'.$users[$i]['user_id'].'/img/sm/'.$users[$i]['photo'];
            }
        }
        
        return $users;
    }
} // End Welcome
