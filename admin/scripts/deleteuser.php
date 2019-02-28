<?php

function deleteUser($id) {
    include('connect.php');

    $delete_user_query = 'DELETE FROM tbl_user WHERE user_id = :id';
    $delete_user_set = $pdo->prepare($delete_user_query);
	$delete_user_set->execute(
	array(
        ':id'=> $id
	)
    );
    
    if($delete_user_set) {

        redirect_to("admin_login.php");

    }else{

        $message = "User could not be deleted!";
        return $message;

    }
}

?>