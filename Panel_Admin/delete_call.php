<?php
    require_once("../connect.php");
    $id=$_GET['id'];
    $sql = "DELETE FROM zgloszenia WHERE id_zgloszenia=$id";
    $result = $conn->query($sql);
    $conn->close();
    
    header("Location: show_calls.php");

    

?>