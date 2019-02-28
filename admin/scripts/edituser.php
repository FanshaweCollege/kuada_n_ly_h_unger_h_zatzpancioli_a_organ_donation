<?php

function editUser($fname, $username, $password, $email, $id) {
    include('connect.php');
    
    $update_user_query = 'UPDATE tbl_user SET user_fname = :fname, user_name = :username, user_pass = :password, user_email = :email WHERE user_id = :id';
    $update_user_set = $pdo->prepare($update_user_query);
	$update_user_set->execute(
	array(
        ':fname'=> $fname,
        ':username'=> $username,
        ':password'=> $password,
        ':email'=> $email,
        ':id'=> $id
	)
	);

    if($update_user_set) {
        redirect_to("scripts/caller.php?caller_id=logout");
    }else{
        $message = "Could not be completed";
        return $message;
    }
}


?>