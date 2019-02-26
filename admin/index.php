<?php
	require_once('scripts/config.php');
	confirm_logged_in();
	greeting();
	$message = greeting();

	if (isset($_SESSION['user_date']) && 
		(time() - $_SESSION['user_date'] > 600)) {
		session_destroy();   
		session_unset();  
	 }
	 
	$_SESSION['user_date'] = time();
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome <?php echo $_SESSION['user_name'] ?></title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>

	<div id="dashContainer">
		<h1 id="dashTitle">Admin Dashboard</h1>
		<h2 id="dashWelcome">Welcome <?php echo $_SESSION['user_name'] ?></h2>
		<div id="greeting">
			<?php if(!empty($message)):?>
			<p><?php echo $message;?></p>
			<?php endif?>
		</div>
		<nav>
			<ul>
				<li><a href="admin_createuser.php">Create User</a></li>
				<li><a href="admin_edituser.php">Edit User</a></li>
				<li><a href="admin_deleteuser.php">Delete User</a></li>
				<li><a href="scripts/caller.php?caller_id=logout">Sign Out</a></li>
			</ul>
		</nav>
	</div>

</body>
</html>