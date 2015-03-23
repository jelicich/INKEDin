<?php

class Model_Search extends ORM{
	
	public static function save_term($query, $date)
	{
		$model = new Model_Search();
		$term = $model->where('term','=',$query)
			->find();
		if($term->loaded())
		{
			$term->counter = $term->counter + 1;
			$term->last_search = $date;
			$term->save();
		}
		else
		{
			$model->term = $query;
			$model->last_search = $date;
			$model->save();
		}	
	}

	public static function get_searches()
	{
		$model = new Model_Search();
		$searches = $model->select()
			->order_by('counter','DESC')
			->limit(20)
			->find_all();

		$searches = $searches->as_array();
		for($i = 0; $i < sizeof($searches); $i++)
		{
			$searches[$i] = $searches[$i]->as_array();
		}
		return $searches;
	}

}