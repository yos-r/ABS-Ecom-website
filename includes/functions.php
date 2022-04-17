<?php
$db = mysqli_connect("localhost","root","","constructionstore");

function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }

 function items(){
    global $db;
    $ip_add = getRealUserIp();
    $get_items = "select * from cart where ip_add='$ip_add'";
    $run_items = mysqli_query($db,$get_items);
    $count_items = mysqli_num_rows($run_items);
    echo $count_items;
}

function total_price(){
    global $db;
    $ip_add = getRealUserIp();
    $total = 0;
    $select_cart = "select * from cart where ip_add='$ip_add'";
    $run_cart = mysqli_query($db,$select_cart);
    while($record=mysqli_fetch_array($run_cart)){
        $pro_id = $record['p_id'];
        $pro_qty = $record['qty'];
        $sub_total = $record['p_price']*$pro_qty;
        $total += $sub_total;
    }
    echo "$" . $total;
    
    }