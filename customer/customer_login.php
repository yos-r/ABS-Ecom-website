<?php
session_start();
    require("requires/connection.php");
    require("requires/functions.php");
    require("requires/head.php"); //linking to stylesheet
    require("requires/main.php"); //header : customer's pov
?>
<div id="content" >
<div class="container" >
<div class="col-md-12">
<div class="box" >
    <center>
    <h1><span>L</span>ogin</h1>
    <p class="lead" >Je suis un(e) client(e) inscrit(e)</p>
    </center>
</div>

<form method="post" >
    <div class="form-group" >
        <label>Email</label>
        <input type="text" class="form-control" name="c_email" required >
    </div>
    <div class="form-group" >
        <label>Password</label>
        <input type="password" class="form-control" name="c_pass" required >
    </div>
    <div class="text-center" >
        <button name="login" value="Login" class="btn btn-primary" >
        Se connecter </button>
    </div>
</form>

<center>
    <a id="inscrire" href="../customer_register.php"><h4>s'inscrire ici</h4></a>
</center>
</div>

<?php
if(isset($_POST['login'])){
    $customer_email = $_POST['c_email'];
    $customer_pass = $_POST['c_pass'];
    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
    $run_customer = mysqli_query($con,$select_customer);
    //check how many items are in the cart to decide : see orders or checkout
    $get_ip = getRealUserIp();
    $check_customer = mysqli_num_rows($run_customer);
    $select_cart = "select * from cart where ip_add='$get_ip'";
    $run_cart = mysqli_query($con,$select_cart);
    $check_cart = mysqli_num_rows($run_cart);
    if($check_customer==0){
        echo "<script>alert('mot de passe ou e-mail incorrect')</script>";
        exit();
    }
    if($check_customer==1 AND $check_cart==0){
        $_SESSION['customer_email']=$customer_email;
        echo "<script>alert('Logged in!!')</script>";
        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
    }
    else {
        $_SESSION['customer_email']=$customer_email;
        echo "<script>alert('Logged in!!')</script>";
        echo "<script>window.open('../checkout.php','_self')</script>";
    } 

} ?>
</div>
</div>
</div>
<?php require("requires/footer.php") ?>
</body>
</html>