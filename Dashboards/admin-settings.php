<?php
require '../lib/db.php';

$errors=array();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon icon -->
    <link rel="icon" href="Images/Favicon sample.png" type="image/x-icon">

    <!-- user-settings File -->
    <link rel="stylesheet" href="../css/admin-settings.css">

    <!-- Link Normalize CSS file -->
    <link rel="stylesheet" href="../css/Normalize.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">


    <title>User Settings</title>
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
            </div>

            <div class="content-2">
                <!-- Change Password -->
                <div class="admin-settings">
                    <div class="title">
                        <h2>Change Admin Password</h2>
                    </div>
                    <table>
                        <form action="" method="POST">
                            <tr>
                                <td>
                                    <label for="current_password">Current Password*</label><br>
                                    <input type="password" name="current_password" id="current_password" placeholder="Current Password" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="new_password">New Password*</label><br>
                                    <input type="password" name="new_password" id="new_password" placeholder="New Password" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="confirm_password">Confirm Password*</label><br>
                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" class="btn" value="Confirm &rarr;" name="submit">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                <!-- Change Password -->


                <!-- Change Admin Username -->
                <div class="admin-settings">
                    <div class="title">
                        <h2>Change Admin Username</h2>
                    </div>
                    <table>
                        <form action="" method="POST">
                            <tr>
                                <td>
                                    <label for="current_username">Current Username*</label><br>
                                    <input type="current_username" name="current_username" id="current_username" placeholder="Current Admin Username" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="new_username">New Username*</label><br>
                                    <input type="new_username" name="new_username" id="new_username" placeholder="New Admin Username" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="confirm_username">Confirm Username*</label><br>
                                    <input type="confirm_username" name="confirm_username" id="confirm_username" placeholder="Confirm Admin Username" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" class="btn" value="Confirm &rarr;" name="submit">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                <!-- Change Username -->

                <!-- Add Admin  -->
                <div class="admin-settings">
                    <div class="title">
                        <h2>Add Admin </h2>
                    </div>
                    <table>
                        <form action="" method="POST">
                            <tr>
                                <td>
                                    <label for="id">Admin ID*</label><br>
                                    <input type="id" name="id" id="id" placeholder="Admin ID" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="add_admin_username">Admin Username*</label><br>
                                    <input type="text" name="add_admin_username" id="add_admin_username" placeholder="Enter Admin Username" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="add_password">Password*</label><br>
                                    <input type="password" name="add_password" placeholder="Enter Password" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="Cpassword">Confirm Password*</label><br>
                                    <input type="password" name="Cpassword" id="Cpassword" placeholder="Confirm Admin Password" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" class="btn" value="Confirm &rarr;" name="submit">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                <!-- Add Admin -->

            </div>
        </div>
    </div>
</body>

</html>