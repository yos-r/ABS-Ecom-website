<?php

session_start();
    include("includes/connection.php");
    include("includes/head.php");
    include("includes/functions.php");
    include("includes/main.php");
?>
<div id="content" >
<div class="container" >
<div class="col-md-12">
<div class="box" >
    <div class="box-header" >
        <center><h2> register </h2></center>
    </div>

    <form action="customer_register.php" method="post" enctype="multipart/form-data" ><!-- form Starts -->
        <div class="form-group" >
            <label>Customer Name</label>
            <input type="text" class="form-control" name="c_name" required>
        </div>
        <div class="form-group">
            <label> Customer Email</label>
            <input type="text" class="form-control" name="c_email" required>
        </div>
        <div class="form-group"><!-- form-group Starts -->
            <label> Customer Password </label>
            <input type="password" class="form-control" id="pass" name="c_pass" required>
        </div>
        <div class="text-center"><!-- text-center Starts -->
            <button type="submit" name="register" class="btn btn-primary">
                Register
            </button>
        </div>
    </form>
</div>
</div>
</div>
</div>

<?php

if(isset($_POST['register'])){
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_pass'];
    $c_ip = getRealUserIp();
    $get_email = "select * from customers where customer_email='$c_email'";
    $run_email = mysqli_query($con,$get_email);
    $check_email = mysqli_num_rows($run_email);
    if($check_email == 1){
        echo "<script>alert('This email is already registered, try another one')</script>";
    exit();
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip','$customer_confirm_code')";
    $run_customer = mysqli_query($con,$insert_customer);
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    $run_cart = mysqli_query($con,$sel_cart);
    $check_cart = mysqli_num_rows($run_cart);
    if($check_cart>0){
      $_SESSION['customer_email']=$c_email;
        echo "<script>alert('You have been Registered Successfully')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
      }
      else{
        $_SESSION['customer_email']=$c_email;
        echo "<script>alert('You have been Registered Successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
      }
    
    }
}
?>