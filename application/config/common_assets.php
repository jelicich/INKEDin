<?php defined('SYSPATH') or die('No direct script access.');

$scripts = HTML::script('http://code.jquery.com/jquery-latest.js')
	.HTML::script('/assets/common/app/js/bootstrap.min.js')
	.HTML::script('/assets/common/app/js/redirect.js')
	.HTML::script('/assets/common/app/js/App.js')
	.HTML::script('/assets/common/header/js/Header.js');

$styles = HTML::style('/assets/common/app/css/bootstrap.min.css')
	.HTML::style('/assets/common/app/css/sidebar-menu.css')
	.HTML::style('/assets/common/app/css/inkedin.css')
	.HTML::style('http://fonts.googleapis.com/css?family=Cuprum:400,400italic,700,700italic');

return array(
    'scripts' => $scripts,
    'styles' => $styles
    );