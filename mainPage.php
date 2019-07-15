<?php
  include "db.php";

  session_start();

    if(!isset($_SESSION["user_id"]))
     echo('fail');
    else{
      $user=($_SESSION["user_id"]);
    }

    $query= "SELECT * FROM tb_user_220_events WHERE user_id = '$user';";
    $query1= "SELECT * FROM tb_user_220 WHERE user_id = '$user';";

    $result = mysqli_query($connection, $query);
    $result1 = mysqli_query($connection, $query1);
    $row1 = mysqli_fetch_assoc($result1);

    if(!$result){
      die("DB query failed.");
    }

    if(!$result1){
      die("DB query1 mainPage failed.");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300&display=swap" rel="stylesheet">    <link rel="stylesheet" href="includes/style.css">
    <title>main page</title>
  </head>
  <body id="welcome">
    <div class="container">
    <header>
      <a href="#" id="logo" class="rounded mx-auto d-block"></a>
    </header>
    <main>
      <form>
          <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-search" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
          </div>
      </form>
      <div class="welcomeSection border overflow-hidden rounded">
          <i class="fa fa-fire fa-3x" aria-hidden="true"></i>
          <a href="#"> <img src="images/fattoush.jpg" alt="logo"> </a>
          <a href="vesper.php"> <img src="images/vesperLogo.png" alt="logo"> </a>
          <a href="#"> <img src="images/event_o.jpg" alt="logo"> </a>
          <a href="#"> <img src="images/dovrovin7.jpg" alt="logo"> </a>
      </div>
      <div class="welcomeSection border rounded">
          <i class="fa fa-tags fa-3x" aria-hidden="true"></i>
          <a href="#"> <img src="images/50_off.png" alt="logo"> </a>
          <a href="#"> <img src="images/beer-deals-glasses.jpg" alt="logo"> </a>
      </div>
      <div class="welcomeSection border rounded">
          <i class="fa fa-calendar fa-3x" aria-hidden="true"></i>
          <?php   
            while($row = mysqli_fetch_assoc($result)){
              echo "<a href='event.php?eventIdAndImg=" . $row["e_place"] . "=" . $row["Img_url"] . "=" . $row["e_date"] . "=" . $row["e_name"] ."'><img src='" . $row["Img_url"] ."'class='border' alt='logo'></a>" ;
            } 
          ?>
          <a href="addEvent.php"> <img src="images/plus-icon-png.jpg" class="border" alt="logo"> </a>
      </div>
      <nav class="nav flex-column flex-sm-row border">
          <a class="flex-sm-fill text-sm-center nav-link border" href="index.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i> Sign Out</a>
          <a class="flex-sm-fill text-sm-center nav-link active border" href="#"><i class="fa fa-signal fa-2x" aria-hidden="true"></i> Activity</a>
          <a class="flex-sm-fill text-sm-center nav-link active border" href="#"> 
          <?php
          echo "<img src='" . $row1["profile_url"] . "' class='rounded mx-auto d-block userPhoto' alt='user'>";
          ?> 
          me</a>
          <a class="flex-sm-fill text-sm-center nav-link border" href="#"><i class="fa fa-angellist fa-2x" aria-hidden="true"></i> Events</a>
          <a class="flex-sm-fill text-sm-center nav-link border" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-bars fa-2x" aria-hidden="true"></i> More</a>
      </nav>
    </main>
    </div>
  </body>
  </html>
