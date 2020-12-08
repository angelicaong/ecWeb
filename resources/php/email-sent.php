<?php
    require_once('db.php');
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
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" type="image" href="../images/ec-logo-only.png" />
    
      
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
        <img src="../images/ec-logo-white.png" width="35%" height="35%" class = "login-logo">
        </div>

        <label style="display: block; text-align: center; color: #fff;">Email sent successfully!</label>

        <div class = "div-login-button">
            <button class="login-button" name="login" style="margin-top: 25px; width: 200px;" onclick="window.location.href='../../index.php'"><span>Back to Login</span></button>
        </div>

    </div>
        
   

      
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
    
</html>