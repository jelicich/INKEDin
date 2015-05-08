<?php defined('SYSPATH') or die('No direct script access.');
class Helper_Datetime{
	public static function date_format($date)
	{
		setlocale(LC_TIME,"es_ES", 'Spanish_Spain', 'Spanish');
		$d = strtotime($date);
		return utf8_encode( strftime("%a, %d %b %Y %H:%M", $d ) );
	}
}
?>