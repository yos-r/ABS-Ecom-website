<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html>
<<<<<<< HEAD
<head>
<style>
body {
  margin: 0;
  background-image: url("WhatsApp Image 2022-04-28 at 15.49.36.jpeg") ; 
}
=======
	<head>
	<link rel="stylesheet" href="../style.css" />
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre espace admin.</p>
		<a href="view_products.php">View product </a> 
		<a href="add_produit.php">Add product</a> |
		<a href="#">Update product </a> 
		<a href="delete_product.php"> Delete product </a> 
>>>>>>> parent of 99dbf44 (fin)

		<a href="logout.php">Déconnexion</a>
		</div>
	</body>
</html>