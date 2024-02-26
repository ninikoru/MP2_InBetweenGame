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
    <title>Mechanics</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #fff;

        }

        p {
            margin: 0;
            padding: 0;
            font-size: 20px;
            margin-bottom: 15px;
            font-family: "IM Fell English", serif;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 20px;
            font-family: "IM Fell English", serif;
            color: darkred;
        }

        h2 {
            font-size: 28px;
            margin-bottom: 10px;
            font-family: "IM Fell English", serif;
            color: darkred;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 20px;
            background-color: darkred;
            color: #fff;
            border: none;
            cursor: pointer;
            font-family: "IM Fell English", serif;

        }
    </style>
</head>

<body>
    <h1>How To Play In-Between Game</h1>
    <h2>Rank of Cards</h2>
    <p>A (high), K, Q, J, 10, 9, 8, 7, 6, 5, 4, 3, 2.</p>
    <h2>Objective</h2>
    <p>Accumulate points by successfully predicting whether the next drawn card falls in between the values of the two initial cards. The goal is to win and escape hell. A word of advice: don't let greed get to you – it's as easy to lose as it is to win in this game.</p>
    <h2>The Good, The Bet and The Ugly</h2>
    <p>The player now has to decide if the next card will have a value that's in-between the two cards. On a player's turn:
        They predict whether the next drawn card's value will fall between the values of their two initial cards.
        If they choose "Deal," they draw a card from the deck.
        If the drawn card's value is in between the two initial cards, the player gets to the next level.
        The drawn card becomes one of the player's new initial cards for the next turn.
        If the drawn card's value matches one of the initial cards or is outside the range, you will get thrown down again to the lowest level of hell.</p>
    <h2>Example</h2>
    <p>Player 1 is dealt a 5 of Hearts and a 9 of Spades.
        Player 1 predicts "In Between."
        Player 1 draws a 7 of Diamonds.
        The prediction is correct, so Player 1 earns 1 point.
        The 7 of Diamonds replaces the 5 of Hearts as one of Player 1's initial cards.</p>

    <a href="random.php">
        <button>I'M READY</button>
    </a>

    <a href="index.php">
        <button>BRING ME BACK TO MAIN MENU</button>
    </a>

</body>

</html>
