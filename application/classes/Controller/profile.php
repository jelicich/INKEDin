<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_Master {

	public $template = 'profile/profileview';
    private $id;
    private $profile;

	public function before()
    {   
        parent::before();
        $this->id = $this->request->param('profile_id');
        
        //IF ID IS NOT GIVEN REDIRECT TO INDEX
        if( empty($this->id) )
        {
        	HTTP::redirect('index');
        }

        $model_user = new Model_User();
        $profile = $model_user->get_profile_info_by_id($this->id);

        //IF INVALID ID TODO show error page
        if(empty($profile))
        {
            HTTP::redirect('index');
        }
        
        $this->template->head->title = "INKEDin - ".$profile['name']." ".$profile['last_name'];
        $this->template->head->custom_scripts = HTML::script('/assets/profile/js/Profile.js');
        

        //CHECK PROFILE PIC
        if(empty($profile['photo']))
        {
            $profile['photo'] = HTML::image('/assets/common/app/img/default.jpg', array('alt' => $profile['name'].' '.$profile['name']));
        }
        else
        {
            $profile['photo'] = HTML::image('users/'.$profile['id'].'/img/sm/'.$profile['photo'], array('alt' => $profile['name'].' '.$profile['name']));   
        }

        $this->profile = $profile;
        $this->template->profile = $profile;

    }

	public function action_index()
	{
		$this->template->content = View::factory('profile/aboutview');
        $this->template->content->profile = $this->profile;

        $this->template->sidebar = View::factory('profile/followersview');
	}

    public function action_albums_list()
    {
        $album_model = new Model_Album();
        $albums = $album_model->get_albums_by_user($this->id);

        $this->template->content = View::factory('profile/albumsview');
        $this->template->content->profile = $this->profile;
        $this->template->content->albums = $albums;
    }

    public function action_album()
    {
        $photo_model = new Model_Photo();
        $album_id = $this->request->param('album_id');
        $photos = $photo_model->get_photos_by_album_and_user($album_id, $this->id);
        if(empty($photos))
        {
            //SHOW ERROR ALBUM DONT BELONG TO USER
        }
        else
        {
            $this->template->head->custom_scripts .= HTML::script('/assets/profile/js/Modal.js');
            $this->template->content = View::factory('profile/photosview');
            $this->template->content->profile = $this->profile;
            $this->template->content->photos = $photos;
        }
        
    }

} // End Welcome
