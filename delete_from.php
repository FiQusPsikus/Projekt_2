<?php
    session_start();
    $element=$_GET['element'];
    unset($_SESSION['cart'][$element]);
    $_SESSION['cart']=array_values(array_filter($_SESSION['cart']));
    header("Location: cart.php");
        
?>