<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');
session_start();

if (isset($_POST['admin_name'])){
	$admin_name = stripslashes($_REQUEST['admin_name']);
	$admin_name = mysqli_real_escape_string($conn, $admin_name);
	$_SESSION['username'] = $admin_name;
	$admin_pass = stripslashes($_REQUEST['admin_pass']);
	$admin_pass = mysqli_real_escape_string($conn, $admin_pass);
    $query = "SELECT * FROM 'admins' WHERE admin_name='$admin_name' and admin_pass=$admin_pass";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	
	if (mysqli_num_rows($result) == 1) {
		header('location: admin/home.php');		  
	}
	else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="admin_name" placeholder="admin_name">
<input type="password" class="box-input" name="admin_pass" placeholder="admin_pass">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>