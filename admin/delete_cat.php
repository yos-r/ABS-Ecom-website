<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="sweetalert2@11.js"></script>

</head>
<body>
<?php

require('config.php');

    if(isset($_GET['cat_id']))
    {
        $cat_id = $_GET['cat_id'];
        $delete_pro = "delete from categories where cat_id='$cat_id'";
        $run_delete = mysqli_query($conn,$delete_pro);
        if($run_delete){
        echo "<script>"; 
		echo "Swal.fire('deleted succefuly from data base !', '', 'success')"; 
		echo "</script>";
        }
        else 
        {
        echo "<script>"; 
		echo "Swal.fire('Echec', '', 'failure')"; 
		echo "</script>"; 
        }
    }

?>
</body>