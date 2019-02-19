<?php 

function createUser($fname,$username,$email){
	include('connect.php');

	//check if user already exixts
	$check_user_query = "SELECT COUNT(*) FROM tbl_user WHERE user_name = :username";
	$check_user_exist = $pdo->prepare($check_user_query );
	$check_user_exist->execute(
	array(
		':username'=> $username
	)
	);

	//message if user already exists
	if(($check_user_exist->fetchColumn()) > 0){
		$message = "Username already taken!";
		return $message;
	}

	$pass = generatePass();

	$password = password_hash($pass, PASSWORD_DEFAULT);

	//insert new user info on database
	$create_user_query = 'INSERT INTO tbl_user(user_fname,user_name,user_pass,user_email)';
	$create_user_query .= ' VALUES(:fname,:username,:password,:email)';
	$create_user_set = $pdo->prepare($create_user_query);
	$create_user_set->execute(
		array(
			':fname'=>$fname,
			':username'=>$username,
			':password'=>$password,
			':email'=>$email
		)
	);

	//send email to new user with info
	if($create_user_set->rowCount()){

		$message = sendMail($username,$fname,$email,$pass);
		redirect_to('index.php');
		
    }else{
      $message = "Failed user creation!";
      return $message;
    }

}