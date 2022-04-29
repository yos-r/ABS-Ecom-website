<div class="box"><!-- box Starts -->
    <?php
    $session_email = $_SESSION['customer_email'];
    $select_customer = "select * from customers where customer_email='$session_email'";
    $run_customer = mysqli_query($con,$select_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_id = $row_customer['customer_id'];
    ?>

<div class="box-header" >
        <center><h2> Informations de livraison </h2></center>
    </div>  <form method="post" action="order.php">
  <div class="form-group"><!-- form-group Starts -->
      <label> Adresse de livraison </label>
      <input type="text" name="adress" value="<?php echo $row_customer['customer_address'] ?>"  class="form-control" required>
  </div>
  <div class="form-group"><!-- form-group Starts -->
      <label> Numéro de téléphone </label>
      <input type="text" name="telephone"  class="form-control" required>
  </div>
  <div class="text-center"><!-- text-center Starts -->
            <button type="submit" name="commande" class="btn btn-primary">
                Passer commande
            </button>
        </div>
  </form>
</div>