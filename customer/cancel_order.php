<?php
require_once("requires/connection.php");
session_start();
if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('customer_login.php','_self')</script>";
}
else {
    if(isset($_GET['cancel_id'])){
        $cancel_id = $_GET['cancel_id'];
        $delete_pro = "delete from orders where invoice_no='$cancel_id'";
        $delete_pro2 = "delete from customer_orders where invoice_no='$cancel_id'";
        $run_delete = mysqli_query($con,$delete_pro);
        $run_delete2 = mysqli_query($con,$delete_pro2);
        if ($run_delete && $run_delete2){
            echo "<script>alert('Commande annulée')</script>";
            echo "<script>window.open('my_account.php?my_orders','_self')</script>";

        }
    }
}
?>
