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
          $run_customer = mysqli_query($conn,$get_customer);
          $row_customer = mysqli_fetch_array($run_customer);
          $c_name = $row_customer['customer_name']; ?>

    <div class="col-md-3"><!-- the thingy that includes the sidebar Starts -->
      <?php include("includes/sidebar.php"); ?>
    </div>

    <div class="col-md-9" >
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
        ?>
      </div>
    </div>

</div>
</div>

<?php include("requires/footer.php");?>
<script src="js/jquery.min.js"> </script>
<?php }?>
