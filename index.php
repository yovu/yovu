<?php

  require 'vendor/autoload.php';
  use Mailgun\Mailgun;

  $app = new \Slim\Slim();

  $app->get('/', 'home');
	$app->get('/process/email', 'sendEmail');
  $app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
  });

  $app->run();

  function home() {
  	include('views/home.php');
	}
	
	function sendEmail() {
		
		$mg = new Mailgun("key-4npkxa6n706uqaxa58ixijv83vdmjwo7");
		$domain = "sandbox77528.mailgun.org";

		# Now, compose and send your message.
		$mg->sendMessage($domain, array('from'    => 'postmaster@sandbox77528.mailgun.org', 
		                                'to'      => 'info@yovu.co', 
		                                'subject' => 'The PHP SDK is awesome!', 
		                                'text'    => 'It is so simple to send a message.'));
																		
	}

?>
