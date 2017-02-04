<?php if (!defined('FORUM')) die();

if(FORUM_PAGE == 'register'){
	$forum_loader->add_js('https://www.google.com/recaptcha/api.js',
		array(
			'type' 		=> 'url',
			'async' 	=> TRUE,
			'weight' 	=> 140
	));
}


