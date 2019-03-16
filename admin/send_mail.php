<?php 
	require_once('scripts/config.php');

	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['reason']) || empty($_POST['message'])){
		$msg = 'failed';
	}else{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$reason = $_POST['reason'];
		$message = $_POST['message'];        

		$msg = send_email($name, $email, $reason, $message);
	}

	echo json_encode($msg);
?>