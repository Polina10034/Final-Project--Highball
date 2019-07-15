<?php
      include 'db.php';

    session_start();   
    if (!empty($_POST["loginMail"])){
      $query = "SELECT * FROM tb_user_220 WHERE email ='"
      .$_POST["loginMail"]
      ."' AND password = '"
      .$_POST["UserPassword"]
      ."'";

      $result = mysqli_query($connection , $query);
      $row = mysqli_fetch_array($result);

    if(is_array($row)) {
      $_SESSION["user_id"]=$row['user_id'];
      if($row['admin'] == 0) {
        header('Location: mainPage.php');
      }
      else {
        header('Location: adminMain.html');
      }
    } 
    else {
      $message = "Invalid Username or Password";
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="includes/style.css">
    <title>log-in page</title>
  </head>
  <body id="login">
      <main class="container">
        <div class="row justify-content-center">
          <div class="col-8">
            <a href="#" id="logo" class="rounded mx-auto d-block"></a>
            <img src="images/user4.png" class="rounded mx-auto d-block userPhoto" alt="user">
            <form action="#" method="post" id="frm">
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="loginMail"></label>
                  <input type="email" class="form-control form-control-lg border" id="loginMail" placeholder="Enter Email"  name="loginMail" required>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="UserPassword"></label>
                  <input type="password" class="form-control form-control-lg border" id="UserPassword" placeholder="Enter Password"  name="UserPassword" required>
                </div>
              </div>
              <button type="submit" class="btn btn-outline-primary btn-lg btn-block btn-login border">SING IN</button>
              <div class="error-message"><?php if(isset($message)){ echo $message;} ?></div>
            </form>
            <br><h2 class="text-center">OR REGISTER WITH A SICIAL MEDIA ACCOUNT</h2>
            <div class="col">
              <a href="#" class="fb btn">
                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
               </a>
              <a href="#" class="twitter btn">
                <i class="fa fa-twitter fa-fw"></i> Login with Twitter
              </a>
              <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                </i> Login with Google+
              </a>
            </div>
            <br>
            <h3 class="text-center">dont have an account? <a href="signup.php" class="btn btn-outline-primary btn-login border"> &nbsp; &nbsp; SIGN UP</a></h3> 
          </div>
        </div>
      </main>
  </body>
  </html>
