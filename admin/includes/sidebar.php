<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
else {
?>
<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- HEADER + TOGGLE MENU + SIDENAVBAR WITH LINKS -->

    <div class="navbar-header" >
        <a class="navbar-brand" href="index.php?dashboard" >Admin Panel</a>
    </div>

    <ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->
        <li class="dropdown" ><!-- dropdown Starts -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->
                <i class="fa fa-user" ></i> <?php echo $admin_name; ?> <b class="caret" ></b>
            </a>
            <ul class="dropdown-menu" >
                <li>
                    <a href="index.php?user_profile=<?php echo $admin_id; ?>" ><i class="fa fa-fw fa-user" ></i> Profile</a>
                </li>
                <li>
                    <a href="index.php?view_products" >
                        <i class="fa fa-fw fa-envelope" ></i> Products <span class="badge" ><?php echo $count_products; ?></span>
                    </a>
                </li>
                <li>
                    <a href="index.php?view_customers" >
                        <i class="fa fa-fw fa-gear" ></i> Customers <span class="badge" ><?php echo $count_customers; ?></span>
                    </a>
                </li>
                <li>
                    <a href="index.php?view_p_cats" >
                        <i class="fa fa-fw fa-gear" ></i> Product Categories <span class="badge" ><?php echo $count_p_categories; ?></span>
                    </a>
                </li>
                <li class="divider"></li> 
                <li>
                    <a href="logout.php">
                        <i class="fa fa-fw fa-power-off"> </i> Log Out
                    </a>
                </li>
            </ul>
        </li>
    </ul><!-- TOGGLE menu s'arrête ici -->

    
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- menu à gauche avec liens aux fonctionnalités admin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->
            <li>
                <a href="index.php?dashboard">
                    <i class="fa fa-fw fa-dashboard"></i> Dashboard
                </a>
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#products">
                    <i class="fa fa-fw fa-table"></i> Products<i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="products" class="collapse">
                    <li><a href="index.php?insert_product"> Insert Products </a></li>
                    <li><a href="index.php?view_products"> View Products </a></li>
                </ul>

            </li>
            <li> <!-- manufacturer li Starts -->
                <a href="#" data-toggle="collapse" data-target="#manufacturers"><!-- anchor Starts -->
                    <i class="fa fa-fw fa-briefcase"></i> Manufacturers<i class="fa fa-fw fa-caret-down"></i>
                </a><!-- anchor Ends -->

                <ul id="manufacturers" class="collapse"><!-- ul collapse Starts -->
                    <li><a href="index.php?insert_manufacturer"> Insert Manufacturer </a></li>
                    <li><a href="index.php?view_manufacturers"> View Manufacturers </a></li>
                </ul><!-- ul collapse Ends -->
            </li><!-- manufacturer li Ends -->

            <li><!-- li Starts -->
                <a href="#" data-toggle="collapse" data-target="#p_cat">
                <i class="fa fa-fw fa-pencil"></i> Products Categories <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="p_cat" class="collapse">
                    <li><a href="index.php?insert_p_cat"> Insert Product Category </a></li>
                    <li><a href="index.php?view_p_cats"> View Products Categories </a></li>
                </ul>
            </li><!-- li Ends -->
            <li>
                <a href="index.php?view_customers">
                    <i class="fa fa-fw fa-edit"></i> View Customers
                </a>
            </li>
            <li>
                <a href="index.php?view_orders">
                    <i class="fa fa-fw fa-list"></i> View Orders
                </a>
            </li>
            <li>
                <a href="index.php?view_payments">
                    <i class="fa fa-fw fa-pencil"></i> View Payments
                </a>
            </li>
            <li><!-- li Starts -->
                <a href="#" data-toggle="collapse" data-target="#users">
                    <i class="fa fa-fw fa-gear"></i> Users <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="users" class="collapse">
                    <li><a href="index.php?insert_user"> Insert Admin </a></li>
                    <li><a href="index.php?view_users"> View Admins </a></li>
                    <li><a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edit Profile </a></li>
                </ul>
            </li>

            <li>
                <a href="logout.php">
                    <i class="fa fa-fw fa-power-off"></i> GTFO
                </a>
            </li>
        </ul>
    </div>

</nav>

<?php } ?>