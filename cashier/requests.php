<?php

    session_start();
    require_once('../resources/php/session-cashier.php');

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
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Tailwind CSS -->
    <link href="../resources/css/public/styles.css" rel="stylesheet">

    <!-- additional chuchu -->
    <link rel="shortcut icon" type="image" href="../resources/images/ec-logo-only.png" />
    <link rel="stylesheet" href="../resources/css/main.css">
    <title>Withdrawal Requests</title>
    
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>

    
   <body>
   <nav class="navbar navbar-default no-margin" id="navbar">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header fixed-brand">
            <input type="checkbox" id="menu-toggle"/>
            <label class = "fa fa-navicon fa-stack-2x" for = "menu-toggle" id="burger-icon"></label>
        </div>
            
        <a href="home.php">
            <img class = "new-navbar-logo" src= "../resources/images/ec-logo-white.png" alt="Logo" height="50px" width="100px" >  
            <a class = "logout-btn" href="../resources/php/logout.php">Logout</a>
       </a>       
      </div>
   </nav>
   
   <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
         <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
            <li><a href="home.php"><span class="fa-stack fa-lg"><i class="fa fa-dashboard fa-stack-1x "></i></span>Dashboard</a></li>
            <li><a href="profile.php"><span class="fa-stack fa-lg"><i class="fa fa-user fa-stack-1x"></i></span>Profile</a></li>
            <li><a href="scan.php"><span class="fa-stack fa-lg"><i class="fa fa-download fa-stack-1x"></i></span>Scan ID</a></li>
            <li class="active-sidebar"><a href="requests.php"><span class="fa-stack fa-lg"><i class="fa fa-file fa-stack-1x"></i></span>Withdrawal Requests</a></li>
            <li><a href="transactions.php"><span class="fa-stack fa-lg"><i class="fa fa-history fa-stack-1x"></i></span>Transactions</a></li>
         </ul>
      </div>
    

    
    <!-- Main content -->
    <div class = "container" id = "main-content"> 
 
        <div class = "flex">
            <h2 class = "flex-1 tem-left text-2xl mt-3 mb-3 font-medium tracking-wide">Withdrawal Requests</h2>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow-md overflow-hidden border-b border-t border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300 bg-ecdarkblue">
                            <thead>
                                <tr>
                                <th class="px-10 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                Reference No.
                                </th>

                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider 
                                bg-ecdarkblue">
                                Time Stamp
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                Date
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                Concessionaire
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                Balance
                                </th>
                            </thead>

            <!--Table body-->
            <tbody class="bg-white divide-y divide-gray-200">
              
              <!--First Row-->
              <tr>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="flex items-center">
                    <div class="ml-4">
                        <div class="text-sm leading-5 font-medium text-gray-900">
                        12345696
                        </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 14:10 </div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/27/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1218 Diner
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1000.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                    <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="#">Approve</button>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                    <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="#">Decline</button>
                </td>
                </tr>

                <!--Second Row-->
                <tr>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="flex items-center">
                    <div class="ml-4">
                        <div class="text-sm leading-5 font-medium text-gray-900">
                        12345639
                        </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 12:10 </div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/27/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        Cafe Archive
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        2500.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                    <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="#">Approve</button>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                    <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="#">Decline</button>
                </td>
                </tr>


            </tbody>
        </table>
    </div>

    <script src="../resources/js/ecWeb.js"></script>
   </body>
   </html>