<div class="table-responsive" >
    <table class="table table-bordered table-hover" >
        <thead>
            <tr>
                <th>#</th>
                <th>Montant</th>
                <th>Facture</th>
                <th> Date</th>
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
                     $order_status = '<b style="display:inline;color:red;">En cours de traitement</b> | <button name="cancel"> Annuler</button>"';
                     // ajout d'un bouton d'annulation
                }
                else{
                    $order_status = "<b style='color:green;'>Complète</b>";
                }
                ?>
            <tr>
                <th><?php echo $i; ?></th>
                <td>$<?php echo $due_amount; ?></td>
                <td><?php echo $invoice_no; ?></td>
                <td><?php echo $order_date; ?></td>
                <td><?php echo $order_status; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!--
<?php if(isset($_POST['cancel'])){
$_id = $customer_id;
$c_name = $_POST['c_name'];
$c_email = $_POST['c_email'];
$c_address = $_POST['c_address'];
$update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_address='$c_address' where customer_id='$update_id'";
$run_customer = mysqli_query($con,$update_customer);
if($run_customer){
    echo "<script>alert('Compte mis à jour')</script>";
    echo "<script>window.open('logout.php','_self')</script>";
}
}?>
-->


