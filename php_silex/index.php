<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/argi', function () use ($app) {
	
	$test = array(
		array('slug'=>'name', 'name'=>'argi'),
		array('slug'=>'lang', 'name'=>'scala'),
	);
	
    return json_encode($test);
});

$app->run();
