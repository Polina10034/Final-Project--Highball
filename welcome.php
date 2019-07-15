<?php
    include "db.php";

    session_start();
    if(!isset($_SESSION["user_id"]))
     echo('fail');
    else{
      $user=($_SESSION["user_id"]);
    }

    $query= "SELECT * FROM tb_user_220 WHERE user_id= '$user';";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport">  
        <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href= "includes/style.css">
        <title>Welcome</title>
    </head>

    <body id="welcomePage">
        <header>
            <a href="#" id="logo" class="rounded mx-auto d-block"></a>
        </header>
        <main>
            <?php
                echo "<h1 class='instructions' Hi>" . $row['name'] . "</h1>" ;
                echo  "<img id='profilePic' src='" . $row['profile_url'] ."'>";
            ?>
        </main>
        <footer>
            <a href="mainPage.php" class="nextbutt">NEXT</a>
      </footer>
      
     
    </body>
</html>