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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DEAL OR DEAD</title>
</head>

<body>

    <?php

$currentRound = 1;
$lives = 3;
        
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $lives = isset($_POST['lives']) ? $_POST['lives'] : $lives;

    if (isset($_POST['currentRound'])) {
        $currentRound = intval($_POST['currentRound']) + 1;
    } else {
        $currentRound = 1;
    }

if ($lives > 0) {

    if(($_POST["radio"]=="easy" && $currentRound <= 3) OR ($_POST["radio"]=="mid" && $currentRound <= 5) OR ($_POST["radio"]=="hard" && $currentRound <= 10)) {

    $card1 = (rand(1, 13));
    $card2 = (rand(1, 13));
    $card3 = (rand(1, 13));

    //CARD 1

    if ($card1 == 1) {

        echo "<img src='images/DoD_A.jpg' class='img-card' width='320' height='470'>";
    } else if ($card1 == 2) {

        echo "<img src='images/DoD_2.jpg' class='img-card' width='320' height='470'>";
    } else if ($card1 == 3) {

        echo "<img src='images/DoD_3.jpg' class='img-card' width='320' height='470'>";
    } else if ($card1 == 4) {

        echo "<img src='images/DoD_4.jpg' class='img-card' width='320' height='470'>";
    } else if ($card1 == 5) {

        echo "<img src='images/DoD_5.jpg' class='img-card' width='320' height='470'>";
    } else if ($card1 == 6) {

        echo "<img src='images/DoD_6.jpg' class='img-card' width='320' height='470'>";
    } else if ($card1 == 7) {

        echo "<img src='images/DoD_7.jpg' class='img-card' width='320' height='470'>";
    } else if ($card1 == 8) {

        echo "<img src='images/DoD_8.jpg' class='img-card' width='320' height='470'>";
    } else if ($card1 == 9) {

        echo "<img src='images/DoD_9.jpg' class='img-card' width='320' height='470'>";
    } else if ($card1 == 10) {

        echo "<img src='images/DoD_10.jpg' class='img-card' width='320' height='470'>";
    } else if ($card1 == 11) {

        echo "<img src='images/DoD_joker.jpg' class='img-card' width='320' height='470'>";
    } else if ($card1 == 12) {

        echo "<img src='images/DoD_queen.jpg' class='img-card' width='320' height='470'>";
    } else if ($card1 == 13) {

        echo "<img src='images/DoD_king.jpg' class='img-card' width='320' height='470'>";
    }

    //CARD 2

    if ($card2 == 1) {

        echo "<img src='images/DoD_A.jpg' class='img-card' width='320' height='470'>";
    } else if ($card2 == 2) {

        echo "<img src='images/DoD_2.jpg' class='img-card' width='320' height='470'>";
    } else if ($card2 == 3) {

        echo "<img src='images/DoD_3.jpg' class='img-card' width='320' height='470'>";
    } else if ($card2 == 4) {

        echo "<img src='images/DoD_4.jpg' class='img-card' width='320' height='470'>";
    } else if ($card2 == 5) {

        echo "<img src='images/DoD_5.jpg' class='img-card' width='320' height='470'>";
    } else if ($card2 == 6) {

        echo "<img src='images/DoD_6.jpg' class='img-card' width='320' height='470'>";
    } else if ($card2 == 7) {

        echo "<img src='images/DoD_7.jpg' class='img-card' width='320' height='470'>";
    } else if ($card2 == 8) {

        echo "<img src='images/DoD_8.jpg' class='img-card' width='320' height='470'>";
    } else if ($card2 == 9) {

        echo "<img src='images/DoD_9.jpg' class='img-card' width='320' height='470'>";
    } else if ($card2 == 10) {

        echo "<img src='images/DoD_10.jpg' class='img-card' width='320' height='470'>";
    } else if ($card2 == 11) {

        echo "<img src='images/DoD_joker.jpg' class='img-card' width='320' height='470'>";
    } else if ($card2 == 12) {

        echo "<img src='images/DoD_queen.jpg' class='img-card' width='320' height='470'>";
    } else if ($card2 == 13) {

        echo "<img src='images/DoD_king.jpg' class='img-card' width='320' height='470'>";
    }

    //CARD 3

    if ($card3 == 1) {

        echo "<img src='images/DoD_A.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else if ($card3 == 2) {

        echo "<img src='images/DoD_2.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else if ($card3 == 3) {

        echo "<img src='images/DoD_3.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else if ($card3 == 4) {

        echo "<img src='images/DoD_4.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else if ($card3 == 5) {

        echo "<img src='images/DoD_5.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else if ($card3 == 6) {

        echo "<img src='images/DoD_6.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else if ($card3 == 7) {

        echo "<img src='images/DoD_7.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else if ($card3 == 8) {

        echo "<img src='images/DoD_8.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else if ($card3 == 9) {

        echo "<img src='images/DoD_9.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else if ($card3 == 10) {

        echo "<img src='images/DoD_10.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else if ($card3 == 11) {

        echo "<img src='images/DoD_joker.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else if ($card3 == 12) {

        echo "<img src='images/DoD_queen.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else if ($card3 == 13) {

        echo "<img src='images/DoD_king.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    }

    //IF CARD 1 AND CARD 2 ARE NOT EQUAL

    if ($card1 != $card2) {


        echo "
        <button type='button' onclick='dealShowAndCheck()' id='img-deal' class='btn-deal'><b><img src='images/DoD_deal.png'></b></button>
        <img src='images/DoD_or.png' id='img-or'>
        <button type='button' onclick='deadShowAndCheck()' id='img-dead' class='btn-dead'><b><img src='images/DoD_dead.png'></b></button>
        ";

        echo "<div id='result'></div>";

        echo "<div id='livesDisplay'>LIVES: {$lives}</div>";

        echo "
        <script>

        var lives = $lives;

            function dealShowAndCheck() {
                var card1 = $card1;
                var card2 = $card2;
                var card3 = $card3;

                document.getElementById('img-card3').style.display = 'block';    
                document.getElementById('img-deal').style.display = 'none';
                document.getElementById('img-or').style.display = 'none';    
                document.getElementById('img-dead').style.display = 'none';

                if (card3 > card1 && card3 < card2 || card3 < card1 && card3 > card2) {
                    document.getElementById('result').innerHTML = 'YOU WIN';
                } else {
                    lives--;
                    document.getElementById('lives').value = lives;
                    document.getElementById('result').innerHTML = 'YOU LOSE';
                    document.getElementById('livesDisplay').innerHTML = 'LIVES: ' + lives;
                }
                document.getElementById('nextRoundForm').style.display = 'block';

            }
            
            function deadShowAndCheck() {
                var card1 = $card1;
                var card2 = $card2;
                var card3 = $card3;

                document.getElementById('img-card3').style.display = 'block';    
                document.getElementById('img-deal').style.display = 'none';
                document.getElementById('img-or').style.display = 'none';    
                document.getElementById('img-dead').style.display = 'none';

                if (card3 > card1 && card3 < card2 || card3 < card1 && card3 > card2) {
                    lives--;
                    document.getElementById('lives').value = lives;
                    document.getElementById('result').innerHTML = 'SHOULD HAVE JUST DEALT WITH IT';
                    document.getElementById('livesDisplay').innerHTML = 'LIVES: ' + lives;
                } else {
                    document.getElementById('result').innerHTML = 'NICE, STAY DEAD';
                }
                document.getElementById('nextRoundForm').style.display = 'block';
            }
        </script>

        ";
 
        if ($_POST['radio']=='easy' && $currentRound <= 3) {

        echo "<form action='' method='post' style='display:none;' id='nextRoundForm'>
        <input type='hidden' name='radio' value='easy'>
        <input type='hidden' name='currentRound' value='{$currentRound}'>
        <input type='hidden' id='lives' name='lives' value='{$lives}'>
        <button type='submit' class='btn'><b>Next Round</b></button>
        </form>
        ";
        }

        else if ($_POST['radio']=='mid' && $currentRound <= 5) {

        
        
         echo "<form action='' method='post' style='display:none;' id='nextRoundForm'>
            <input type='hidden' name='radio' value='mid'>
            <input type='hidden' name='currentRound' value='{$currentRound}'>
            <input type='hidden' id='lives' name='lives' value='{$lives}'>
            <button type='submit' class='btn'><b>Next Round</b></button>
            </form>
        ";
        }

        else if ($_POST['radio']=='hard' && $currentRound <= 10) {
        echo " <form action='' method='post' style='display:none;' id='nextRoundForm'>
            <input type='hidden' name='radio' value='hard'>
            <input type='hidden' name='currentRound' value='{$currentRound}'>
            <input type='hidden' id='lives' name='lives' value='{$lives}'>
            <button type='submit' class='btn'><b>Next Round</b></button>
            </form>
        ";
        }

        
    
}
    //IF CARD 1 AND CARD 2 ARE EQUAL


    /* echo "<img src='images/DoD_5.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } elseif ($card3 == 6) {

        echo "<img src='images/DoD_6.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } elseif ($card3 == 7) {

        echo "<img src='images/DoD_7.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } elseif ($card3 == 8) {

        echo "<img src='images/DoD_8.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } elseif ($card3 == 9) {

        echo "<img src='images/DoD_9.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } elseif ($card3 == 10) {

        echo "<img src='images/DoD_10.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } elseif ($card3 == 11) {

        echo "<img src='images/DoD_joker.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } elseif ($card3 == 12) {

        echo "<img src='images/DoD_queen.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } elseif ($card3 == 13) {

        echo "<img src='images/DoD_king.jpg' id='img-card3' class='img-card' width='320' height='470'>";
    } else {
        header("Location: index.php");
        exit();
    } 


        if ($card1 == $card2) {

            echo "<div id='result'></div>";

            echo "
        <script>
            document.getElementById('img-card3').style.display = 'block';    
            document.getElementById('img-deal').style.display = 'none';
            document.getElementById('img-or').style.display = 'none';    
            document.getElementById('img-dead').style.display = 'none';
            document.getElementById('result').innerHTML = 'YOU LOSE';
        </script>
        ";
        }
    }

    */
    
     else {
        echo "GAME OVER";
    }

}else {
        echo "GAME OVER";
    }

} else { //THIS IS WHEN THE USER LOSES THE GAME
    echo "GAME OVERRRRR!";
}


} else {
    // If not a POST request, start from round 1
    $currentRound = 1;
}
        
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>