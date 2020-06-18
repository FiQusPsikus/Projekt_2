<?php
            require_once("connect.php");
            $mail=$_POST['mail'];
            $sql = "INSERT INTO newsletter(mail) VALUES ('$mail')";
            $result = $conn->query($sql);
           
            $conn->close();


            ?>