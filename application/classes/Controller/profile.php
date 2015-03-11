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
        $this->template->head->custom_scripts = HTML::script('/assets/profile/js/Profile.js')
                                                .HTML::script('/assets/profile/js/Rating.js');
        $this->template->head->custom_styles = HTML::style('/assets/profile/css/rating.css');

        //CHECK PROFILE PIC
        if(empty($profile['photo']))
        {
            $profile['photo'] = HTML::image('/assets/common/app/img/default.jpg', array('alt' => $profile['name'].' '.$profile['name']));
        }
        else
        {
            $profile['photo'] = HTML::image('/users/'.$profile['id'].'/img/sm/'.$profile['photo'], array('alt' => $profile['name'].' '.$profile['name']));   
        }

        //CHECK COVER PIC
        if(empty($profile['cover']))
        {
            $profile['cover'] = HTML::image('/assets/common/app/img/cover.jpg', array('alt' => $profile['name'].' '.$profile['name']));
        }
        else
        {
            $profile['cover'] = HTML::image('/users/'.$profile['id'].'/img/reg/'.$profile['cover'], array('alt' => $profile['name'].' '.$profile['name'], 'id' => 'cover-pic'));   
        }

        $this->profile = $profile;
        $this->template->profile = $profile;

        //RATING

        $rating_model = new Model_Rating();
        $rating = $rating_model->get_rating_by_id($this->id);
        if($rating['total_votes'] > 0)
        {
            $v = $rating['total_votes'];
            $tv = $rating['total_value'];
            $rating['total'] = $tv/$v;
        }
        else
        {
            $v = 0;
            $tv = 0;
            $rating['total'] = 0;   
        }
        $this->template->ratingview = View::factory('profile/ratingview');
        $this->template->ratingview->rating = $rating;
        $this->template->ratingview->profile_id = $profile['id'];
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
            $this->template->head->custom_styles .= HTML::style('/assets/profile/css/profile.css');
            $this->template->content = View::factory('profile/photosview');
            $this->template->content->profile = $this->profile;
            $this->template->content->photos = $photos;
        }
    }

    public function action_rate()
    {
        if($this->request->is_ajax())
        {   
            $this->auto_render = false;
        }

        $id_sent = preg_replace("/[^0-9]/","",$_REQUEST['id']);
        $vote_sent = preg_replace("/[^0-9]/","",$_REQUEST['stars']);
        $ip = $_SERVER['REMOTE_ADDR'];
        $units = 5;

        $model_rating = new Model_Rating();
        if(!$model_rating->is_rated($id_sent))
        {
            $model_rating->create_rate($id_sent);
        }
        //$q=mysql_num_rows(mysql_query("select id from ratings where id=$id_sent"));
        //if(!$q)mysql_query("insert into ratings (id,date) values ($id_sent,curdate())");
        if ($vote_sent > $units) die("Sorry, vote appears to be invalid."); // kill the script because normal users will never see this.


        //connecting to the database to get some information
        //$query = mysql_query("SELECT total_votes, total_value, used_ips FROM $rating_dbname.$rating_tableName WHERE id='$id_sent' ")or die(" Error: ".mysql_error());
        //$numbers = mysql_fetch_assoc($query);
        $numbers = $model_rating->get_rating_by_id($id_sent);        
        $checkIP = unserialize($numbers['used_ips']);
        $count = $numbers['total_votes']; //how many votes total
        $current_rating = $numbers['total_value']; //total number of rating added together and stored
        $sum = $vote_sent+$current_rating; // add together the current vote value and the total vote value
        $tense = ($count==1) ? "vote" : "votes"; //plural form votes/vote

        // checking to see if the first vote has been tallied
        // or increment the current number of votes
        ($sum==0 ? $added=0 : $added=$count+1);

        // if it is an array i.e. already has entries the push in another value
        ((is_array($checkIP)) ? array_push($checkIP,$ip) : $checkIP=array($ip));
        $insertip=serialize($checkIP);

        //IP check when voting
        if(!isset($_COOKIE['rating_'.$id_sent]))
        {
            //$voted=mysql_num_rows(mysql_query("SELECT used_ips FROM $rating_dbname.$rating_tableName WHERE used_ips LIKE '%".$ip."%' AND id='".$id_sent."' "));
            $voted = $model_rating->get_rating_by_ip($ip, $id_sent);
        }   
        else 
        {
            $voted=1;                                  
        }
        if(!$voted) 
        {     //if the user hasn't yet voted, then vote normally...

            if (($vote_sent >= 1 && $vote_sent <= $units)) 
            { // keep votes within range, make sure IP matches 
            
                //$update = "UPDATE $rating_tableName SET total_votes='".$added."', total_value='".$sum."', used_ips='".$insertip."' WHERE id='$id_sent'";
                //$result = mysql_query($update); 
                $result = $model_rating->rate($added, $sum, $insertip, $id_sent);

                if($result)
                {
                    setcookie("rating_".$id_sent,1, time()+ 2592000);  
                } 
            } 
        } //end for the "if(!$voted)"
        // these are new queries to get the new values!
        //$newtotals = mysql_query("SELECT total_votes, total_value, used_ips FROM $rating_tableName WHERE id='$id_sent' ")or die(" Error: ".mysql_error());
        //$numbers = mysql_fetch_assoc($newtotals);
        
        //$numbers = $model_rating->get_rating_by_id($id_sent);        
        $rating = $model_rating->get_rating_by_id($id_sent);        
        
        /*
        $count = $numbers['total_votes'];//how many votes total
        $current_rating = $numbers['total_value'];//total number of rating added together and stored
        $tense = ($count==1) ? "vote" : "votes"; //plural form votes/vote

        // $new_back is what gets 'drawn' on your page after a successful 'AJAX/Javascript' vote
        
        
        if($voted)
        {
            $sum = $current_rating; 
            $added = $count;
        }

        $new_back = array();
        for($i=0; $i < 5; $i++)
        {
            $j=$i+1;
            if($i<@number_format($current_rating/$count,1)-0.5) $class="ratings_stars ratings_vote";
            else $class="ratings_stars";
            $new_back[] .= '<div class="star_'.$j.' '.$class.'"></div>';
        }


        $new_back[] .= ' <div class="total_votes"><p class="voted"> Rating: <strong>'.@number_format($sum/$added,1).'</strong>/'.$units.' ('.$count.' '.$tense.' cast) ';
        
        if(!$voted)$new_back[] .= '<span class="thanks">Thanks for voting!</span></p>';
        else {$new_back[] .= '<span class="invalid">Already voted for this item</span></p></div>';}
        $allnewback = join("\n", $new_back);


        // ========================


        $output = $allnewback;
        echo $output;
        */
        if(!$voted)
        {
            $feedback = 'Gracias por votar!';
        }            
        else 
        {
            $feedback = 'Ya votaste a este artista';
        }

        if($rating['total_votes'] > 0)
        {
            $v = $rating['total_votes'];
            $tv = $rating['total_value'];
            $rating['total'] = $tv/$v;
        }
        else
        {
            $v = 0;
            $tv = 0;
            $rating['total'] = 0;   
        }
        $view = View::factory('profile/ratingview');
        $view->rating = $rating;
        $view->profile_id = $id_sent;
        $view->feedback = $feedback;
        $this->response->body($view);
    }

    public function action_comments()
    {   
        $model_comments = new Model_Comment();
        $comments = $model_comments->get_comments_by_profile($this->id);
        $logged_in = $this->is_logged_in();

        $this->template->head->custom_styles .= HTML::style('/assets/profile/css/profile.css');

        for ($i=0; $i < sizeof($comments); $i++) { 
           
            if(empty($comments[$i]['photo']))
            {
                $comments[$i]['photo_path'] = '/assets/common/app/img/default.jpg';
            }
            else
            {
                $comments[$i]['photo_path'] = '/users/'.$comments[$i]['user_id'].'/img/sm/'.$comments[$i]['photo'];
            }
        }

        $this->template->content = View::factory('profile/commentsview');   
        $this->template->content->profile = $this->profile;
        $this->template->content->profile_id = $this->id;
        $this->template->content->comments = $comments;
        $this->template->content->logged_in = $logged_in;
    }

    public function action_leave_comment()
    {   
        if( $this->request->is_ajax() )
        {   
            $this->auto_render = false;
        }

        $model_comments = new Model_Comment();
        $comment = $this->request->post('comment');
        $comment_id = $model_comments->leave_comment($this->id, $comment);

        $model_comments = new Model_Comment();
        $comments = $model_comments->get_comments_by_profile($this->id);
        $logged_in = $this->is_logged_in();

        for ($i=0; $i < sizeof($comments); $i++) { 
           
            if(empty($comments[$i]['photo']))
            {
                $comments[$i]['photo_path'] = '/assets/common/app/img/default.jpg';
            }
            else
            {
                $comments[$i]['photo_path'] = '/users/'.$comments[$i]['user_id'].'/img/sm/'.$comments[$i]['photo'];
            }
        }

        $content = View::factory('profile/commentsview');   
        $content->profile = $this->profile;
        $content->profile_id = $this->id;
        $content->comments = $comments;
        $content->logged_in = $logged_in;

        $this->response->body($content);
    }

} // End Welcome
