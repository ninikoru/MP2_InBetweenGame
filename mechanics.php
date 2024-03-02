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
    <title>DoD | MECHANICS</title>
    <style>
        body {
            background-color: #1a1a1a;
            text-align:center;
            color: #fff;
            margin-top: 0%;
        }

        .container {
            margin-top: 0%;
        }

        p {
            margin: 0%;
            margin-top: 0.2px;
            margin-bottom: 0.2px;
            padding: 0;
            font-size: 17px;
            font-family: "IM Fell English", serif;
            text-align: justify;
        }

        h1 {
            font-size: 50px;
            margin-top: 3%;
            font-family: "IM Fell English", serif;
            color: darkred;
        }

        h2 {
            margin-top: 0%;
            font-size: 30px;
            font-family: "IM Fell English", serif;
            color: darkred;
            text-align: justify;
        }

        button {
            margin-top: 0%;
            text-align: center;
            padding: 10px 20px;
            font-size: 15px;
            background-color: darkred;
            color: #fff;
            border: none;
            cursor: pointer;
            font-family: "IM Fell English", serif;
        }
    </style>
</head>

<body>
<div class='container'>
    <h1>How To Play In-Between Game</h1><br>
    <h2>Cards</h2>
    <p>A, 2, 3, 4, 5, 6, 7, 8, 9, 10, Joker, Queen, King</p>
    <h2>Objective</h2>
    <p>Accumulate points by successfully predicting whether the next drawn card falls in between the values of the two initial cards. The goal is to win and escape hell. A word of advice: Don't let greed get to you, it's as easy to lose as it is to win in this game.</p>
    <h2>The Good, The Bet and The Ugly</h2>
    <p>The player now has to decide if the next card will have a value that's in-between the two cards. On a player's turn:
        They predict whether the next drawn card's value will fall between the values of their two initial cards.
        If they choose "Deal," they draw a card from the deck.
        If the drawn card's value is in between the two initial cards, the player's life remains.
        If a drawn card's value matches one of the initial cards or is outside the range, the player loses 1 out of 3 lives.</p>
    <h2>Example</h2>
    <p>Player 1 is dealt a 5 of Spades and a 9 of Spades.
        Player 1 chooses "DEAL."
        Player 1 draws a 7 of Spades.
        The prediction is correct, so Player 1 does not lose a life.</p>
    <h2>Example 2</h2>
    <p>Player 1 is dealt a A of Spades and a 3 of Spades.
        Player 1 chooses "DEAD."
        Player 1 draws a 2 of Spades.
        The prediction is correct, HOWEVER, they chose "DEAD", so Player 1 loses a life since the drawn card is in-between the two initial cards.</p>
    <h2>Example 3</h2>
    <p>Player 1 is dealt a 6 of Spades and another 6 of Spades.
        Player 1 will get to choose "HIGHER" or "LOWER".
        Player 1 chooses "HIGHER".
        Player 1 draws a 7 of Spades.
        The drawn card is indeed higher than the initial cards, so Player 1 does not lose a life.</p><br>

    <a href="index.php">
        <button class="btn-mm">BACK TO MAIN MENU</button>
    </a>

    </div>
</body>
</html>