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
        "the equalizer" => "banner 001.jpg",
        "the martian" => "banner 002.jpg",
        "despicable me" => "banner 003.jpg",
        "ome cor" => "banner 004.jpg",
        "gemini man" => "banner 005.jpg",
        "happy single" => "banner 006.jpg",
        "top gun" => "banner 007.jpg",
        "minions" => "banner 008.jpg",
        "sniper" => "banner 009.jpg",
        "the silencing" => "banner 010.jpg",
        "grand turismo" => "banner 011.jpg",
        "leave the world behind" => "banner 012.jpg",
        "no hard feelings" => "banner 013.jpg",
        "shooter" => "banner 014.jpg",
        "paw patrol" => "banner 015.jpg",
        "damsel" => "banner 016.jpg",
        "extraction" => "banner 017.jpg",
        "the mother" => "banner 018.jpg",
        "leo" => "banner 019.jpg",
        "rebel moon" => "banner 020.jpg",
        "de vuurlinie" => "banner 021.jpg",
        "irish wish" => "banner 022.jpg",
        "the abyss" => "banner 023.jpg",
        "faithfully yours" => "banner 024.jpg",
        "red eye" => "banner 025.jpg",
        "stillwater" => "banner 026.jpg",
        "the memory game" => "banner 027.jpg",
        "eye for an eye" => "banner 028.jpg",
        "operation kandahar" => "banner 029.jpg",
        "american assassin" => "banner 030.jpg",
        "sonic" => "banner 031.jpg",
        "beentjes" => "banner 032.jpg",
        "meangirls" => "banner 033.jpg",
        "lift" => "banner 034.jpg",
        "hidden stroke" => "banner 035.jpg",
        "blood and gold" => "banner 036.jpg"
    );

    if (isset($_POST["SearchRequest"])) {
        $SearchRequest = $_POST["SearchRequest"];
        foreach ($allMovies as $movie => $banner) {
            if (strtolower($SearchRequest) == strtolower($movie)) {
                echo '<img src="../imgs/banners/'.$banner.'"/>';    
            }
        }
    }

    ?>
</body>

</html>
