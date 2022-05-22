<?php
require '../lib/db.php';
session_start();

//Check the user is logged in
if (!isset($_SESSION['nic']) && strlen($_SESSION['nic']) < 10) {
    header('Location: ../php/Login.Php');
}



//Check the user is Submit Password Change Form
if (isset($_POST['psubmit'])) {


    //Validate the user input
    $required_fields = array('nic' => 'NIC', 'old_password' => 'Current Password', 'new_password' => 'New Password', 'confirm_password' => 'Confirm Password');
    $errors = array();
    foreach ($required_fields as $field => $value) {
        if (empty($_POST[$field]) || $_POST[$field] == '') {
            $errors[] = $value . ' is required';
        }
    }

    //Check NIC characters can be only numbers and letters
    if (!preg_match('/^[a-zA-Z0-9]*$/', $_POST['nic'])) {
        $errors[] = 'NIC can only be numbers and letters';
    }

    //check nic already exists ignore space
    $nic = $_POST['nic'];
    $sql = "SELECT * FROM users WHERE nic = '$nic'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    if (empty($row)) {
        $errors[] = 'NIC Does not exists';
    }



    //check Change password values are set
    if (isset($_POST['nic']) && isset($_POST['old_password']) && isset($_POST['confirm_password']) && isset($_POST['new_password'])) {
        $nic = $_POST['nic'];
        $old_password = $_POST['old_password'];
        $confirm_password = $_POST['confirm_password'];
        $new_password = $_POST['new_password'];

        //check the old password is correct sha1 encripted
        $sql = "SELECT * FROM users WHERE nic='$nic'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $old_password_db = $row['password'];
            if (sha1($old_password) == $old_password_db) {
                //check the new password and confirm password are the same
                if ($new_password == $confirm_password) {
                    //update the password
                    $new_password = sha1($new_password);
                    $sql = "UPDATE users SET password='$new_password' WHERE nic='$nic'";
                    $result = mysqli_query($connection, $sql);
                    if ($result) {
                        $success_message = "Password Changed Successfully";
                    } else {
                        $errors[] = "Password Change Failed";
                    }
                } else {
                    $errors[] = "New Password and Confirm Password do not match";
                }
            } else {
                $errors[] = "Old Password is incorrect";
            }
        }
    }
}



//Check the user is Submit Username Change Form
if (isset($_POST['submit'])) {


    //Validate the user input
    $required_fields = array('nic' => 'NIC', 'current_username' => 'Current Username', 'new_username' => 'New Username', 'confirm_username' => 'Confirm Username');
    $U_errors = array();
    foreach ($required_fields as $field => $value) {
        if (empty($_POST[$field]) || $_POST[$field] == '') {
            $U_errors[] = $value . ' is required';
        }
    }

//Check Username characters can be only numbers and letters
    if (!preg_match('/^[a-zA-Z0-9]*$/', $_POST['new_username'])) {
        $U_errors[] = 'Username can only be numbers and letters';
    }

    //check nic already exists ignore space
    $nic = $_POST['nic'];
    $sql = "SELECT * FROM users WHERE nic = '$nic'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    if (empty($row)) {
        $U_errors[] = 'NIC Does not exists';
    }

    //check Change username values are set
    if (isset($_POST['nic']) && isset($_POST['current_username']) && isset($_POST['confirm_username']) && isset($_POST['new_username'])) {
        $nic = $_POST['nic'];
        $current_username = $_POST['current_username'];
        $confirm_username = $_POST['confirm_username'];
        $new_username = $_POST['new_username'];

        //check the old username is correct sha1 encripted
        $sql = "SELECT * FROM users WHERE nic='$nic'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $current_username_db = $row['user_name'];
            if (($current_username) == $current_username_db) {
                //check the new username and confirm username are the same
                if ($new_username == $confirm_username) {
                    //update the username
                    $sql = "UPDATE users SET user_name='$new_username' WHERE nic='$nic'";
                    $result = mysqli_query($connection, $sql);
                    if ($result) {
                        $Usuccess_message = "Username Changed Successfully";
                    } else {
                        $U_errors[] = "Username Change Failed";
                    }
                } else {
                    $U_errors[] = "New Username and Confirm Username do not match";
                }
            } else {
                $U_errors[] = "Current Username is incorrect";

            }
}

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

    <!-- user-settings File -->
    <link rel="stylesheet" href="../css/user-settings.css">

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
            <li><img src="https://i.ibb.co/q5Xj3NW/dashboard-1.png" alt="">&nbsp; <span><a href="./user.php" target="_self">Dashboard</a></span> </li>
            <li><img src="https://i.ibb.co/4fxyt0k/transaction-1.png" alt="">&nbsp;<span><a href="./user-transactions.php">Transaction</a></span> </li>
            <li><img src="https://i.ibb.co/h26bpwQ/credit-card-1.png" alt="">&nbsp;<span><a href="./user-payments.php" target="_self">Payments</a></span> </li>
            <li><img src="https://i.ibb.co/jhNDBNb/settings-2.png" alt="">&nbsp;<span><a href="#">Settings</a></span> </li>
            <li><img src="https://i.ibb.co/vsK6jgH/information.png" alt="">&nbsp;<span><a href="#">Help</a></span> </li>
            <li><img src="https://i.ibb.co/8gznnxt/logout-1.png" alt="">&nbsp; <span><a href="./logout.php" target="_self">Log Out</a></span></li>
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
                <!-- Change Password -->
                <div class="recent-payments">
                    <div class="title">
                        <h2>Change User Password</h2>
                    </div>
                    <table>
                        <form action="./user-settings.php" method="POST">
                            <tr>
                                <td>
                                    <?php
                                    if (isset($errors) && !empty($errors)) {
                                        foreach ($errors as $error) {
                                            echo "<p style='color:red'>" . '-' . $error . '-' . "</p>";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nic">NIC*</label><br>
                                    <input type="text" name="nic" id="nic" placeholder="Enter NIC">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="old_password">Old Password*</label><br>
                                    <input type="password" name="old_password" id="old_password" placeholder="Enter Old Password">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="new_password">New Password*</label><br>
                                    <input type="password" name="new_password" id="new_password" placeholder="New Password">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="confirm_password">Confirm Password*</label><br>
                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" class="btn" value="Confirm &rarr;" name="psubmit">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    if (isset($success_message) && !empty($success_message)) {
                                        echo "<p style='color:green'>" . '-' . $success_message . '-' . "</p>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                <!-- Change Password -->

                <div class="new-students">

                </div>

                <!-- Change Username -->
                <div class="recent-payments">
                    <div class="title">
                        <h2>Change User Name</h2>
                    </div>
                    <table>
                        <form action="./user-settings.php" method="POST">
                            <tr>
                                <td>
                                    <?php
                                    if (isset($U_errors) && !empty($U_errors)) {
                                        foreach ($U_errors as $U_error) {
                                            echo "<p style='color:red'>" . '-' . $U_error . '-' . "</p>";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nic">NIC*</label><br>
                                    <input type="text" name="nic" id="nic" placeholder="Enter NIC">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="current_username">Current Username*</label><br>
                                    <input type="current_username" name="current_username" id="current_username" placeholder="Current Username">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="new_username">New Username*</label><br>
                                    <input type="new_username" name="new_username" id="new_username" placeholder="New Username">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="confirm_username">Confirm Username*</label><br>
                                    <input type="confirm_username" name="confirm_username" id="confirm_username" placeholder="Confirm Username">
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
                                    if (isset($Usuccess_message) && !empty($Usuccess_message)) {
                                        echo "<p style='color:green'>" . '-' . $Usuccess_message . '-' . "</p>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                <!-- Change Username -->

            </div>
        </div>
    </div>
</body>

</html>