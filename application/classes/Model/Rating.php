<?php

class Model_Rating extends ORM{
	
	public function get_rating_by_id($id)
	{
		$rating = $this->select()
			->where('id','=',$id)
			->find();
		$rating = $rating->as_array();
		
    	return $rating;
	}

	public function is_rated($id)
	{
		$rating = $this->select('id')
			->where('id','=',$id)
			->find();
		
		if($rating->loaded())
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function create_rate($id)
	{
		$this->id = $id;
		$this->save();
		return $this->id;

	}

	public function get_rating_by_ip($ip, $id)
	{
		$rating = $this->select('used_ips')
			->where('used_ips','LIKE', $ip)
			->and_where('id', '=', $id)
			->find();

		if($rating->loaded())
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	public function rate($added, $sum, $insertip, $id_sent)
	{
		$rating = $this->where('id', '=', $id_sent )->find();
        $rating->total_votes = $added;
        $rating->total_value = $sum;
        $rating->used_ips = $insertip;
        $rating->save();
        return true;
	}

}