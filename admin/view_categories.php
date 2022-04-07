<?php
 require('config.php');
 ?>
<div class="ligne1">

        <ol class="" >
            <li class="" > home / View cat </li>
        </ol>
</div>



                <div class="ligne 2" >
                    <table class="" >
                        
                            <tr>
                                <th>cat_id</th>
                                <th>cat_title</th>
                                <th>cat_img</th>
                               
                                
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>

                        
                        <?php
                            $get_pro = "select * from categories";
                            $run_pro = mysqli_query($conn,$get_pro);
                            while($row_pro=mysqli_fetch_array($run_pro)){
                                $cat_id = $row_pro['cat_id'];
                                $cat_title = $row_pro['cat_title'];
                                $cat_img = $row_pro['cat_img'];
                                
                            ?>

                            <tr>
                                <td><?php echo $cat_id; ?></td>
                                <td><?php echo $cat_title; ?></td>
                                <td><img src="images/products/<?php echo $cat_img; ?>" width="60" height="60"></td> <!--a verifier l path  -->


                                
                                <td>  <!-- colonne de suppression-->
                                    <a href="delete_cat.php?cat_id=<?php echo $cat_id; ?>"> Delete </a>
                                </td>
                                <td>  <!-- colonne d'edition-->
                                    <a href="update_cat.php?cat_id=<?php echo $cat_id; ?> & cat_title=<?php echo $cat_title ;?> & cat_img=<?php echo $cat_img; ?>"> Edit</a>
                                </td>
                            </tr>
                            <?php } ?> 
                        
                    </table>
                </div>
            
