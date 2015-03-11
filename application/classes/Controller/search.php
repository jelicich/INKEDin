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

	public function action_index()
	{
        $this->template->content = View::factory('search/searchresultview');
        $this->template->content->search = $this->request->param('param');
        $param = $this->request->param('param');
        
        $photos = $this->search_photos($param, 0);
        $users = $this->search_users($param, 0);

        $this->template->content->photos = $photos;
        $this->template->content->users = $users;
	}

    public function action_photos()
    {
        if($this->request->is_ajax())
        {   
            $this->auto_render = false;

            $param = $this->request->param('param');
            $offset = $this->request->param('offset');
            $photos = $this->search_photos($param, $offset);
            $view_even = View::factory('search/leftphotosview');
            $view_even->photos = $photos;
            $view['even'] = $view_even->render();

            $view_odd = View::factory('search/rightphotosview');
            $view_odd->photos = $photos;
            $view['odd'] = $view_odd->render();
            
            $view = json_encode($view);
            $this->response->body($view);
        }
    }

    public function action_users()
    {
        if($this->request->is_ajax())
        {   
            $this->auto_render = false;

            $param = $this->request->param('param');
            $offset = $this->request->param('offset');
            $users = $this->search_users($param, $offset);

            $view = View::factory('search/usersview');
            $view->users = $users;
            $this->response->body($view);
        }

    }

    //PRIVATE METHODS ====================================================

    private function search_photos($param, $offset)
    {
        $model_photos = new Model_Photo();
        if(empty($param))
        {
            $photos = '';
        }
        else
        {
            $photos = $model_photos->search_photos($param, $offset);

            for ($i=0; $i < sizeof($photos); $i++) { 
               
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
        }
        return $photos;
    }

    private function search_users($param, $offset)
    {
        $model_users = new Model_User();
        if(empty($param))
        {
            $users = '';
        }
        else
        {
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
        }
        return $users;
    }
} // End Welcome
