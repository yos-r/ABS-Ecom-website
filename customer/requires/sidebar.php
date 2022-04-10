<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Starts -->
    <div class="panel-heading"><!-- panel-heading Starts -->
        <?php
            $customer_session = $_SESSION['customer_email'];
            $get_customer = "select * from customers where customer_email='$customer_session'";
            $run_customer = mysqli_query($con,$get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            $customer_name = $row_customer['customer_name'];
            if(!isset($_SESSION['customer_email'])){
            }
            else {
                echo " <h3 align='center' class='panel-title'> Salut $customer_name </h3>";
            }
        ?>
    </div>

    <div class="panel-body"><!-- panel-body Starts -->
        <ul class="nav nav-pills nav-stacked"><!-- nav nav-pills nav-stacked Starts -->
            <li class="<?php if(isset($_GET['my_orders'])){ echo "active"; } ?>">
                <a href="my_account.php?my_orders"> <i class="fa fa-list"> </i> My Orders </a>
            </li>
            <li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">
                <a href="my_account.php?edit_account"> <i class="fa fa-pencil"></i> Edit Account </a>
            </li>
            <li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">
                <a href="my_account.php?change_pass"> <i class="fa fa-user"></i> Changer mot de passe </a>
            </li>
            
            <li class="<?php if(isset($_GET['delete_account'])){ echo "active"; } ?>">
                <a href="my_account.php?delete_account"> <i class="fa fa-trash-o"></i> Supprimer compte </a>
            </li>
            <li>
                <a href="logout.php"> <i class="fa fa-sign-out"></i> Se déconnecter </a>
            </li>
        </ul>
    </div><!-- panel-body Ends -->
</div>