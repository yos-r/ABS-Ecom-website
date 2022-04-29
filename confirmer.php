<div class="box"><!-- box Starts -->
    <?php
    $session_email = $_SESSION['customer_email'];
    $select_customer = "select * from customers where customer_email='$session_email'";
    $run_customer = mysqli_query($con,$select_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_id = $row_customer['customer_id'];
    ?>

  <h1 class="text-center">Informations de livraison:</h1>
  <form method="post" action="order.php">
  <label> Adresse de livraison </label>
  <input type="text" name="adress" placeholder="Adresse" required> 
  <button type="submit" name="commande"> Commander </button>
    <!--<p class="lead text-center">
      <a href="order.php?c_id=<?php //echo $customer_id; ?>">Confirmer</a>
    </p>-->
  </form>
</div>