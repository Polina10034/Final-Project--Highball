<?php
include "db.php";

session_start();

if(!isset($_SESSION["user_id"]))
 echo('fail');
else{
  $user=($_SESSION["user_id"]);
  echo ($user);
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
    <title>New event</title>

    <script>
      
      $(function(){
          $("#id02").submit(function(){ 
                   //transfernig string of user id and costum drink desc//
            var user_id= <?php echo $user; ?>;
            var eName = $("#eventName").val();
            var ePlace = $("#Place").val();
            var eDate = $("#eventDate").val();
           
            var dataString = 'user_id=' + user_id + '&eName=' + eName + '&ePlace=' + ePlace + '&eDate=' + eDate;
            console.log(dataString);
          $.ajax({
            type: "POST",
            url: "actionEvent.php",
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
  <body >
  <div id= "id02" class="w3lightBox">
            <div  class="modal">
            <a class="back-link"><span class="close w3lightBox">&times;</span></a>
            <form class="modal-content">  
                
                <div class="container .w3lightBox">
                <h1>Add New Event</h1>
                <p>Please fill in this form to create new event</p>
                <hr>
                <label for="Place"><b>Place of the event:</b></label>
                <input type="text" id="Place" name="Place">
    
                <label for="eventName"><b>What's the name of the event?</b></label>
                <input type="text"  id="eventName" name="eventName">
                <label for="eventDate"><b>When?</b></label>
                <input type="text" placeholder="Eneter a date" id="eventDate" name="eventDate">
                  <br>
                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Update me about any changes
                </label>
    
                <div id="submitEvent" class="clearfix">
                    <button  type="submit" class="signupbtn"><a href="mainPage.php">Done!</a></button>
                </div>
                </div>
            </form>
            </div>
            </div>
  </body>
  <script src="includes/addEvent.js"></script>

  </html>
