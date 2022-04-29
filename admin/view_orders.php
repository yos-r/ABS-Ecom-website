<?php
 require('config.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style1.css" />
     <style>
           body{
           font-family: Consolas;
           }
     </style>
 </head>
 <body>
     
<div class="ligne1"> 
    <h1> Home / View Orders </h1>   
</div>



                <div class="ligne2" >
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
                                $order_id = $row_pro['invoice_no'];
                                $customer_id = $row_pro['customer_id'];
                                $due_amount = $row_pro['due_amount'];
                                $invoice_no = $row_pro['invoice_no'];
                                $order_date = $row_pro['date'];
                                $order_status = $row_pro['order_status'];
                                $order_adress = $row_pro['address'];

                            ?>

                            <tr>
                                <td><?php echo $order_id; ?></td>
                                <td><?php echo $customer_id; ?></td>
                                <td><?php echo $due_amount; ?></td>
                                <td><?php echo $invoice_no; ?></td>
                                <td><?php echo $order_date; ?></td>
                                <td><?php echo $order_status; ?></td>
                                <td><?php echo $order_adress; ?></td>

                                <td>  <!-- button livrer-->
                                    <a href="up.php?ord_id=<?php echo $invoice_no; ?>"> livrer </a>
                                </td>
                                
                                
                            </tr>
                

                            <?php } ?> 
                        
                    </table>
                </div>
    </body>
 </html>               
               
                
            
