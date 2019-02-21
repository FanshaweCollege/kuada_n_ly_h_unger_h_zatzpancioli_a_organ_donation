<?php

function sendStory($name,$email,$story){

    include('connect.php');

  $check_info_query = "SELECT COUNT(*) FROM tbl_story WHERE story_email = :email";
	$check_info_exist = $pdo->prepare($check_info_query );
	$check_info_exist->execute(
	array(
    ':email'=> $email
	)
    );
    
    if(($check_info_exist->fetchColumn()) > 0){
		$message = "Already sent your story!";
		return $message;
    }
    
  $create_story_query = 'INSERT INTO tbl_story(story_name,story_email,story_subject)';
	$create_story_query .= ' VALUES(:sname,:email,:story)';
	$create_story_set = $pdo->prepare($create_story_query);
	$create_story_set->execute(
		array(
			':sname'=>$name,
      ':email'=>$email,
      ':story'=>$story
		)
    );
    
    if($create_story_set->rowCount()){

      $message = 'Thank you for sending us your story!';
      return $message;
		
    }else{
      $message = "Story couldn't be sent!";
      return $message;
    }
      
  }
    
?>