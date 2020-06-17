<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "online_shop";
    $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Brak połączenia z bazą, prosimy spróbować później " . $conn->connect_error);
            }
?>