<?php
    require_once("../connect.php");
    
    $id=$_GET['id'];

    echo $radio;
    $sql = "DELETE FROM produkty WHERE id_produktu=$id";
    $result = $conn->query($sql);
    $conn->close();
    
    header("Location: add_article.php");

    

?>