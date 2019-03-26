<?php

function deleteStory($id) {
    // mysqli_report(MYSQLI_REPORT_STRICT);
    try {
        //1. Build the DB connection
        include 'connect.php';

        //get story's image
        $query = 'SELECT * FROM tbl_story WHERE story_id = :id';

        $getStory = $pdo->prepare($query);
        $getStory->execute(
            array(
                ':id'=> $id
            )
        );

        if($story = $getStory->fetch(PDO::FETCH_ASSOC)){
            $filename = $story['story_img'];
            $path = '../images/' . $filename;
            unlink($path);
        }


        $delete_story_query = 'DELETE FROM tbl_story WHERE story_id = :id';
        $delete_story  = $pdo->prepare($delete_story_query);
        $delete_result = $delete_story->execute(
            array(
                ':id' => $id
            )
        );
        
        if (!$delete_result) {
            throw new Exception('Failed to delete the story!');
        }

        //5. If all of above works fine, redirect user 
        //redirect_to('./admin_storylist.php');
    } catch (Exception $e) {
        $error = $e->getMessage();
        return $error;
    }
}

?>