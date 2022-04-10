<?php
    session_start();
    require_once("includes/connection.php");
    require_once("includes/main.php");
    require_once("includes/head.php");
    require_once("includes/functions.php");

?>
    <?php
    $get_manufacturers = "select * from manufacturers";
    $run_manufacturers = mysqli_query($con,$get_manufacturers);
    $row_manufacturers = mysqli_fetch_array($run_manufacturers);
        while($row_manufacturers){
            $manufacturer_title = $row_manufacturers['manufacturer_title'];
            // à compléter

        }
    ?>



<?php require_once("includes/footer.php"); ?>
</body>
</html>