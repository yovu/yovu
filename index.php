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
		
		if (isset($_GET['subject'])) {
			$subject = implode(', ', $_GET['subject']);			
		} else {
			$subject = 'N/A';
		}
		
		$mg = new Mailgun("key-4npkxa6n706uqaxa58ixijv83vdmjwo7");
		$domain = "sandbox77528.mailgun.org";
    
		# Now, compose and send your message.
		$mg->sendMessage($domain, array('from'    => 'postmaster@sandbox77528.mailgun.org', 
		                                'to'      => 'info@yovu.co', 
		                                'subject' => 'New Line From Yovu', 
		                                'html'    => 'Name: '.$_GET['fullname'].'<br> Email: '.$_GET['email'].'<br> Subject: '.$subject.' '));
																		
	}

?>
