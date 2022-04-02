<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');

if (isset($_REQUEST['admin_id'], $_REQUEST['admin_name'], $_REQUEST['admin_email'], $_REQUEST['admin_pass'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$admin_id = stripslashes($_REQUEST['admin_id']);
	$admin_id = mysqli_real_escape_string($conn, $admin_id); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$admin_name = stripslashes($_REQUEST['admin_name']);
	$admin_name = mysqli_real_escape_string($conn, $admin_name);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$admin_email = stripslashes($_REQUEST['admin_email']);
	$admin_email = mysqli_real_escape_string($conn, $admin_email);

	$admin_pass = stripslashes($_REQUEST['admin_pass']);
	$admin_pass = mysqli_real_escape_string($conn, $admin_pass);
	
	$query = "INSERT into 'admins' (admin_id ,admin_name, admin_email,admin_pass)
				VALUES ('$admin_id ', '$admin_name', '$admin_email', '$admin_pass')";
	$res = mysqli_query($conn, $query);

    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
    }
}else{
?>
<form class="box" action="" method="post">
    <h1 class="box-title">S'inscrire</h1>
	<input type="number" class="box-input" name="admin_id" placeholder="admin_id" required >
    <input type="text" class="box-input" name="admin_name" placeholder="admin_name" required >
    <input type="text" class="box-input" name="admin_email" placeholder="admin_email" required >
	<input type="text" class="box-input" name="admin_pass" placeholder="admin_pass" required >
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>