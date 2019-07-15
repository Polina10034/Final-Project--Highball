<?php
    include "db.php";

    session_start();
    if(!isset($_SESSION["user_id"]))
     echo('fail');
    else{
      $user=($_SESSION["user_id"]);
    }

    $query1= "SELECT type_drink_id, drink_flavor FROM tb_user_220_ingredients WHERE type_drink_id=1;";
    $query2= "SELECT type_drink_id, drink_flavor FROM tb_user_220_ingredients WHERE type_drink_id=2;";
    $query3= "SELECT type_drink_id, drink_flavor FROM tb_user_220_ingredients WHERE type_drink_id=3;";

    $result1 = mysqli_query($connection, $query1);
    $result2 = mysqli_query($connection, $query2);
    $result3 = mysqli_query($connection, $query3);

    if(!$result1){
        die("DB query1 failed.");
    }
    if(!$result2){
      die("DB query2 failed.");
    }
    if(!$result3){
      die("DB query3 failed.");
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
    <title>Vesper cocktail menu</title>

    <script>
      
      $(function(){
          $("#id01").submit(function(){ 
            var user_id= <?php echo $user; ?>;
            var desc1 = $("#desc1").val();
            var desc2 = $("#desc2").val();
            var desc3 = $("#desc3").val();
            var ttl = $("#ttl").val();
            var dataString = 'user_id=' + user_id + '&desc1=' + desc1 + '&desc2=' + desc2 + '&desc3=' + desc3 +'&ttl=' + ttl;
            console.log(dataString);
          $.ajax({
            type: "POST",
            url: "action.php",
            data: dataString,
            cache: true,
            success: function(data){
            alert(data);
       }
          });
          return false;
        });
      });
    </script>

    
  </head>
  <body id="vesperCocktailsPage">

    <div class="container">
    <header>
        <a href="vesperMenu.html"> <i id="goBack" class="fa fa-arrow-left fa-3x" aria-hidden="true"></i></a>
        <a href="mainPage.php" id="logo" class="rounded mx-auto d-block" ></a>
    </header>
    <main>
        <section>
            <img src="images/Image_4.png" class="rounded mx-auto d-block" alt="logo">
        </section>
        <div class="w3lightBox">
        <button id="make">Make your own</button>

        <div id="id01" class="modal">
        <span class="close w3lightBox">&times;</span>
        <form class="modal-content">  
            
            <div class="container .w3lightBox">
            <h1>Costume cocktail</h1>
            <p>Please fill in this form to create a cocktail</p>
            <hr>
            <label for="Alcohol"><b>Alcohol</b></label>
            <select class="form-control" id="desc3">
              <?php
                while($row = mysqli_fetch_assoc($result3)){
                  if ($row["type_drink_id"] == 3){
                    echo "<option>" . $row["drink_flavor"] . "</option>" ;
                  }
                } 
              ?>
            </select>

            <label for="desc1"><b>First Base</b></label>
            <select class="form-control" id="desc1">
            <?php
                while($row2 = mysqli_fetch_assoc($result1)){
                  if ($row2["type_drink_id"] == 1 ){
                    echo "<option>" . $row2["drink_flavor"] . "</option>" ;
                  }
                } 
              ?>
            </select>
            
            <label for="desc2"><b>Seacond Base</b></label>
            <select class="form-control" id="desc2">
            <?php
                while($row3 = mysqli_fetch_assoc($result2)){
                  if ($row3["type_drink_id"] == 2){
                    echo "<option>" . $row3["drink_flavor"] . "</option>" ;
                  }
                } 
              ?>
            </select>

            <label for="Comments"><b>Comments</b></label>
            <input type="text" placeholder="write comments if you have any" id="Comments" name="Comments">

            <label for="ttl"><b>Give your cocktail a cool name</b></label>
            <input type="text" placeholder="Enter cocktail name" id="ttl" name="ttl">
            <input type="checkbox" name="remember" style="margin-bottom:15px"><b>Mixed </b>
            <input type="checkbox" name="remember" style="margin-bottom:15px"><b> Shaken</b>
            <br>
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Update me about any changes
            </label>

            <div id="id03" class="clearfix">
                <button  type="submit" class="signupbtn">Done!</button>
            </div>
            </div>
        </form>
        </div>
        </div>
        <div class="cocktails">
          
        </div>
    </main>
    </div>
  </body>
  <script src="includes/get_cocktail.js"></script>
  <script src="includes/cocktScripts.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
