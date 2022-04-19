<?php
    session_start();
    require_once("includes/connection.php");
    require_once("includes/head.php");
    require_once("includes/main.php");
    require_once("includes/functions.php");
?>
<div class="container">
<div class="col-md-9">
<?php 
    if(isset($_GET["search"]))
    {
        $query = "
            SELECT * FROM products WHERE product_title like '%".$_GET["searchterm"]."%'";
        $result=mysqli_query($con,$query);
        $total_row = mysqli_num_rows($result);
        $output = '';
        if($total_row)
        {
            while($row = mysqli_fetch_array($result))
            {
                $output .= '
                <div class="col-sm-4 col-lg-3 col-md-3">
                    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; ">
                        <img src="images/products/'. $row['product_img'] .'" style="width:200px" alt="" class="img-responsive" >
                        <p align="center"><strong><a href="#">'. $row['product_title'] .'</a></strong></p>
                        <h4 style="text-align:center;" class="text-danger" >'. $row['product_price'] .'DT </h4>
                    </div>
                </div>
                ';
            }
        }
        else
        {
            $output = '<h3>Pas de produits trouvés</h3>';
        }
        echo $output;
    }?>

</div>
</div>

<?php require_once("includes/footer.php"); ?>
</body>
</html>