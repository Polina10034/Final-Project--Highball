<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="style.css">
    <title>Costume cocktail php</title>
  </head>
  <body id="vesperCocktailsPage">
    <div class="container">
    <header>
        <a href="../cocktailMenu.html"> <i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i></a>
        <a href="welcome.html"> <img src="../images/1logo.png" class="rounded mx-auto d-block" alt="logo"> </a>
    </header>
    <main>
        <section>
            <img src="../images/Image_4.png" class="rounded mx-auto d-block" alt="logo">
        </section>
        <!-- <div class="w3lightBox"> -->
        <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width: 100%;" class="btn-lg .w3lightBox">Make your own</button> -->

        <!-- <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" style="width: auto;" class="close w3lightBox" title="Close Modal">&times;</span>
        <div class="modal-content">   -->
        <section>
        <?php
            $cocktailName = $_GET['ttl'];
			$alcohol = $_GET['alcohol'];

            if($alcohol == "Whiski") {
              echo " <h2>sorry we dont have whiski, but we recommand on our fantastic burbon insted</h2>
              <a class='donebutt' href='../vesperMain.html'><h1 class='donebutt'>OK bring me burbon!</h1></a>
              <a class='donebutt' href='../cocktailMenu.php'><h1 class='donebutt'>choose another cocktail!</h1></a>";
            }
            else {
              echo "<h1> one " . $cocktailName . " is on the way</h1>";
            }
        ?>
        <a class="donebutt" href="../vesperMain.html" ><h1 class="donebutt" >Back to menu</h1></a>
        </section>
        
    </main>
    </div>
  </body>
  <script src="scripts.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
