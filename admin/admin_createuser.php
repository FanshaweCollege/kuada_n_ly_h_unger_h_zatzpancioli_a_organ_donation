<?php
	require_once('scripts/config.php');
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
    <title>Create User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type='text/css' media="screen" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400|Oswald:200,400,600|Roboto" rel="stylesheet">
    <script src="../js/main.js"></script>
</head>
<body>

    <h2>Create User</h2>
    <?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif?>
    <form action="admin_createuser.php" method="POST">
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="fname"><br><br>
        <label for="username">Username:</label>
        <input type="text" id="user-name" name="username"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <button type="submit" name="submit">Create User</button>
    </form>
        
</body>
</html>