<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/{year}', function(Silex\Application $app, $year) {
	if(!is_numeric($year))
		$app->abort(500, "invalid parameter!");

	if ( ( $year % 4 == 0 && $year % 100 != 0 ) || $year % 400 == 0 )
    	return "true";
    return "false";
});

$app['debug'] = false;

$app->run();
