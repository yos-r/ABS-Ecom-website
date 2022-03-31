<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}
else {
?>

<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li class="active">
            <i class="fa fa-dashboard"></i> Dashboard
            </li>
            </ol>
    </div>
</div>

<div class="row"> 

    <div class="col-lg-3 col-md-6"><!-- div d'une case -->
        <div class="panel panel-primary"><!-- heading et lien vers fonctionnalité -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <div class="row"><!-- nom + numérique -->
                    <div class="col-xs-3"><!--  -->
                        <i class="fa fa-tasks fa-5x"> </i>
                    </div>
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                        <div class="huge"> <?php echo $count_products; ?> </div>
                        <div>Products</div>
                    </div><!-- col-xs-9 text-right Ends -->
                </div><!-- panel-heading row Ends -->
            </div><!-- panel-heading Ends -->

            <a href="index.php?view_products">
                <div class="panel-footer">
                    <span class="pull-left"> View Details </span> <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div><!-- panel-footer Ends -->
            </a>
        </div>
    </div><!-- case terminée -->


    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
        <div class="panel panel-green"><!-- panel panel-green Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <div class="row"><!-- panel-heading row Starts -->
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                        <i class="fa fa-comments fa-5x"> </i>
                    </div><!-- col-xs-3 Ends -->
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                        <div class="huge"> <?php echo $count_customers; ?> </div>
                        <div>Customers</div>
                    </div><!-- col-xs-9 text-right Ends -->
                </div><!-- panel-heading row Ends -->
            </div>
            <a href="index.php?view_customers">
                <div class="panel-footer">
                    <span class="pull-left"> View Details </span>
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div><!-- panel panel-green Ends -->
    </div><!-- col-lg-3 col-md-6 Ends -->


    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
        <div class="panel panel-yellow"><!-- panel panel-yellow Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <div class="row"><!-- panel-heading row Starts -->
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                        <i class="fa fa-shopping-cart fa-5x"> </i>
                    </div><!-- col-xs-3 Ends -->
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                        <div class="huge"> <?php echo $count_p_categories; ?> </div>
                        <div>Products Categories</div>
                    </div><!-- col-xs-9 text-right Ends -->
                </div><!-- panel-heading row Ends -->
            </div><!-- panel-heading Ends -->

            <a href="index.php?view_p_cats">
                <div class="panel-footer">
                    <span class="pull-left"> View Details </span>
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
        <div class="panel panel-red"><!-- panel panel-red Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <div class="row"><!-- panel-heading row Starts -->
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                        <i class="fa fa-support fa-5x"> </i>
                    </div><!-- col-xs-3 Ends -->
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                        <div class="huge"> <?php echo $count_total_orders; ?> </div>
                        <div>Orders</div>
                    </div><!-- col-xs-9 text-right Ends -->
                </div><!-- panel-heading row Ends -->
            </div><!-- panel-heading Ends -->
            <a href="index.php?view_orders">
                <div class="panel-footer"><!-- panel-footer Starts -->
                    <span class="pull-left"> View Details </span>
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div><!-- panel-footer Ends -->
            </a>
        </div><!-- panel panel-red Ends -->
    </div><!-- col-lg-3 col-md-6 Ends -->


</div><!-- 2 row Ends -->

<div class="row">

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
        <div class="panel panel-success"><!-- panel panel-red Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <div class="row"><!-- panel-heading row Starts -->
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                        <i class="fa fa-dollar fa-5x"> </i>
                    </div><!-- col-xs-3 Ends -->
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                        <div class="huge"> <?php echo $count_total_earnings ?> </div>
                        <div>Earnings</div>
                    </div><!-- col-xs-9 text-right Ends -->
                </div><!-- panel-heading row Ends -->
            </div><!-- panel-heading Ends -->
            <a href="index.php?view_orders">
                <div class="panel-footer"><!-- panel-footer Starts -->
                <span class="pull-left"> View Details </span>    
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div><!-- panel-footer Ends -->
            </a>
        </div><!-- panel panel-red Ends -->
    </div><!-- col-lg-3 col-md-6 Ends -->


    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
        <div class="panel panel-warning"><!-- panel panel-red Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <div class="row"><!-- panel-heading row Starts -->
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->           
                        <i class="fa fa-spinner fa-5x"> </i>
                    </div><!-- col-xs-3 Ends -->
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                        <div class="huge"> <?php echo $count_pending_orders ?> </div>
                        <div>Pending Orders</div>
                    </div><!-- col-xs-9 text-right Ends -->
                </div><!-- panel-heading row Ends -->
            </div><!-- panel-heading Ends -->
            <a href="index.php?view_orders">
                <div class="panel-footer"><!-- panel-footer Starts -->
                    <span class="pull-left"> View Details </span>
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div><!-- panel-footer Ends -->
            </a>
        </div><!-- panel panel-red Ends -->
    </div><!-- col-lg-3 col-md-6 Ends -->



    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
        <div class="panel panel-info"><!-- panel panel-red Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <div class="row"><!-- panel-heading row Starts -->
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                        <i class="fa fa-check fa-5x"> </i>
                    </div><!-- col-xs-3 Ends -->
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                        <div class="huge"> <?php echo $count_completed_orders ?> </div>
                        <div>Completed Orders</div>
                    </div><!-- col-xs-9 text-right Ends -->
                    </div><!-- panel-heading row Ends -->
            </div><!-- panel-heading Ends -->
            <a href="index.php?view_orders">
                <div class="panel-footer"><!-- panel-footer Starts -->
                    <span class="pull-left"> View Details </span>
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div><!-- panel-footer Ends -->
            </a>
        </div><!-- panel panel-red Ends -->
    </div><!-- col-lg-3 col-md-6 Ends -->


    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
        <div class="panel panel-danger"><!-- panel panel-red Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <div class="row"><!-- panel-heading row Starts -->
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                        <i class="fa fa-percent fa-5x"> </i>
                    </div><!-- col-xs-3 Ends -->
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                        <div class="huge">  </div>
                        <div>Total ..</div>
                    </div><!-- col-xs-9 text-right Ends -->
                </div><!-- panel-heading row Ends -->
            </div><!-- panel-heading Ends -->
            <a href="index.php?view_orders">
                <div class="panel-footer"><!-- panel-footer Starts -->
                    <span class="pull-left"> View Details </span>
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div><!-- panel-footer Ends -->
            </a>
        </div><!-- panel panel-red Ends -->
    </div><!-- col-lg-3 col-md-6 Ends -->


</div> <!-- row of icons is over -->


<div class="row" ><!-- 3 row Starts -->
    <div class="col-lg-12" ><!-- col-lg-8 Starts -->
        <div class="panel panel-primary" ><!-- panel panel-primary Starts -->
            <div class="panel-heading" ><!-- panel-heading Starts -->
                <h3 class="panel-title" ><!-- panel-title Starts -->
                    <i class="fa fa-money fa-fw" ></i> New Orders
                </h3>
            </div>
            <div class="panel-body" ><!-- panel-body Starts -->
                <div class="table-responsive" ><!-- table-responsive Starts -->
                    <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->
                        <thead><!-- thead Starts -->
                            <tr>
                                <th>Order #</th>
                                <th>Customer</th>
                                <th>Invoice No</th>
                                <th> Due Amount </th>
                                <th>Status</th>
                                
                            </tr>
                        </thead><!-- thead Ends -->
                        <tbody><!-- utilise boucle  -->
                            <?php
                            $i = 0;
                            $get_order = "select * from orders order by 1 DESC LIMIT 0,5 ";
                            $run_order = mysqli_query($con,$get_order);
                            while($row_order=mysqli_fetch_array($run_order)){
                                $order_id = $row_order['order_id'];
                                $c_id = $row_order['customer_id'];
                                $invoice_no = $row_order['invoice_no'];
                                $due= $row_order['due_amount'];
                                $i++;
                            ?>
                                <tr> <!-- chaque nuplet retourné a sa ligne dans le tableau -->
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <?php
                                        $get_customer = "select * from customers where customer_id='$c_id'";
                                        $run_customer = mysqli_query($con,$get_customer);
                                        $row_customer = mysqli_fetch_array($run_customer);
                                        $customer_email = $row_customer['customer_email'];
                                        echo $customer_email;
                                        ?>
                                    </td>
                                    <td><?php echo $invoice_no; ?></td>
                                    <td><?php echo $due; ?></td>
                                    <td>
                                        <?php
                                        if($order_status=='pending'){
                                            echo $order_status='pending';
                                        }
                                        else {
                                            echo $order_status='Complete';
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?> <!-- fin de l'itération -->
                        </tbody><!-- tous les n-uplets sont représentés -->
                    </table><!-- table table-bordered table-hover table-striped Ends -->
                </div><!-- table-responsive Ends -->

                <div class="text-right" >
                    <a href="index.php?view_orders" > View All Orders <i class="fa fa-arrow-circle-right" ></i> </a>
                </div>

            </div><!-- panel-body Ends -->
        </div><!-- panel panel-primary Ends -->
    </div><!-- col-lg-8 Ends -->
</div><!-- 3 row Ends -->

<?php } ?>