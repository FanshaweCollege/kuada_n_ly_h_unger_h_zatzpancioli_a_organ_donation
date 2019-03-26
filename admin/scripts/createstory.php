<?php

function addStory($name,$title,$story,$img){
    try {
        //1. Build the DB connection
        include 'connect.php';

        //2. Validate File
        $file_type      = pathinfo($img['name'], PATHINFO_EXTENSION);
        $accepted_types = array('gif', 'jpg', 'jpe', 'jpeg', 'png');
        if (!in_array($file_type, $accepted_types)) {
            throw new Exception('Wrong file type!');
        }

        //3. move the file
        $target_path = '../images/' . $img['name'];
        if (!move_uploaded_file($img['tmp_name'], $target_path)) {
            throw new Exception('Failed to move uploaded file, check permission!');
        }

        // $th_copy = '../images/TH_' . $cover['name'];
        // if (!copy($target_path, $th_copy)) {
        //     throw new Exception('Failed to move copy file, check permission!');
        // }
        //4. Adding entries to database (both tbl_movies and tbl_mov_genre)
        $insert_story_query = 'INSERT INTO tbl_story(story_title, story_author, story_img, story_text)';
        $insert_story_query .= ' VALUES(:title, :author, :img, :text)';

        $insert_story  = $pdo->prepare($insert_story_query);
        $insert_result = $insert_story->execute(
            array(
                ':title'     => $title,
                ':author'      => $name,
                ':text'   => $story,
                ':img'     => $img['name']
            )
        );

        if (!$insert_result) {
            throw new Exception('Failed to insert the new story!');
        }

        //5. If all of above works fine, redirect user to index.php
        redirect_to('index.php');
    } catch (Exception $e) {
        $error = $e->getMessage();
        return $error;
    }
}