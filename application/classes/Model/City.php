<?php

class Model_City extends ORM{
	
	public function get_cities_by_province($id)
	{
		$provs = $this->select()
			->where('province_id', '=', $id)
			->order_by('city', 'ASC')
			->find_all();	
		$provs = $provs->as_array();
		for($i = 0; $i < sizeof($provs); $i++)
		{
			$provs[$i] = $provs[$i]->as_array();
		}
    	return $provs;
	}
}