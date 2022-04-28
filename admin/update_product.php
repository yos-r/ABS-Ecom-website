<?php
//require('config.php');
$product_id=$_GET['product_id'];
$product_title=$_GET['product_title'];
$product_img=$_GET['product_img'];
$product_price=$_GET['product_price'];
$product_cat=$_GET['product_cat'];
//$product_subcat=$_GET['product_subcat'];  
$product_desc=$_GET['product_desc'];
$product_manif=$_GET['product_manif']; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="sweetalert2@11.js"></script>
<link rel="stylesheet" href="style3.css">
   
</head>
<body>

    <form action=""  method="GET">
        <table >
            <tr>
                <td>product_id</td>
                <td> <input type="text" value="<?php echo $product_id ?>" name="product_id" required> </td>
            </tr>
            <tr>
                <td>product_title</td>
                <td> <input type="text" value="<?php echo $product_title ?>" name="product_title"> </td>

            </tr>
            <tr>
                <td>product_img</td>
                <td> <input type="file" value="<?php echo $product_img ?>" name="product_img" > </td>
            </tr>
            <tr>
                <td>product_price</td>
                <td> <input type="text" value="<?php echo $product_price ?>" name="product_price" > </td>
            </tr>
            <tr>
                <td>product_cat</td>
                <td> <input type="number" value="<?php echo $product_cat ?>" name="product_cat"> </td>
            </tr>
            <tr>
                <td>product_desc</td>
                <td> <input type="textarea" value="<?php echo $product_desc ?>" name="product_desc"> </td>
            </tr>
            <tr>
                <td>product_manif</td>
                <td> 
                    <input type="textarea" value="<?php echo $product_manif ?>" name="product_manif">   
	            </td>
            </tr>
            <tr>
                <td> 
                    <input type="submit" value="update product" name="submit"> 
                </td>
            </tr>
  
        </table>




</body>


</html>
<?php
require('config.php');
if(isset($_GET['submit']))
{
$product_id=$_GET['product_id'];
$product_title=$_GET['product_title'];
$product_img=$_GET['product_img'];
$product_price=$_GET['product_price'];
$product_cat=$_GET['product_cat'];
$product_desc=$_GET['product_desc'];
$product_manif=$_GET['product_manif'];

$query="UPDATE `products` SET `cat_id`='$product_cat',`manufacturer_id`='$product_manif',`product_title`='$product_title',`product_price`='$product_price',`product_url`='[value-7]',`product_img`='$product_img',`product_desc`='$product_desc' 
WHERE product_id='$product_id'"; 
$data=mysqli_query($conn,$query);
if($data)
{
echo "<script>"; 
echo "Swal.fire('updated sucessfuly', '', 'success')"; 
echo "</script>"; 
}
else {
echo "<script>"; 
echo "Swal.fire('not updated', '', 'failure')"; 
echo "</script>"; 
     
}
} 

?>
