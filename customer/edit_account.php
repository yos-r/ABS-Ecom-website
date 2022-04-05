<?php
    $customer_session = $_SESSION['customer_email'];
    $get_customer = "select * from customers where customer_email='$customer_session'";
    $run_customer = mysqli_query($con,$get_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_id = $row_customer['customer_id'];
    $customer_name = $row_customer['customer_name'];
    $customer_email = $row_customer['customer_email'];
    $customer_address = $row_customer['customer_address'];
?>

<h1 align="center" > Éditer compte </h1>
<form action="" method="post" enctype="multipart/form-data" ><!--- form Starts -->
    <div class="form-group" >
        <label> Nom </label>
        <input type="text" name="c_name" class="form-control" required value="<?php echo $customer_name; ?>">
    </div>
    <div class="form-group" >
        <label> Email: </label>
        <input type="text" name="c_email" class="form-control" required value="<?php echo $customer_email; ?>">
    </div>
    <div class="form-group" >
        <label> Customer Address: </label>
        <input type="text" name="c_address" class="form-control" required value="<?php echo $customer_address; ?>">
    </div>
    <div class="text-center" >
        <button name="update" class="btn btn-primary" >
        Mettre à jour 
        </button>
    </div>
</form>

<?php if(isset($_POST['update'])){
$update_id = $customer_id;
$c_name = $_POST['c_name'];
$c_email = $_POST['c_email'];
$c_address = $_POST['c_address'];
$update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_address='$c_address' where customer_id='$update_id'";
$run_customer = mysqli_query($con,$update_customer);
if($run_customer){
    echo "<script>alert('Compte mis à jour')</script>";
    echo "<script>window.open('logout.php','_self')</script>";
}

}


?>