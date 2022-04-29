
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>


</html>
<?php
require('config.php');

$ord_id=$_GET['ord_id'];
$new='livrée';
$query="UPDATE `orders` SET `order_status`='$new' WHERE invoice_no='$ord_id' "; 
$data=mysqli_query($conn,$query);
if($data)
{
    echo " updated sucessfuly! " ; 
}
else {
    echo "not updated ! " ; 
}
 

?>
