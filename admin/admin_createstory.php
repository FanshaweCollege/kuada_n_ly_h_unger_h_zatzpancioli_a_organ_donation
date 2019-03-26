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
    <title>Publish Story</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type='text/css' media="screen" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400|Oswald:200,400,600|Roboto" rel="stylesheet">
</head>
<body>
    <div class="adminContainer">
    <div id="createContainer">
    <h2>Publish Story</h2>
    <?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif?>
    <form action="admin_createstory.php" enctype="multipart/form-data" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="who is the story about?" required><br><br>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Name this story" required><br><br>
        <label for="story">Story:</label>
        <textarea id="story" name="story" placeholder="Tell us the story!"required rows="4" cols="50"></textarea><br><br>
        <label for="img">Image:</label>
        <input type="file" id="img" name="img"><br><br>
        <button type="submit" name="submit">Publish Story</button>
    </form>
    </div>
    </div>
</body>
</html>