<?php
    require_once('./scripts/config.php');
    confirm_logged_in();

    include('scripts/connect.php');

        $query = 'SELECT * FROM tbl_story ORDER BY story_id DESC';

        $getStories = $pdo->prepare($query);
        $getStories->execute();

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome <?php echo $_SESSION['user_name'] ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/foundation.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400|Oswald:200,400,600|Roboto" rel="stylesheet">
	<script src="../js/main.js"></script>
</head>
<body>
	<div class="adminContainer row">
    
        <div id="manageContainer" class="small-12 medium-12 large-12 columns text-center">
        <h2>Manage Stories</h2>
        <ul>
            <li id="create"><a href="admin_createstory.php">Create New Story</a></li>
        </ul>

        <ul class="storyList">
        <?php while($story = $getStories->fetch(PDO::FETCH_ASSOC)): ?>
            <li class="story">
                <h4><?php echo $story['story_title']; ?></h4>
                <img src="../images/<?php echo $story['story_img']; ?>" alt=""><br>
                <a href="admin_editstory.php?editStory=<?php echo $story['story_id']; ?>">Edit Story</a><br>
                <a href="admin_deletestory.php?deleteStory=<?php echo $story['story_id']; ?>">Delete Story</a>
            </li>
        <?php endwhile; ?>
        </ul>

        </div>
    </div>
    
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>