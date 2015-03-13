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
        $param = $this->request->param('param');
        $this->template->content = View::factory('search/searchallview');
        $this->template->content->search = $param;
        $this->template->header->search = $param;
        
        
        if(empty($param))
        {
            $photos['photos'] = '';
            $photos['count'] = '';
            $users['users'] = '';
            $users['count'] = '';
        }
        else
        {
            $photos = $this->search_photos($param, 0);
            $users = $this->search_users($param, 0);    
        }
        
        $this->template->content->photos = $photos['photos'];
        $this->template->content->count_photos = $photos['count'];
        $this->template->content->users = $users['users'];
        $this->template->content->count_users = $users['count'];
	}

    public function action_photos()
    {
        if($this->request->is_ajax())
        {   
            $this->auto_render = false;

            $param = $this->request->param('param');
            $offset = $this->request->post('offset');
            $cn = $this->request->post('cn');
            $search = $this->search_photos($param, $offset);
            $photos = $search['photos'];
            
            if($cn == 2)
            {
                $view_even = View::factory('search/twocolphotorenderview');
                $view_even->photos = $photos;
                $view_even->module = 0;
                $view['even'] = $view_even->render();

                $view_odd = View::factory('search/twocolphotorenderview');
                $view_odd->photos = $photos;
                $view_odd->module = 1;
                $view['odd'] = $view_odd->render();

                $view['col'] = 2;
            }
            elseif($cn == 4)
            {
                $view_even = View::factory('search/fourcolphotorenderview');
                $view_even->photos = $photos;
                $view_even->module = 1;
                $view['first'] = $view_even->render();

                $view_odd = View::factory('search/fourcolphotorenderview');
                $view_odd->photos = $photos;
                $view_odd->module = 2;
                $view['second'] = $view_odd->render();

                $view_odd = View::factory('search/fourcolphotorenderview');
                $view_odd->photos = $photos;
                $view_odd->module = 3;
                $view['third'] = $view_odd->render();

                $view_odd = View::factory('search/fourcolphotorenderview');
                $view_odd->photos = $photos;
                $view_odd->module = 4;
                $view['fourth'] = $view_odd->render();

                $view['col'] = 4;
            }
       
            $view = json_encode($view);
            $this->response->body($view);
        }
        else
        {
            $this->template->content = View::factory('search/searchphotosview');
            $this->template->content->search = $this->request->param('param');
            $param = $this->request->param('param');
            
            $search = $this->search_photos($param, 0);
            $photos = $search['photos'];
            $this->template->content->photos = $photos;
            $this->template->content->count_photos = $search['count'];
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
            $search = $this->search_users($param, $offset);
            $users = $search['users'];

            $view = View::factory('search/artistsview');
            $view->users = $users;
            //VAR TO SET COLUMN WIDTH of the new results
            $view->cw = $cw;
            $this->response->body($view);
        }
        else
        {            
            $param = $this->request->param('param');
            $province = $this->request->param('province');
            $city = $this->request->param('city');

            $this->template->content = View::factory('search/searchartistsview');
            if($param == ' ')
            {
                $param = '';
            }
                      
            $prov_model = new Model_Province();
            $provinces = $prov_model->get_provinces();
            if(!empty($province))
            {
                $model_cities = new Model_City();
                $cities = $model_cities->get_cities_by_province($province);
            }
            else
            {
                $cities = '';
            }

            $search = $this->search_users($param, 0, $province, $city);
            $users = $search['users'];
            $count_users = $search['count'];
            
            $this->template->content->search = $param;
            $this->template->content->users = $users;
            $this->template->content->count_users = $count_users;
            $this->template->content->provinces = $provinces;
            $this->template->content->cities = $cities;
            $this->template->content->province = $province;
            $this->template->content->city = $city;
        }

    }

    public function action_tops()
    {
        $this->template->content = View::factory('search/searchtopsview');
        $model_user = new Model_User();
        $users = $model_user->get_top_users();
        
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
        
        $this->template->content->users = $users;
    }

    //PRIVATE METHODS ====================================================

    private function search_photos($param, $offset)
    {
        $model_photos = new Model_Photo();
        
        $count = $model_photos->count_photos($param);
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
        
        $result['photos'] = $photos;
        $result['count'] = $count;
        return $result;
    }

    private function search_users($param, $offset, $province = '', $city = '')
    {
        $model_users = new Model_User();

        $count = $model_users->count_users($param);
        $users = $model_users->search_users($param, $offset, $province, $city);
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
        $result['users'] = $users;
        $result['count'] = $count;
        return $result;
    }
} // End Welcome
