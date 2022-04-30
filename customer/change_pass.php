<h1 align="center">Changer MDP </h1>
<form action="" method="post">
    <div class="form-group">
        <label>Mdp actuel</label>
        <input type="text" name="old_pass" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Nouveau mdp</label>
        <input type="text" name="new_pass" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Resaisir</label>
        <input type="text" name="new_pass_again" class="form-control" required>
    </div>

    <div class="text-center">
        <button type="submit" name="submit" class="btn btn-primary">
            Changez le mot de passe</button>
    </div>
</form>

<?php
if(isset($_POST['submit'])){
    $c_email = $_SESSION['customer_email'];
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $new_pass_again = $_POST['new_pass_again'];
    $sel_old_pass = "select * from customers where customer_pass='$old_pass'";
    $run_old_pass = mysqli_query($con,$sel_old_pass);
    $check_old_pass = mysqli_num_rows($run_old_pass);
    if($check_old_pass==0){
        echo "<script>alert('Votre mdp actuel est invalide ')</script>";
        exit();
    }

    if($new_pass!=$new_pass_again){
    echo "<script>alert('Les mdp ne sont pas identiques')</script>";
    exit();
}

$update_pass = "update customers set customer_pass='$new_pass' where customer_email='$c_email'";
$run_pass = mysqli_query($con,$update_pass);
if($run_pass){
    echo "<script>alert('MDP changé avec succès')</script>";
    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
}
}
?>
