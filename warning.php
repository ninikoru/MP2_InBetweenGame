<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WARNING</title>
    <h1>Be Careful. You only have 1 life left.</h1>


    <?php
    session_start();
    $previousPage = $_SESSION['previous_page'] ?? '';
    ?>

    <button onclick="javascript:history.back();" class="button">CONTINUE</button>
</head>

<body>

</body>

</html>