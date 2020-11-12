<?php

///////////// THIS IS NOT IN USE AS OF THE MOMENT ////////////////////////////
// #1
    /*require_once('db.php');

    if (isset($_SESSION['username'])) {
        $user_check = $_SESSION['username'];
    } else {
        $user_check = "";
    }
    
    $sql = "SELECT * FROM login_credentials WHERE username = '{$username}'";
    
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        
        $login_session = $row['username'];
    }

    if(!isset($login_session)){
        mysqli_close($conn); // Closing Connection
        header('Location: ../index.php'); // Redirecting To Home Page
    }*/
        
?>