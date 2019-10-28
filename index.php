<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'header.php'; ?>
    <link rel="stylesheet" href="lib/css/choice.css">
    <title>Game Chooser</title>
</head>
<body>
    <!-- Let User Choose Game To Play -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-3">
                    Please Select A Game
                </h1>
            </div>
            <div class="col-12 col-md-6 gameChoice">
                <p class="text-center">
                    InkSpace
                </p>
                <img src="assets/img/gameIcons/inkspace.png" alt="inkspace game" class="img">
                <a href="leaderboard.php?game=inkspace" class="btn btn-primary continueBtn">Continue</a>
            </div>
            <div class="col-12 col-md-6 gameChoice">
                <p class="text-center">
                    Galaxy Shooter
                </p>
                <img src="assets/img/gameIcons/stargame.gif" alt="star shooting game" class="img">
                <a href="leaderboard.php?game=stargame" class="btn btn-primary continueBtn">Continue</a>                
            </div>
        </div>
    </div>
    
</body>
</html>