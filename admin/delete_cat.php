<?php

require('config.php');

    if(isset($_GET['cat_id']))
    {
        $cat_id = $_GET['cat_id'];
        $delete_pro = "delete from categories where cat_id='$cat_id'";
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