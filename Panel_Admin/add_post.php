<?php
    require_once("../connect.php");
    
    $nazwa=$_POST['nazwa'];
    $cena=$_POST['cena'];
    $radio=$_POST['radio'];

    echo $radio;
    $sql = "INSERT INTO produkty(nazwa,cena,typ)VALUES('$nazwa','$cena','$radio')";
    $result = $conn->query($sql);
    $conn->close();
    
    header("Location: add_article.php");

    

?>