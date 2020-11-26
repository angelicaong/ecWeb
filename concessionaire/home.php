<?php

	session_start();
	require_once('../resources/php/session-cc.php');

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
    <nav class="bg-ecdarkblue mb-10"> 
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
            <h2 class = "flex-1 tem-left text-3xl mt-3 mb-3 font-medium tracking-wide">Menu </h2>
            <h2 class="flex-initial item-right text-center h-10 m-auto px-3 py-2 text-3xl t-3 mb-3 font-medium tracking-wider hover:bg-gray-300">Cart</button>
        </div>


    <div class ="container" id="cc-main">
       <div class ="cc-menu">
            <button type ="submit" class="btn btn-dark" id="cc-menu-items" onclick="window.location.href='rice-bowls.php'">Rice Bowls</button>
            <button type ="submit" class="btn btn-dark" id="cc-menu-items"onclick="window.location.href='sandwiches.php'">Sandwiches</button>
            <button type ="submit" class="btn btn-dark" id="cc-menu-items"onclick="window.location.href='pasta.php'">Pasta</button>
            <button type ="submit" class="btn btn-dark" id="cc-menu-items"onclick="window.location.href='salads.php'">Salads</button>
            <button type ="submit" class="btn btn-dark" id="cc-menu-items"onclick="window.location.href='hot-drinks.php'">Hot Drinks</button>
            <button type ="submit" class="btn btn-dark" id="cc-menu-items"onclick="window.location.href='cold-drinks.php'">Cold Drinks</button>
            <button type ="submit" class="btn btn-dark" id="cc-menu-items"onclick="window.location.href='shakes.php'">Shakes</button>
       </div>
       
       <div class ="cc-cart">
          <table class="table" id="table-cart">
            <thead>
            <tr>
                <th>Description</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Amount</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Pork Tonkatsu</td>
                <td>55.00</td>
                <td class="tr-qty">1</td>
                <td>55.00</td>
                <td><img src="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td> 
            </tr>
            <tr>
                <td>Clubhouse</td>
                <td>45.00</td>
                <td class="tr-qty">1</td>
                <td>45.00</td>
                <td><img src="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td> 
            </tr>
            <tr>
                <td>Mango Shake</td>
                <td>45.00</td>
                <td class="tr-qty">2</td>
                <td>90.00</td>
                <td><img src="../resources/images/delete.png" height="20px" width="20px" id="delete-icon"></td> 
            </tr>
            <tr>
                <td class="tr-space"></td>
                <td class="tr-space"></td>
                <td class="tr-space"></td>
                <td class="tr-space"></td>
                <td class="tr-space"></td> 
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Total</td>
                <td>190.00</td>
                <td></td> 
            </tr>
            </tbody>
          </table>
          
          <button type="button" data-toggle="modal" data-target="#checkout-modal" class="btn btn-success" id="checkout-btn"><img src="../resources/images/checkout.png" class ="w-6 h-6 my-auto float-left" id="checkout-icon">Check Out</button> 
            
               <div class="modal fade" id="checkout-modal" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="checkout-style">Payment Method</h5>
                        </div>
                        <div class="modal-body">
                            <div class="theme-card">
                                <form class="theme-form">
                                    <div class="form-group">
                                    <button type="button" class="btn btn-success" id="cash-btn" data-toggle="modal" data-target="#cash-modal" data-dismiss="modal">Cash</button>
                                    <button type="button" class="btn btn-success" id="id-btn" data-toggle="modal" data-target="#id-modal" data-dismiss="modal">ID</button>
                                    <button type="button" class="btn btn-success" id="app-btn" data-toggle="modal" data-target="#app-modal" data-dismiss="modal">QR Code</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                                  
                    </div>
                 </div>
                </div>
        </div>

            
          <!-- Cash Modal -->

          <div class="modal fade" id="changemodal" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" id="change-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="change-style">Change</h5>
                        </div>
                        <div class="modal-body">
                            <div class="theme-card">
                                <form class="theme-form">
                                    <div class="form-group">
                                        <label for="change" id="inputlabel">Amount Change</label>
                                        <input type="text" class="form-control" id="inputchange" required="" readonly>
                                    </div>
                                                    
                                        <input type="button" class="btn-modal btn btn-success" id="cashsubmit-btn" value="Confirm"/>
                                        <button type="button" class="btn-modal btn btn-success" id="cashcancel-btn" data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="cash-modal" tabindex="-1" role="dialog" aria-labelledby="cash" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="amount-style">Cash Payment</h5>
                        </div>

                        <div class="modal-body">
                            <div class="theme-card">
                                <form class="theme-form">
                                    <div class="form-group">
                                        <label for="amt" id="amountlabel">Enter the amount</label>
                                        <input type="number" class="form-control" id="input-amt" min=0 value="000.00" required="">
                                    </div>
                                    
                                    <button type="button" class="btn-modal btn btn-success" id="cashconfirm-btn" data-toggle="modal" data-target="#changemodal" data-dismiss="modal">Next</button>
                                    <button type="button" class="btn-modal btn btn-success" id="cashcancel-btn" data-dismiss="modal">Cancel</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

           <!-- ID Modal -->
           <div class ="modal fade" id = "transact-modal" tabindex="-1" role="dialog" aria-labelledby="transactmodal" aria-hidden="true">
              <div class ="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="theme-card">
                        <form class="theme-form">
                          <div class="form-group">
                              <label for="" id="idlabel">Transaction Completed!</label> 
                          </div>
                            <button type="button" class="btn-modal btn btn-success" id="idconfirm-btn" data-toggle="modal" data-target="#" data-dismiss="modal">Ok</button>
                            <button type="button" class="btn-modal btn btn-success" id="idcncel-btn" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                  </div>
                  </div>
               </div>
            </div>
    
            <div class ="modal fade" id = "id-modal" tabindex="-1" role="dialog" aria-labelledby="idmodal" aria-hidden="true">
              <div class ="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <h5 class = "modal-title" id ="id-style">ID Payment</h5>
                  </div>
                  <div class="modal-body">
                    <div class="theme-card">
                        <form class="theme-form">
                          <div class="form-group">
                              <label for="idnumlabel" id="idlabel">ID Number</label>
                              <input type="number" class="form-control" id="input-id" value="00-00-0000" required="" readonly>
                          </div>
                            <button type="button" class="btn-modal btn btn-outline-primary" id="idconfirm-btn" data-toggle="modal" data-target="#transact-modal" data-dismiss="modal">Next</button>
                            <button type="button" class="btn-modal btn btn-outline-primary" id="idcncel-btn" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                  </div>
              </div>
            </div>
        </div>


            <!-- QR Modal -->
            <div class ="modal fade" id = "verified-modal" tabindex="-1" role="dialog" aria-labelledby="verified" aria-hidden="true">
              <div class ="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="theme-card">
                        <form class="theme-form">
                          <div class="form-group">
                              <label for="" id="idlabel">Transaction Verified</label> 
                          </div>
                            <button type="button" class="btn-modal btn btn-outline-primary" id="qrconfirm-btn" data-toggle="modal" data-target="#" data-dismiss="modal">Ok</button>
                            <button type="button" class="btn-modal btn btn-outline-primary" id="qrcncel-btn" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                  </div>
              </div>
            </div>
            </div>

            <div class ="modal fade" id = "app-modal" tabindex="-1" role="dialog" aria-labelledby="appmodal" aria-hidden="true">
              <div class ="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <h5 class = "modal-title" id ="qr-style">QR Code Payment</h5>
                  </div>
                  <div class="modal-body">
                    <div class="theme-card">
                        <form class="theme-form">
                          <div class="form-group">
                              <label for="refnumlabel" id="refnum">Enter Reference #:</label>
                              <input type="text" class="form-control" id="input-ref" required="">
                          </div>
                            <button type="button" class="btn-modal btn btn-outline-primary" id="qrconfirm-btn" data-toggle="modal" data-target="#verified-modal" data-dismiss="modal">Confirm</button>
                            <button type="button" class="btn-modal btn btn-outline-primary" id="qrcncel-btn" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                  </div>
              </div>
            </div>
            </div>


            

           
       
       </div>
   </body>
</html>    
                
