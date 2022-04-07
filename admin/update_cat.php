<?php
//require('config.php');
$cat_id=$_GET['cat_id'];
$cat_title=$_GET['cat_title'];
$cat_img=$_GET['cat_img'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action=""  method="GET">
        <table >
            <tr>
                <td>cat_id</td>
                <td> <input type="text" value="<?php echo $cat_id ?>" name="cat_id" required> </td>
            </tr>
            <tr>
                <td>cat_title</td>
                <td> <input type="text" value="<?php echo $cat_title ?>" name="cat_title"> </td>

            </tr>
            <tr>
                <td>cat_img</td>
                <td> <input type="file" value="<?php echo $cat_img ?>" name="cat_img" > </td>
            </tr>
            <tr>
                <td> 
                    <input type="submit" value="update categorie" name="submit"> 
                </td>
            </tr>
  
        </table>




</body>


</html>
<?php
require('config.php');
if(isset($_GET['submit']))
{
$cat_id=$_GET['cat_id'];
$cat_title=$_GET['cat_title'];
$cat_img=$_GET['cat_img'];

$query="UPDATE `categories` SET `cat_id`='$cat_id',`cat_title`='$cat_title',`cat_img`='$cat_img' WHERE cat_id='$cat_id'"; 
$data=mysqli_query($conn,$query);
echo $query;
if($data)
{
    echo " updated sucessfuly! " ; 
}
else {
    echo "not updated ! " ; 
}
} 

?>
