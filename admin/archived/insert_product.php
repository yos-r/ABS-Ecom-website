<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
else {
?>

<div class="row"><!-- row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
        <li class="active">
        <i class="fa fa-dashboard"> </i> Dashboard / Insert Products
        </li>
        </ol><!-- breadcrumb Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- row Ends -->

<div class="row"><!-- 2 row Starts --> 
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <div class="panel panel-default"><!-- panel panel-default Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Insert Products
                </h3>
            </div><!-- panel-heading Ends -->

            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                    
                    <div class="form-group" ><!-- form-group Starts -->
                        <label class="col-md-3 control-label" > Product Title </label>
                        <div class="col-md-6" >
                            <input type="text" name="product_title" class="form-control" required >
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group" ><!-- form-group Starts -->
                        <label class="col-md-3 control-label" > Product Id</label>
                        <div class="col-md-6" >
                            <input type="number" name="product_id" class="form-control" required >
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group" ><!-- form-group Starts -->
                        <label class="col-md-3 control-label" > Product Url </label>
                        <div class="col-md-6" >
                            <input type="text" name="product_url" class="form-control" required >
                            <br>
                            <p style="font-size:15px; font-weight:bold;">brique 3 trous</p>
                        </div>
                    </div><!-- form-group Ends -->

                    <div class="form-group" ><!-- form-group Starts -->
                        <label class="col-md-3 control-label" > Select A Manufacturer </label>
                            <div class="col-md-6" >
                                <select class="form-control" name="manufacturer"><!-- select manufacturer Starts -->
                                    <option> Select A Manufacturer </option>
                                        <?php
                                        $get_manufacturer = "select * from manufacturers";
                                        $run_manufacturer = mysqli_query($con,$get_manufacturer);
                                        while($row_manufacturer= mysqli_fetch_array($run_manufacturer)){
                                            $manufacturer_id = $row_manufacturer['manufacturer_id'];
                                            $manufacturer_title = $row_manufacturer['manufacturer_title'];
                                            echo "<option value='$manufacturer_id'>
                                            $manufacturer_title
                                            </option>";
                                        }
                                        ?>
                                </select><!-- select manufacturer Ends -->
                            </div>
                        </div><!-- form-group Ends -->


                        <div class="form-group" ><!-- form-group Starts -->
                            <label class="col-md-3 control-label" > Category </label>
                            <div class="col-md-6" >
                                <select name="cat" class="form-control" >
                                    <option value="<?php echo $cat; ?>" > <?php echo $cat_title; ?> </option>
                                        <?php
                                        $get_cat = "select * from categories ";
                                        $run_cat = mysqli_query($con,$get_cat);
                                        while ($row_cat=mysqli_fetch_array($run_cat)) {
                                            $cat_id = $row_cat['cat_id'];
                                            $cat_title = $row_cat['cat_title'];
                                            echo "<option value='$cat_id'>$cat_title</option>";
                                        }
                                        ?>
                                </select>
                            </div>
                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->
                            <label class="col-md-3 control-label" > Product Image </label>
                            <div class="col-md-6" >
                                <input type="file" name="product_img" class="form-control" >
                                <br>
                                <img src="product_images/<?php echo $p_image; ?>" width="70" height="70" >
                            </div>
                        </div><!-- form-group Ends -->
                        <div class="form-group" ><!-- form-group Starts -->
                            <label class="col-md-3 control-label" > Product Price </label>
                            <div class="col-md-6" >
                                <input type="text" name="product_price" class="form-control" required value="<?php echo $p_price; ?>" >
                            </div>
                        </div>
                        <div class="form-group" ><!-- form-group Starts -->
                            <label class="col-md-3 control-label" > Product Description </label>
                            <div class="col-md-6" >
                                <textarea name="product_desc" class="form-control" rows="15" id="product_desc">
                                    <?php echo $p_desc; ?>
                                </textarea>
                            </div>
                            <div class="form-group" ><!-- form-group Starts -->
                                <label class="col-md-3 control-label" ></label>
                                <div class="col-md-6" >
                                    <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" >
                                </div>
                            </div><!-- form-group Ends -->
                        </form><!-- form-horizontal Ends -->
                    </div><!-- panel-body Ends -->
                </div><!-- panel panel-default Ends -->
            </div><!-- col-lg-12 Ends -->
        </div><!-- 2 row Ends --> 


</body>
</html>

<?php
if(isset($_POST['submit'])){
    $product_title = $_POST['product_title'];
    $cat = $_POST['cat'];
    $manufacturer_id = $_POST['manufacturer'];
    $product_id=$_POST['product_id'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_url = $_POST['product_url'];
    $product_img = $_FILES['product_img']['name'];
    $temp_name = $_FILES['product_img']['tmp_name'];
    move_uploaded_file($temp_name,"images/products/$product_img1");
    $insert_product = "insert into products (product_id,cat_id,manufacturer_id,product_title,product_url,product_img,product_price,product_desc) values ('$product_id','$cat','$manufacturer_id',NOW(),'$product_title','$product_url','$product_img1','$product_img2','$product_img3','$product_price','$psp_price','$product_desc','$product_features','$product_video','$product_keywords','$product_label','$status')";
    $run_product = mysqli_query($con,$insert_product);
    if($run_product){
        echo "<script>alert('Product has been inserted successfully')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
    }

}

?>

<?php } ?>
