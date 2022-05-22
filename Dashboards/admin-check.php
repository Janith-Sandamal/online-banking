<?php
require '../lib/db.php';


if (isset($_POST['submit'])) {
    $errors = array();

    if ($_POST['searchBy'] == 'nic') {
        if (!isset($_POST['nic']) || strlen(trim($_POST['nic'])) < 9) {
            $errors[] = "NIC is Invalid or Missing!";
        }

        if (empty($errors)) {
            $nic = $_POST['nic'];
            $query = "SELECT * FROM customers WHERE nic='{$nic}' LIMIT 1;";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result) == 1) {
                $data = mysqli_fetch_assoc($result);
            } else {
                $errors[] = "No Customer with a given NIC";
            }
        }
    } elseif ($_POST['searchBy'] == 'email') {
        if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
            $errors[] = "E-mail is Invalid or Missing!";
        }

        if (empty($errors)) {
            $email = $_POST['email'];
            $query = "SELECT * FROM customers WHERE email='{$email}' LIMIT 1;";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result) == 1) {
                $data = mysqli_fetch_assoc($result);
            } else {
                $errors[] = "No Customer with a given E-mail";
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
                    <?php

                    if (!empty($errors)) {
                        echo '<p style="color:red; margin:10px 0 0 10px;">';
                        foreach ($errors as $error) {
                            echo $error . '<br>';
                        }
                        echo '</p>';
                    }


                    ?>
                    <table>
                        <form action="./admin-check.php" method="POST">

                            <tr>
                                <td>
                                    <label for="nic">NIC*</label><br>
                                    <input type="text" name="nic" id="nic" placeholder="Enter NIC Number">
                                </td>

                                <td>
                                    <label for="email">Email*</label><br>
                                    <input type="email" name="email" id="email" placeholder="Enter Email Address">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Search by*</label><br>
                                    <input type="radio" name="searchBy" value="nic" checked> NIC &nbsp;
                                    <input type="radio" name="searchBy" value="email"> E-mail
                                </td>


                            </tr>



                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Search &rarr;">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>

                            <?php

                            if (empty($errors) && isset($data)) {
                                echo "<tr>"
                                    . "<td> Full Name: </td>"
                                    . "<th>" . $data['title'] . " " . $data['frist_name'] . " " . $data["last_name"] . "</th>"
                                    . "</tr>";
                                echo "<tr>"
                                    . "<td> NIC: </td>"
                                    . "<th>" . $data['nic'] . "</th>"
                                    . "</tr>";
                                echo "<tr>"
                                    . "<td> E-mail: </td>"
                                    . "<th>" . $data['email'] . "</th>"
                                    . "</tr>";
                                echo "<tr>"
                                    . "<td> Mobile Number: </td>"
                                    . "<th>" . $data['phone_number'] . "</th>"
                                    . "</tr>";
                                echo "<tr>"
                                    . "<td> City: </td>"
                                    . "<th>" . $data['city'] . "</th>"
                                    . "</tr>";
                            }

                            ?>


                        </form>
                    </table>

                </div>
                <!-- Search User -->


            </div>
        </div>
    </div>
</body>

</html>