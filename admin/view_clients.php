<?php
 require('config.php');
 ?>
<div class="ligne1">

        <ol class="" >
            <li class="" > home / View Products </li>
        </ol>
</div>



                <div class="ligne 2" >
                    <table class="" >
                        
                            <tr>
                                <th>customer_id</th>
                                <th>customer_name</th>
                                <th>customer_email</th>
                                <th>Adresse</th>

                                
                            </tr>

                        
                        <?php
                            $get_pro = "select * from customers";
                            $run_pro = mysqli_query($conn,$get_pro);
                            while($row_pro=mysqli_fetch_array($run_pro)){
                                $customer_id = $row_pro['customer_id'];
                                $customer_name = $row_pro['customer_name'];
                                $customer_email = $row_pro['customer_email'];
                                $adresse = $row_pro['adresse'];

                                
                            ?>

                            <tr>
                                <td><?php echo $customer_id; ?></td>
                                <td><?php echo $customer_name; ?></td>
                                <td> <?php echo $customer_email; ?></td>
                                <td> <?php echo $adresse; ?></td>

                                
                            </tr>
                            <?php } ?> 
                        
                    </table>
                </div>
            
