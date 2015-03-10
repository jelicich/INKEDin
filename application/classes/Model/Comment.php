<?php

class Model_Comment extends ORM{
	
	public function get_comments_by_profile($profile_id)
	{
		$comments = $this->select('comment.*','users.name','users.last_name','users.id','users.photo_id','photos.photo')
			->where('profile_id', '=', $profile_id)
			->join('users')
			->on('comment.user_id','=','users.id')
			->join('photos', 'LEFT')
			->on('users.photo_id','=','photos.id')
			->find_all();
	    $comments = $comments->as_array();

        for($i = 0; $i < sizeof($comments); $i++)
        {
            $comments[$i] = $comments[$i]->as_array();
        }

        return $comments;
	}

	public function leave_comment()
	{
		
	}
}