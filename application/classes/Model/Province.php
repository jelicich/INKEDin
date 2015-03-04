<?php

class Model_Province extends ORM{
	
	public function get_provinces()
	{
		$provs = $this->find_all();	
		$provs = $provs->as_array();
		for($i = 0; $i < sizeof($provs); $i++)
		{
			$provs[$i] = $provs[$i]->as_array();
		}
    	return $provs;
	}
}