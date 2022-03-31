<?php
    if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
    else {
?>
<div class="ligne1">

        <ol class="" >
            <li class="" > home / View Products </li>
        </ol>
</div>



                <div class="ligne 2" >
                    <table class="" >
                        
                            <tr>
                                <th>product_id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>cat_id</th>
                                <th>subcat_id</th>
                                <th>product_desc</th>
                                <th>manifacturer</th>


                                
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>

                        
                        <?php
                            $get_pro = "select * from products";
                            $run_pro = mysqli_query($con,$get_pro);
                            while($row_pro=mysqli_fetch_array($run_pro)){
                                $pro_id = $row_pro['product_id'];
                                $pro_title = $row_pro['product_title'];
                                $pro_image = $row_pro['product_img'];
                                $pro_price = $row_pro['product_price'];
                                $pro_cat = $row_pro['cat_id'];
                                $pro_subcat = $row_pro['subcat_id'];
                                $pro_desc = $row_pro['product_desc'];
                                $pro_manif = $row_pro['manifacturer'];
                                
                            ?>

                            <tr>
                                <td><?php echo $pro_id; ?></td>
                                <td><?php echo $pro_title; ?></td>
                                <td><img src="images/products/<?php echo $pro_image; ?>" width="60" height="60"></td> <!--a modifier les noms -->
                                <td>$ <?php echo $pro_price; ?></td>
                                <td>$ <?php echo $pro_cat; ?></td>
                                <td>$ <?php echo $pro_subcat; ?></td>
                                <td>$ <?php echo $pro_desc; ?></td>
                                <td>$ <?php echo $pro_manif; ?></td>


                                
                                <td>  <!-- colonne de suppression-->
                                    <a href="delete_product.php?product_id=<?php echo $product_id; ?>"> Delete </a>
                                </td>
                                <td>  <!-- colonne d'edition-->
                                    <a href="index.php?edit_product=<?php echo $pro_id; ?>">Edit</a>
                                </td>
                            </tr>
                            <?php } ?> 
                        
                    </table>
                </div>
            
<?php } ?> 