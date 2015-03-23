<?php defined('SYSPATH') or die('No direct script access.');
class Helper_Footer{
	public static function get_styles()
	{
		$styles_model = new Model_Style();
    	$styles = $styles_model->get_styles();
    	return $styles;
	}
}
?>