<?php
    session_start();
    require_once("includes/connection.php");
    require_once("includes/head.php");
    require_once("includes/main.php");
    
    require_once("includes/functions.php");
?>
<?php 
    $searchterm=@$_GET['searchterm']; // search.php?searchterm=xyz : get the xyz    
    $get_products = "select * from products where product_title like '%$searchterm%' ";
    $run_products = mysqli_query($con,$get_products);
    $check_products = mysqli_num_rows($run_products);
    if($check_products == 0){ 
        echo "<script> window.open('index.php','_self') </script>";
    }
    else{
        //fetch the products if num>=1
        while($row_products=mysqli_fetch_array($run_products)){
            //display of product
            $product_title = $row_products['product_title'];
            $product_img = $row_products['product_img'];
            $product_price = $row_products['product_price'];
            $product_url=$row_products['product_url'];
            /*
            //déterminer le nom de catégorie du produit            
            $product_cat_id=$row_products['cat_id'];
            $get_product_cat = "select * from categories where cat_id='$product_cat_id'";
            $run_product_cat=mysqli_query($con,$get_product_cat);
            $row_product_cat=mysqli_fetch_array($run_product_cat);
            $product_cat=$row_product_cat['cat_title'];
            //déterminer le nom et l'image du fabricant du produit
            $product_manufacturer_id = $row_products['manufacturer_id'];
            $get_product_manufacturer = "select * from categories where manufacturer_id='$product_manufacturer_id'";
            $run_product_manufacturer=mysqli_query($con,$get_product_manufacturer);
            $row_product_manufacturer=mysqli_fetch_array($run_product_manufacturer);
            $product_manufacturer_title=$row_product_manufacturer['manufacturer_title'];
            $product_manufacturer_img=$row_product_manufacturer['manufacturer_img'];
            */

            //database fetching for product elements ends here
            ?>
            <!-- html de l'affichage produit -->
            <div class="product">
                <!-- image du produit avec lien qui redirige vers localhost/group-project/details.php?prod_id= -->
                <a href="<?php echo $product_url?>" > <!-- avec rewrite engine : on accède à details.php?pro_id=$pro_url-->
                    <img src="images/products/<?php echo $product_img?> " style="width:50px;"  >
                </a>    
                <div class="text">
                    <!-- image de la marque -->
                        <marquee>
                            <a href="marques.php?man_id=<?php $product_manufacturer_id?>" >
                                <img src="images/manufacturers/<?php echo$product_manufacturer_img?>"  >
                            </a>
                        </marquee>
                    <!-- titre du produit-->
                        <h3><a href='<?php echo $product_url ?>' > <?php $product_title ?> </a></h3>
                    <!-- prix du produit -->
                        <p class='price' > <?php echo $product_price ?> D.T.  </p>
                    <!-- boutons détails et ajout au panier -->
                    <p class='buttons' >
                        <a href="<?php echo $product_url ?>" class='btn btn-default' >Voir détails</a>
                        <a href="<?php echo $product_url ?>" class='btn btn-danger'><i class='fa fa-shopping-cart'></i> Ajouter au panier</a>
                    </p>
                </div> <!--div text -->
            </div> <!-- div du produit s'arrête ici -->
        <?php } 
    }  //num >=1 
    ?>
<?php require_once("includes/footer.php"); ?>
</body>
</html>