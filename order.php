<?php
include("includes/connection.php");
include("includes/head.php");
include("includes/functions.php");
?>
<?php
    if(isset($_GET['c_id'])){
        $customer_id = $_GET['c_id'];
    }
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
        $insert_order="insert into orders(invoice_no,date,due_amount,customer_id,order_status) values('$invoice_no',NOW(),'$due_amount','$customer_id','$status')";
        $run_insert= mysqli_query($con,$insert_order);
        echo "<script>alert('Votre commande est validée et sera traitée ! ')</script>";
        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
    
?>


<!--
    may get used for report? or order details? 
$i = 0;
$ip_add = getRealUserIp();
$get_cart = "select * from cart where ip_add='$ip_add'";
$run_cart = mysqli_query($con,$get_cart);
while($row_cart = mysqli_fetch_array($run_cart)){
    $pro_id = $row_cart['p_id'];
    $pro_qty = $row_cart['qty'];
    $pro_price = $row_cart['p_price'];
    $get_products = "select * from products where product_id='$pro_id'";
    $run_products = mysqli_query($con,$get_products);
    $row_products = mysqli_fetch_array($run_products);
    $product_title = $row_products['product_title'];
    $i++;

*/-->