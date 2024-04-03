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
        "blood gold" => "/Action/BloodGold.jpg",
        "geminiman" => "/Action/Geminiman.jpg",
        "hidden strike" => "/Action/HiddenStrike.jpg",
        "narvik" => "/Action/Narvik.jpg",
        "shooter" => "/Action/Shooter.jpg",
        "sniper ultimate kill" => "/Action/SniperUltimateKill.jpg",
        "taken 3" => "/Action/Taken3.jpg",
        "the equalizer 3" => "/Action/TheEqualizer3.jpg",
        "top gun maverick" => "/Action/TopGunMaverick.jpg",
        "big george" => "/Comedy/BigGeorgeForeMan.jpg",
        "casa coco" => "/Comedy/CasaCoco.jpg",
        "despicabelme" => "/Comedy/Despicableme.jpg",
        "liefde zonder grenzen" => "/Comedy/LiefdeZonderGrenzen.jpg",
        "lift" => "/Comedy/Lift.jpg",
        "minions" => "/Comedy/Minions.jpg",
        "no pressure" => "/Comedy/NoPressure.jpg",
        "sing" => "/Comedy/Sing.jpg",
        "spider man" => "/Comedy/SpiderMan.jpg",
        "beentjes" => "/ForTheFamily/Beentjes.jpg",
        "boos baby" => "/ForTheFamily/Bossbaby.jpg",
        "chicken run" => "/ForTheFamily/ChickenRun.jpg",
        "ford v ferrai" => "/ForTheFamily/FordvFerrai.jpg",
        "granturismo" => "/ForTheFamily/GranTurismo.jpg",
        "heaven is for real" => "/ForTheFamily/HeavenisforReal.jpg",
        "leo" => "/ForTheFamily/Leo.jpg",
        "paw patrol" => "/ForTheFamily/PawPatrol.jpg",
        "pets" => "/ForTheFamily/Pets.jpg",
        "sonic 2" => "/ForTheFamily/Sonic2.jpg",
        "a Beautiful" => "/Romance/ABuatiful.jpg",
        "happy single" => "/Romance/HappySingle.jpg",
        "irish wish" => "/Romance/IrishWish.jpg",
        "lady chatter" => "/Romance/LadyChatterleysLover",
        "meangirls" => "/Romance/MeanGirls.jpg",
        "nohardfeelings" => "/Romance/NoHardFeelings.jpg",
        "the proposal" => "/Romance/Theproposal.jpg",
        "toscana" => "/Romance/Toscana.jpg",
        "your place or mine" => "/Romance/YouPlaceOrmine.jpg",
        "eye for an eye"=> "/Thriller/EyeForanEye.jpg",
        "faithfully your"=> "/Thriller/Faithfullyour.jpg",
        "Leave the word behind"=> "/Thriller/LeaveTheWorldBehind.jpg",
        "prey for the devil"=> "/Thriller/PreyFortheDevil.jpg",
        "still water"=> "/Thriller/Stillwater.jpg",
        "The abyss"=> "/Thriller/TheAbyss.jpg",
        "the memory game"=> "/Thriller/TheMemoryGame.jpg",
        "the mother"=> "/Thriller/TheMother.jpg",
        "the silencing"=> "/Thriller/TheSilencing.jpg",
        "viking wolf"=> "/Thriller/VikingWolf.jpg",
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

<style type="text/css">
::-webkit-scrollbar {
  width: 12px;
  height: 12px;
}
::-webkit-scrollbar-button {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background: #333333;
  border: 0px none #ffffff;
  border-radius: 50px;
}
::-webkit-scrollbar-thumb:hover {
  background: #ffffff;
}
::-webkit-scrollbar-thumb:active {
  background: #000000;
}
::-webkit-scrollbar-track {
  background: #666666;
  border: 0px none #ffffff;
  border-radius: 50px;
}
::-webkit-scrollbar-track:hover {
  background: #666666;
}
::-webkit-scrollbar-track:active {
  background: #333333;
}
::-webkit-scrollbar-corner {
  background: transparent;
}
</style>

<script src="https://cdn.jsdelivr.net/npm/less"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</html>