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
<head>
<style>
body {
  margin: 0;
  background-image: url("WhatsApp Image 2022-04-28 at 15.49.36.jpeg") ; 
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color:#344E5C;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style> 
</head>
<body>


<ul>
  <li><a class="active" href="hi.php"target="right_side">Home</a></li>
  <li><a href="view_products.php"target="right_side">Products</a></li>
  <li><a href="view_categories.php"target="right_side">Categories</a></li>
  <li><a href="view_orders.php"target="right_side">Orders</a></li>
  <li><a href="view_clients.php"target="right_side">Clients</a></li>
  <li><a href="logout.php">Deconnexion</a></li>
</ul>

<iframe name ="right_side" style="margin-left:25%;padding:1px 16px;height:1000px; width: 72%;">
 
</iframe>

</body>
</html>