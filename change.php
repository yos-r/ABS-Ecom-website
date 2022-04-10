<!-- script php appelé par ajax pour permettre la modification de la quantité des produits dans
le panier -->
<?php
    session_start();
    include("includes/connection.php");
    include("includes/functions.php");
?>
<?php
    $ip_add = getRealUserIp();
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $qty = $_POST['quantity'];
        $change_qty = "update cart set qty='$qty' where p_id='$id' AND ip_add='$ip_add'";
        $run_qty = mysqli_query($con,$change_qty);
    }

?>