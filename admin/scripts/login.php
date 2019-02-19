<?php 
function login($username, $password, $ip){
	require_once('connect.php');

	//Check if user exists
	
	$check_exist_query = 'SELECT COUNT(*) FROM tbl_user WHERE user_name=:user_name';

	$user_set = $pdo->prepare($check_exist_query);

	$user_set->execute(
		array(
			':user_name'=>$username
		)
	);

	if($user_set->fetchColumn()>0){
		//When user exists, then check if user info is validated
		$login_attempts_query = 'SELECT user_attempts FROM tbl_user WHERE user_name = "'.$username.'"';
        $login_attempts_query = $pdo->query($login_attempts_query);
        $login_fail = $login_attempts_query->fetch(PDO::FETCH_ASSOC);

        if($login_fail['user_attempts'] === 3){
            $message = 'User blocked!';
            return $message;
		}else{
		$get_user_query = 'SELECT * FROM tbl_user WHERE user_name = :username AND user_pass = :password';
		$get_user_set = $pdo->prepare($get_user_query);

		$get_user_set->execute(
			array(
				':username'=>$username,
				':password'=>$password
			)
		);

		while($found_user = $get_user_set->fetch(PDO::FETCH_ASSOC)){
			$id = $found_user['user_id'];
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name'] = $found_user['user_fname'];
			$_SESSION['user_date'] = $found_user['user_date'];

			//TODO: finish the following lines of code
			// - $update_ip_query should be the SQL QUERY that
			// update the tbl_user and set the user_ip = $ip
			// - Keep in mind we need to do prepare in here
			// and binding the actual $ip variable within execute method

			$update_ip_query = 'UPDATE tbl_user SET user_ip = :ip WHERE user_id = :id';
			$update_ip_set = $pdo->prepare($update_ip_query);
			$update_ip_set->execute(
				array(
					':ip'=>$ip,
					':id'=>$id
				)
			);

			date_default_timezone_set('America/Toronto');
			$update_date_query = 'UPDATE tbl_user SET user_date = NOW() WHERE user_id = :id';
			$update_date_set = $pdo->prepare($update_date_query);
			$update_date_set->execute(
				array(
					':id' => $_SESSION['user_id']
				)
			);
		}


		if(empty($id)){
            // count the failed login attempts and block the account if it fails 3 times
            $message = ($login_fail['user_attempts'] < 2) ? 'Login Failed!' : 'Account blocked, too many wrong attempts!';
            $pdo->exec('UPDATE tbl_user SET user_attempts = user_attempts + 1 WHERE user_name = "'.$username.'"');

            return $message;
        
        }else{

            // reset attempts if it fails less than 3 times
            $pdo->exec('UPDATE tbl_user SET user_attempts = 0 WHERE user_id = "'.$id.'"');

        }

        redirect_to('index.php');

	}
	
	}else{
		$message = 'User does not exists';
		return $message;
	}
}
?>