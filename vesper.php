<?php

session_start();
if(!isset($_SESSION["user_id"]))
  header('Location: index.php');
else{
   $user=($_SESSION["user_id"]);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300&display=swap" rel="stylesheet">    <link rel="stylesheet" href="includes/style.css">
    <title>pre vesper page</title>
  </head>
  <body id="vesperPage">
    <div class="container">
    <header>
        <a href="welcome.php"> <i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i></a>
        <a href="mainPage.php" id="logo" class="rounded mx-auto d-block"></a>
    </header>
    <main>
        <section>
            <a href="#"> <img src="images/Image_4.png" class="rounded mx-auto d-block" alt="logo"> </a>
        </section>
        <a href="vesperMenu.html">
            <section class="border">
                <i class="fa fa-file-text-o fa-5x" aria-hidden="true"></i>
                <h2>Browse menu</h2>
            </section>
        </a>
        <a href="vesperMain.html">
            <section class="border">
                <i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
                <h2>Check-in table</h2>
            </section>
        </a>
        <a href="#">
            <section class="border">
                <i class="fa fa-calendar-check-o fa-5x" aria-hidden="true"></i>
                <h2>Make reservation</h2>
            </section>
        </a>
    </main>
    </div>
  </body>
 </html>
