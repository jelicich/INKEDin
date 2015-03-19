<?php

class Model_Comment extends ORM{
	
	public function get_comments_by_profile($profile_id, $offset = 0)
	{
		$comments = $this->select('comment.*','users.name','users.last_name','users.id','users.photo_id','photos.photo')
			->where('profile_id', '=', $profile_id)
			->join('users')
			->on('comment.user_id','=','users.id')
			->join('photos', 'LEFT')
			->on('users.photo_id','=','photos.id')
			->order_by('comment.date','DESC')
			->limit(20)
			->offset($offset)
			->find_all();

	    $comments = $comments->as_array();

        for($i = 0; $i < sizeof($comments); $i++)
        {
            $comments[$i] = $comments[$i]->as_array();
        }

        return $comments;
	}

	public function leave_comment($profile_id, $comment)
	{
		$model_user = new Model_User();
		$user = $model_user->get_user_info();

		$this->user_id = $user['id'];
		$this->profile_id = $profile_id;
		$this->comment = $comment;
		$id = $this->save();

		return $id;
	}
}