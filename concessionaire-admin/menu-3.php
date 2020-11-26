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
            <button type="button" class="modal-open flex-initial text-center h-10 mx-2 px-3 py-2 rounded-md shadow-sm border border-gray-600 hover:no-underline hover:text-ecwhite hover:bg-ecgray text-sm uppercase tracking-wider mb-2 sm:my-auto">Add Category</button>
            <a class="flex-initial text-center h-10 mx-2 px-3 py-2 rounded-md shadow-sm border border-gray-600 hover:no-underline hover:text-ecwhite hover:bg-ecgray text-sm uppercase tracking-wider mb-2 sm:my-auto " href="add-menu.php">Add Menu</a>
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
                                <th class="px-6 py-3 bg-gray-50 bg-ecdarkblue"></th>
                                <th class="px-6 py-3 bg-gray-50 bg-ecdarkblue"></th>
    
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- 21th row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Hot Drinks
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Americano
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        45.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-menu.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 22th row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Hot Drinks
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Cappuccino
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        45.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-menu.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 23rd row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Hot Drinks
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Café Latte
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        45.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-menu.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 24th row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Hot Drinks
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Café Mocha
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        45.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-menu.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 25th row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Hot Drinks
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Brewed Coffee
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        45.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-menu.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 26th row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Hot Drinks
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Hot Tea
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        45.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-menu.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 27th row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Hot Drinks
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Hot Choco
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        45.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-menu.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 28th row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Cold Drinks
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Iced tea
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        35.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-menu.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 29th row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Cold Drinks
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Classic Milk Tea
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        65.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-menu.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 30th row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Cold Drinks
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Vanilla Milk Tea
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        65.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-menu.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 31th row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Cold Drinks
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Cookies & Cream Milk Tea
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        65.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-menu.php">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300">Delete</button>
                                    </td>
                                </tr>

                                <!-- 32th row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Cold Drinks
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        Lemonade
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        45.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium eclightblue">
                                        <a class="flex-initial item-right text-center h-10 m-auto px-3 py-2 rounded-md shadow-md border border-gray-400 text-sm text-white hover:bg-ecgray uppercase tracking-wider bg-eclightblue hover:bg-gray-300 hover:no-underline" href="edit-menu.php">Edit</button>
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


        <!-- pagination -->
    <div class="bg-white px-4 py-3 mt-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
        <div class="flex-1 flex justify-between sm:hidden">
            <a href="menu-2.php" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
            Previous
            </a>
            <a href="menu-4.php" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
            Next
            </a>
        </div>
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700">
                    Showing
                    <span class="font-medium">21</span>
                    to
                    <span class="font-medium">30</span>
                    of
                    <span class="font-medium">32</span>
                    results
                </p>
            </div>
            <div>
                <nav class="relative z-0 inline-flex shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="menu-2.php" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <!-- Heroicon name: chevron-left -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    </a>
                    <a href="menu.php" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                    1
                    </a>
                    <a href="menu-2.php" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                    2
                    </a>
                    <a href="menu-3.php" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                    3
                    </a>
                    <a href="menu-4.php" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                    4
                    </a>
                    <a href="menu-4.php" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <!-- Heroicon name: chevron-right -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</div>

    <!-- Add Category Modal -->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50">
        </div>
        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content pt-6 pb-4 text-left px-6 ">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <h2 class="text-2xl text-center">Add Category</h2>
                    <div class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>
                <!--Body-->
                <div class = "my-2">
                    <input type="text" class = "w-full border h-10 p-3"></input>
                </div>
                <!--Footer-->
                <div class="flex justify-end mt-2">
                    <button class="modal-close flex-initial text-center mb-1 mx-2 px-3 py-2 rounded-md shadow-sm border border-gray-600 hover:no-underline text-ecwhite bg-ecgray text-sm uppercase tracking-wider">Cancel</button>
                    <button class="modal-close flex-initial text-center mb-1 mx-2 px-3 py-2 rounded-md shadow-sm border border-gray-600 bg-eclightblue text-white hover:no-underline hover:text-ecwhite hover:bg-ecgray text-sm uppercase tracking-wider">Save</button>
                </div> 
            </div>

        </div>
    </div>

    <script src="../resources/js/ecWeb.js"></script>
   </body>
   </html>