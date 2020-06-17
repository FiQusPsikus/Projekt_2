<?php
    require_once("connect.php");
    
    $adres=$_POST['adres'];
    $ad=$_POST['ad'];
    $kod=$_POST['kod'];
    $miasto=$_POST['miejscowosc'];
    $ad=$_POST['ad'];
    $zam="";
    for($i=0;$i<count($_SESSION['cart']);$i++){
        $zam.=$_SESSION['cart'][$i].",";
    }

    echo $zam;
    $sql = "INSERT INTO zamowienia_hurt(id_produktu,Adres,Kod_pocztowy,typ,Adresat) VALUES ('$zam','$adres','$kod','$miasto','$ad')";
    $result = $conn->query($sql);
    $conn->close();
    
    header("Location: confirm.php");

    

?>