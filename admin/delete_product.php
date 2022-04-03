<?php

require('config.php');

    if(isset($_GET['product_id']))
    {
        $delete_id = $_GET['product_id'];
        $delete_pro = "delete from products where product_id='$delete_id'";
        $run_delete = mysqli_query($conn,$delete_pro);
        if($run_delete){
            echo "deleted succefuly from data base ! ";
        }
        else 
        {
            echo "error : product not deleted "; 
        }
    }

?>