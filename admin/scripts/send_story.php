<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function sendStory($name,$email,$story){

    include('connect.php');

    $check_name_query = "SELECT COUNT(*) FROM tbl_story WHERE story_name = :sname";
	$check_name_exist = $pdo->prepare($check_name_query );
	$check_name_exist->execute(
	array(
		':sname'=> $name
	)
    );
    
    if(($check_name_exist->fetchColumn()) > 0){
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
		redirect_to('form_story.php');
		
    }else{
      $message = "Story couldn't be sent!";
      return $message;
    }


    /*$to = 'admin@lifegoeson.com';
    $subject = "'.$name.' shared a story";
    $message = 
    'Name: '.$name.'<br>
    Email: '.$email.'<br>
    Story: '.$story.';'

    mail($to,$subject,$message);*/
      
  }
    
?>