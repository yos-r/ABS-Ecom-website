<?php
include("includes/connection.php");
include("includes/head.php");
include("includes/functions.php");
?>
<?php
    $ip_add = getRealUserIp();
    $status = "pending";
    $invoice_no = mt_rand(); 
    $select_cart = "select * from cart where ip_add='$ip_add'";
    $run_cart = mysqli_query($con,$select_cart);
    while($row_cart = mysqli_fetch_array($run_cart)){
        $pro_id = $row_cart['p_id'];
        $pro_qty = $row_cart['qty'];
        $sub_total = $row_cart['p_price']*$pro_qty;
        $insert_customer_order = "insert into orders (customer_id,due_amount,invoice_no,qty,order_date,order_status) values ('$customer_id','$sub_total','$invoice_no','$pro_qty',NOW(),'$status')";
        $run_customer_order = mysqli_query($con,$insert_customer_order);
        $delete_cart = "delete from cart where ip_add='$ip_add'";
        $run_delete = mysqli_query($con,$delete_cart);
        echo "<script>alert('Your order has been submitted,Thanks ')</script>";
        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
    }
?>
