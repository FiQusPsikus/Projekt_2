<html>
    <head>
        <meta charset="UTF-8">
        
        <link href="https://fonts.googleapis.com/css2?family=Muli:wght@700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
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
    
    </style>
   
    </head>

    <body>
        <div class="top_bar">  
            <a href="onas.php"><div class="menu" href="#">O Nas</div></a>
            <a href="kontakt.php"><div class="menu" href="#">Kontakt</div></a>
            <a href="index.php"><div class="shop1" href="#">Sklep</div></a>
            <a href="cart.php"><div class="cart" href="#">Koszyk</div></a>
        </div>
        <div id="stopper" style="height:80px;"></div>
        
        <div style="width:100%;text-align:center;font-size:40px;">Planujesz kupić:</div>
        <div style="width:100%;text-align:center;font-size:30px;">
        <?php
            require_once('connect.php');
            $id=$_GET['id'];
            $sql = "SELECT * FROM produkty where id_produktu=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo $row['nazwa'];
                }
            } 
            $conn->close();
        ?>

        <form action="b_post.php" method="POST" style="position:absolute;left:50%;transform: translate(-50%, 0);">
            
        
        <input name="ilosc" placeholder="Ilość" id="count"><br>
            
        
            <input name="id" style="visibility:hidden" value="<?php echo $_GET['id'] ?>"><br>
            <input name="adres" placeholder="Adres"><br>
            <input name="kod" placeholder="Kod pocztowy(xx-xxx)"><br>
            <input name="miejscowosc" placeholder="Miasto"><br>
            <input name="ad" placeholder="Imie oraz nazwisko"><br>


            <button type="submit" class="button button2" style="width:150px;">Kup</div>
        </form>
    
    
    
    
        </div>



    </body>




</html>