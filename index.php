<?php
    require_once('resources/php/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- additional chuchu -->
    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="shortcut icon" type="image" href="resources/images/ec-logo-only.png" />
      
    <title>Log In</title>
        
    <style>
    * {
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style: none;
    font-family: Avenir-book;
    }

    </style>
</head>
    
  <body>
      <div class = "box">
        <div class = "login-logo">
        <img src="resources/images/ec-logo-white.png" width="35%" height="35%" class = "login-logo">
        </div>
        <form action="resources/php/login_Validation.php" method="post">
            <div class = "inputBox">
                <input type="text" id="login_username" name="login_username" required="" class="login-input">
                <label>Username</label>
            </div>
            <div class = "inputBox">
                <input type="password" id="login_password" name="login_password" required="" class="login-input">
                <label>Password</label>
            </div>
            <div class = "notice">
                <?php
                if (isset($_GET['msg'])) {
				    if ($_GET['msg'] == 1) {
				        echo '<span class="alert_delivery">Incorrect username and password.</span>';
				    }
				    else if ($_GET['msg'] == 2) {
				        echo '<span class="alert_delivery">Incorrect username and password.</span>';
				    }
				    else if ($_GET['msg'] == 3) {
				        echo '<span class="alert_delivery">Empty username and password.</span>';
				    }
				    else if ($_GET['msg'] == 4) {
				        echo '<span class="alert_delivery">No form submitted.</span>';
				    }
                    else if ($_GET['msg'] == 5) {
				        echo '<span class="alert_delivery">Sorry, you do not have access.</span>';
				    }
                    else if ($_GET['msg'] == 6) {
				        echo '<span class="alert_delivery">Sorry, you no longer have access to your account.</span>';
				    }
				} 
                ?>
            </div>
            <div class = "div-login-button">
            <button class="login-button" name="login"><span>Log In </span></button>
            </div>
        </form>
          <form action="resources/php/forgotPass.php" method="post">
            <div class = "forgot-pass-div">
            <input type="submit" name ="" class ="forgot-pass" value="Forgot your password?">
            </div>
          </form>
        </div>
   

      
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
    
</html>