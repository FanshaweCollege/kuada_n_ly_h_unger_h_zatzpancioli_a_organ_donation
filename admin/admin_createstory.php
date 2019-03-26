<?php
	require_once('./scripts/config.php');
    confirm_logged_in();
    
    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $title = trim($_POST['title']);
        $story = trim($_POST['story']);
        $img = $_FILES['img'];
        //Validation??
        if(empty($name) || empty($title) || empty($story) || empty($img)){
            $message = 'Please fill the required fields';
        }else{
            $result = addStory($name,$title,$story,$img);
            $message = $result;
        }
    }
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
    <div id="createContainer" class="small-12 medium-12 large-12 columns">
    <h2>Publish Story</h2>
    <?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif?>
    <form action="admin_createstory.php" enctype="multipart/form-data" method="POST">
        <label for="name">Name:
            <input type="text" id="name" name="name" placeholder="who is the story about?" required>
        </label>
        <label for="title">Title:
            <input type="text" id="title" name="title" placeholder="Name this story" required>
        </label>
        <label for="story">Story:
            <textarea id="story" name="story" placeholder="Tell us the story!" required rows="4" cols="50"></textarea>
        </label>
        <label for="img">Image:
            <input type="file" id="img" name="img">
        </label>
        <button type="submit" name="submit">Publish Story</button>
    </form>
    </div>
    </div>
        
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>