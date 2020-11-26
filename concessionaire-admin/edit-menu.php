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
    <link href="../resources/css/public/styles.css" rel="stylesheet">
    <!-- additional chuchu -->
    <link rel="shortcut icon" type="image" href="../resources/images/ec-logo-only.png" />
    <link rel="stylesheet" href="../resources/css/main.css">
    <title>Menu</title>
    
    </head>
    
   <body>
   <header class="new-navbar">
        <a href="home.php">
            <img class = "new-navbar-logo" src= "../resources/images/ec-logo-white.png" alt="" height="50px" width="100px" >
        </a>
        <nav>
            <ul class="new-nav-area">
                <li><a href="home.php">Home</a></li>
                <li><a href="accounts.php">Accounts</a></li>
                <li><a href="transaction.php">Transactions</a></li>
                <li><a class="active-navbar" href="menu.php">Menu</a></li>
                <li><a href="../resources/php/logout.php">Logout</a></li>
            </ul>
        </nav>
        <div class = "burger">
            <div class = "line1"></div>
            <div class = "line2"></div>
            <div class = "line3"></div>
        </div>
        
    </header>

    <div class = "container mx-auto py-4">
        <div class = "flex flex-col sm:flex-row">
            <h2 class = "flex-1 text-4xl sm:mt-3 mb-3 font-medium tracking-wide">Menu List</h2>
        </div>
        <div class="flex flex-col sm:mt-3 md:mt-0">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow-md overflow-hidden border-b border-t border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300 bg-ecdarkblue">
                            <thead>
                                <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    Category
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    Item
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    Amount
                                </th>
    
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- 1sth row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <select class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full w-full">
                                            <option>Rice Bowls</option>
                                            <option>Sandwiches</option> 
                                            <option>Pasta</option> 
                                            <option>Salad</option> 
                                            <option>Shakes</option> 
                                            <option>Hot Drinks</option> 
                                            <option>Cold Drinks</option> 
                                        </select>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        <input type="text" class ="w-full" value="Pork Tonkatsu"></input>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        <input type="number" class ="w-full" value="55.00"></input>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class = "flex flex-col ml-2 mr-2 sm:flex-row md:flex-row lg:flex-row xl:flex-row justify-center sm:justify-end md:pr-5 lg:pr-10 xl:pr-14">
            <button class="flex-initial text-center mb-1 mx-2 px-3 py-2 rounded-md shadow-sm border border-gray-600 hover:no-underline text-ecwhite bg-ecgray text-sm uppercase tracking-wider" onclick="window.location.href='menu.php'">Back</button>
            <button class="flex-initial text-center mb-1 mx-2 px-3 py-2 rounded-md shadow-sm border border-gray-600 bg-eclightblue text-white hover:no-underline hover:text-ecwhite hover:bg-ecgray text-sm uppercase tracking-wider" onclick="window.location.href='menu.php'"><img src="../resources/images/save.png" class ="w-4 h-4 my-auto mr-2 inline">Save</button>
    </div>

    <script src="../resources/js/ecWeb.js"></script>
   </body>