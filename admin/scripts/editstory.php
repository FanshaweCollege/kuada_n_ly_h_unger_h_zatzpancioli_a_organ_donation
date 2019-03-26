<?php

function editStory($name,$title,$story,$id){
    try {
        //1. Build the DB connection
        include 'connect.php';

        $update_story_query = 'UPDATE tbl_story SET story_author = :author, story_title = :title, story_text = :story WHERE story_id = :id';

        $update_story  = $pdo->prepare($update_story_query);
        $update_result = $update_story->execute(
            array(
                ':title'     => $title,
                ':author'      => $name,
                ':story'   => $story,
                ':id' => $id
            )
        );

        if (!$update_result) {
            throw new Exception('Failed to update the story!');
        }

        //5. If all of above works fine, redirect user 
        redirect_to('./admin_storylist.php');
    } catch (Exception $e) {
        $error = $e->getMessage();
        return $error;
    }
}