

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
    <title>Transactions</title>
    
    </head>
    
   <body>

   <header class="new-navbar">
        <a href="home.php">
            <img class = "new-navbar-logo" src= "../resources/images/ec-logo-white.png" alt="" height="60px" width="140px" >
        </a>
        <nav>
            <ul class="new-nav-area">
                <li><a href="home.php">Home</a></li>
                <li><a class="new-navbar-apage" href="transaction.php">Transactions</a></li>
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
    
    <div class ="container mt-2">
    <h3 class = "text-4xl text-center">Transaction History</h3>

    <!--Table-->
     <table class="table table-hover table-fixed" id="ca-trans-history-table">
     <!--Table head-->
         <thead class = "header" style = "background-color:#00364D; color: white;">
             <tr>
                <th>Reference No.</th>
                <th>Time Stamp</th>
                <th>Date</th>
                <th>Description</th>
                <th>Credit</th>
                <th>Debit</th>
                <th>Balance</th>
             </tr>
         </thead>

         <!--Table body-->
             <tr>
                <td> 12345696 </td>                    
                <td> 14:10 </td>
                <td> 2/27/2020 </td>
                <td> Alignay, Rissha Jhie-Ann</td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1550.00</td>
            </tr>
            <tr>
                <td> 12345699 </td>                    
                <td> 13:11 </td>
                <td> 2/27/2020 </td>
                <td> Paez, Christine Anne</td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1500.00</td>
            </tr>
            <tr>
                <td> 12345700 </td>                    
                <td> 13:00 </td>
                <td> 2/27/2020 </td>
                <td> Ong, Angelica Farrah Mae </td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1450.00</td>


             </tr>
            <tr>
                <td> 12345701 </td>                    
                <td> 12:05 </td>
                <td> 2/27/2020 </td>
                <td> Cruz, Jefferson </td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1425.00</td>

            </tr>
            <tr>
                <br>
                <td> 12345702 </td>                    
                <td> 11:10 </td>
                <td> 2/27/2020 </td>
                <td> Castillo, Kit Alejandro</td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1425.00</td>

            </tr>

            <tr>
                <td> 12345900 </td>                    
                <td> 18:30</td>
                <td> 2/25/2020 </td>
                <td> Alignay, Rissha Jhie-Ann</td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1325.00</td>
            </tr>

            <tr>
                <td> 12345901 </td>                    
                <td> 16:50 </td>
                <td> 2/25/2020 </td>
                <td> Paez, Christine Anne</td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1275.00</td>
            </tr>

            <tr>
                <td> 12345902 </td>                    
                <td> 15:30 </td>
                <td> 2/25/2020 </td>
                <td> Ong, Angelica Farrah Mae </td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1175.00</td>
            </tr>

            <tr>
                <td> 12345701 </td>                    
                <td> 14:10 </td>
                <td> 2/25/2020 </td>
                <td> Mirana, Joeben </td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1010.00</td>
            </tr>

            <tr>
                <td> 12345702 </td>                    
                <td> 13:10 </td>
                <td> 2/25/2020 </td>
                <td> Castillo, Kit Alejandro</td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1200.00</td>
            </tr>
            <tr>
                <td> 12345703 </td>                    
                <td> 12:20 </td>
                <td> 2/25/2020 </td>
                <td> Mirana, Joeben</td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1120.00</td>
            </tr>

            <tr>
                <td> 12345704 </td>                    
                <td> 10:25 </td>
                <td> 2/25/2020 </td>
                <td> Santiago, Lyra</td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1080.00</td>
            </tr>

            <tr>
                <td> 12345704 </td>                    
                <td> 09:00 </td>
                <td> 2/25/2020 </td>
                <td> Cruz, Jeff</td>
                <td> 1000.00</td>
                <td> 0.00</td>
                <td> 1030.00</td>
            </tr>
        
        </table>
       </div>

       <script src="../resources/js/ecWeb.js"></script>
    </body>
</html>
    
    
    
    