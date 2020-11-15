<?php

	session_start();
	require_once('../resources/php/session-admin.php');

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
    <title>Home</title>
    
    </head>
    
   <body>
   <header class="new-navbar">
        <a href="home.php">
            <img class = "new-navbar-logo" src= "../resources/images/ec-logo-white.png" alt="" height="60px" width="140px" >
        </a>
        <a class ="new-navbar-btn-area" href="../resources/php/logout.php">
            <img src="../resources/images/logout.png" class ="w-5 h-5 my-auto float-left" id="logout-icon">Log Out
        </a>
    </header>
    <div class="container">
        <div class = "manage-div">
            <span id="span-accounts">Concessionaire Accounts</span> 
            <button type="submit" onclick="window.location.href='add-account.php'"class="btn btn-success" id="add-new-acc"><img src="../resources/images/add.png" height="20px" width="20px" id="add-icon"></button>
        </div>
                
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Accounts</th>
                <th>Manager</th>
                <th>Username</th>
                <th>Email Address</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
            <tbody>
            <tr>
                <td>1218 Diner</td>
                <td>Hazel Cruz</td>
                <td>20193</td>
                <td>1213diner@gmail.com</td>
                <td id="admin-active-status">Active</td>
                <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
                <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>
            </tr>
            <tr>
                <td>Cafe Archive</td>
                <td>Analiza Mendez</td>
                <td>20194</td>
                <td>cafearchive@gmail.com</td>
                <td id="admin-active-status">Active</td>
                <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
                <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>
            </tr>
                <tr>
                    <td>3rd Floor</td>
                    <td>Cara Hokkaido</td>
                    <td>20192</td>
                    <td>3rdfloor@gmail.com</td>
                    <td id="admin-inactive-status">Inactive</td>
                    <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
                    <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>
                </tr>
                <tr>
                    <td>Greens</td>
                    <td>Gerry Okinawa</td>
                    <td>20191</td>
                    <td>greens@gmail.com</td>
                    <td id="admin-inactive-status">Inactive</td>
                    <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
                    <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>
                  </tr>
            </tbody>
        </table>
    </div>
   </body>