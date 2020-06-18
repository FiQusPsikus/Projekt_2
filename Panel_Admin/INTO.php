<html>
    <head>
        <meta charset="UTF-8">
        
        <link href="https://fonts.googleapis.com/css2?family=Muli:wght@700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../style.css">
    <style>
        #news{
            width:100%;
            margin:auto;
            margin-top:20px;
            text-align:center;
        }
    
        .button {
            background-color: #bae2f5; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button2 {
            background-color:#bae2f5; 
            color: black; 
            border: 2px solid #008CBA;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;
        }

        #class{
            width:100%;
            text-align:center;
            margin-top:200px;

        }
    
    </style>
   
    </head>

    <body>
        <div class="top_bar">  
            <a href="../onas.php"><div class="menu" href="#">O Nas</div></a>
            <a href="../index.php"><div class="menu" href="#">Kontakt</div></a>
            <a href="INTO.php"><div class="shop1" href="#">Panel</div></a>
            <a href="../cart.php"><div class="cart" href="#">Koszyk</div></a>
        </div>
        <?php
        require_once('../connect.php');
        
            if($_SESSION['user']&&$_SESSION['user']=='admin'){
             echo'   <div style="width:100%;text-align:center;margin-top:200px;font-size:20px;">
                    <a href="add_article.php">Zarządzaj artykułami.</a><br>
                    <a href="show_calls.php">Zgłoszenia.</a><br>
                    <a href="show_orders.php">Zamówienia.</a><br>
                    <a href="send_newsletter.php">Wyślij newsletter.</a><br>
                </div>';
            }else{
                echo "Dostęp zabroniony !";
            }
        ?>


    </body>




</html>