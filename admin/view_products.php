<?php
 require('config.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style1.css">
     <script src="sweetalert2@11.js"></script>
     <style>
     </style>
 </head>
 <body>
     
<div class="ligne1"> 
    <h1> Home / View Products </h1>   
</div>
                <div class="ligne2" >
                    <table class="" >
                        
                            <tr>
                                <th>product_id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>cat_id</th>
                                <!--<th>subcat_id</th>-->
                                <th>product_desc</th>
                                <th>manifacturer</th>


                                
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>

                        
                        <?php
                            $get_pro = "select * from products";
                            $run_pro = mysqli_query($conn,$get_pro);
                            while($row_pro=mysqli_fetch_array($run_pro)){
                                $pro_id = $row_pro['product_id'];
                                $pro_title = $row_pro['product_title'];
                                $pro_image = $row_pro['product_img'];
                                $pro_price = $row_pro['product_price'];
                                $pro_cat = $row_pro['cat_id'];
                                //$pro_subcat = $row_pro['subcat_id'];
                                $pro_desc = $row_pro['product_desc'];
                                $pro_manif = $row_pro['manufacturer_id'];
                                
                            ?>
                            <tr>
                                <td><?php echo $pro_id; ?></td>
                                <td><?php echo $pro_title; ?></td>
                                <td><img src="images/products/<?php echo $pro_image; ?>" width="60" height="60"></td> <!--a verifier l path  -->
                                <td> <?php echo $pro_price; ?></td>
                                <td> <?php echo $pro_cat; ?></td>
                                <td> <?php echo $pro_desc; ?></td>
                                <td> <?php echo $pro_manif; ?></td>


                                
                                <td>  <!-- colonne de suppression-->
                                    <a href="delete_product.php?product_id=<?php echo $pro_id; ?>"> Delete </a>
                                </td>
                                <td>  <!-- colonne d'edition-->
                                    <a href="update_product.php?product_id=<?php echo $pro_id; ?> & product_title=<?php echo $pro_title?> & product_img=<?php echo $pro_image; ?> & product_price=<?php echo $pro_price; ?> & product_cat=<?php echo $pro_cat; ?> & product_desc=<?php echo $pro_desc; ?> & product_manif=<?php echo $pro_manif; ?>"> Edit</a>
                                </td>
                            </tr>
                            <?php } ?> 
                        
                    </table>
                    <a href="add_product.php"><h2>ajouter un produit</h2></a>
                </div>
            
    </body>
 </html>                
            
