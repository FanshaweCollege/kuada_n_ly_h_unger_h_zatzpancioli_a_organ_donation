<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	require_once('scripts/config.php');
    
    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $story = trim($_POST['story']);
        if(empty($name) || empty($story)){
            $message = 'Please fill the required fields';
        }else{
            $result = sendStory($name,$email,$story);
            $message = $result;
        }
    }
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type='text/css' media="screen" href="../css/main.css">
    <script src="../js/main.js"></script>
</head>
<body>
    <?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif?>
    <h2>Share your story</h2>
    <form action="form_story.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your name"><br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Your email"><br><br>
        <label for="story">Story:</label>
        <textarea type="text" id="story" name="story" placeholder="Your story"></textarea><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
        
</body>
</html>