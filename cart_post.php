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
    $sql = "INSERT INTO zamowienia_hurt(id_produktu,Adres,Kod_pocztowy,Miasto,Adresat) VALUES ('$zam','$adres','$kod','$miasto','$ad')";
    $result = $conn->query($sql);
    $conn->close();

    $from = "wojtekcesarzsklep@gmail.com";
    $to = $row['mail'];
    $subject = "Newsletter from Wojtek Cesarz";
    $body = '
        Dziękujemy za zakupy w naszym sklepie
    
    
    
    
    
    ';

    $host = "ssl://smtp.gmail.com";
    $port = "465";

    $username = "wojtekcesarzsklep@gmail.com";
    $password = "zaq1@WSX";

    $headers = array ('From' => $from,
    'To' => $to,
    'Subject' => $subject);
    $smtp = Mail::factory('smtp',
    array ('host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
    echo("<p>" . $mail->getMessage() . "</p>");
    } else {
    echo("<p>Message successfully sent!</p>");
    }
    
    header("Location: confirm.php");
    
    header("Location: confirm.php");

    

?>