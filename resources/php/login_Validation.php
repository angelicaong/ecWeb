<?php
	session_start();
	require_once('db.php');
				 
	if(isset($_POST['login'])){
        $login_username = $_POST['login_username'];
		$login_password = $_POST['login_password'];

		if (!empty($login_username) && !empty($login_password)) {
            $sql = "SELECT * FROM login_info WHERE username = '{$login_username}' AND password = MD5('{$login_password}')"; 
            
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    
                    $_SESSION['username']= $row['username']; 
                    $_SESSION['role']= $row['role'];
                    
				    if ($row['role'] == 'student') {
                        mysqli_close($conn);
						header("Location: ../../index.php?msg=5"); //no access
                    }
                    else if ($row['role'] == 'admin') {
						header("Location: ../../admin/home.php");
					}
					else if ($row['role'] == 'cashier'){
						header("Location: ../../cashier/home.php");
					}	
                    else if ($row['role'] == 'concessionaire-admin'){
                        if ($row['status'] == 'Active') {
                            header("Location: ../../concessionaire-admin/home.php");
                        }
                        else {
                            mysqli_close($conn);
                            header("Location: ../../index.php?msg=6"); //no more access
                        }
                    }    
                    else if ($row['role'] == 'concessionaire-cashier'){
                        if ($row['status'] == 'Active') {
                            header("Location: ../../concessionaire/home.php");
                        }
                        else {
                            mysqli_close($conn);
                            header("Location: ../../index.php?msg=6"); //no more access
                        }
                    }
				    else {
                        mysqli_close($conn);
				        header("Location: ../../index.php?msg=1"); //Incorrect username and password.
				    }          
                }
                /*else {
                    header("Location: ../../index.php?msg=2"); //Incorrect username and password.
                }*/
            } 
            else {
                mysqli_close($conn);
                header ("Location: ../../index.php?msg=2"); //incorrect username and password*/
            }
        }
        else {
            header("Location: ../../index.php?msg=3"); //empty username and password
	   }
    }
    else {
        header ("Location: ../../index.php?msg=4"); //no form submitted
    }
?>