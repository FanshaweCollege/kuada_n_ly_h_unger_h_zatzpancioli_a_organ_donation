<?php

	require_once('./scripts/config.php');
    
    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $reason = trim($_POST['reason']);
        $subject = trim($_POST['subject']);
        if(empty($name) || empty($subject)){
            $message = 'Please fill the required fields';
        }else{
            $result = sendStory($name,$email,$reason,$subject);
            $message = $result;
        }
    }
    
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Share Your Story</title>
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
        <label for="reason">Reason for contact:</label>
        <select name="reason">
            <option value="Share your story">Share my story</option>
            <option value="Questions about donation">Questions about donation</option>
            <option value="Questions about us">Questions about Thanks2One</option>
        </select><br><br>
        <label for="story">Subject:</label>
        <textarea type="text" id="subject" name="subject" placeholder="Your text here..."></textarea><br><br><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
        
</body>
</html>