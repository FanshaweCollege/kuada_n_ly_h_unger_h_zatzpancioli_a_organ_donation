<?php
    require_once('./scripts/config.php');
    confirm_logged_in();

    include('scripts/connect.php');

    if(isset($_GET['editStory'])){
        $_SESSION['storyID'] = $_GET['editStory'];
    }

    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $title = trim($_POST['title']);
        $story = trim($_POST['story']);
        //Validation??
        if(empty($name) || empty($title) || empty($story)){
            $message = 'Please fill the required fields';
        }else{
            $result = editStory($name,$title,$story,$_SESSION['storyID']);
            $message = $result;
        }
    }

    $query = 'SELECT * FROM tbl_story WHERE story_id = :id';

    $getStory = $pdo->prepare($query);
    $getStory->execute(
        array(
            ':id'=> $_SESSION['storyID']
        )
    );
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type='text/css' media="screen" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400|Oswald:200,400,600|Roboto" rel="stylesheet">
</head>
<body>
	<div class="adminContainer">
	<div id="editContainer">
	<h2>Edit Story</h2>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_editstory.php" method="post">
        <?php if($story = $getStory->fetch(PDO::FETCH_ASSOC)): ?>
		<label>Title:</label>
		<input type="text" name="title" value="<?php echo $story['story_title'];?>"><br><br>
		<label>Name:</label>
		<input type="text" name="name" value="<?php echo $story['story_author'];?>"><br><br>
		<label>Story:</label>
		<input type="text" name="story" value="<?php echo $story['story_text'];?>"><br><br><br><br>
		<button type="submit" name="submit">Edit Story</button>
        <?php endif; ?>
	</form>
	</div>
</div>
</body>

</html>