<?php  

    function redirect_to($location){
        if($location != NULL){
            header('Location: ' .$location);
            exit;
        }
    }

	function generatePass($length = 8) {

		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&?';
		$charactersLength = strlen($characters);
		$randomPassword = '';
		for ($i = 0; $i < $length; $i++) {
			$randomPassword .= $characters[rand(0, $charactersLength - 1)];
		}
    return $randomPassword;
    
  }

  function sendMail($username,$fname,$email,$pass){

      $to = $email;
		  $subject = "Welcome '.$fname.'! Your account is ready!";
		  $message = 'Follow your account and login information:<br>
      Username: '.$username.'<br>
      Password: '.$pass.'<br>
      To log in, please go to www.ZatzPancioli_A_3014_r1/admin/admin_login.php';

      mail($to,$subject,$message);

    }

?>