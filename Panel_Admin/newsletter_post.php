<?php
            require_once("../connect.php");

            $sql = "SELECT * FROM newsletter";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    require_once "Mail.php";

                    $from = "wojtekcesarzsklep@gmail.com";
                    $to = $row['mail'];
                    $subject = "Newsletter from Wojtek Cesarz";
                    $body = $_POST['tresc'];
                
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



                }
            } 
           
            $conn->close();
            header("Location: INTO.php")

            ?>