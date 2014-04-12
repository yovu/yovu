<?php

  require 'vendor/autoload.php';

  $app = new \Slim\Slim();

  $app->get('/', 'home');
  $app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
  });

  $app->run();

  function home() {
  	include('views/home.php');
	}

?>
