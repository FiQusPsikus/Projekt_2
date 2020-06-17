<?php
session_start();
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=array();
    }
   
    $id_to_add=$_GET['id'];
    array_push($_SESSION['cart'],$_GET['id']);
    header("Location: shop.php")
        
?>