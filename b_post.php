<?php
    require_once("connect.php");
    $ilosc=$_POST["ilosc"];
    $adres=$_POST['adres'];
    $ad=$_POST['ad'];
    $kod=$_POST['kod'];
    $miasto=$_POST['miejscowosc'];
    $id=$_POST['id'];
    $sql = "INSERT INTO zamowienia_detal(Adres,Kod_pocztowy,Adresat,Miasto,id_produktu,ilosc) VALUES ('$adres','$kod','$ad','$miasto',$id,$ilosc)";
    $result = $conn->query($sql);
    $conn->close();

   
    
    header("Location: confirm.php");

    

?>