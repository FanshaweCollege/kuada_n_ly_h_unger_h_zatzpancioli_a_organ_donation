<?php
    require_once('./scripts/config.php');
    confirm_logged_in();

    $id = $_SESSION['user_id'];

	if(isset($_POST['submit'])){
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
        $email = trim($_POST['email']);
        
		$result = editUser($fname, $username, $password, $email, $id);
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
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400|Oswald:200,400,600|Roboto" rel="stylesheet">
    <script src="../js/main.js"></script>
</head>
<body>
	<div class="adminContainer">
	<div id="editContainer">
	<h2>Edit User</h2>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_edituser.php" method="post">
		<label>First Name:</label>
		<input type="text" name="fname" value="<?php echo $_SESSION['user_fname'];?>"><br><br>
		<label>Username:</label>
		<input type="text" name="username" value="<?php echo $_SESSION['user_name'];?>"><br><br>
		<label>Password:</label>
		<input type="text" name="password" value="<?php echo $_SESSION['user_pass'];?>"><br><br>
		<label>Email:</label>
		<input type="email" name="email" value="<?php echo $_SESSION['user_email'];?>"><br><br><br><br>
		<button type="submit" name="submit">Edit Account</button>
	</form>
	</div>
</div>
</body>

</html>