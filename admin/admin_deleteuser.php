<?php

	require_once('./scripts/config.php');
    confirm_logged_in();

    $id = $_SESSION['user_id'];

    if(isset($_POST['submit'])){
            $result = deleteUser($id);
            $message = $result;
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
    <div id="deleteContainer" class="small-12 medium-12 large-12 columns align-center">
	<h2>Are you sure you want to delete the current user?</h2>
    <?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif?>
    <form action="admin_deleteuser.php" method="POST">
    <button type="submit" name="submit">Delete</button>
    </form>
    </div>
    </div>
    
	<script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>