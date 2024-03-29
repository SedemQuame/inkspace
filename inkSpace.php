<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php include_once 'header.php'; ?>
  <title>Inkspace</title>
  </head>
  <body class="container">
    <div id="confetti" class="msgBox row">
      <h1 class="text-center">Congratulations</h1>
      <p class="text-center">Time</p>
      <p id="finishingTime" class="text-center"> 00:00:00 </p>
      <a onclick="nextLevel()" href="#" class="btn playagain">Proceed To Next Level</a>
    </div>

    <div id="inkSpace" class="row">
      <div class="col-12 offset-md-2 col-md-8 offset-lg-3 col-lg-6 head wrapper">
        <p class="header-text text-center text-uppercase">InkSpace</p>
        <p id="timer" class="timer-text text-center">00:00:00</p>
        <p id="levelIndicator" class="text-center">Level 0</p>
      </div>

      <div id="gameboard" class="col-12 offset-md-1 col-md-10 offset-md-1 offset-lg-2 col-lg-8 offset-lg-2 board wrapper"></div>

      <div class="col-12 offset-md-2 col-md-8 offset-lg-3 col-lg-6 controls">
        <button onclick="" class="btn" type="submit" name="button">Quit</button>
      </div>
    </div>


    <!-- Custom Javascript -->
    <!-- Main.js Timer.js-->
    <script src="lib/js/confetti.js"></script>
    <script src="lib/js/main.js" charset="utf-8"></script>
    <script src="lib/js/timer.js" charset="utf-8"></script>
<!-- 
    <audio id="audioObj" loop src="assets/audio/sweeper.mp3">
       Your browser does not support the <code>audio</code> element.
    </audio> -->

    <!-- Optional Javascript -->
    <!-- Jquery, PopperJs, Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
