<?php
// welcome code based on https://www.youtube.com/watch?v=NXAHkqiIepc
session_start();
if (!isset($_SESSION['user'])) {
  header('location:login.php');
  exit();
}
?>

<!-- Original Code from Yenni Lam https://repl.it/@yennilam/webCamS-->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Welcome, <?php echo $_SESSION['user']; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="icon" href="images/favicon.ico">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
  </script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
  </script> -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.carousel-item {
  height: 40vh;
  min-height: 200px;
  margin-top: 50px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
h4 {
  text-align: center;
  font-size: 40px;
  font-family: 'Montserrat', sans-serif;
  color: #021631;
  padding: 20px;
  padding-top: 40px;
}
.btn-primary {
	background-color: #021631 !important;
  border-color: #021631 !important;
}
.btn-primary:hover {
	background-color: #002B79 !important;
  border-color: #002B79 !important;
}
</style>
<body>
  <!--  navbar  on the top  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #021631 !important;">
  <div class="container">
    <a class="navbar-brand" href="#">Chatroom Adventures</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/chatroom/about.php">About the Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/chatroom/logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--  navbar  (can change the navbar ) -->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
      <div class="carousel-inner" role="listbox" style=" width:100%; height: 400px !important;">
     <!--div class="carousel-inner" role="listbox"-->
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active">
         <img src="images/slideshow-1.jpg" style = "filter: blur(5px);" class="d-block w-100" alt="9 to 5 story">
        <div class="carousel-caption d-none d-md-block" style="background-color: rgba(53,49,117, 0.6)" >
          <h3 class="display-4"><b>What is Chatroom Adventures?</b></h3>
          <p class="lead"><b>Chatroom Adventures is a "choose-your-own-adventure" web application where YOU choose how the story goes. <br>
            Choose your options, make friends or foes, the sky's the limit.</b></p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" >
         <img src="images/slideshow-1.jpg" style = "filter: blur(3px);" class="d-block w-100" alt="9 to 5 story">
        <div class="carousel-caption d-none d-md-block" style="background-color: rgba(53,49,117, 0.6)" >
          <h3 class="display-4"><b>How Do I Play?</b></h3>
          <p class="lead"><b>It's easy! Simply choose the option that fits you the best for each scenario!<br>
            Can't play it all in one sitting? Save your current status at any time and come back when you're ready to play again!</b></p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" >
          <img src="images/slideshow-1.jpg" style = "filter: blur(3px);" class="d-block w-100" alt="9 to 5 story">
        <div class="carousel-caption d-none d-md-block" style="background-color: rgba(53,49,117, 0.6)" >
          <h3 class="display-4"><b>Stay Tuned!</b></h3>
          <p class="lead"><b>We currently have one game available right now.<br>But we are planning on making more. Soon, you'll have different adventures to choose from!</b></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
<!-- image for story  -->
<h4>Choose how your story ends.</h4>
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="images/9to5.jpg" alt="default">
    <div class="card-body">
      <h5 class="card-title">The 9 to 5</h5>
      <p class="card-text">You're a newly hired intern working for The Collective Intelligence Company (CIC). CIC believes the best way to advance is to make sure everything is in order and everyone is collaborating well. That's sounds pretty great, until...</p>
      <div class= "play-button" style="margin: 0 auto; width: 420px; text-align: center;">
       <a href="http://localhost/chatroom/the9to5/game.php" class="btn btn-primary">Start Game</a>
       <a href="http://localhost/chatroom/the9to5/game-1.php" class="btn btn-primary btn-md pull-right">Continue Game</a>
     </div>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/allie.jpg" alt="default">
    <div class="card-body">
      <h5 class="card-title">My Name is Allie</h5>
      <p class="card-text">Your professor wants you to test out his application when you meet another tester on the server. Her name is Allie, and she wants to be your friend. But who is she? What is she?</p>
    </div>
    <div class="card-footer">
      <small class="text-muted" style="padding-left: 200px;">Coming soon!!!</small>
    </div>
<!--     <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div> -->
  </div>
  <div class="card">
    <img class="card-img-top" src="images/coming-soon.jpg" alt="default">
    <div class="card-body">
      <h5 class="card-title">Coming Soon</h5>
      <p class="card-text">We're sorry, but this game is currently not available right now. Come back next time and see if this game is available tomorrow.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted" style="padding-left: 200px;">Coming soon!!!</small>
    </div>
  </div>
</div>
<!-- Page Content -->
<section class="py-5">
    <h8 class="lead">This webpage belongs to CMPE 133 Team 1 @ SJSU. </h8>
</section>
</body>
</html>
