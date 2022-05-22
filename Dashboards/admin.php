<?php
require '../lib/db.php';
session_start();

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
$user_count = mysqli_num_rows($result);

if (isset($_POST['accept'])) {
    $id = $_POST['accept'];
    $query = "SELECT * FROM temp_users WHERE id={$id};";
    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_assoc($result);
    $nic = $data['nic'];
    $email = $data['email'];
    $username = $data['user_name'];
    $password = $data['password'];

    $query = "INSERT INTO users (nic, email, user_name, password) VALUES ('{$nic}', '{$email}', '{$username}', '{$password}');";
    $result = mysqli_query($connection, $query);

    $query = "DELETE FROM temp_users WHERE id={$id};";
    $result = mysqli_query($connection, $query);
}
if (isset($_POST['decline'])) {
    $id = $_POST['decline'];
    $query = "DELETE FROM temp_users WHERE id={$id};";
    $result = mysqli_query($connection, $query);
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
                    <div class="card">

                        <div class="box">
                            <table>

                                <tr>
                                    <td>
                                        <h3>User Count</h3>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <h3 class="btn"><?php echo $user_count; ?></h3>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <table>

                                <tr>
                                    <td>
                                        <h3>Online Application Requests</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="btn">56</h4>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <table>
                                <tr>
                                    <td>
                                        <h3><a href="./admin-update.php" class="btn">Add User</a></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3><a href="./admin-settings.php" class="btn">Add Admin</a></h3>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <table>
                                <tr>
                                    <td>
                                        <h2>Loan Amount</h2>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h4 class="btn">756215645</h4>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="content-2">
                    <div class="recent-payments">
                        <div class="title">
                            <h2>Recent Payments/Transactions</h2>

                        </div>
                        <table>
                            <tr>
                                <th>NIC</th>
                                <th>Username</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <form action="./admin.php" method="POST">
                                <?php

                                $query = "SELECT * FROM temp_users";
                                $result = mysqli_query($connection, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($data = mysqli_fetch_assoc($result)) {
                                        echo "<tr>"
                                            . "<td>" . $data['nic'] . "</td>"
                                            . "<td>" . $data['user_name'] . "</td>"
                                            . "<td><button type='submit' id='accept' name='accept' value=" . $data['id'] . ">Accept</button></td>"
                                            . "<td><button type='submit' id='decline' name='decline' value=" . $data['id'] . ">Decline</button></td>";
                                    }
                                }



                                ?>
                            </form>
                        </table>
                    </div>
                    <div class="new-students">
                        <div class="title">
                            <h2>Admin Details</h2>

                        </div>

                        <table>
                            <tr>
                                <th>Admin ID</th>
                                <td class="btn">10556</td>

                            </tr>
                            <tr>
                                <th>Login Time</th>
                                <td>13:53:25</td>

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