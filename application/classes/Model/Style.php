<?php

class Model_Style extends ORM{
	
	public function get_styles()
	{
		$styles = $this->find_all();	
		$styles = $styles->as_array();
		for($i = 0; $i < sizeof($styles); $i++)
		{
			$styles[$i] = $styles[$i]->as_array();
		}
    	return $styles;
	}
}