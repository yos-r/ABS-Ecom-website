<?php
    $con = mysqli_connect("localhost","root","manager","constructionstore");
    if (!$con){
        $con = mysqli_connect("localhost","root","","constructionstore");
    }
?>