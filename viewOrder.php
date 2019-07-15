<?php
  include 'db.php';

  session_start();   
  if(!isset($_SESSION["user_id"]))
     echo('fail');
    else{
      $user=($_SESSION["user_id"]);
    }
  
  $query4= "SELECT * FROM tb_user_220_orders WHERE user_id='$user';";
    $result4 = mysqli_query($connection, $query4);

    if(!$result4){
      die("DB query4 failed.");
    }
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <script src="includes/jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="includes/style.css">
    <title>View Order</title>
  </head>
  <body id="vesperCocktailsPage">
    <div class="container">
    <header>
        <a href="vesperMain.html"> <i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i></a>
        <a href="mainPage.html" id="logo" class="rounded mx-auto d-block" ></a>
    </header>
    <main>
        <section>
            <img src="images/Image_4.png" class="rounded mx-auto d-block" alt="logo">
        </section>
        <div class="w3lightBox">
        <section id="orders" class="border">
          <?php
        while($row4 = mysqli_fetch_assoc($result4)){
              if ($row4["special"] == 'Yes'){
                echo "<h3>" . $row4["drink_name"] ." " . $row4["price"] . "₪</h3>" ;
              }
            } 
            ?>
        </section>  
        <section id= "total" class="border">
          <h2>You'r total:</h2>
        </section>
        </div>
    </main>
    </div>
    
  </body>
 
  <script src="includes/viewOrder.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
