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
    <link href="../resources/css/public/styles.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">     
    <!-- additional chuchu -->
    <link rel="shortcut icon" type="image" href="../resources/images/ec-logo-only.png" />
    <link rel="stylesheet" href="../resources/css/main.css">
    <title>Home</title>
    
    </head>
    
   <body>
    <nav class="bg-ecdarkblue mb-2"> 
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex sm:items-stretch sm:justify-start">
                    <a class="flex items-center" href="home.php" >
                        <img class="block h-10 w-auto pl-4" src= "../resources/images/ec-logo-white-new.png" alt="EC Card logo">
                    </a>
                </div>  
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:pr-0">
                    <div class="relative px-3 py-2 font-medium rounded-md text-sm" >
                        <a class = "text-white tracking-wide " href="../resources/php/logout.php">Log out</a>
                    </div>
                    
                
                </div>
            </div>
        </div>
    </nav>

    <div class = "container mx-auto py-4">
        <div class = "flex">
            <h2 class = "flex-1 tem-left text-2xl mt-3 mb-3 font-medium tracking-wide">Concessionare Accounts </h2>
            <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-sm border border-gray-400 text-sm text-gray-300 hover:text-white uppercase tracking-wider hover:bg-ecgray hover:no-underline hover:text-ecwhite" href="add-concessionaire.php">Add concessionaire</button>
            <a class="flex-initial item-right text-center h-10 my-auto mx-2 px-3 py-2 rounded-md shadow-sm border border-gray-400 hover:no-underline hover:text-ecwhite hover:bg-ecgray text-sm uppercase tracking-wider" href="add-account.php">Add account</a>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow-md overflow-hidden border-b border-t border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300 bg-ecdarkblue">
                            <thead>
                                <tr>
                                <th class="px-10 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    Name
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    Concessionaire
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    Username
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    Status
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                    Role
                                </th>
                                <th class="px-6 py-3 bg-gray-50 bg-ecdarkblue"></th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- 1st row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                Hazel Cruz
                                                </div>
                                                <div class="text-sm leading-5 text-gray-500">
                                                1213diner@gmail.com
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="text-sm leading-5 text-gray-900">1218 Diner</div> 
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        20193
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Admin
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-account.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 2nd row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                Analiza Mendez
                                                </div>
                                                <div class="text-sm leading-5 text-gray-500">
                                                cafearchive@gmail.com
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Cafe Archive
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        20194
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Admin
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-account.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 3rd row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                Cara Hokkaido
                                                </div>
                                                <div class="text-sm leading-5 text-gray-500">
                                                3rdfloor@gmail.com
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        3rd Floor
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        20192
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-500">
                                        Inactive
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Admin
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-account.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 4throw -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                Jerry Okinawa
                                                </div>
                                                <div class="text-sm leading-5 text-gray-500">
                                                greens@gmail.com
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Greens
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        20191
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-500">
                                        Inactive
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Admin
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-account.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../resources/js/ecWeb.js"></script>
   </body>
   </html>