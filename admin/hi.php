<?php
  require"config.php";
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>

	h1{
		margin-left:30%;
		color:white;
	}
	p{
		margin-left:40%;
		color:white;
	}
	</style>
</head>
<body>
<h1>Bienvenue <?php
echo $_SESSION['username']; ?>!</h1>
 <p>C'est votre espace admin.</p>
</body>
</html>
