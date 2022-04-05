<center>
<h1>Voulez-vous supprimer votre compte?</h1>
<form action="" method="post">
    <input class="btn btn-danger" type="submit" name="yes" value="Oui je veux supprimer">
    <input class="btn btn-primary" type="submit" name="no" value="Non">
</form>
</center>

<?php

$c_email = $_SESSION['customer_email'];
if(isset($_POST['yes'])){
    $delete_customer = "delete from customers where customer_email='$c_email'";
    $run_delete = mysqli_query($con,$delete_customer);
    if($run_delete){
        session_destroy();
        echo "<script>alert('Votre compte est supprimé')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
    }
    if(isset($_POST['no'])){
    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
    }
?>