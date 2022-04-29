<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<<<<<<< HEAD
    <script src="sweetalert2@11.js"></script>
<link rel="stylesheet" href="style3.css">
<style>
           body{
           font-family: Consolas;
           }
     </style>
   
=======
>>>>>>> parent of 99dbf44 (fin)
</head>
<body>
<?php
require('config.php');
product_id=$_POST["product_id"];
product_title=$_POST["product_title"];
product_img=$_POST["product_img"];
product_price=$_POST["product_price"];
product_cat=$_POST["product_cat"];
product_subcat=$_POST["product_subcat"];  
product_desc=$_POST["product_desc"];
product_manif=$_POST["product_manif"]; 
?>
    <form action=""  method="GET">
        <table >
            <tr>
                <td>product_id</td>
                <td> <input type="text" value="<?php echo $product_id ?>" name="product_id" required> </td>
            </tr>
            <tr>
                <td>product_title</td>
                <td> <input type="text" value="<?php echo $product_title ?>" name="product_title" required> </td>

            </tr>
            <tr>
                <td>product_img</td>
                <td> <input type="file" value="<?php echo $product_img ?>" name="product_img" required></td>
            </tr>
            <tr>
                <td>product_price</td>
                <td> <input type="text" value="<?php echo $product_price ?>" name="product_price" required> </td>
            </tr>
            <tr>
                <td>product_cat</td>
                <td> <input type="number" value="<?php echo $product_cat ?>" name="product_cat" required> </td>
            </tr>
            <tr>
                <td>product_subcat</td>
                <td> <input type="number" value="<?php echo $product_subcat ?>" name="product_subcat" required> </td>
            </tr>
            <tr>
                <td>product_desc</td>
                <td> <input type="textarea" value="<?php echo $product_desc ?>" name="product_desc" required> </td>
            </tr>
            <tr>
                <td>product_manif</td>
                <td> 
			        <select class="box-input" name="product_manif" value="product_manif" >
				        <option selected>marque 1 +id</option>
				        <option >marque 2 +id</option>
				        <option >marque n +id</option>
				         //......
			        </select>
	            </td>
            </tr>
            <tr>
                <td> <input type="submit" value="update product" name="submit" > </td>
            </tr>
  
        </table>




</body>


</html>
<?php
if ($_GET["submit"])
{
$product_id=$_GET['product_id'];
$product_title=$_GET['product_title'];
$product_img=$_GET['product_img'];
$product_price=$_GET['product_price'];
$product_cat=$_GET['product_cat'];
$product_subcat=$_GET['product_subcat'];
$product_desc=$_GET['product_desc'];
$product_manif=$_GET['product_manif'];

$query="UPDATE products SET product_id=$product_id , product_title=$product_title , product_img=$product_img , product_price=$product_price , product_cat=$product_cat , product_subcat=$product_cat , product_desc=$product_desc , product_manif=$product_manif " ; 
$data=mysqli_query($conn,$query);
if($data)
{
    echo " updated sucessfuly! " ; 
}
else {
    echo "not updated ! " ; 
}
} 

?>























?>
