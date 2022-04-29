<<<<<<< HEAD
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
    <h1> Home / View Categories </h1>   
</div>
                <div class="ligne2" >
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
                                <td><img src="images/categories/<?php echo $cat_img; ?>" width="60" height="60"></td> <!--a verifier l path  -->


                                
                                <td>  <!-- colonne de suppression-->
                                    <a href="delete_cat.php?cat_id=<?php echo $cat_id; ?>"> Delete </a>
                                </td>
                                <td>  <!-- colonne d'edition-->
                                    <a href="update_cat.php?cat_id=<?php echo $cat_id; ?> & cat_title=<?php echo $cat_title ;?> & cat_img=<?php echo $cat_img; ?>"> Edit</a>
                                </td>
                            </tr>
                            <?php } ?> 
                        
                    </table>
                    <a href="add_categories.php"><h2>ajouter une catégorie</h2></a>
                </div>
    </body>
 </html>                
            
=======
>>>>>>> parent of 99dbf44 (fin)
