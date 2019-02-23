<?php

	require_once('scripts/config.php');
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
    <title>Create User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type='text/css' media="screen" href="../css/main.css">
    <script src="../js/main.js"></script>
</head>
<body>
	<h2>Are you sure you want to delete current user?</h2>
    <?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif?>
    <form action="admin_deleteuser.php" method="POST">
    <button type="submit" name="submit">Delete</button>
    </form>
</body>

</html>