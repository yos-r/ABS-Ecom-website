<?php

session_start();
include("includes/connection.php");
include("includes/head.php");
include("includes/functions.php");
include("includes/main.php");

?>

<div id="content" >
<div class="container" >
    <div class="col-md-12" >
              <?php
              if(!isset($_SESSION['customer_email'])){
                include("customer/customer_login.php");
              }
              else{ include("order.php"); }
              ?>
    </div>


</div>
</div>


<?php include("includes/footer.php");?>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>