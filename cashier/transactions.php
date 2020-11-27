

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
    <link rel="stylesheet" href="../res+ources/css/main.css">
    <title>Transactions</title>
    
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
                        Alignay,Rissha Jhie-Ann
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1000.00
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
                         <div class="text-sm leading-5 text-gray-900"> 13:11 </div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/27/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         Paez, Christine Anne
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1000.00
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
                         <div class="text-sm leading-5 text-gray-900"> 13:00 </div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/27/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        Ong, Angelica Farrah Mae 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1000.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        0.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1450.00
                </td>
                </tr>
                
            <!--Fourth Row-->
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                12345701
                                                </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 12:05 </div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/27/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        Cruz, Jefferson 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1000.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        0.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1425.00
                </td>
                </tr>

                <!--Fifth Row-->
                
                <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                12345702
                                                </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 11:10 </div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/27/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        Castillo, Kit Alejandro
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1000.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        0.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1425.00
                </td>
                </tr>
     
                <!--Sixth Row-->
                
                <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                12345900
                                                </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 18:30 </div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/25/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        Alignay, Rissha Jhie-Ann
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1000.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        0.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1325.00
                </td>
                </tr>

                <!--Seventh Row-->
                
                <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                12345901
                                                </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 16:50 </div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/25/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                Paez, Christine Anne
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1000.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        0.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1275.00
                </td>
                </tr>
     
                <!--Eight Row-->
                
                <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                12345902
                                                </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 15:30 </div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/25/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                Ong, Angelica Farrah Mae 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1000.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        0.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1175.00
                </td>
                </tr>

            <!--Ninth Row-->
                
                <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                12345701
                                                </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 14:10 </div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/25/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                Ong, Angelica Farrah Mae 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1000.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        0.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1010.00
                </td>
                </tr>

            <!--Tenth Row-->
                
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                12345702
                                                </div>
                </td>                  
                <td class="px-6 py-4 whitespace-no-wrap">
                         <div class="text-sm leading-5 text-gray-900"> 13:10 </div> 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                         2/25/2020 
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                Castillo, Kit Alejandro
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1000.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        0.00
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        1200.00
                </td>
                </tr>
           
        
        </table>
       </div>

       <script src="../resources/js/ecWeb.js"></script>
    </body>
</html>
    
    
    
    