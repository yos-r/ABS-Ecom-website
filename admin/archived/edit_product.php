<?php
    if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

    }
else {
    if(isset($_GET['edit_product'])){
        echo "<script> alert('you done fucked up')</script>";
        $edit_id = $_GET['edit_product'];
        $get_p = "select * from products where product_id='$edit_id'";
        $run_edit = mysqli_query($con,$get_p);
        $row_edit = mysqli_fetch_array($run_edit);

        $p_id = $row_edit['product_id'];
        $p_title = $row_edit['product_title'];
        $cat = $row_edit['cat_id'];
        $m_id = $row_edit['manufacturer_id'];
        $p_image = $row_edit['product_img'];
        $p_image1 = $row_edit['product_img'];
        $p_price = $row_edit['product_price'];
        $p_desc = $row_edit['product_desc'];
        $p_url = $row_edit['product_url'];
    } 
        $get_cat = "select * from categories where cat_id='$cat'";
        $run_cat = mysqli_query($con,$get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        $cat_title = $row_cat['cat_title']; 

        $get_manufacturer = "select * from manufacturers where manufacturer_id='$m_id'";
        $run_manufacturer = mysqli_query($con,$get_manufacturer);
        $row_manfacturer = mysqli_fetch_array($run_manufacturer);
        $manufacturer_id = $row_manfacturer['manufacturer_id'];
        $manufacturer_title = $row_manfacturer['manufacturer_title'];
?>
?>
<div class="row"><!-- row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li class="active">
                <i class="fa fa-dashboard"> </i> Dashboard / Edit Products
            </li>
        </ol><!-- breadcrumb Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <div class="panel panel-default"><!-- panel panel-default Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Edit Products
                </h3>
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                    <div class="form-group" ><!-- form-group Starts -->
                        <label class="col-md-3 control-label" > Product Title </label>
                        <div class="col-md-6" >
                            <input type="text" name="product_title" class="form-control" required value="<?php echo $p_title; ?>">
                        </div>
                    </div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->
    <label class="col-md-3 control-label" > Product Url </label>
    <div class="col-md-6" >
        <input type="text" name="product_url" class="form-control" required value="<?php echo $p_url; ?>" >
        <br>
        <p style="font-size:15px; font-weight:bold;"> Product Url  </p>
    </div>
</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->
    <label class="col-md-3 control-label" > Select A Manufacturer </label>
    <div class="col-md-6" >
        <select name="manufacturer" class="form-control">
            <option value="<?php echo $manufacturer_id; ?>">
                <?php echo $manufacturer_title; ?>
            </option>
            <?php
                $get_manufacturer = "select * from manufacturers";
                $run_manufacturer = mysqli_query($con,$get_manufacturer);
                while($row_manfacturer = mysqli_fetch_array($run_manufacturer)){
                    $manufacturer_id = $row_manfacturer['manufacturer_id'];
                    $manufacturer_title = $row_manfacturer['manufacturer_title'];
                    echo "<option value='$manufacturer_id'>$manufacturer_title</option>";
                }
            ?>
        </select>
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
        <input type="file" name="product_img1" class="form-control" >
        <br>
        <img src="product_images/<?php echo $p_image1; ?>" width="70" height="70" >
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
    <div class="form-group" >
        <label class="col-md-3 control-label" ></label>
        <div class="col-md-6" >
            <input type="submit" name="update" value="Update Product" class="btn btn-primary form-control" >
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>

</body>

</html>

<?php
    if(isset($_POST['update'])){
        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $cat = $_POST['cat'];
        $manufacturer_id = $_POST['manufacturer'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $product_url = $_POST['product_url'];
        $product_img = $_FILES['product_img']['name'];
        $temp_name = $_FILES['product_img']['tmp_name'];
        if(empty($product_img)){
            $product_img = $p_image1;
        }
        move_uploaded_file($temp_name1,"images/products/$product_img");
        $update_product = "update products set cat_id='$cat',manufacturer_id='$manufacturer_id',product_title='$product_title',product_url='$product_url',product_img='$product_img',product_price='$product_price',product_desc='$product_desc' where product_id='$p_id'";
        $run_product = mysqli_query($con,$update_product);
        if($run_product){
            echo "<script> alert('Product has been updated successfully') </script>";
            echo "<script>window.open('index.php?view_products','_self')</script>";
        }
    }
?>

<?php }  ?>
