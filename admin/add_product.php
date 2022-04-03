<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');

if (isset($_REQUEST['product_id'], $_REQUEST['product_desc'], $_REQUEST['cat_id'], $_REQUEST['product_img'], $_REQUEST['product_price'], $_REQUEST['product_title'], $_REQUEST['subcat_id'], $_REQUEST['manifacturer'])){

	$product_id = stripslashes($_REQUEST['product_id']);
	$product_id = mysqli_real_escape_string($conn, $product_id); 

	$product_desc = stripslashes($_REQUEST['product_desc']);
	$product_desc = mysqli_real_escape_string($conn, $product_desc);

	$cat_id = stripslashes($_REQUEST['cat_id']);
	$cat_id = mysqli_real_escape_string($conn, $cat_id);

	$product_img = stripslashes($_REQUEST['product_img']);
	$product_img = mysqli_real_escape_string($conn, $product_img);

	$product_price = stripslashes($_REQUEST['product_price']);
	$product_price = mysqli_real_escape_string($conn, $product_price);

	$product_title = stripslashes($_REQUEST['product_title']);
	$product_title = mysqli_real_escape_string($conn, $product_title);

	$subcat_id = stripslashes($_REQUEST['subcat_id']);
	$subcat_id = mysqli_real_escape_string($conn, $subcat_id);

	$manifacturer = stripslashes($_REQUEST['manifacturer']);
	$manifacturer = mysqli_real_escape_string($conn, $manifacturer);








	
    $query = "INSERT into 'admins' ('product_id','product_desc','cat_id','product_img','product_price','product_title','subcat_id','manifacturer')
				  VALUES ('$product_id', '$product_desc', '$cat_id', '$product_img','$product_price','$product_title','$subcat_id','$manifacturer')";
    $res = mysqli_query($conn,$query);

    if($res){
       echo "<div class='sucess'>
             <h3>L'utilisateur a été créée avec succés.</h3>
             <p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
			 </div>";
    }
}

?>
<form class="box" action="" method="post">
    <h1 class="box-title">Add user</h1>
	<input type="number" class="box-input" name="product_id" placeholder="product_id" required >
    <input type="textarea" class="box-input" name="product_desc" placeholder="product_desc"  >
	<input type="number" class="box-input" name="cat_id" placeholder="cat_id"  >
	<input type="file" class="box-input" name="product_img" placeholder="product_img"  >
	<input type="text" class="box-input" name="product_price" placeholder="product_price"  >
	<input type="text" class="box-input" name="product_title" placeholder="product_title"  >
	<input type="number" class="box-input" name="subcat_id" placeholder="subcat_id"  >
    <div class="input-group">
			<select class="box-input" name="manifacturer" id="manifacturer" >
				<option selected>marque 1 +id</option>
				<option >marque 2 +id</option>
				<option >marque n +id</option>
				//......
			</select>
	</div>
    <input type="submit" name="submit" value="+ Add" class="box-button" />
</form>
</body>
</html>