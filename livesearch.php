<?php
$con = mysqli_connect("localhost", "root", "", "constructionstore");
if(isset($_REQUEST["term"])){
    $sql = "SELECT * FROM products WHERE product_title LIKE ?";
    if($stmt = mysqli_prepare($con, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        $param_term = $_REQUEST["term"] . '%';
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<a class ='dropdown-result' href='".$row["product_url"]."'><img src='images/products/".$row["product_img"]."' style=' width:20px;'><p>". $row["product_title"] ."</a></p>";
                }
            } else{
                echo "<p> Pas de produits trouvés</p>";
            }
        } else{
            echo "ERREUR: requete non exécutable $sql. " . mysqli_error($con);
        }
    }
}