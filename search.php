<?php
    session_start();
    require_once("includes/connection.php");
    require_once("includes/head.php");
    require_once("includes/main.php");
    require_once("includes/functions.php");
?>
<div class="container">
<ul class="list filter_data">
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
                <li class="list-item">
                <div class="list-content">
                <a href="'.$row['product_url'].'">
                  <img src="images/products/'. $row['product_img'] .'" alt="image of '. $row['product_title'] .'" />
                </a>
                  <a align="center" href="'.$row['product_url'].'">'. $row['product_title'] .'</a>
                  <h4 style="text-align:center;" class="text-danger" >'. $row['product_price'] .' DT</h4>
            </div>
  			    </li>
                ';
            }
        }
        else
        {
            $output = '<br><h3>Pas de produits trouvés</h3>';
        }
        echo $output;
    }?>
</ul>
</div>
<br>
<br>
<br>
<br><br>
<br>
<br>
<?php require_once("includes/footer.php"); ?>

</body>
</html>