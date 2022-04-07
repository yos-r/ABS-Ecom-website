<?php
 require('config.php');
 ?>
<div class="ligne1">

        <ol class="" >
            <li class="" > home / View Orders </li>
        </ol>
</div>



                <div class="ligne 2" >
                    <table class="" >
                        
                            <tr>
                                <th>order_id</th>
                                <th>customer_id</th>
                                <th>due_amount</th>
                                <th>invoice_no</th>
                                <th>order_date</th>
                                <th>order_status</th>
                                <th>Livrer</th>

                            </tr>

                        
                        <?php
                            $get_pro = "select * from orders";
                            $run_pro = mysqli_query($conn,$get_pro);
                            while($row_pro=mysqli_fetch_array($run_pro)){
                                $order_id = $row_pro['order_id'];
                                $customer_id = $row_pro['customer_id'];
                                $due_amount = $row_pro['due_amount'];
                                $invoice_no = $row_pro['invoice_no'];
                                $order_date = $row_pro['order_date'];
                                $order_status = $row_pro['order_status'];
                            ?>

                            <tr>
                                <td><?php echo $order_id; ?></td>
                                <td><?php echo $customer_id; ?></td>
                                <td><?php echo $due_amount; ?></td>
                                <td><?php echo $invoice_no; ?></td>
                                <td><?php echo $order_date; ?></td>
                                <td><?php echo $order_status; ?></td>

                                <td>  <!-- button livrer-->
                                    <a href="up.php?ord_id=<?php echo $order_id; ?>"> livrer </a>
                                </td>
                                
                                
                            </tr>
                

                            <?php } ?> 
                        
                    </table>
                </div>
                
               
                
            
