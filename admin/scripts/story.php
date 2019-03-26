<?php
    if (isset($_GET['getstories']) && $_GET['getstories'] == true) {
        include('connect.php');

        $query = 'SELECT * FROM tbl_story ORDER BY story_id DESC';

        $getStories = $pdo->prepare($query);
        $getStories->execute();

        $stories = array();

        while($result = $getStories->fetch(PDO::FETCH_ASSOC)) {
            $story = array();
            $story = $result;
            $stories[] = $story;
        }

        echo json_encode($stories);
    }

    if (isset($_GET['getstory'])) {
        include('connect.php');

        $query = 'SELECT * FROM tbl_story WHERE story_id = :id';

        $getStories = $pdo->prepare($query);
        $getStories->execute(
            array(
                ':id'=> $_GET['getstory']
            )
        );

        $stories = array();

        while($result = $getStories->fetch(PDO::FETCH_ASSOC)) {
            $story = array();
            $story = $result;
            $stories[] = $story;
        }

        echo json_encode($stories);
    }
?>