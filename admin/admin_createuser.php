<?php
	require_once('./scripts/config.php');
    confirm_logged_in();
    
    if(isset($_POST['submit'])){
        $fname = trim($_POST['fname']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        //Validation??
        if(empty($username) || empty($email)){
            $message = 'Please fill the required fields';
        }else{
            $result = createUser($fname,$username,$email);
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
    <div id="createContainer" class="small-12 medium-12 large-12 columns align-center">
    <h2>Create User</h2>
    <?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif?>
    <form action="admin_createuser.php" method="POST">
        <label for="first-name">First Name:
            <input type="text" id="first-name" name="fname">
        </label>
        <label for="username">Username:
            <input type="text" id="user-name" name="username">
        </label>
        <label for="email">Email:
            <input type="email" id="email" name="email">
        </label>   
        <button type="submit" name="submit">Create User</button>
    </form>
    </div>
    </div>

    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>