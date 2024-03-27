<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $allMovies = array(
        "monkeyplanet",
    );

    $SearchRequest = $_POST["SearchRequest"];

    foreach (str_split($SearchRequest) as $letter) {
        echo $letter;
    }
    ?>
</body>

</html>