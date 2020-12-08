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
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Tailwind CSS -->
    <link href="../resources/css/public/styles.css" rel="stylesheet">

    <!-- additional chuchu -->
    <link rel="shortcut icon" type="image" href="../resources/images/ec-logo-only.png" />
    <link rel="stylesheet" href="../resources/css/main.css">
    <title>Profile</title>
    
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
            <li class="active-sidebar"><a href="profile.php"><span class="fa-stack fa-lg"><i class="fa fa-user fa-stack-1x"></i></span>Profile</a></li>
            
            <li><a href="add-transaction.php"><span class="fa-stack fa-lg"><i class="fa fa-plus fa-stack-1x"></i></span>Add Transaction</a></li>
            <li><a href="transaction.php"><span class="fa-stack fa-lg"><i class="fa fa-history fa-stack-1x"></i></span>Transactions</a></li>

            <li class = "mt-4 text-gray-400 text-sm ml-3 uppercase tracking-wider">Admin</li>
            <li><a href="accounts.php"><span class="fa-stack fa-lg"><i class="fa fa-users fa-stack-1x"></i></span>Manage Accounts</a></li>
            <li><a href="withdraw.php"><span class="fa-stack fa-lg"><i class="fa fa-usd fa-stack-1x"></i></span>Withdraw Balance</a></li>
         </ul>
      </div>

    <div class = "container" id="main-content">
        
    <div class="mt-6 sm:mt-12">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
        <p class="mt-1 text-sm text-gray-600">
          Use a permanent address where you can receive mail.
        </p>
      </div>
    </div>
    <div class="mt-2 md:mt-0 md:col-span-2">
      <form action="#" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                <input type="text" name="first_name" id="first_name" autocomplete="given-name" value = "Jisoo" class="mt-1 border-2 p-2 focus:ring-indigo-500 focus:border-indigo-500  border-black   block w-full sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                <input type="text" name="last_name" id="last_name" autocomplete="family-name" value = "Kim" class="mt-1 border-2 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="first_name" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="text" name="first_name" id="first_name" autocomplete="given-name" value= "jisoo.kim@email.com" class="mt-1 border-2 p-2 focus:ring-indigo-500 focus:border-indigo-500  border-black   block w-full sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" name="last_name" id="last_name" autocomplete="family-name" value = "09171234488" class="mt-1 border-2 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
              </div>

              
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-eclightblue hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Update
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="md:grid md:grid-cols-3 md:gap-6 mt-5">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Change Password</h3>
        <p class="mt-1 text-sm text-gray-600">
          Use a permanent address where you can receive mail.
        </p>
      </div>
    </div>
    <div class="mt-2 md:mt-0 md:col-span-2">
      <form action="#" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first_name" class="block text-sm font-medium text-gray-700">Current Password</label>
                <input type="password" name="first_name" id="first_name" autocomplete="given-name" value = "" class="mt-1 border-2 p-2 focus:ring-indigo-500 focus:border-indigo-500  border-black   block w-full sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last_name" class="block text-sm font-medium text-gray-700">New Password</label>
                <input type="password" name="last_name" id="last_name" autocomplete="family-name" value = "" class="mt-1 border-2 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3 hidden sm:flex">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Re-enter Password</label>
                <input type="password" name="last_name" id="last_name" autocomplete="family-name" value = "" class="mt-1 border-2 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
              </div>

              
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-eclightblue hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Reset
            </button>
          </div>
        </div>
      </form>
    </div>
</div>


    </div> <!-- end of container -->
</div> <!-- end of wrapper -->
    
    <script src="../resources/js/ecWeb.js"></script>
   </body>