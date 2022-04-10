<?php
session_start();
include("includes/connection.php");
include("includes/head.php");
include("includes/functions.php");
include("includes/main.php"); //header
?>
<div id="content" >
<div class="container" >
    <div class="col-md-9" id="cart" >
        <div class="box" >
        <form action="cart.php" method="post" enctype="multipart-form-data" ><!-- form Starts -->
            <h1> Panier </h1>
            <?php
                $ip_add = getRealUserIp();
                $select_cart = "select * from cart where ip_add='$ip_add'";
                $run_cart = mysqli_query($con,$select_cart);
                $count = mysqli_num_rows($run_cart);
            ?>
            <p class="text-muted" > Vous avez <?php echo $count; ?>éléments dans votre panier </p>
            <div class="table-responsive" >
                <table class="table" >
                    <thead>
                        <tr>
                            <th colspan="2" >Produit</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th colspan="1">Supprimer</th>
                            <th colspan="2"> Sous Total </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $total = 0;
                    while($row_cart = mysqli_fetch_array($run_cart)){
                        $pro_id = $row_cart['p_id'];
                        $pro_qty = $row_cart['qty'];
                        $only_price = $row_cart['p_price'];
                        $get_products = "select * from products where product_id='$pro_id'";
                        $run_products = mysqli_query($con,$get_products);
                        while($row_products = mysqli_fetch_array($run_products)){
                            $product_title = $row_products['product_title'];
                            $product_img = $row_products['product_img'];
                            $sub_total = $only_price*$pro_qty;
                            $_SESSION['pro_qty'] = $pro_qty;
                            $total += $sub_total;
                    ?>
                    <tr>
                        <td><img style="width: 40px;"src="images/products/<?php echo $product_img; ?>" ></td>
                        <td><a href="#" > <?php echo $product_title; ?> </a></td>
                        <td><input type="text" name="quantity" value="<?php echo $_SESSION['pro_qty']; ?>" data-product_id="<?php echo $pro_id; ?>" class="quantity form-control"></td>
                        <td> <?php echo $only_price; ?>.00 D.T.</td>
                        <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></td>
                        <td><?php echo $sub_total; ?>.00 D.T.</td>
                    </tr>
                <?php } } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                        <th colspan="5"> Total </th>
                        <th colspan="2"> <?php echo $total; ?>.00 </th>
                        </tr>
                    </tfoot>
                </table>
                
                <div class="box-footer">
                    <div class="pull-left">
                        <a href="index.php" class="btn btn-default"> Continue Shopping </a>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-info" type="submit" name="update" value="Update Cart">
                         Mettre à jour panier
                        </button>
                        <a href="checkout.php" class="btn btn-success">Commander</i></a>
                    </div>

                </div>
            </form><!-- form Ends -->
            </div> <!-- box ends -->
            

<?php
function update_cart(){
    global $con;
    if(isset($_POST['update'])){
        foreach($_POST['remove'] as $remove_id){
            $delete_product = "delete from cart where p_id='$remove_id'";
            $run_delete = mysqli_query($con,$delete_product);
            if($run_delete){
                echo "<script>window.open('cart.php','_self')</script>";
            }
        }
    }
}
echo @$up_cart = update_cart();
?>


</div><!-- container Ends -->
</div><!-- content Ends -->
<?php //include("includes/footer.php"); ?>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script>

  $(document).ready(function(data){
      $(document).on('keyup', '.quantity', function(){
          var id = $(this).data("product_id");
          var quantity = $(this).val();
          if(quantity  != ''){
              $.ajax({
                  url:"change.php",
                  method:"POST",
                  data:{id:id, quantity:quantity},
                  success:function(data){
                      $("body").load('cart_body.php');  
                  } 
              });
          }
      });
  });

</script>

</body>
</html>