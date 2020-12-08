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
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Tailwind CSS -->
    <link href="../resources/css/public/styles.css" rel="stylesheet">

    <!-- additional chuchu -->
    <link rel="shortcut icon" type="image" href="../resources/images/ec-logo-only.png" />
    <link rel="stylesheet" href="../resources/css/main.css">
    <title>Home</title>
    
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
            <li class="active-sidebar"><a href="home.php"><span class="fa-stack fa-lg"><i class="fa fa-dashboard fa-stack-1x "></i></span>Dashboard</a></li>
            <li><a href="profile.php"><span class="fa-stack fa-lg"><i class="fa fa-user fa-stack-1x"></i></span>Profile</a></li>
            <li><a href="accounts.php"><span class="fa-stack fa-lg"><i class="fa fa-users fa-stack-1x"></i></span>Accounts</a></li>
            <li><a href="logs.php"><span class="fa-stack fa-lg"><i class="fa fa-tags fa-stack-1x"></i></span>Logs</a></li>
         </ul>
      </div>
    

    
    <!-- Main content -->
    <div class = "container" id = "main-content"> 

        <!-- Dashboard 3 boxes -->
        <div class="grid grid-col-1 gap-4 md:grid-cols-3 md:gap-2 lg:grid-cols-3 lg:gap-4 xl:gap-8 ">
            <div class="border-2 border-ecdarkblue rounded-md p-10 h-full text-center shadow overflow-hidden">
                <h1 class = "font-bold">Active Concessionaires</h1>
                <span class ="text-center text-2xl">2</span>
                
            </div>
                
            <div class="border-2 border-ecdarkblue rounded-md p-10 h-full text-center shadow overflow-hidden">
                <h1 class = "font-bold">Managers</h1>
                <span class ="text-center text-2xl">4</span>
                
            </div>

            <div class="border-2 border-ecdarkblue rounded-md p-10 h-full text-center shadow overflow-hidden">
                <h1 class = "font-bold">Total Concessionaires</h1>
                <span class ="text-center text-2xl">4</span>
                
            </div>
        </div>


        <!-- Logs table -->
        <div class = "flex flex-col mt-5 sm:flex-row">
            <h2 class = "flex-1 text-2xl sm:mt-3 mb-3 font-medium tracking-wide">Logs</h2>
        </div>
        <div class="flex flex-col sm:mt-3 md:mt-0">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow-md overflow-hidden border-b border-t border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300 bg-ecdarkblue">
                            <thead>
                                <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    Date
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    Time
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    User
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    Concessionaire
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    Role
                                </th>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- 1st row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        11-07-2020
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        09:30
                                    </td>
                                    
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Jennie Kim
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        1218 Diner
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Cashier
                                    </td>
                                    
                                </tr>

                                <!-- 2nd row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        11-07-2020
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        08:30
                                    </td>
                                    
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Lisa Manoban
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Cafe Archive
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Cashier
                                    </td>
                                </tr>

                                <!-- 3rd row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        11-07-2020
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        07:30
                                    </td>
                                    
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Jisoo Kim
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        1218 Diner
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Admin
                                    </td>
                                </tr>

                                <!-- 4th row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        11-07-2020
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        07:00
                                    </td>
                                    
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Rosé Park
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Cafe Archive
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Admin
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        
                    
    </div>
</div>

    <script src="../resources/js/ecWeb.js"></script>
   </body>
   </html>