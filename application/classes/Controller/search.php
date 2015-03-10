<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Search extends Controller_Master {

	public $template = 'search/searchview';
    private $id;
    private $profile;

	public function before()
    {   
        parent::before();
        
        $this->template->head->title = "INKEDin - Resultados de busqueda: ".$this->request->param('id');
        // $this->template->head->custom_scripts = HTML::script('/assets/profile/js/Profile.js')
        //                                         .HTML::script('/assets/profile/js/Rating.js');
        // $this->template->head->custom_styles = HTML::style('/assets/profile/css/rating.css');

    }

	public function action_index()
	{
        $this->template->content = View::factory('search/searchresultview');
        $this->template->content->search = $this->request->param('param');
        //$this->search_photos();
        $param = $this->request->param('param');
        $this->search_users($param);
	}

    public function action_photos()
    {

    }

    private function search_photos($param)
    {
        $model_photos = new Model_Photo();
        if(empty($param))
        {
            $photos = '';
        }
        else
        {
            var_dump($param);
            die;
            $photos = $model_photos->search_photos($param);

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
        $this->template->content->photos = $photos;
    }

    private function search_users($param)
    {
        $model_users = new Model_User();
        if(empty($param))
        {
            $users = '';
        }
        else
        {
            $users = $model_users->search_users($param);
            for ($i=0; $i < sizeof($users); $i++) { 
               
                if(empty($users[$i]['profile_photo']))
                {
                    $users[$i]['profile_photo'] = '/assets/common/app/img/default.jpg';
                }
                else
                {
                    $users[$i]['profile_photo'] = '/users/'.$users[$i]['user_id'].'/img/sm/'.$users[$i]['profile_photo'];
                }

                $users[$i]['photo'] = '/users/'.$users[$i]['user_id'].'/img/thumb/'.$users[$i]['photo'];
            }
        }
        $this->template->content->users = $users;
    }
} // End Welcome
