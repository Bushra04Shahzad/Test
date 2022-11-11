<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
  <div class="container">
    <a class="navbar-brand" href="1.php">Events and Announcements</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container bg-warning">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
</style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-4">

<div class="flip-card text-center">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH4AAAB+CAMAAADV/VW6AAAAUVBMVEX///9vb29qampkZGT6+vpnZ2dhYWHJycmioqJ+fn5eXl6wsLDU1NScnJz29vby8vLi4uKLi4u9vb3b29uSkpLs7Ox1dXWEhIS2traqqqrDw8P08Y7MAAADhUlEQVRoge2baXOjMAyG6xtzhMNgjv//Q9ehNG2TTZBAptNdnm+ZZOa1ZVmWJeft7eTk11FWM+UPSHdTYT3jAeZtMXVHaktTc8HZjfChNvIo9cbrL9rLCLSfDhF3Xtxrv6O9i68+ioeZf67BGFlc1uqZ+BVVR/WAi32pHvTtJZ66tE8Nf1sAG23+K5aPbf8EoB70kzjq5smGu0fkUeRX1/1GDPURZPrZ/Bm9eglWD/r0h2CGkSef/sXC1RkjDz5OY+QF9eEDd7zZ+tRnT49RZ6ynVe9w6szTZl8OHnNmOO3iQwPuB8Kc8qf8vyCfo4JeCHu0KUeFU2esIpW/eJw6db7bosIeb2nV3yaU7wnq62aHmz35fb9A6JPbPmw9RLqjI2T6iISDONmYqVKoekq76RcKYOTjRQz1EHpA3sd9pCtuDpOPVuExAO9P49xvZ6ZV90ujlteMerkAXNGe8w/kr/yP+4iWf6esnzqAbo8o7eZ/L2uK+FNfmHp9F4KU7o8p6c5IN1qmlLoW1LlSrE/cYQXtZQRdPiRFIBny6mDtk5OTk5P/Dnm5cvx5IzsTjru6t1f6thiNO2wUbqhZqq9n/ZLhBUQqfDJF7+RLU+j0SbYbxsCGKNe7BZew14l2yIBsLBvkrQJcMrnwWYQBuDqF1jcUz4j9sGvB4u8DaCjVs8fXEisIT+aEVY+s6F7haqBZgYlhp74YoKa4cyUbpr4YgO9eALnF8DfSnfftrkdW0u8Qu3ZABasmvdLf0U3udqvv6mZvdPnvbF1/wDOZmPqwhyoANlX6sj077rv8hoayo5r7Vb/Gqks68YAYkPKY5gWAFGf+HFy8h4Ezv0S9U4GA6m01ZF5/A/GWpkT2LCEggj/dlv8KNP+9xBBnCrr5GsKI8xVg7hdh5a8AnxS4KCsf9j6suzjSBrxPUpDzxVKHOZ8jjrefgBrbSbTZQ9r6so8nD2is454p4AC8IsS9isQBOHYxrxTQ8us7v4oUdGZ5gOtvv9GuogAZN9Xt4hENum+WdqV6tg2uwSeuTZ//AWSjtqgRLV5pRk80BM617jN0e1mWpuiZ2LUQXAhfj2bri23Zuay1TOHtwJVQ3haNK/fWt2SXN4nlau5Yr+vy+Xd2nBzpY4LOmSFpPdNpqoVYmucfKCV0+EIw2yaNifkfOXmpcmOGbByTD8Yxa0yelz/Q2Dg5Ofl1/AGdPS5jB3SafgAAAABJRU5ErkJggg==" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back bg-warning"><br><br><br><br><br><br><br><br>
    <h4> <?php echo htmlspecialchars($_SESSION["username"]); ?></h4>
    <h4> <?php echo htmlspecialchars($_SESSION["id"]); ?></h4>
    <br>
</div></div>
  </div>
</div>
<div class="col-8">

<div class="allign-center"><br><br><br><br><br>
        <a href="reset-password.php" class="btn btn-warning ">Reset Your Password</a>
       <a href="logout.php" class="btn btn-danger ml-3">SignOut </a>
        <a href="1.php" class="btn btn-warning ml-3">Click Here to Proceed</a>
</div></div>
    </p></div>  </div>
</body>
</html>