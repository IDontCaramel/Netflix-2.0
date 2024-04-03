<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html">
                <img src="../imgs/logo.png" alt="" width="100" height="40">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Link</a>
                    </li>

                </ul>
                <form class="d-flex" action="Php/Searchbar.php" method="post">
                    <input class="form-control me-2" type="text" name="SearchRequest" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
            <div>
                <img class="User" src="imgs/Netflix-avatar.png" alt="">
            </div>
        </div>
    </nav>

    <?php

    $allMovies = array(
        "the equalizer" => "/Romance/HappySingle.jpg",
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
                echo '<div class="container-fluid d-flex justify-content-center align-items-start vh-100" style="margin-top: 150px;">
                        <div class="card text-white bg-dark" style="width: 30rem;">
                            <img src="../imgs/' . $banner . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">' . $movie . '</h5>
                                <p class="card-text">Some information about the movie.</p>
                                <a href="#" class="btn btn-primary">Watch movie!</a>
                            </div>
                        </div>
                    </div>';
            }
        }
    }
    
    ?>

</body>

<style>
    body {
        background-color: black;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/less"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</html>