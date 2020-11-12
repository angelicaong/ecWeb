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
    <!-- additional chuchu -->
    
    <link rel="shortcut icon" type="image" href="../resources/images/ec-logo-only.png" />
    <link rel="stylesheet" href="../resources/css/main.css">
    <title>Home</title>
    
    </head>
    
   <body>

   <header class="new-navbar">
        <a href="home.php">
            <img class = "new-navbar-logo" src= "../resources/images/ec-logo-white.png" alt="" height="60px" width="140px" >
        </a>
        <nav>
            <ul class="new-nav-area">
                <li><a class="new-navbar-apage" href="home.php">Home</a></li>
                <li><a href="accounts.php">Accounts</a></li>
                <li><a href="transaction.php">Transactions</a></li>
                <li><a href="menu.php">Menu</a></li>
            </ul>
        </nav>
        <div class = "nav-logout-btn">
            <a class ="new-navbar-btn-area" href="../resources/php/logout.php"><img src="../resources/images/logout.png" height="20px" width="20px" id="logout-icon">Log Out</a>
        </div>
        <div class = "burger">
            <div class = "line1"></div>
            <div class = "line2"></div>
            <div class = "line3"></div>
        </div>
    </header>
    
    
    <div class = "container">
        <div class = "div-amount-withdraw">
            <form class="amt-container" id="ca-amt-box">
            <h4 id="ca-total-amt"><b>Balance</b></h4>
            <input type="text" placeholder="1550.00" id="textbox-readonly-amount" name="amt" value=""readonly>
            </form>
            <button type="submit" data-toggle="modal" class="btn btn-success" data-target="#withdrawModal" id="withdraw-btn">Withdraw
            </button>
        </div>
        
          <!-- The Modal -->
          <div class="modal" id="withdrawModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Withdraw</h4>
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
    
        <h3 id="ca-trans-h3">Transaction History</h3>

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
                        <td> 14:10:32 </td>
                        <td> 2/27/2020 </td>
                        <td> Alignay, Rissha Jhie-Ann</td>
                        <td> 50.00</td>
                        <td> 0.00</td>
                        <td> 1550.00</td>
                    </tr>
                    <tr>
                        <td> 12345699 </td>                    
                        <td> 13:11:05 </td>
                        <td> 2/27/2020 </td>
                        <td> Paez, Christine Anne</td>
                        <td> 50.00</td>
                        <td> 0.00</td>
                        <td> 1500.00</td>
                    </tr>
                    <tr>
                        <td> 12345700 </td>                    
                        <td> 13:00:00 </td>
                        <td> 2/27/2020 </td>
                        <td> Ong, Angelica Farrah Mae </td>
                        <td> 25.00</td>
                        <td> 0.00</td>
                        <td> 1450.00</td>


                     </tr>
                    <tr>
                        <td> 12345701 </td>                    
                        <td> 12:05:00 </td>
                        <td> 2/27/2020 </td>
                        <td> Withdrawal </td>
                        <td> 0.00</td>
                        <td> 1000.00</td>
                        <td> 1425.00</td>

                    </tr>
                    <tr>
                        <br>
                        <td> 12345702 </td>                    
                        <td> 11:10:05 </td>
                        <td> 2/27/2020 </td>
                        <td> Castillo, Kit Alejandro</td>
                        <td> 100.00</td>
                        <td> 0.00</td>
                        <td> 2425.00</td>

                    </tr>
            </tbody>
        </table>
    </div>

    <script src="../resources/js/ecWeb.js"></script>
   </body>