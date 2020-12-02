<?php

    session_start();
    require_once('../resources/php/session-cashier.php');

?>

<DOCTYPE html>
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
            <li><a href="home.php"><span class="fa-stack fa-lg"><i class="fa fa-dashboard fa-stack-1x "></i></span>Dashboard</a></li>
            <li><a href="profile.php"><span class="fa-stack fa-lg"><i class="fa fa-user fa-stack-1x"></i></span>Profile</a></li>
            <li class ="active-sidebar"><a href="scan.php"><span class="fa-stack fa-lg"><i class="fa fa-download fa-stack-1x"></i></span>Scan ID</a></li>
            <li><a href="requests.php"><span class="fa-stack fa-lg"><i class="fa fa-file fa-stack-1x"></i></span>Withdrawal Requests</a></li>
            <li><a href="transactions.php"><span class="fa-stack fa-lg"><i class="fa fa-history fa-stack-1x"></i></span>Transactions</a></li>
         </ul>
      </div>
      

    
    <!-- Main content -->
    <div class = "container" id = "main-content"> 
      


    <div class = "flex">
        <div class = "flex-1 ml-4 sm:ml-20">
            <div class="amt-container" id="">
            <h5 id="ca-total-amt"><b>ID</b></h5>
            <input type="text" placeholder="17171696" class = "border-2 p-2 text-center mt-2 mb-0 border-gray-300 rounded-md" name="amt" value=""readonly>
        </div>
        </div>
        <div class = "flex-end">
            <div class = "flex-col mr-12">            
                <form class="flex-col" id="">
                    <h5 id="ca-total-amt"><b>Balance</b></h5>
                    <input type="text" placeholder="1550.00" class = "border-2 p-2 text-center mt-2 mb-0 border-gray-300 rounded-md " name="amt" value=""readonly>
                </form>
                <button type="submit" data-toggle="modal" class="btn btn-success" data-target="#addModal" id="add-btn">ADD
                    </button>
            </div>
            
        </div>
    </div>
       
          <!-- The Modal -->
      <div class="modal" id="addModal">
        <div class="modal-dialog">
          <div class="modal-content">
           
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">ADD</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="modal-body" id="id-modal-body2">
               <div class = "withdraw-modal-body">
                   <label id="amt-label">Enter the amount:</label>
                <input type = "text" id ="input-withdraw-amt" name = "withdraw-amount" value= "">
               </div>
               
                <button type="submit" data-toggle="modal" data-target="#proceedModal" class="btn btn-success" id="proceed-btn">Proceed
                </button>
            </div>
            </div>
        </div>
    </div>
     
    <div class = "container mx-auto py-20">
        <div class = "flex">
            <h2 class = "flex-1 tem-left text-2xl mt-3 mb-3 font-medium tracking-wide">Recent Activity</h2>
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
                                Time
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                Date
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                Description
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                User
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                Amount
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
                        Reload
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        Rissha Alignay
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        500.00
                </td>
                </tr>

                <!--Second Row-->
                <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                12345699
                                            </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 13:11</div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/27/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        Withdrawal
                </td>

                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1218 Diner
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1500.00
                </td>
                </tr>

                <!--Third Row-->
                <tr>
                 <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                12345700
                                                </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 13:00</div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/27/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        Cash Out
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         Christine Paez
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        100.00
                </td>
                </tr>

                <!--Fourth Row-->
                <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                12345701
                                                </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 11:10</div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/27/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        Reload
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        Angelica Ong
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1000.00
                </td>
                </tr>

                <!--Fifth Row-->
                <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                12345721
                                                </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 11:10</div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/27/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        Withdrawal
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        Cafe Archive
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        2000.00
                </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="../resources/js/ecWeb.js"></script>
   </body>
   </html>