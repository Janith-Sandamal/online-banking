<?php
require '../lib/db.php';
session_start();


//Check the admin is Submit user add form
if (isset($_POST['add_submit'])) {


    //validate the user input
    $required_fields = array('nic' => 'NIC', 'account_no' => 'Account Number', 'username' => 'Username', 'password' => 'Password', 'Cpassword' => 'Confirm Password');

    $add_errors = array();

    foreach ($required_fields as $fieldname => $fieldvalue) {
        if (empty($_POST[$fieldname]) || $_POST[$fieldname] == "") {
            $add_errors[] = $fieldvalue . ' is required';
        }
    }

    //check the password and confirm password are same and not empty
    if (!empty($_POST['password']) || !empty($_POST['Cpassword'])) {
        if ($_POST['password'] != $_POST['Cpassword']) {
            $add_errors[] = 'Password and Confirm Password are not same';
        }
    }

    //check the nic is exist or not customers table
    if (!empty($_POST['nic'])) {
        $nic = $_POST['nic'];
        $sql = "SELECT * FROM customers WHERE nic='$nic'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) == 0) {
            $add_errors[] = 'NIC is not exist';
        }
    }
    //check the account number is exist or not  saving account table
    if (!empty($_POST['account_no'])) {
        $account_no = $_POST['account_no'];
        $sql = "SELECT * FROM saving_acc WHERE acc_no='$account_no'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) == 0) {
            $add_errors[] = 'Account Number is not exist';
        }
    }

    //Username is only letter and number
    if (!empty($_POST['username'])) {
        $username = $_POST['username'];
        if (!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
            $add_errors[] = 'Username is only letter and number';
        }
    }

    //Password , confirm length is greater than 8 and ignore space
    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
        if (!preg_match('/^[a-zA-Z0-9]{8,}$/', $password)) {
            $add_errors[] = 'Password length is greater than 8 and ignore space';
        }
    }

    //errors are empty then insert the data and password insert as sha1
    if (empty($add_errors)) {
        $nic = $_POST['nic'];
        $account_no = $_POST['account_no'];
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $sql = "INSERT INTO users(nic,user_name,password) VALUES('$nic','$username','$password')";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            $add_success_message = 'User added successfully';
        } else {
            $add_errors[] = 'User not added';
        }
    }
}

//Check the admin is Submit remove user form
if (isset($_POST['remove_submit'])) {
    $required_fields = array('nic' => 'NIC', 'username' => 'User Name');

    $remove_errors = array();

    foreach ($required_fields as $fieldname => $fieldvalue) {
        if (empty($_POST[$fieldname]) || $_POST[$fieldname] == "") {
            $remove_errors[] = $fieldvalue . ' is required';
        }
    }

    //Check nic is exist or not in users table
    if (!empty($_POST['nic'])) {
        $nic = $_POST['nic'];
        $sql = "SELECT * FROM users WHERE nic='$nic'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) == 0) {
            $remove_errors[] = 'NIC is not exist';
        }
    }

    //Nic is only letter and number
    if (!empty($_POST['username'])) {
        $username = $_POST['username'];
        if (!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
            $remove_errors[] = 'Username is only letter and number';
        }
    }

    //Nic number length is between 10 and 12 and ignore space
    if (!empty($_POST['nic'])) {
        $nic = $_POST['nic'];
        if (!preg_match('/^[a-zA-Z0-9]{10,12}$/', $nic)) {
            $remove_errors[] = 'NIC number length is between 10 and 12 and ignore space';
        }
    }

    //errors are empty then remove the user
    if (empty($remove_errors)) {
        $nic = $_POST['nic'];
        $username = $_POST['username'];
        $sql = "DELETE FROM users WHERE nic='$nic' AND user_name='$username'";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            $remove_success_message = 'User removed successfully';
        } else {
            $remove_errors[] = 'User not removed';
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

    <!-- Admin Update File -->
    <link rel="stylesheet" href="../css/admin-update.css">

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
                    <a href="#" class="btn"><?php echo "Hello, " . $_SESSION['admin_first_name']; ?></a>
                    <!-- <img src="notifications.png" alt=""> -->
                    <div class="img-case">
                        <?php echo "<img src='https://ui-avatars.com/api/?name=" . $_SESSION['admin_first_name'] . "'/>"; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">

            <div class="cards">
            </div>

            <div class="content-2">

                <!-- Add User -->
                <div class="details-update">
                    <div class="title">
                        <h2>Add User</h2>
                    </div>
                    <table>
                        <form action="./admin-update.php" method="POST">
                            <tr>
                                <td>
                                    <?php
                                    if (isset($add_errors) && !empty($add_errors)) {
                                        foreach ($add_errors as $add_error) {
                                            echo "<p style='color:red'>" . '-' . $add_error . '-' . "</p>";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nic">NIC*</label><br>
                                    <input type="text" name="nic" id="nic" placeholder="Enter NIC Number">
                                </td>

                                <td>
                                    <label for="account_no">Saving Account Number*</label><br>
                                    <input type="text" name="account_no" id="account_no" placeholder="Enter Saving Account Number">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="username">Username*</label><br>
                                    <input type="text" name="username" id="username" placeholder="Enter Username">
                                </td>

                                <td>
                                    <label for="password">Password*</label><br>
                                    <input type="password" name="password" id="password" placeholder="Enter Password">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="Cpassword">Confirm Password</label><br>
                                    <input type="password" name="Cpassword" id="Cpassword" placeholder="Enter Password Again">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" name="add_submit" value="Confirm &rarr;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    if (isset($add_success_message) && !empty($add_success_message)) {
                                        echo "<p style='color:green'>" . '-' . $add_success_message . '-' . "</p>";
                                    }
                                    ?>
                                </td>
                            </tr>


                        </form>
                    </table>

                </div>
                <!-- Add User -->


                <!-- Remove User -->
                <div class="details-update">
                    <div class="title">
                        <h2>Remove User</h2>
                    </div>
                    <table>
                        <form action="./admin-update.php" method="POST">
                            <tr>
                                <td>
                                    <?php
                                    if (isset($remove_errors) && !empty($remove_errors)) {
                                        foreach ($remove_errors as $remove_error) {
                                            echo "<p style='color:red'>" . '-' . $remove_error . '-' . "</p>";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nic">NIC*</label><br>
                                    <input type="text" name="nic" id="nic" placeholder="Enter NIC Number">
                                </td>

                                <td>
                                    <label for="username">Username*</label><br>
                                    <input type="text" name="username" id="username" placeholder="Enter Username">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" name="remove_submit" value="Confirm &rarr;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    if (isset($remove_success_message) && !empty($remove_success_message)) {
                                        echo "<p style='color:green'>" . '-' . $remove_success_message . '-' . "</p>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                <!-- Remove User -->




            </div>
        </div>
    </div>
</body>

</html>