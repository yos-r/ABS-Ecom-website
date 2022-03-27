<?php
session_start();
if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('../checkout.php','_self')</script>";
} 
else {
    include("includes/connection.php");
    include("includes/head.php");
    include("functions/functions.php");
    include("includes/main.php");

if(isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];
}
?>
<div id="content" >
<div class="container" >

    <div class="col-md-3"> <!-- sidebar thingy, account functionalities -->
        <?php include("includes/sidebar.php"); ?>
    </div>

    <div class="col-md-9"><!-- col-md-9 Starts -->
        <div class="box"><!-- box Starts -->
            <h1 align="center"> Confirmation de paiement </h1>
            <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"><!--- form Starts -->
                <div class="form-group"><!-- form-group Starts -->
                    <label>Invoice No:</label>
                    <input type="text" class="form-control" name="invoice_no" required>
                </div><!-- form-group Ends -->
                <div class="form-group"><!-- form-group Starts -->
                    <label>Amount Sent:</label>
                    <input type="text" class="form-control" name="amount_sent" required>
                </div><!-- form-group Ends -->
                <div class="text-center"><!-- text-center Starts -->
                    <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
                    Confirmer paiement </button>
                </div>
                
        <?php
        if(isset($_POST['confirm_payment'])){
        $update_id = $_GET['update_id'];
        $invoice_no = $_POST['invoice_no'];
        $amount = $_POST['amount_sent'];
        //$payment_mode = $_POST['payment_mode'];
        $payment_date = $_POST['date'];
        $complete = "Complete";
        $insert_payment = "insert into payments (invoice_no,amount,payment_mode,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";
        $run_payment = mysqli_query($con,$insert_payment);
        $update_pending_order = "update orders set order_status='$complete' where order_id='$update_id'";
        $run_pending_order = mysqli_query($con,$update_pending_order);
        if($run_pending_order){
            echo "<script>alert('paiement reçu. la commande sera livrée d'ici demain ')</script>";
            echo "<script>window.open('my_account.php?my_orders','_self')</script>";
        }
        }
        ?>
        </div> <!-- box ends-->
    </div> <!-- col-d-9 ends-->


</div><!-- container Ends -->
</div><!-- content Ends -->
    
<?php include("includes/footer.php"); ?>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>
