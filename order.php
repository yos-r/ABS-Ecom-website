<?php
include("includes/connection.php");
include("includes/head.php");
include("includes/functions.php");
$session_email = $_SESSION['customer_email'];
    $select_customer = "select * from customers where customer_email='$session_email'";
    $run_customer = mysqli_query($con,$select_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_id = $row_customer['customer_id'];
?>
<?php
    if(isset($_POST['commande'])){
        $adresse = $_POST['adress'];
    }
    /*
    if(isset($_GET['c_id'])){
        $customer_id = $_GET['c_id'];
    }*/
    $ip_add = getRealUserIp();
    $status = "pending";
    $invoice_no = mt_rand(); 
    $select_cart = "select * from cart where ip_add='$ip_add'";
    $run_cart = mysqli_query($con,$select_cart);
    $due_amount=0;
    while($row_cart = mysqli_fetch_array($run_cart)){
        $pro_id = $row_cart['p_id'];
        $pro_qty = $row_cart['qty'];
        $sub_total = $row_cart['p_price']*$pro_qty;
        $due_amount+=$sub_total;
        $insert_customer_order = "insert into customer_orders (invoice_no,customer_id,product_id,qty,subtotal,date) values ('$invoice_no','$customer_id','$pro_id','$pro_qty','$sub_total',NOW())";
        $run_customer_order = mysqli_query($con,$insert_customer_order);
    }
        $delete_cart = "delete from cart where ip_add='$ip_add'";
        $run_delete = mysqli_query($con,$delete_cart);
        $insert_order="insert into orders(invoice_no,date,due_amount,customer_id,order_status,address) values('$invoice_no',NOW(),'$due_amount','$customer_id','$status','$adresse')";
        $run_insert= mysqli_query($con,$insert_order);
        echo "<script>alert('Votre commande est validée et sera traitée !')</script>";
        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
    
?>
