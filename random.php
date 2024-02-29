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

    if ($_SERVER["REQUEST_METHOD"] == "POST")

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
    }

    /* function to generate a random card
    function generateCard()
    {
        return rand(1, 13);
    } */

    // function to determine if the third card is between the first two cards
    function isBetween($card1, $card2, $card3)
    {
        return $card3 > min($card1, $card2) && $card3 < max($card1, $card2);
    }

    // function to calculate the result based on user's choice
    function calculateResult($choice, $num1, $num2, $third_num, &$points)
    {
        if ($num1 === $num2) {
            // equal, player must choose between higher or lower
            if ($third_num > $num1) {
                echo "<p class='text-success'>You win. Enjoy the victory while it lasted The third number $third_num is HIGHER than the first two numbers.</p><p class='text-success'>JACKPOT PRIZE! +50 points</p>";
                $points += 50; // add points for winning
            } elseif ($third_num < $num1) {
                echo "<p class='text-success'>You win. Enjoy the victory while it lasted. The third number $third_num is LOWER than the first two numbers.</p><p class='text-success'>JACKPOT PRIZE! +50 points</p>";
                $points += 50; // Add points for winning
            } else {
                echo "<p class='text-info'>It's a tie. The third number $third_num is equal to the first two numbers.</p>";
            }
        } else {
            // logic for when the first and second numbers are different
            if ($choice === 'bet') {
                if (isBetween($num1, $num2, $third_num)) {
                    $points += 10; // add points for winning
                    return "<p class='text-success'>Good. The number in-between is $third_num!</p>";
                } else {
                    return "<p class='text-danger'>Stay Dead. The number in-between was $third_num!</p>";
                }
            } elseif ($choice === 'pass' || $choice === 'noDeal') {
                echo "<p class='text-danger'>You chose to stay dead.</p>";
                $points = max(0, $points - 5); // deduct 5 points
                return "";
            } elseif ($choice === 'higher' || $choice === 'lower') {
                if (($choice === 'higher' && $third_num > $num1) ||
                    ($choice === 'lower' && $third_num < $num1)
                ) {
                    $points += 10; // add points for winning
                    return "<p class='text-success'>You WIN! The third number $third_num is $choice than the first two numbers.</p>";
                } else {
                    return "<p class='text-danger'>You LOSE! The third number $third_num is not $choice than the first two numbers.</p>";
                }
            }
        }
    }


    // initialize or retrieve total points from session
    $points = isset($_SESSION['points']) ? $_SESSION['points'] : 0;

    // get the current round number
    $currentRound = isset($_POST['currentRound']) ? $_POST['currentRound'] : 1;

    // check if the user clicked the "Next Round" button
    if (isset($_POST['nextRound'])) {
        $currentRound++;
    }

    // limit the game to 10 rounds, add other rounds pa depending sa choice ng player
    if ($currentRound < 10) {
        // Check if the user has submitted their choice
        $choiceSubmitted = isset($_POST['choice']);

        // display the game for the current round
        echo "<div class='mb-4'>";
        echo "<h4>Round $currentRound</h4>";
        echo "<p>First Card: $card1</p>";
        echo "<p>Second Card: $card2</p>";
        echo "<p>Third Card: $card3</p>";

        // show form to choose between DEAL or DEAD if the user hasn't submitted their choice yet
        if (!$choiceSubmitted) {
            echo "<form method='post'>";
            echo "<input type='hidden' name='card1' value='$card1'>";
            echo "<input type='hidden' name='card2' value='$card2'>";
            echo "<input type='hidden' name='card3' value='$card3'>";
            echo "<input type='hidden' name='currentRound' value='$currentRound'>";

            // if first and second cards are the same, show HIGHER or LOWER buttons
            if ($card1 === $card2) {
                echo "<button type='submit' name='choice' value='higher' class='btn btn-higher custom-btn'>HIGHER</button>";
                echo "<button type='submit' name='choice' value='lower' class='btn btn-lower custom-btn'>LOWER</button>";
            } else {
                // otherwise, show DEAL or DEAD buttons
                echo "<button type='submit' name='choice' value='bet' class='btn btn-bet custom-btn'>DEAL</button>";
                echo "<button type='submit' name='choice' value='pass' class='btn btn-pass custom-btn'>DEAD</button>";
            }

            echo "</form>";
        } else {
            // if the user has submitted their choice, calculate the result and display it
            $result = calculateResult($_POST['choice'], $card1, $card2, $card3, $points);
            echo $result;
        }

        echo "</div>";

        // display total points
        echo "<div class=\"score-container\">";
        echo "<h4>SCORE: $points</h4>";
        echo "</div>";

        // display the "Next Round" button if the user has submitted their choice
        if ($choiceSubmitted) {
            echo "<form method='post'>";
            echo "<input type='hidden' name='currentRound' value='$currentRound'>";
            echo "<button type='submit' name='nextRound' class='btn btn-next custom-btn'>Next Round</button>";
            echo "</form>";
        }
    } else {
        // If maximum rounds are reached, display the game over message and retry button
        echo "<p class='text-info'>Game Over. Stay Dead.</p>";
        echo "<form method='post'>";
        echo "<button type='submit' name='retry' class='btn btn-retry custom-btn'>Retry</button>";
        echo "<a href='index.php' class='btn btn-menu custom-btn'>Main Menu</a>";
        echo "</form>";
    }

    // retry logic
    if (isset($_POST['retry'])) {
        // reset the current round, total score, and session
        $points = 0;
        $currentRound = 0;
        $_SESSION['points'] = 0;
    } else {
        // store total points in session
        $_SESSION['points'] = $points;
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
