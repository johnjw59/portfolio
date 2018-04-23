<?php

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
			$headers = 'Reply-To: ' . $_POST['email'];

			$message = 'Name: ' . $_POST['name'] . "\r\n";
			$message .= 'Email: ' . $_POST['email'] . "\r\n";
			$message .= 'IP: ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
			$message .= "\r\n" . $_POST['comments'];

			if (mail($contact_email, 'Portfolio Email', $message, $headers)) {
				$success = TRUE;
			}
			else {
				$error = 'Your mail could not be sent this time. Please try again later.';
			}
		}
		else {
			$error = 'Looks like Google thinks you\'re a robot! Feel to try again.';
		}
	}
}
