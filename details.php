<!-- page that contains product description through $_GET parameter -->
<!-- page produit: details.php?pro_id=url>
<?php
    session_start();
    require_once("includes/connection.php");
    require_once("includes/head.php");
    require_once("includes/functions.php");
    require_once("includes/main.php");
?>
<! html for product page starts here -->
<?php
    $product_id = @$_GET['pro_id']; // details.php?pro_id=xyz : get the xyz
    $get_product = "select * from products where product_url='$product_id'";
    $run_product = mysqli_query($con,$get_product);
    $check_product = mysqli_num_rows($run_product);
    if($check_product == 0){ 
        echo "<script> window.open('index.php','_self') </script>";
    }
    else{
      $row_product = mysqli_fetch_array($run_product);
      $pro_id = $row_product['product_id'];
      $pro_cat_id=$row_product['cat_id'];
      $pro_title = $row_product['product_title'];
      $pro_price = $row_product['product_price'];
      $pro_desc = $row_product['product_desc'];
      $pro_img = $row_product['product_img'];
      $pro_url = $row_product['product_url'];
        /*
      $get_p_cat = "select * from categories where cat_id='$pro_cat_id'";
      $run_p_cat = mysqli_query($con,$get_p_cat);
      $row_p_cat = mysqli_fetch_array($run_p_cat);
      $p_cat_title = $row_p_cat['cat_title'];
        */
?>
<section>
    <div class="row" style="background-color:white;">
    <h1 class="text-center" > <?php echo $pro_title; ?>  Prix : <?php echo $pro_price ?> DT </h1>
    </div>
    <div class="row" style="background-color:white;">
        <div class="col50" style="background-color:white;">
            <img src="images/products/<?php echo $pro_img?>" style="width:200px" >
        </div>
        <div class="col50" style="background-color:white;">
        <form action="" method="post" >
            <div class="form-group"><!-- form-group Starts -->
                <label >Quantité </label>
                <input name="product_qty" type="number" >
            </select>   
            </div>
            <p class="text-center buttons" ><!-- text-center buttons Starts -->
                <button class="btn btn-danger" type="submit" name="add_cart">
                <i class="fa fa-shopping-cart" ></i> Ajouter au panier </button>
            </p>
        </form>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>
</body>
</html>

<?php
   
    if(isset($_POST['add_cart'])){ //bouton ajouter au panier inclus
        $ip_add = getRealUserIp();
        $p_id = $pro_id;
        $product_qty = $_POST['product_qty']; //depuis un formulaire post indiquant la quantité du produit souhaitée
        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
        $run_check = mysqli_query($con,$check_product);
        if(mysqli_num_rows($run_check)>0){
            echo "<script>alert('Produit déjà dans le panier')</script>";
            echo "<script>window.open('$pro_url','_self')</script>";
        }
        else {
            $get_price = "select * from products where product_id='$p_id'";
            $run_price = mysqli_query($con,$get_price);
            $row_price = mysqli_fetch_array($run_price);
            $pro_price = $row_price['product_price'];
            $query = "insert into cart (p_id,ip_add,qty,p_price) values ('$p_id','$ip_add','$product_qty','$pro_price')";
            $run_query = mysqli_query($db,$query);
            echo "<script>window.open('$pro_url','_self')</script>";
        }
        }
?>
<?php } ?> 