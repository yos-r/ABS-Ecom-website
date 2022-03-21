<?php
    session_start();
    include("includes/connection.php");
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>"; //retour au login
    }
    else {
    ?>
    <?php
        $admin_session = $_SESSION['admin_email'];

        $get_admin = "select * from admins  where admin_email='$admin_session'";
        $run_admin = mysqli_query($con,$get_admin);
        $row_admin = mysqli_fetch_array($run_admin);

        $admin_id = $row_admin['admin_id'];
        $admin_name = $row_admin['admin_name'];
        $admin_email = $row_admin['admin_email'];

        // vars to be used globally when loading the admin functionalities including dashboard

        $get_products = "SELECT * FROM products";
        $run_products = mysqli_query($con,$get_products);
        $count_products = mysqli_num_rows($run_products);

        $get_customers = "SELECT * FROM customers";
        $run_customers = mysqli_query($con,$get_customers);
        $count_customers = mysqli_num_rows($run_customers);

        $get_total_orders = "SELECT * FROM orders";
        $run_total_orders = mysqli_query($con,$get_total_orders);
        $count_total_orders = mysqli_num_rows($run_total_orders);

        $get_total_earnings = "SELECT SUM( due_amount) as Total FROM orders WHERE order_status = 'Complete'";
        $run_total_earnings = mysqli_query($con, $get_total_earnings);
        $row = mysqli_fetch_assoc($run_total_earnings);                       
        $count_total_earnings = $row['Total'];

        $get_completed_orders = "SELECT * FROM orders WHERE order_status='Complete'";
        $run_completed_orders = mysqli_query($con,$get_completed_orders);
        $count_completed_orders = mysqli_num_rows($run_completed_orders);

        $get_pending_orders = "SELECT * FROM orders WHERE order_status='pending'";
        $run_pending_orders = mysqli_query($con,$get_pending_orders);
        $count_pending_orders = mysqli_num_rows($run_pending_orders);

        $get_p_categories = "SELECT * FROM categories";
        $run_p_categories = mysqli_query($con,$get_p_categories);
        $count_p_categories = mysqli_num_rows($run_p_categories);
    ?>
        <!DOCTYPE html> <!-- actual html shown if session is valid -->
            <html>
                <head>
                    <title>Admin Panel</title>
                    <link href="styles/bootstrap.min.css" rel="stylesheet">
                    <link href="styles/style.css" rel="stylesheet">
                </head>
                <body>
                    <div id="wrapper"><!-- wrapper Starts -->
                        <?php include("includes/sidebar.php");  ?>
                        
                        <div id="page-wrapper">
                            <div class="container-fluid"><!-- container for admin functionality interface -->
                                <?php
                                    if(isset($_GET['dashboard'])){
                                        include("dashboard.php");
                                    }

                                    if(isset($_GET['view_products'])){
                                        include("view_products.php");
                                    }

                                    if(isset($_GET['view_customers'])){
                                        include("view_customers.php");
                                    }
                                    //etc do one for each functionality 
                                ?>
                            </div> <!-- container for admin functionality ends here. -->

                        </div>
                    </div>
    <?php } ?>
