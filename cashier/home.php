

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

   <body>
    <nav class="bg-ecdarkblue mb-2"> 
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex sm:items-stretch sm:justify-start">
                    <a class="flex items-center" href="home.php" >
                        <img class="block h-10 w-auto pl-4" src= "../resources/images/ec-logo-white-new.png" alt="EC Card logo">
                    </a>
                </div>  
            <ul class="new-nav-area">
                <li><a class="new-navbar-apage" href="home.php">Home</a></li>
                <li><a href="transactions.php">Transactions</a></li>
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
    
       
        <h2 class = "text-4xl">Transaction History</h2>
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
            <tbody>
                    <tr>
                        <td> 12345696 </td>                    
                        <td> 14:10 </td>
                        <td> 2/27/2020 </td>
                        <td> Honey Glazed Pork</td>
                        <td> 50.00</td>
                        <td> 0.00</td>
                        <td> 1550.00</td>
                    </tr>
                    <tr>
                        <td> 12345699 </td>                    
                        <td> 13:11 </td>
                        <td> 2/27/2020 </td>
                        <td> Pork Tonkatsu</td>
                        <td> 50.00</td>
                        <td> 0.00</td>
                        <td> 1500.00</td>
                    </tr>
                    <tr>
                        <td> 12345700 </td>                    
                        <td> 13:00 </td>
                        <td> 2/27/2020 </td>
                        <td> Brownies </td>
                        <td> 25.00</td>
                        <td> 0.00</td>
                        <td> 1450.00</td>


                     </tr>
                    <tr>
                        <td> 12345701 </td>                    
                        <td> 12:05 </td>
                        <td> 2/27/2020 </td>
                        <td> Withdrawal </td>
                        <td> 0.00</td>
                        <td> 1000.00</td>
                        <td> 1425.00</td>

                    </tr>
                    <tr>
                        <br>
                        <td> 12345702 </td>                    
                        <td> 11:10 </td>
                        <td> 2/27/2020 </td>
                        <td> Honey Glazed Pork</td>
                        <td> 100.00</td>
                        <td> 0.00</td>
                        <td> 2425.00</td>

                    </tr>
            </tbody>
        </table>
    </div>

    <script src="../resources/js/ecWeb.js"></script>
   </body>
   </html>