<?php
session_start();
if(!isset($_SESSION['customer_email'])){
  echo "<script>window.open('../checkout.php','_self')</script>"; //lemme speak to the manager
}
else {
  include("requires/connection.php");
  include("requires/head.php");
  include("requires/functions.php");
  include("requires/main.php");
?>

<div id="content" >
  <div class="container" >
      <?php
          $c_email = $_SESSION['customer_email'];
          $get_customer = "select * from customers where customer_email='$c_email'";
          $run_customer = mysqli_query($con,$get_customer);
          $row_customer = mysqli_fetch_array($run_customer);
          $c_name = $row_customer['customer_name']; ?>

    <div class="col-md-3"><!-- the thingy that includes the sidebar Starts -->
      <?php include("requires/sidebar.php"); ?>
    </div>

    <div class="col-md-9" > <!-- y inclure la fonctionnalité choisie -->
      <div class="box" >
        <?php
            if(isset($_GET['my_orders'])){
              include("my_orders.php");
            }
            if(isset($_GET['edit_account'])) {
                include("edit_account.php");
            }
            if(isset($_GET['change_pass'])){
                include("change_pass.php");
            }
            if(isset($_GET['delete_account'])){
                include("delete_account.php");
            }
            if(isset($_GET['commande'])){
              $commande=@$_GET['commande'];
              ?>
              <h3> Facture <?php echo $commande;?> </h3>
              <div class="table-responsive" >
                <table class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th>Produit</th>
                          <th>Qty</th>
                          <th>Sous-total</th>
                      </tr>
                  </thead>
                  <?php 
                      $get_order = "select * from customer_orders where invoice_no='$commande'";
                      $run_order = mysqli_query($con,$get_order);
                      while($row_order = mysqli_fetch_array($run_order)){
                          $pro_id = $row_order['product_id'];
                          $pro_qty = $row_order['qty'];
                          $pro_subtotal=$row_order['subtotal'];
                          ?>
                          <tr>
                          <th><?php echo $pro_id; ?></th>
                          <td><?php echo $pro_qty; ?></td>
                          <td><?php echo $pro_subtotal; ?></td>
                      </tr>
                      <?php } ?>
                  <tbody>
                  </table>
                </div>
          <?php } ?>
        
      </div>
    </div>

</div>
</div>

<?php include("requires/footer.php");?>
<?php }?>
