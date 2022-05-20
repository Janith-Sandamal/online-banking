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

    <!-- Admin CSS File -->
    <link rel="stylesheet" href="../css/admin.css">

    <!-- Link Normalize CSS file -->
    <link rel="stylesheet" href="../css/Normalize.css">
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    

    <title>Admin</title>
</head>
<body>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <!-- <h1>Brand</h1> -->
        </div>
        <ul>
            <li><img src="https://i.ibb.co/q5Xj3NW/dashboard-1.png" alt="">&nbsp; <span><a href="./admin.php" target="_self">Dashboard</a></span> </li>
            <li><img src="https://i.ibb.co/frgxY9k/refresh.png" alt="">&nbsp;<span><a href="./admin-update.php">Update</a></span> </li>
            <li><img src="https://i.ibb.co/x7fg256/checked.png" alt="">&nbsp;<span><a href="./admin-check.php" target="_self">Check</a></span> </li>
            <li><img src="https://i.ibb.co/jhNDBNb/settings-2.png" alt="">&nbsp;<span><a href="./admin-settings.php">Settings</a></span> </li>
            <li><img src="https://i.ibb.co/vsK6jgH/information.png" alt="">&nbsp;<span><a href="#">Help</a></span> </li>
            <li><img src="https://i.ibb.co/8gznnxt/logout-1.png" alt="">&nbsp; <span><a href="./logout.php">Log Out</a></span></li>
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
                <div class="card">

                    <div class="box">
                        <table>
                            
                            <tr>
                                <td><h3>Online User Count</h3></td>
                                
                            </tr>
                            <tr>
                            <td><h3 class="btn">420</h3></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                    <table>
                        
                            <tr>
                                <td><h3>Online Application Requests</h3></td>
                            </tr>
                            <tr>
                                <td><h4 class="btn">56</h4></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                    <table>
                            <tr>
                                <td><h3><button class="btn">Add User</button></h3></td>
                            </tr>
                            <tr>
                            <td><h3><button class="btn">Remove User</button></h3></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                    <table>
                            <tr>
                                <td><h2>Loan Amount</h2></td>
                            </tr>
                            
                            <tr>
                                <td><h4 class="btn">756215645</h4></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments/Transactions</h2>
                        <!-- <a href="#" class="btn">View All</a> -->
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Inter Bank Transfer</td>
                            <td>$120</td>
                            <td>5/19/2022</td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Water Bill</td>
                            <td>$120</td>
                            <td>5/19/2022</td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Mobile Reload</td>
                            <td>$120</td>
                            <td>5/19/2022</td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Electricity Bill</td>
                            <td>$120</td>
                            <td>5/19/2022</td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Cargils</td>
                            <td>$120</td>
                            <td>5/19/2022</td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Sri Lanka Telecom</td>
                            <td>$120</td>
                            <td>5/19/2022</td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Sri Lanka Telecom</td>
                            <td>$120</td>
                            <td>5/19/2022</td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Sri Lanka Telecom</td>
                            <td>$120</td>
                            <td>5/19/2022</td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Sri Lanka Telecom</td>
                            <td>$120</td>
                            <td>5/19/2022</td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Credit Cards</h2>
                        <!-- <a href="#" class="btn">View All</a> -->
                    </div>
                    <table>
                        <tr>
                            <th>Card Number</th>
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

                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>