<?php
require '../lib/db.php';
session_start();

//Change admin password if form is submitted
if (isset($_POST['add_admin'])) {

    //Validate Admin input
    $required_fields = array('nic' => 'NIC', 'fname' => 'First Name', 'lname' => 'Last Name', 'add_admin_username' => 'Admin Username', 'add_password' => 'Password', 'Cpassword' => 'Confirm Password');

    $errors = array();

    foreach ($required_fields as $field => $label) {
        if (!isset($_POST[$field]) || empty($_POST[$field])) {
            $errors[] = $label . ' is a required field.';
        }
    }

    //addmin username only letters and numbers
    if (!preg_match('/^[a-zA-Z0-9]*$/', $_POST['add_admin_username'])) {
        $errors[] = 'The Admin Username can only contain letters and numbers.';
    }

    //frist name only letters and last name only letters
    if (!preg_match('/^[a-zA-Z]*$/', $_POST['fname'])) {
        $errors[] = 'The First Name can only contain letters.';
    }

    //password and confirm password must match
    if ($_POST['add_password'] != $_POST['Cpassword']) {
        $errors[] = 'The Password and Confirm Password do not match.';
    }

    //password must be at least 8 characters and ingnore white space
    if (!preg_match('/^\S{8,}$/', $_POST['add_password'])) {
        $errors[] = 'The Password must be at least 8 characters long and ingnore space.';
    }

    //NIC number characters must between 10 and 12 and ingnore white space and only numbers and letters
    if (!preg_match('/^[0-9a-zA-Z]{10,12}$/', $_POST['nic'])) {
        $errors[] = 'The NIC number must be between 10 and 12 characters long "<br>"ingnore space and only numbers and letters.';
    }

    //errors are empty then insert the data and password insert as sha1
    if (empty($errors)) {
        $nic = mysqli_real_escape_string($connection, $_POST['nic']);
        $fname = mysqli_real_escape_string($connection, $_POST['fname']);
        $lname = mysqli_real_escape_string($connection, $_POST['lname']);
        $username = mysqli_real_escape_string($connection, $_POST['add_admin_username']);
        $password = mysqli_real_escape_string($connection, $_POST['add_password']);
        $password = sha1($password);

        $sql = "INSERT INTO admins ( first_name,last_name,nic, user_name, password) VALUES ( '$fname', '$lname','$nic', '$username', '$password')";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            $success_message = 'Admin Added Successfully';
        } else {
            $errors[] = 'Admin could not be added';
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
            <li><img src="https://i.ibb.co/q5Xj3NW/dashboard-1.png" alt="">&nbsp; <span><a href="./admin.php">Dashboard</a></span> </li>
            <li><img src="https://i.ibb.co/frgxY9k/refresh.png" alt="">&nbsp;<span><a href="./admin-update.php">Update</a></span> </li>
            <li><img src="https://i.ibb.co/x7fg256/checked.png" alt="">&nbsp;<span><a href="./admin-check.php">Check</a></span> </li>
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

                <!-- Add Admin  -->
                <div class="admin-settings">
                    <div class="title">
                        <h2>Add Admin </h2>
                    </div>
                    <table>
                        <form action="./admin-settings.php" method="POST">
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
                                    <label for="nic">NIC Number</label><br>
                                    <input type="text" name="nic" id="nic" placeholder="NIC Number">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="fname">First Name</label><br>
                                    <input type="text" name="fname" id="fname" placeholder="First name">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="lname">Last Name</label><br>
                                    <input type="text" name="lname" id="lname" placeholder="Last name">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="add_admin_username">Admin Username*</label><br>
                                    <input type="text" name="add_admin_username" id="add_admin_username" placeholder="Enter Admin Username">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="add_password">Password*</label><br>
                                    <input type="password" name="add_password" placeholder="Enter Password">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="Cpassword">Confirm Password*</label><br>
                                    <input type="password" name="Cpassword" id="Cpassword" placeholder="Confirm Admin Password">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" class="btn" value="Confirm &rarr;" name="add_admin">
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
                <!-- Add Admin -->

            </div>
        </div>
    </div>
</body>

</html>