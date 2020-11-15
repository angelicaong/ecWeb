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
        <div class = "burger">
            <div class = "line1"></div>
            <div class = "line2"></div>
            <div class = "line3"></div>
        </div>
    </header>

</div>
<div class ="container">
    <h3 class = "text-4xl text-center mb-2">Menu List</h3>
        <button type="submit" onclick="window.location.href='add-menu.php'"class="btn btn-outline-primary" id="add-new-menu-btn"
        style ="float:right;" title = "Add Menu">
        <img src="../resources/images/add.png" height="20px" width="20px" id="add-icon"></button>
        
    <br>
    <!--Table--> 
    <table class="table table-hover table-fixed" id="ca-menu-table">
        <!--Table head-->
         <thead class = "header" style = "background-color:#00364D; color: white;">
             <tr>
                 <th>Category</th>
                 <th>Item</th>
                 <th>Amount</th>
                 <th style="width: 90px">Edit</th>
                 <th style="width: 90px">Delete</th>
             </tr>
         </thead>

         <!--Table body-->
         <tbody>
         <tr>
            <td> Rice Bowls </td>                    
            <td> Pork Tonkatsu </td>
            <td> 55.00</td>
            <td><a href="edit-menu.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>

            </tr>
            <tr>
            <td> Rice Bowls </td>                    
            <td> Chicken Wings </td>
            <td> 55.00</td>
            <td><a href="edit-menu.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>

            </tr>
            <tr>
            <td> Rice Bowls </td>                    
            <td> Pork Sisig </td>
            <td> 55.00</td>
            <td><a href="edit-menu.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>


            </tr>
            <tr>
            <td> Rice Bowls </td>                    
            <td> Embotido Royale </td>
            <td> 55.00</td>
            <td><a href="edit-menu.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>

            </tr>
            <tr>
            <br>
            <td> Rice Bowls </td>                    
            <td> Fish Fillet</td>
            <td> 55.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>

            </tr>
            <tr>

            <td> Rice Bowls </td>                    
            <td> Pork Picadillo </td>
            <td> 55.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>
            </tr>

            <tr>
            <td> Rice Bowls </td>                    
            <td> Pork Adobo</td>
            <td> 55.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>
            </tr>

            <tr>
            <td> Rice Bowls </td>                    
            <td> Honey Glazed Pork </td>
            <td> 55.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>
            </tr>

            <tr>
            <td> Sandwiches </td>                    
            <td> Clubhouse </td>
            <td> 45.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>

            </tr>
            <tr>

            <td> Sandwiches </td>                    
            <td> Ham & Cheese </td>
            <td> 40.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>

            </tr>
            <tr>

            <td> Sandwiches </td>                    
            <td> Cheese Pimiento </td>
            <td> 40.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>

            </tr>

            <tr>

            <td> Sandwiches </td>                    
            <td> Chicken </td>
            <td> 40.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>

            </tr>

            <tr>

            <td> Sandwiches </td>                    
            <td> Tuna & Egg </td>
            <td> 40.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>

            </tr>

            <tr>

            <td> Pasta </td>                    
            <td> Marinara </td>
            <td> 45.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>

            </tr>

            <tr>
            <td> Pasta </td>                    
            <td> Carbonara </td>
            <td> 45.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>

            </tr>

            <tr> 
            <td> Pasta </td>                    
            <td> Cheesy Garlic </td>
            <td> 45.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>
            </tr>

            <tr> 
            <td> Salad </td>                    
            <td> Caesar Salad </td>
            <td> 50.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>
            </tr>

            <tr> 
            <td> Salad </td>                    
            <td> Mixed Greens </td>
            <td> 50.00</td>
            <td><a href="edit-account.php"><img src ="../resources/images/edit.png" height="20px" width="20px" id="edit-icon"></a></td>
            <td><img src ="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td>
            </tr>
        </tbody>
    
    </table>
</div>

    <script src="../resources/js/ecWeb.js"></script>
    </body>
</html>
