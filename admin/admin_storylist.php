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
    <title>Manage Stories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type='text/css' media="screen" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400|Oswald:200,400,600|Roboto" rel="stylesheet">
</head>
<body>
	<div class="adminContainer">
    
	<div id="editContainer">
	<h2>Manage Stories</h2>
	<ul>
        <li><a href="admin_createstory.php">Create Story</a></li>
	</ul>

    <div class="storyList">
    <?php while($story = $getStories->fetch(PDO::FETCH_ASSOC)): ?>
        <div class="story">
            <h3><?php echo $story['story_title']; ?></h3>
            <img src="../images/<?php echo $story['story_img']; ?>" alt="">
            <a href="admin_editstory.php?editStory=<?php echo $story['story_id']; ?>">Edit Story</a>
            <a href="admin_deletestory.php?deleteStory=<?php echo $story['story_id']; ?>">delete Story</a>
        </div>
    <?php endwhile; ?>
    </div>

	</div>
</div>
</body>

</html>