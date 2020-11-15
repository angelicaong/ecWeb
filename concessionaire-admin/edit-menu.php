<?php

	session_start();
	require_once('../resources/php/session-ca.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- additional chuchu -->
    <link rel="shortcut icon" type="image" href="../resources/images/ec-logo-only.png" />
    <link rel="stylesheet" href="../resources/css/main.css">
    <title>Menu</title>
    
    </head>
    
    <body>
    <header class="new-navbar">
        <a href="home.php">
            <img class = "new-navbar-logo" src= "../resources/images/ec-logo-white.png" alt="" height="60px" width="140px" >
        </a>
        <nav>
            <ul class="new-nav-area">
                <li><a href="home.php">Home</a></li>
                <li><a href="accounts.php">Accounts</a></li>
                <li><a href="transaction.php">Transactions</a></li>
                <li><a class="new-navbar-apage" href="menu.php">Menu</a></li>
            </ul>
        </nav>
        <a class ="new-navbar-btn-area" href="../resources/php/logout.php">
            <img src="../resources/images/logout.png" class ="w-5 h-5 my-auto float-left" id="logout-icon">Log Out
        </a> 
    </header>

    <div class="container">
        <div class = "manage-div">
            <span class = "text-4xl mb-2">Edit Account</span>
        </div>
        <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
            <tr>
                <th>Category</th>
                <th>Item</th>
                <th>Amount</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="pt-3-half" contenteditable="true">Rice Bowls </td>
                <td class="pt-3-half" contenteditable="true">Pork Tonkatsu</td>
                <td class="pt-3-half" contenteditable="true">55.00</td>
                <td><a href="menu.php"><img src ="../resources/images/delete.png" class="w-6 h-6 mx-auto" id="delete-icon"></a></td>
            </tr>
        </tbody>
        </table>
         <button type="submit" onclick="window.location.href='menu.php'"class="btn btn-success" id="save-new-acc"><img src="../resources/images/save.png" class ="w-6 h-6 my-auto float-left"
 id="save-icon">Save</button>
    </div>
   </body>