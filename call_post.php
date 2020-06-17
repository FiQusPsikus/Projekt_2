<?php
    require_once("connect.php");
    $tel=$_POST['tel'];
    $tresc=$_POST['tresc'];
    for($i=0;$i<count($_SESSION['cart']);$i++){
        $zam.=$_SESSION['cart'][$i].",";
    }

    echo $tel;
    echo $tresc;
    $sql = "INSERT INTO zgloszenia(telefon,tresc) VALUES ('$tel','$tresc')";
    $result = $conn->query($sql);
    $conn->close();
    
    header("Location: confirm_call.php");

    

?>