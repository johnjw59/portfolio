<?php

require '../vendor/autoload.php';
use Mailgun\Mailgun;

// Send an email with the contents of the contact form.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$required_fields = array(
		'name' => 'Name',
		'email' => 'Email',
		'comments' => 'Message',
		'g-recaptcha-response' => 'Captcha',
	);

	foreach($required_fields as $key => $title) {
		if (empty($_POST[$key])) {
			$error = 'The ' . $title . ' field is required.';
			break;
		}
	}

	// Only continue if all the fields have a value.
	if (!isset($error_msg)) {
		$captcha_data = http_build_query(array(
			'secret' => $recaptcha_secret,
			'response' => $_POST['g-recaptcha-response'],
			'remoteip' => $_SERVER['REMOTE_ADDR'],
		));

		$opts = array('http' => array(
			'method' => 'POST',
			'header' => 'Content-type: application/x-www-form-urlencoded',
			'content' => $captcha_data,
		));
		$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', FALSE, stream_context_create($opts));
		$result = json_decode($response);

		if ($result->success) {
			$mailgun = Mailgun::create($mailgun_key);

      $message = 'Name: ' . $_POST['name'] . "\r\n";
      $message .= 'Email: ' . $_POST['email'] . "\r\n";
      $message .= 'IP: ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
      $message .= "\r\n" . $_POST['comments'];

      $mailgun->messages()->send('jwiebe.ca', array(
        'from' => $_POST['email'],
        'to' => $contact_email,
        'subject' => 'Portfolio Contact Form Submission',
        'text' => $message,
      ));

      $success = TRUE;
		}
		else {
			$error = 'Looks like Google thinks you\'re a robot! Feel to try again.';
		}
	}
}
