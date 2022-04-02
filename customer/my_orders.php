<div class="table-responsive" >
    <table class="table table-bordered table-hover" >
        <thead>
            <tr>
                <th>#</th>
                <th>Amount</th>
                <th>Invoice</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $customer_session = $_SESSION['customer_email'];
            $get_customer = "select * from customers where customer_email='$customer_session'";
            $run_customer = mysqli_query($con,$get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            $customer_id = $row_customer['customer_id'];
            $get_orders = "select * from orders where customer_id='$customer_id'";
            $run_orders = mysqli_query($con,$get_orders);
            $i = 0;
            while($row_orders = mysqli_fetch_array($run_orders)){
                $order_id = $row_orders['order_id'];
                $due_amount = $row_orders['due_amount'];
                $invoice_no = $row_orders['invoice_no'];
                $order_date = substr($row_orders['order_date'],0,11);
                $order_status = $row_orders['order_status'];
                $i++;
                if($order_status=='pending'){
                     $order_status = "<b style='color:red;'>Unpaid</b>";
                }
                else{
                    $order_status = "<b style='color:green;'>Paid</b>";
                }
                ?>
            <tr>
                <th><?php echo $i; ?></th>
                <td>$<?php echo $due_amount; ?></td>
                <td><?php echo $invoice_no; ?></td>
                <td><?php echo $order_date; ?></td>
                <td><?php echo $order_status; ?></td>
                <td><a href="confirm.php?order_id=<?php echo $order_id; ?>" target="blank" class="btn btn-success btn-xs" > Confirm If Paid </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>