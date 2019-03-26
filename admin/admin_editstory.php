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
	<title>Welcome <?php echo $_SESSION['user_name'] ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/foundation.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400|Oswald:200,400,600|Roboto" rel="stylesheet">
	<script src="../js/main.js"></script>
</head>
<body>
	<div class="adminContainer row">
	<div id="editContainer" class="small12 medium-12 large-12 columns align-center">
	<h2>Edit Story</h2>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_editstory.php" method="post">
        <?php if($story = $getStory->fetch(PDO::FETCH_ASSOC)): ?>
		<label>Title:
            <input type="text" name="title" value="<?php echo $story['story_title'];?>">
        </label>
		<label>Name:
            <input type="text" name="name" value="<?php echo $story['story_author'];?>">
        </label>
		<label>Story:
            <input type="text" name="story" value="<?php echo $story['story_text'];?>">
        </label>
		<button type="submit" name="submit">Edit Story</button>
        <?php endif; ?>
	</form>
	</div>
</div>
        
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>