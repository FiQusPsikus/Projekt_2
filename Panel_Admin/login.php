<?php
    require_once("../connect.php");
    $login=$_POST['ln'];
    $pass=$_POST['ps'];
    
    
    $sql = "SELECT * FROM users WHERE login='$login'";
    $result = $conn->query($sql);


    if ($result->num_rows >0) {
        while($row = $result->fetch_assoc()) {
            if(password_verify($_POST['ps'],$row['haslo'])){
                $_SESSION['user']=$login;
                header('Location: INTO.php');
            }
        }
    } 


    

?>