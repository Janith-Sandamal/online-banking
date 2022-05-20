<?php
require '../lib/db.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon icon -->
    <link rel="icon" href="Images/Favicon sample.png" type="image/x-icon">

    <!-- user-transactions File -->
    <link rel="stylesheet" href="../css/user-transactions.css">

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
            <li><img src="https://i.ibb.co/4fxyt0k/transaction-1.png" alt="">&nbsp;<span><a href="#">Transaction</a></span> </li>
            <li><img src="https://i.ibb.co/h26bpwQ/credit-card-1.png" alt="">&nbsp;<span><a href="./user-payments.php" target="_self">Payments</a></span> </li>
            <li><img src="https://i.ibb.co/jhNDBNb/settings-2.png" alt="">&nbsp;<span><a href="#">Settings</a></span> </li>
            <li><img src="https://i.ibb.co/vsK6jgH/information.png" alt="">&nbsp;<span><a href="#">Help</a></span> </li>
            <li><img src="https://i.ibb.co/8gznnxt/logout-1.png" alt="">&nbsp; <span><a href="#">Log Out</a></span></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <!-- <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div> -->
                <div class="user">
                    <a href="#" class="btn">Pilana Gamage Eranga Janith Sandamal</a>
                    <!-- <img src="notifications.png" alt=""> -->
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">

            <div class="cards">
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Inter Banks Transactions</h2>
                        <!-- <a href="#" class="btn">View All</a> -->
                    </div>
                    <table>
                        <form action="">
                            <tr>
                                <td>
                                    <label for="from">From Account*</label><br>
                                    <select name="from" id="from">
                                        <option value="" selected>-Select-</option>
                                        <option value="reguler savings">Reguler Savings</option>
                                        <option value="youth  plus">Youth Plus</option>
                                    </select>
                                </td>
                                <td>
                                <label for="type">Type*</label><br>
                                    <select name="type" id="type">
                                        <option value="" selected>-Select-</option>
                                        <option value="one time transaction">One Time Transaction</option>
                                        <option value="immediate transfer">Immediate Transfer</option>
                                        <option value="recurring transfer">Recurring Transfer</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="beneficiary name">Beneficiary Name</label><br>
                                    <input type="text" name="beneficiary name" placeholder="Beneficiary Name">
                                </td>
                                <td>
                                    <label for="beneficiary account">Beneficiary Account Number</label><br>
                                    <input type="text" name="beneficiary account" placeholder="Beneficiary Account">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="email">Beneficiary Email*</label> <br>
                                    <input type="email" name="beneficiary email" placeholder="Beneficiary Email">
                                </td>
                                <td>
                                    <label for="branch">Branch*</label><br>
                                    <select name="branch" id="branch">
                                        <option value="">-Select-</option>
                                        <option value="galle">Galle</option>
                                        <option value="colombo">Colombo</option>
                                        <option value="kandy">Kandy</option>
                                        <option value="matara">Matara</option>
                                        <option value="kurunegala">Kurunegala</option>
                                        <option value="badulla">Badulla</option>
                                        <option value="hambantota">Hambantota</option>
                                        <option value="jaffna">Jaffna</option>
                                        <option value="kalutara">Kalutara</option>
                                        <option value="gampaha">Gampaha</option>
                                        <option value="malabe">Malabe</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="mobile number">Beneficiary Mobile Number</label><br>
                                    <input type="text" name="mobile number" placeholder="Mobile Number">
                                </td>
                                <td>
                                    <label for="amount">Amount*</label><br>
                                    <input type="text" name="amount" placeholder="Amount">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="purpose">Purpose</label><br>
                                    <input type="text" name="purpose" placeholder="Purpose">
                                </td>
                                <td>
                                    <label for="remarks">Remarks</label><br>
                                    <input type="text" name="remarks" placeholder="Remarks">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="date">Date*</label><br>
                                    <input type="date" name="date" placeholder="Date">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <input type="submit" value="Transfer &rarr;" name="submit" class="btn">
                                </td>
                            </tr>

                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>