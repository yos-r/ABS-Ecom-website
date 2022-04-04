<?php

session_start();
    require_once("includes/connection.php");
    require_once("includes/head.php");
    require_once("includes/functions.php");
    require_once("includes/main.php");
?>2j
<div id="content" >
<div class="container" >
<div class="col-md-12">
<div class="box" >
    <div class="box-header" >
        <center><h2> register </h2></center>
    </div>

    <form action="customer_register.php" method="post" enctype="multipart/form-data" ><!-- form Starts -->
        <div class="form-group" >
            <label> Nom</label>
            <input type="text" class="form-control" name="c_name" required>
        </div>
        <div class="form-group">
            <label>  Email</label>
            <input type="text" class="form-control" name="c_email" required>
        </div>
        <div class="form-group">
            <label>  Adresse de livraison</label>
            <input type="text" class="form-control" name="c_address" required>
        </div>
        <div class="form-group"><!-- form-group Starts -->
            <label> Mot de passe </label>
            <input type="password" class="form-control" id="pass" name="c_pass" required>
        </div>
        <div class="text-center"><!-- text-center Starts -->
            <button type="submit" name="register" class="btn btn-primary">
                S'inscrire
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
    $c_address=$_POST['c_address'];
    $c_ip = getRealUserIp();
    $get_email = "select * from customers where customer_email='$c_email'";
    $run_email = mysqli_query($con,$get_email);
    $check_email = mysqli_num_rows($run_email);
    if($check_email == 1){
        echo "<script>alert('cet email existe déja')</script>";
    exit();
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_address) values ('$c_name','$c_email','$c_pass','$c_address')";
    $run_customer = mysqli_query($con,$insert_customer);
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    $run_cart = mysqli_query($con,$sel_cart);
    $check_cart = mysqli_num_rows($run_cart);
    if($check_cart>0){
      $_SESSION['customer_email']=$c_email;
        echo "<script>alert('Vous êtes inscrit(e)!')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
      }
      else{
        $_SESSION['customer_email']=$c_email;
        echo "<script>alert('Vous êtes inscrit(e)!!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
      }
    
    }
}
?>