<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else {
?>
<!-- première ligne: breadcrumb -->
<div class="row"><!--  1 row Starts -->
    <div class="col-lg-12" ><!-- col-lg-12 Starts -->
        <ol class="breadcrumb" ><!-- breadcrumb Starts -->
            <li class="active" ><i class="fa fa-dashboard"></i> Dashboard / View Products </li>
        </ol><!-- breadcrumb Ends -->
    </div><!-- col-lg-12 Ends -->
</div>

<!-- div du tableau -->
<div class="row" >
    <div class="col-lg-12" >
        <div class="panel panel-default" >
            <div class="panel-heading" >
                <h3 class="panel-title" >
                    <i class="fa fa-money fa-fw" ></i> View Products
                </h3>
            </div>
            <div class="panel-body" >
                <div class="table-responsive" >
                    <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Price</th>
                                
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 0;
                            $get_pro = "select * from products";
                            $run_pro = mysqli_query($con,$get_pro);
                            while($row_pro=mysqli_fetch_array($run_pro)){
                                $pro_id = $row_pro['product_id'];
                                $pro_title = $row_pro['product_title'];
                                $pro_image = $row_pro['product_img'];
                                $pro_price = $row_pro['product_price'];
                                $i++;
                            ?>

                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $pro_title; ?></td>
                                <td><img src="images/products/<?php echo $pro_image; ?>" width="60" height="60"></td>
                                <td>$ <?php echo $pro_price; ?></td>
                                
                                <td> <!-- colonne de suppression-->
                                    <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                    <i class="fa fa-trash-o"> </i> Delete </a>
                                </td>
                                <td>
                                    <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                        <i class="fa fa-pencil"> </i> Edit
                                    </a>
                                </td>
                            </tr>
                            <?php } ?> <!-- ligne terminée -->
                        </tbody>
                    </table>
                </div>
            </div><!-- panel-body Ends -->
        </div><!-- panel panel-default Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<?php } ?> 