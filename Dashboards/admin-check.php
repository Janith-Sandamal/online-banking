<?php
require '../lib/db.php';


//admin user details check if form is submitted
$required = array('username', 'password');

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon icon -->
    <link rel="icon" href="Images/Favicon sample.png" type="image/x-icon">

    <!-- Admin Check File -->
    <link rel="stylesheet" href="../css/admin-check.css">

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
            <li><img src="https://i.ibb.co/q5Xj3NW/dashboard-1.png" alt="">&nbsp; <span><a href="./admin.php" >Dashboard</a></span> </li>
            <li><img src="https://i.ibb.co/frgxY9k/refresh.png" alt="">&nbsp;<span><a href="./admin-update.php">Update</a></span> </li>
            <li><img src="https://i.ibb.co/x7fg256/checked.png" alt="">&nbsp;<span><a href="./admin-check.php" >Check</a></span> </li>
            <li><img src="https://i.ibb.co/jhNDBNb/settings-2.png" alt="">&nbsp;<span><a href="./admin-settings.php">Settings</a></span> </li>
            <li><img src="https://i.ibb.co/vsK6jgH/information.png" alt="">&nbsp;<span><a href="#">Help</a></span> </li>
            <li><img src="https://i.ibb.co/8gznnxt/logout-1.png" alt="">&nbsp; <span><a href="./logout.php">Log Out</a></span></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                
                <div class="user">
                    
                    
                    <div class="img-case">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="content">

            <div class="cards">
            </div>
            
            <div class="content-2">

                <!-- Search User -->
                <div class="details-update">
                    <div class="title">
                        <h2>Users Details Search</h2>   
                    </div>
                    <table>
                        <form action="">

                            <tr>
                                <td>
                                    <label for="nic">NIC*</label><br>
                                    <input type="text" name="nic" id="nic" placeholder="Enter NIC Number" >
                                </td>

                                <td>
                                    <label for="email">Email*</label><br>
                                    <input type="email" name="email" id="email" placeholder="Enter Email Address" >
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="username">Username*</label><br>
                                    <input type="text" name="username" id="username" placeholder="Enter Username" >
                                </td>

                                
                            </tr>

                            

                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Confirm &rarr;">
                                </td>
                            </tr>


                        </form>
                    </table>

                </div>
                <!-- Search User -->


            </div>
        </div>
    </div>
</body>
</html>