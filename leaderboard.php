<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'header.php'; ?>
    <link rel="stylesheet" href="lib/css/leaderBoard.css">
    <title>LeaderBoard</title>
</head>
<body>
    <div class="row">
    
        <div class="leaderBoard col-12">
            <h1 class="text-left header-text">LeaderBoard</h1>
        </div>
        <br>

        <div class="col-12 col-md-10">
            <div class="container">

                <div class="row">
                    <div class="trinity col-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col-3">
                                <p class="numbering3 text-center">1st</p>
                                <img src="assets/img/icons/crown.svg" alt="royalty" class="positionIcon">
                            </div>
                            <div class="col-9 row">
                                <div class="col-12">
                                    <img src="assets/img/profiles/steve_jobs.jpg" alt="" class="topThree rounded-cirle">
                                </div>
                                <div class="col-12">
                                    <p class="top3Names text-center">
                                        Steve Jobs
                                    </p>
                                    <p class="top3Records text-center">
                                        1: 06: 234
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trinity col-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col-3">
                                <p class="numbering3 text-center">2nd</p>
                                <img src="assets/img/icons/silver.svg" alt="royalty" class="positionIcon">
                            </div>
                            <div class="col-9 row">
                                <div class="col-12">
                                    <img src="assets/img/profiles/mandela.jpg" alt="" class="topThree rounded-cirle">
                                </div>
                                <div class="col-12">
                                    <p class="top3Names text-center">
                                        Nelson Mandela
                                    </p>
                                    <p class="top3Records text-center">
                                        1: 21:076
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trinity col-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col-3">
                                <p class="numbering3 text-center">3rd</p>
                                <img src="assets/img/icons/bronze.svg" alt="royalty" class="positionIcon">
                            </div>
                            <div class="col-9 row">
                                <div class="col-12">
                                        <img src="assets/img/profiles/albert_einstein.jpg" alt="" class="topThree rounded-cirle">
                                    </div>
                                    <div class="col-12">
                                        <p class="top3Names text-center">
                                            Albert Einstein
                                        </p>
                                        <p class="top3Records text-center">
                                            1: 37: 00
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="top10 col-12 row">
                        <div class="numbering col-1 text-center">4</div>
                        <div class="col-2">
                            <img class="runnerUps" src="assets/img/profiles/mansa_musa.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <p class="text-center">Mansa Musa</p>
                        </div>
                        <div class="col-3 text-center">1: 41: 00</div>
                    </div>
                    <div class="top10 col-12 row">
                        <div class="numbering col-1 text-center">5</div>
                        <div class="col-2">
                            <img class="runnerUps" src="assets/img/profiles/barack_obama.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <p class="text-center">Barack Obama</p>
                        </div>
                        <div class="col-3 text-center">1: 47: 345</div>
                    </div>
                    <div class="top10 col-12 row">
                        <div class="numbering col-1 text-center">6</div>
                        <div class="col-2">
                            <img class="runnerUps" src="assets/img/profiles/adolf_hitler.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <p class="text-center">Adolf Hilter</p>
                        </div>
                        <div class="col-3 text-center">02: 01: 177</div>
                    </div>
                    <div class="top10 col-12 row">
                        <div class="numbering col-1 text-center">7</div>
                        <div class="col-2">
                            <img class="runnerUps" src="assets/img/profiles/idi_amin.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <p class="text-center">Idi Amin</p>
                        </div>
                        <div class="col-3 text-center">02: 05: 24</div>
                    </div>
                    <div class="top10 col-12 row">
                        <div class="numbering col-1 text-center">8</div>
                        <div class="col-2">
                            <img class="runnerUps" src="assets/img/profiles/patrice_lumubar.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <p class="text-center">Patrice Lumumbar</p>
                        </div>
                        <div class="col-3 text-center">02: 07: 98</div>
                    </div>
                    <div class="top10 col-12 row">
                        <div class="numbering col-1 text-center">9</div>
                        <div class="col-2">
                            <img class="runnerUps" src="assets/img/profiles/abraham_lincoln.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <p class="text-center">Abraham Lincoln</p>
                        </div>
                        <div class="col-3 text-center">02: 13: 99</div>
                    </div>
                    <div class="top10 col-12 row">
                        <div class="numbering col-1 text-center">10</div>
                        <div class="col-2">
                            <img class="runnerUps" src="assets/img/profiles/martin_luther.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <p class="text-center">Martin luther king</p>
                        </div>
                        <div class="col-3 text-center">02: 21: 177</div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12 col-md-2">
            <?php
                if($_GET['game'] == "inkSpace"){
                    echo '<a href="'.$_GET['game'].'.php" class="btn btn-primary">Start Game</a>';
                }else{
                    echo '<a href="lib/js/paperjs/examples/Games/Paperoids.html" class="btn btn-primary">Start Game</a>';

                }
            ?>
        </div>

    </div>
    <script src="lib/js/holder/holder.js"></script>
</body>
</html>