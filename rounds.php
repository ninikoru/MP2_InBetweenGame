<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class='container mt-5'><br>
    <h1 class='text-center'>Pick your Round</h1><br>
    <form action="random.php" method='post'>
        <div class='form-group'>
            <input type='radio' id='radio' name='radio' value='easy'>EASY (3 ROUNDS)</input><br>
            <input type='radio' id='radio' name='radio' value='mid'>MID (5 ROUNDS)</input><br>
            <input type='radio' id='radio' name='radio' value='hard'>HARD (10 ROUNDS)</input>
            <input type="hidden" name="round" value="1">
        </div>
        <button type='submit' class='btn'><b>CONTINUE</b></button>
    </form>
    <a href="index.php"><button>BACK</button></a>
    </div>

</body>
</html>