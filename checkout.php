<?php
session_start();
include("includes/connection.php");
include("includes/head.php");
include("includes/functions.php");
include("includes/main.php"); //header
?>
<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->
    <div class="col-md-12" ><!-- col-md-12 Starts -->
        <?php
        if(!isset($_SESSION['customer_email'])){
        include("customer/customer_login.php");
        }
        else{ include("confirmer.php"); }
        ?>
    </div><!-- col-md-12 Ends -->
</div><!-- container Ends -->
</div><!-- content Ends -->
<?php include("includes/footer.php");?>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
