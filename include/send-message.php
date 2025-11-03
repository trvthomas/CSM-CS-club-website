<?php
$emailSent = false;

if (isset($_POST["inputName"]) && isset($_POST["inputEmail"]) && isset($_POST["inputMessage"])) {
	$name = ucwords($_POST['inputName']);
	$email = strtolower($_POST['inputEmail']);
	$message = $_POST['inputMessage'];

	$to = "rodriguezvt1@my.smccd.edu";
	$body = "Name: $name\nEmail: $email\nMessage: $message";
	if (mail($to, "CS Website Form Submission", $body)) {
		$emailSent = true;
	}
}

$varsSend = array(
	'message_sent' => $emailSent
);
echo json_encode($varsSend);
?>