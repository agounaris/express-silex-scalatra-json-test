<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

// $app->register(new Silex\Provider\HttpCacheServiceProvider(), array(
// 	'http_cache.cache_dir' => __DIR__.'/cache/',
// ));

$app->get('/argi', function () use ($app) {
	
	$test = array(
		array('slug'=>'name', 'name'=>'argi'),
		array('slug'=>'lang', 'name'=>'scala'),
	);
    
    // return new Response(json_encode($test), 200, array(
    //     'Cache-Control' => 's-maxage=5',
    //     "Content-Type" => "application/json",
    // ));
    
    return $app->json($test);
});

//$app['http_cache']->run();
$app->run();
