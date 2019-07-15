<?php
    include 'db.php';

    
    if (!empty($_POST["newEmail"])){
      $query = "INSERT INTO tb_user_220 VALUES ( '', 0, '"
      .$_POST["newUserName"]
      ."', '"
      .$_POST["newEmail"]
      ."', '"
      .$_POST["newPassword"]
      ."', '"
      .$_POST["newAddress"]
      ."', '"
      .$_POST["phoneNum"]
      ."','', DEFAULT)";

      $result = mysqli_query($connection , $query);

      //getting new data from DB//
      $query1 = "SELECT * FROM tb_user_220 WHERE email ='"
      .$_POST["newEmail"]
      ."' AND password = '"
      .$_POST["newPassword"]
      ."'";

      $result1 = mysqli_query($connection , $query1);
      $row = mysqli_fetch_array($result1);
      
      session_start();
      if(is_array($row)) {
        $_SESSION["user_id"]=$row['user_id'];
        if($row['admin'] == 0) {
          header('Location: mainPage.php');
        }
        else {
          header('Location: adminMain.html');
        }
      } 
      header('Location: bubleMenu.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="includes/style.css">
    <title>sing-up page</title>
  </head>
  <body id="signup">
    <div class="main">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
            <a href="index.html" id="logo" class="rounded mx-auto d-block"></a>
            <img src="images/user4.png" class="rounded mx-auto d-block userPhoto" alt="user">
            <form action="#" method="post" id="frm">
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="newUserName">Full Name</label>
                  <input type="text" class="form-control form-control-lg" id="newUserName" placeholder="You'r Name"  name="newUserName" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="phoneNum">Phone Number</label>
                  <input type="tel" class="form-control form-control-lg" id="phoneNum" placeholder="Phone Number"  name="phoneNum" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="newEmail">E-Mail</label>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="newEmail" aria-describedby="emailHelp" placeholder="Enter Email" name="newEmail" required>
                    <small id="emailHelp" class="form-text text-muted">
                      We'll never share your email with anyone else.
                    </small>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="newPassword">Password</label>
                  <input type="password" id="newPassword" class="form-control form-control-lg" aria-describedby="passwordHelpBlock" placeholder="Enter Password" name="newPassword" required>
                  <small id="passwordHelpBlock" class="form-text text-muted">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                  </small>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="newAddress">Address</label>
                  <input type="text" class="form-control" id="newAddress" placeholder="Hifa"  name="newAddress" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-4">
                  <label for="newAge">Age</label>
                  <input type="number" class="form-control" id="newAge" placeholder="18" name="newAge">
                </div>
                <div class="col-md-3 mb-4">
                  <label for="customRadio1">Gender</label>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="gender" class="form-check-input">
                    <label class="form-check-label" for="customRadio1">
                      Male
                    </label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="gender" class="form-check-input">
                    <label class="form-check-label" for="customRadio2">
                      Female
                    </label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio3" name="gender" class="form-check-input">
                    <label class="form-check-label" for="customRadio3">
                      Other
                    </label>
                  </div>
                </div>
               <button type="submit" class="btn btn-outline-primary btn-lg btn-block btn-login border">Continue</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>
