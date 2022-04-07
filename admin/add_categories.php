<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');

if (isset($_POST['submit'])){
	$cat_id = stripslashes($_POST['cat_id']);
	$cat_id = mysqli_real_escape_string($conn, $cat_id); 

	$cat_title = stripslashes($_POST['cat_title']);
	$cat_title = mysqli_real_escape_string($conn, $cat_title);

	$cat_img = stripslashes($_POST['cat_img']);
	$cat_img = mysqli_real_escape_string($conn, $cat_img);

	
	
    $query = "INSERT into categories (cat_id,cat_title,cat_img) VALUES ('$cat_id', '$cat_title', '$cat_img')";
	echo $query ;
    $res = mysqli_query($conn,$query);

    if($res){
       echo 'categorie ajouté  avec succés';
             //<p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
			 
    }
	else {
		echo 'pblm';
	}
}

?>
<form class="box" action="" method="post">
    <h1 class="box-title">Add categorie</h1>
	<input type="number" class="box-input" name="cat_id" placeholder="cat_id" required >
    <input type="text" class="box-input" name="cat_title" placeholder="cat_title"  >
	<input type="file" class="box-input" name="cat_img" placeholder="cat_img"  >

    
    <input type="submit" name="submit" value="+ Add" class="box-button" />
</form>
</body>
</html>