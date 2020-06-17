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

        #class{
            width:100%;
            text-align:center;
            margin-top:200px;

        }
    
    </style>
   
    </head>

    <body>
        <div class="top_bar">  
            <a href="onas.php"><div class="menu" href="#">O Nas</div></a>
            <a href="index.php"><div class="menu" href="#">Kontakt</div></a>
            <a href="shop.php"><div class="shop" href="#">Produkty</div></a>
            <a href="cart.php"><div class="cart" href="#">Koszyk</div></a>
        </div>
        

        <div class="hello" style="font-size:40px;">W Twoim koszyku:</div>
        <?php
        require_once("connect.php");
        $price=0;
            if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
                for($i=0;$i<count($_SESSION['cart']);$i++){
                    $id_to=$_SESSION['cart'][$i];
                    $sql = "SELECT * FROM produkty WHERE id_produktu=$id_to";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div style="width:100%;margin:auto;text-align:center;">
                                     <div style="width=100%;text-align:center;font-size:30px;display:inline-block;">'.$row['nazwa'].'</div>
                                     <a href="delete_from.php?element='.$i.'">
                                        <div style="border:1px solid black;width:50px;text-align:center;display:inline-block;color:black">Usuń</div>
                                    </a>
                                  </div>';
                            $price_prod=floatval($row['cena']);
                            $price=$price+$price_prod;
                        }
                    }
                }
                echo '<div style="width:100%;text-align:center;margin-top:20px;font-size:30px;">Zapłacisz '.$price.'</div>';
            }else{
                echo '<div style="width:100%;text-align:center;margin-top:20px;">Twój koszyk jest pusty...</div>';
            }
           
        ?>

        <?php
            if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
         echo'   <form action="cart_post.php" method="POST" style="position:absolute;left:50%;transform: translate(-50%, 0);margin-top:20px;">
                <input name="adres" placeholder="Adres" style="width:250px;"><br>
                <input name="kod" placeholder="Kod pocztowy(xx-xxx)" style="width:250px;"><br>
                <input name="miejscowosc" placeholder="Miasto" style="width:250px;"><br>
                <input name="ad" placeholder="Imie oraz nazwisko" style="width:250px;"><br>


                <button type="submit" class="button button2" style="position:absolute;left:50%;transform: translate(-50%, 0);width:150px;">Kup</div>
            </form>';
            }
        ?>



    </body>




</html>