<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="" />
	<style>
body{
	background-image: url("WhatsApp Image 2022-04-28 at 15.49.36.jpeg") ; 
}
form{
	border:1px solid white;
	border-radius:5px;
	margin-top: 10%;
	margin-left:40%;
	width:300px; 

}
input{
	margin:10px; 
	padding:10px;
	margin-left:55px;
}
h1{
	color:white;
	margin-left:70px ; 
}
input[type="submit"]
{
	margin-left:35%;
}
	</style>

</head>
<body>
<?php
require('config.php');
session_start();

if (isset($_POST['admin_email']))
{
	$admin_email = stripslashes($_REQUEST['admin_email']);
	$admin_email = mysqli_real_escape_string($conn, $admin_email);
	echo "--------------".$admin_email ; 
	$_SESSION['username'] = $admin_email;
	$admin_pass = stripslashes($_REQUEST['admin_pass']);
	$admin_pass = mysqli_real_escape_string($conn, $admin_pass);
	echo "$admin_pass";
    $query = "SELECT * FROM admins WHERE admin_email='$admin_email' and admin_pass='$admin_pass'";
	echo "********************".$query;
	$result = mysqli_query($conn,$query) ;
	/*if (!$result)
	{
		echo " not ok ";
	}
	*/
	
	if ($result)  {
		header('location: admin/home.php');		  
	}
	else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="admin_email" placeholder="admin_mail ">
<br>
<input type="password" class="box-input" name="admin_pass" placeholder="admin_pass">
<br>
<input type="submit" value="Connexion " name="submit" class="box-button">
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message ; ?></p>
<?php } ?>
</form>
</body>
</html>