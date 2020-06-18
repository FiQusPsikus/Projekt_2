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
            <a href="../kontakt.php"><div class="menu" href="#">Kontakt</div></a>
            <a href="INTO.php"><div class="shop" href="#">Panel</div></a>
            <a href="../cart.php"><div class="cart" href="#">Koszyk</div></a>
        </div>
        

        <div class="hello" style="font-size:40px;">Zawartość </div>
        <div style="width:100%;text-align:center;">
            <form action="newsletter_post.php" method="POST"  style="position:absolute;left:50%;transform: translate(-50%, 0);">
                <input name="tresc" placeholder="Treść" style="width:400px;height:200px;"><br>
                <button type="submit" class="button button2">Wyślij !</div>
            </form>
        </div>

        </div>


    </body>




</html>