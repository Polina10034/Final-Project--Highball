<?php
include "db.php";

session_start();
if(!isset($_SESSION["user_id"]))
 echo('fail');
else{
  $user=($_SESSION["user_id"]);

  $query1= "SELECT * FROM tb_user_220 WHERE user_id = '$user';";
  $result1 = mysqli_query($connection, $query1);
  $row1 = mysqli_fetch_assoc($result1);

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/2a30318032.js"></script>
    <script src="includes/jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300&display=swap" rel="stylesheet">    <link rel="stylesheet" href="includes/style.css">
    <title>Event page</title>

   
  </head>
  <body id="welcome">
    <div class="container">
    <header>
      <a href="mainPage.php" id="logo" class="rounded mx-auto d-block"></a>
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
      <div id="div0" class="welcomeSection border rounded">
            <h2 class="eventName" ></h2>
            <h3 class="eventName" >Place: </h3>
            <div class="eventName"><h4>Date: </h4>
                <i id="delete" class="fas fa-trash  fa-2x"></i>
            </div>
            <div id="div1"><img id="eventImg" src=""  alt="logo"></div>
            
                        
      </div>
      <div class="welcomeSection border rounded">
          <i class="fa fa-calendar fa-3x" aria-hidden="true"></i>
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
  <script src="includes/get_event_details.js"></script>
  </html>