<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English:ital@0;1&display=swap" rel="stylesheet">  
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $card1 = (rand(1,13));
        $card2 = (rand(1,13));
        $card3 = (rand(1,13));

        echo "$card1, $card2";

        //CARD 1

        if ($card1 == 1) {

            echo "<img src='images/DoD_A.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card1 == 2) {

            echo "<img src='images/DoD_2.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card1 == 3) {

            echo "<img src='images/DoD_3.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card1 == 4) {

            echo "<img src='images/DoD_4.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card1 == 5) {

            echo "<img src='images/DoD_5.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card1 == 6) {

            echo "<img src='images/DoD_6.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card1 == 7) {

            echo "<img src='images/DoD_7.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card1 == 8) {

            echo "<img src='images/DoD_8.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card1 == 9) {

            echo "<img src='images/DoD_9.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card1 == 10) {

            echo "<img src='images/DoD_10.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card1 == 11) {

            echo "<img src='images/DoD_joker.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card1 == 12) {

            echo "<img src='images/DoD_queen.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card1 == 13) {

            echo "<img src='images/DoD_king.jpg' class='img-card' width='320' height='470'>";

        }

        //CARD 2

        if ($card2 == 1) {

            echo "<img src='images/DoD_A.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card2 == 2) {

            echo "<img src='images/DoD_2.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card2 == 3) {

            echo "<img src='images/DoD_3.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card2 == 4) {

            echo "<img src='images/DoD_4.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card2 == 5) {

            echo "<img src='images/DoD_5.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card2 == 6) {

            echo "<img src='images/DoD_6.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card2 == 7) {

            echo "<img src='images/DoD_7.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card2 == 8) {

            echo "<img src='images/DoD_8.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card2 == 9) {

            echo "<img src='images/DoD_9.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card2 == 10) {

            echo "<img src='images/DoD_10.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card2 == 11) {

            echo "<img src='images/DoD_joker.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card2 == 12) {

            echo "<img src='images/DoD_queen.jpg' class='img-card' width='320' height='470'>";

        }

        else if ($card2 == 13) {

            echo "<img src='images/DoD_king.jpg' class='img-card' width='320' height='470'>";

        }

        if ($card1 != $card2) {

            echo"
            <form action='random.php' method='post'>
            <button type='submit' class='btn-deal'><b><img src='images/DoD_deal.png'></b></button>
            <button type='submit' class='btn-dead'><b><img src='images/DoD_dead.png'></b></button>
            </form>
            ";
        }

    }



    else {
        header("Location: index.php");
        exit();
    }
    
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>