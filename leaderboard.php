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
            <p class="text-center">LeaderBoard</p>
        </div>

        <div class="col-12 col-md-10">
            <div class="container">

                <div class="row">
                    <div class="trinity col-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col-2">
                                <p class="text-center">1st</p>
                                <img src="assets/img/icons/crown.svg" alt="royalty" class="positionIcon">
                            </div>
                            <div class="col-10 row">
                                <div class="col-12">
                                    <img src="holder.js/300x200" alt="" class="rounded-cirle">
                                </div>
                                <div class="col-12">
                                    <p class="text-center">
                                        Person name
                                    </p>
                                    <p class="text-center">
                                        Time
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trinity col-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col-2">
                                <p class="text-center">2nd</p>
                                <img src="assets/img/icons/silver.svg" alt="royalty" class="positionIcon">
                            </div>
                            <div class="col-10 row">
                                <div class="col-12">
                                    <img src="holder.js/300x200" alt="" class="rounded-cirle">
                                </div>
                                <div class="col-12">
                                    <p class="text-center">
                                        Person name
                                    </p>
                                    <p class="text-center">
                                        Time
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trinity col-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col-2">
                                <p class="text-center">3rd</p>
                                <img src="assets/img/icons/bronze.svg" alt="royalty" class="positionIcon">
                            </div>
                            <div class="col-10 row">
                                <div class="col-12">
                                        <img src="holder.js/300x200" alt="" class="rounded-cirle">
                                    </div>
                                    <div class="col-12">
                                        <p class="text-center">
                                            Person name
                                        </p>
                                        <p class="text-center">
                                            Time
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="top10 col-12 row">
                        <div class="col-1 text-center">4</div>
                        <div class="col-8">
                            <img src="" alt="">
                        </div>
                        <div class="col-3 text-center">Record Time</div>
                    </div>
                    <div class="top10 col-12 row">
                        <div class="col-1 text-center">5</div>
                        <div class="col-8">
                        <img src="" alt="">
                        </div>
                        <div class="col-3 text-center">Record Time</div>
                    </div>
                    <div class="top10 col-12 row">
                        <div class="col-1 text-center">6</div>
                        <div class="col-8">
                        <img src="" alt="">
                        </div>
                        <div class="col-3 text-center">Record Time</div>
                    </div>
                    <div class="top10 col-12 row">
                        <div class="col-1 text-center">7</div>
                        <div class="col-8">
                        <img src="" alt="">
                        </div>
                        <div class="col-3 text-center">Record Time</div>
                    </div>
                    <div class="top10 col-12 row">
                        <div class="col-1 text-center">8</div>
                        <div class="col-8">
                        <img src="" alt="">
                        </div>
                        <div class="col-3 text-center">Record Time</div>
                    </div>
                    <div class="top10 col-12 row">
                        <div class="col-1 text-center">9</div>
                        <div class="col-8">
                        <img src="" alt="">
                        </div>
                        <div class="col-3 text-center">Record Time</div>
                    </div>
                    <div class="top10 col-12 row">
                        <div class="col-1 text-center">10</div>
                        <div class="col-8">
                        <img src="" alt="">
                        </div>
                        <div class="col-3 text-center">Record Time</div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12 col-md-2">
            <a href="<?php echo $_GET['game'].'.php'?>" class="btn btn-primary">Start Game</a>
        </div>

    </div>
    <script src="lib/js/holder/holder.js"></script>
</body>
</html>