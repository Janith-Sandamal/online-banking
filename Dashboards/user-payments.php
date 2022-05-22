<?php
require '../lib/db.php';
session_start();

//Check the user is logged in
if (!isset($_SESSION['nic']) && strlen($_SESSION['nic']) < 10) {
    header('Location: ../php/Login.Php');
}

//Check user submit trabsaction form
if(isset($_POST['submit'])){


//Requried fields
$required = array('from'=>'From Account','type'=>'Bill Type','provider'=>'Provider','account_number'=>'Account Number','confirm_account_number'=>'Confirm Account Number','amount'=>'Amount','date'=>'Date');

$errors= array();

//Check if all required fields are filled
foreach ($required as $field => $label) {
    if(empty($_POST[$field]) || $_POST[$field]==''){
        $errors[]=$label.' is required';
    }
}



// account Number and confirm account number length should 10
if(!empty((strlen(trim(($_POST['account_number'])))))!=10 || (!empty(strlen(trim(($_POST['confirm_account_number']))))) !=10){
    $errors[]='Account Number should be 10 digits';
}


//Confirm account number and account numbers should be same
if((!empty(trim($_POST['account_number'])))!= (!empty(trim( $_POST['confirm_account_number'])))){
    $errors[]='Account Number and Confirm Account Number should be same';
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon icon -->
    <link rel="icon" href="Images/Favicon sample.png" type="image/x-icon">

    <!-- user-payments File -->
    <link rel="stylesheet" href="../css/user-payments.css">

    <!-- Link Normalize CSS file -->
    <link rel="stylesheet" href="../css/Normalize.css">
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    

    <title>User Dashboard</title>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <!-- <h1>Brand</h1> -->
        </div>
        <ul>
            <li><img src="https://i.ibb.co/q5Xj3NW/dashboard-1.png" alt="">&nbsp; <span><a href="./user.php" target="_self">Dashboard</a></span> </li>
            <li><img src="https://i.ibb.co/4fxyt0k/transaction-1.png" alt="">&nbsp;<span><a href="./user-transactions.php">Transaction</a></span> </li>
            <li><img src="https://i.ibb.co/h26bpwQ/credit-card-1.png" alt="">&nbsp;<span><a href="./user-payments.php" target="_self">Payments</a></span> </li>
            <li><img src="https://i.ibb.co/jhNDBNb/settings-2.png" alt="">&nbsp;<span><a href="./user-settings.php">Settings</a></span> </li>
            <li><img src="https://i.ibb.co/vsK6jgH/information.png" alt="">&nbsp;<span><a href="#">Help</a></span> </li>
            <li><img src="https://i.ibb.co/8gznnxt/logout-1.png" alt="">&nbsp; <span><a href="./logout.php">Log Out</a></span></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                
                <div class="user">
                    <a href="#" class="btn"><?php echo "Hello, " .  $_SESSION['username']; ?></a>
                    
                    <div class="img-case">
                        <?php echo "<img src='https://ui-avatars.com/api/?name=" . $_SESSION['username'] . "'/>"; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">

            <div class="cards">
            </div>
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Utility Payments</h2>   
                    </div>
                    <table>
                        <form action="./user-payments.php" method="POST">
                            <tr>
                                <td>
                                    <?php
                                    if(isset($errors) && !empty($errors)){
                                        foreach($errors as $error){
                                            echo "<p style='color:red;'>"."-".$error."-"."</p>";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="from">From*</label><br>
                                    <select name="from" id="from" >
                                        <option value="">-Select-</option>
                                        <option value="reguler savings">Reguler Savings</option>
                                        <option value="youth  plus">Youth Plus</option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="type">Type</label><br>
                                    <select name="type" id="type" >
                                        <option value="">-Select-</option>
                                        <option value="water bill">Water Bill</option>
                                        <option value="electricity bill">Electricity Bill</option>
                                        <option value="internet bill">Internet Bill</option>
                                        <option value="telephone bill">Telephone Bill</option>
                                        <option value="others">Others</option>
                                    </select>
                                </td>
                                <td>
                                    <label for="provider">Provider</label><br>
                                    <select name="provider" id="provider" >
                                        <option value="">-Select-</option>
                                        <option value="water board">Sri Lanka Water Board</option>
                                        <option value="ceb">CEB</option>
                                        <option value="leco">LECO</option>
                                        <option value="dialog">Dialog Asiata</option>
                                        <option value="slt">Sri Lanka Telecom</option>

                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="account_number">Account Number</label><br>
                                    <input type="text" name="account_number" id="account_number" placeholder="Enter account number" >
                                </td>
                                <td>
                                    <label for="confirm_account_number">Account Number</label><br>
                                    <input type="text" name="confirm_account_number" id="confirm_account_number" placeholder="Re-Enter account number" >
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="amount">Amount</label><br>
                                    <input type="text" name="amount" id="amount" placeholder="Enter Amount" >
                                </td>
                                <td>
                                    <label for="date">Date</label><br>
                                    <input type="date" name="date" id="date" >
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" class="btn" value="Confirm &rarr;" name="submit">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    if(empty($errors)&&isset($_POST['submit'])){
                                        echo "<p style='color:green;'>"."Payment Successful"."</p>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        </form>
                    </table>

                </div>
                <div class="new-students">
                    <!-- <div class="title">
                        <h2>Payments History</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th class="btn">Type</th>
                            <td class="btn">800456210</td>
                            
                        </tr>
                        <tr>
                            <th>Expire Date</th>
                            <td>9/25/2026</td>
                            
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>Active</td>
                            
                        </tr>
                        <tr>
                            <th>Available Balance</th>
                            <td>Rs 356784.00</td>
                            
                        </tr>
                        <tr>
                            <th>Current Balance</th>
                            <td>Rs 210456.00</td>
                            
                        </tr>
                        <tr>
                            <th>Payment Due Date</th>
                            <td>5/29/2022</td>
                            
                        </tr>

                    </table> -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>