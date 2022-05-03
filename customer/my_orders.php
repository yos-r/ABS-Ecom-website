<div class="table-responsive" >
    <table class="table table-bordered table-hover" >
        <thead>
            <tr>
                <th>#</th>
                <th>Montant</th>
                <th>Facture</th>
                <th>Date</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $customer_session = $_SESSION['customer_email'];
            $get_customer = "select * from customers where customer_email='$customer_session'";
            $run_customer = mysqli_query($con,$get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            $customer_id = $row_customer['customer_id'];
            $get_orders = "select * from orders where customer_id='$customer_id' order by date desc";
            $run_orders = mysqli_query($con,$get_orders);
            $i = 0;
            while($row_orders = mysqli_fetch_array($run_orders)){
                $invoice_no = $row_orders['invoice_no'];
                $due_amount = $row_orders['due_amount'];
                $order_date = substr($row_orders['date'],0,11);
                $order_status = $row_orders['order_status'];
                $i++;
                if($order_status=='pending'){
                     $order_status = '<b style="display:inline;color:red;">En cours de traitement</b> | <a href="cancel_order.php?cancel_id='.$invoice_no.'"> Annuler</a>';    
                }
                else{
                    $order_status = "<b style='color:green;'>Complète</b>";
                }
                ?>
            <tr>
                <th><?php echo $i; ?></th>
                <td><?php echo $due_amount; ?> D.T.</td>
                <td><a href="my_account.php?commande=<?php echo $invoice_no ;?>"><?php echo $invoice_no; ?></a></td>
                <td><?php echo $order_date; ?></td>
                <td><?php echo $order_status; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<br><br><br><br>




