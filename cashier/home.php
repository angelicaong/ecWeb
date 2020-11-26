

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
                    <a class = "text-white tracking-wide " href="home.php">Home</a>
                    <a class = "text-white tracking-wide "href="transactions.php">Transaction</a>
                    <a class = "text-white tracking-wide " href="../resources/php/logout.php">Log out</a>
                    </div>
            </div>
        </div>
    </nav>

        
        <div class = "burger">
            <div class = "line1"></div>
            <div class = "line2"></div>
            <div class = "line3"></div>
        </div>
    </header>
    
    
    <div class = "container">
      <div class = "cashier-scan-div">
        <div class = "div-scan-id">
            <form class="amt-container" id="">
            <h5 id="ca-total-amt"><b>ID</b></h5>
            <input type="text" placeholder="17171696" id="textbox-readonly-amount" name="amt" value=""readonly>
            </form>
        </div>
        
        <div class = "div-add-amount">
            <form class="amt-container" id="">
            <h5 id="ca-total-amt"><b>Balance</b></h5>
            <input type="text" placeholder="1550.00" id="textbox-readonly-amount" name="amt" value=""readonly>
            </form>
            <button type="submit" data-toggle="modal" class="btn btn-success" data-target="#addModal" id="add-btn">ADD
            </button>
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
     
    <div class = "container mx-auto py-40">
        <div class = "flex">
            <h2 class = "flex-1 tem-left text-2xl mt-3 mb-3 font-medium tracking-wide">Transaction History</h2>
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
                                Description
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                Credit
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider bg-ecdarkblue">
                                Debit
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
                        Honey Glazed Pork
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        50.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        0.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1550.00
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
                        Pork Tonkatsu
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        50.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        0.00
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
                        Brownies
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         25.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        0.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1450.00
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
                        Honey Glazed Pork
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        100.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        0.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        2425.00
                </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="../resources/js/ecWeb.js"></script>
   </body>
   </html>