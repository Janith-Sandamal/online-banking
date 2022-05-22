<?php
require '../lib/db.php';
session_start();

//Check the user is logged in
if (!isset($_SESSION['nic']) && strlen($_SESSION['nic']) < 10) {
    header('Location: ../php/Login.Php');
}

//Check user submit trabsaction form
if (isset($_POST['submit'])) {

    //user nic
    $nic = $_SESSION['nic'];

    //Reuired field validation
    $required_fields = array('ptype' => 'Payment Type', 'type' => 'Payment Method', 'beneficiary_name' => 'Beneficiary', 'beneficiary_account' => 'Beneficiary Name', 'beneficiary_email' => 'Beneficiary Email', 'branch' => 'Branch', 'mobile_number' => 'Mobile Number', 'amount' => 'Amount', 'date' => 'Date', 'remarks' => 'Remarks');

    $errors = array();
    $is_Done = false;

    foreach ($required_fields as $fieldname => $fieldvalue) {
        if (empty($_POST[$fieldname]) || $_POST[$fieldname] == '') {
            $errors[] = $fieldvalue . ' is required';
        }
    }

    //Beneficiary account Number validation
    if (!empty($_POST['beneficiary_account'])) {
        if (!preg_match('/^[0-9]{10}$/', $_POST['beneficiary_account'])) {
            $errors[] = 'Beneficiary Account Number must be 10 digits';
        }
    }

    //Mobile Number validation
    if (!empty($_POST['mobile_number'])) {
        if (!preg_match('/^[0-9]{10}$/', $_POST['mobile_number'])) {
            $errors[] = 'Mobile Number must be 10 digits';
        }
    }

    //Beneficiary Account Number validation is in saving account table or  Youth account table are exist
    if (!empty($_POST['beneficiary_account'])) {
        $beneficiary_account = $_POST['beneficiary_account'];
        $sql = "SELECT * FROM saving_acc WHERE acc_no='$beneficiary_account'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
        } else {
            $sql = "SELECT * FROM youth_acc WHERE acc_no='$beneficiary_account'";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
            } else {
                $errors[] = 'Beneficiary Account Number is not exist';
            }
        }
    }

    if (empty($errors) && $_POST['ptype'] == 'reguler savings') {
        $query = "SELECT * FROM saving_acc WHERE nic='{$nic}';";
        $result = mysqli_query($connection, $query);
        $data = mysqli_fetch_assoc($result);
        $user_acc = $data['acc_no'];
        $user_current_balance = $data['amount'];
        $sent_amount = $_POST['amount'];
        $new_amount = $user_current_balance - $sent_amount;

        $query = "UPDATE saving_acc SET amount = {$new_amount} WHERE acc_no='{$user_acc}';";
        $result = mysqli_query($connection, $query);

        $ben_acc_no = $_POST['beneficiary_account'];
        $query = "SELECT * FROM saving_acc WHERE acc_no={$ben_acc_no} LIMIT 1;";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
            $ben_saving_acc_no = $data['acc_no'];
            $ben_current_balance = $data['amount'];
            $new_amount = $ben_current_balance + $sent_amount;

            $query = "UPDATE saving_acc SET amount = {$new_amount} WHERE acc_no='{$ben_saving_acc_no}';";
            $result = mysqli_query($connection, $query);
        } else {
            $query = "SELECT * FROM youth_acc WHERE acc_no={$ben_acc_no} LIMIT 1;";
            $result = mysqli_query($connection, $query);
            $data = mysqli_fetch_assoc($result);
            $ben_youth_acc_no = $data['acc_no'];
            $ben_current_balance = $data['amount'];
            $new_amount = $ben_current_balance + $sent_amount;

            $query = "UPDATE youth_acc SET amount = {$new_amount} WHERE acc_no='{$ben_youth_acc_no}';";
            $result = mysqli_query($connection, $query);
        }

        $receive_acc = $_POST['beneficiary_account'];
        $remark = $_POST['remarks'];
        $type = $_POST['type'];
        $name = $_POST['beneficiary_name'];
        $email = $_POST['beneficiary_email'];
        $mobile = $_POST['mobile_number'];
        $branch = $_POST['branch'];

        $query = "INSERT INTO transactions (receive_acc, sent_acc, remark, amount, type, ben_name, ben_email, ben_mobile, branch, datetime) VALUES ({$receive_acc}, {$user_acc}, '{$remark}', {$sent_amount}, '{$type}', '{$name}', '{$email}', '{$mobile}', '{$branch}', now());";
        $result = mysqli_query($connection, $query);
    } elseif (empty($errors) && $_POST['ptype'] == 'youth plus') {

        $query = "SELECT * FROM youth_acc WHERE nic='{$nic}';";
        $result = mysqli_query($connection, $query);
        $data = mysqli_fetch_assoc($result);
        $user_acc = $data['acc_no'];
        $user_current_balance = $data['amount'];
        $sent_amount = $_POST['amount'];
        $new_amount = $user_current_balance - $sent_amount;

        $query = "UPDATE youth_acc SET amount = {$new_amount} WHERE acc_no='{$user_acc}';";
        $result = mysqli_query($connection, $query);

        $ben_acc_no = $_POST['beneficiary_account'];
        $query = "SELECT * FROM saving_acc WHERE acc_no={$ben_acc_no} LIMIT 1;";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
            $ben_saving_acc_no = $data['acc_no'];
            $ben_current_balance = $data['amount'];
            $new_amount = $ben_current_balance + $sent_amount;

            $query = "UPDATE saving_acc SET amount = {$new_amount} WHERE acc_no='{$ben_saving_acc_no}';";
            $result = mysqli_query($connection, $query);
        } else {
            $query = "SELECT * FROM youth_acc WHERE acc_no={$ben_acc_no} LIMIT 1;";
            $result = mysqli_query($connection, $query);
            $data = mysqli_fetch_assoc($result);
            $ben_youth_acc_no = $data['acc_no'];
            $ben_current_balance = $data['amount'];
            $new_amount = $ben_current_balance + $sent_amount;

            $query = "UPDATE youth_acc SET amount = {$new_amount} WHERE acc_no='{$ben_youth_acc_no}';";
            $result = mysqli_query($connection, $query);
        }

        $receive_acc = $_POST['beneficiary_account'];
        $remark = $_POST['remarks'];
        $type = $_POST['type'];
        $name = $_POST['beneficiary_name'];
        $email = $_POST['beneficiary_email'];
        $mobile = $_POST['mobile_number'];
        $branch = $_POST['branch'];

        $query = "INSERT INTO transactions (receive_acc, sent_acc, remark, amount, type, ben_name, ben_email, ben_mobile, branch, datetime) VALUES ({$receive_acc}, {$user_acc}, '{$remark}', {$sent_amount}, '{$type}', '{$name}', '{$email}', '{$mobile}', '{$branch}', now());";
        $result = mysqli_query($connection, $query);
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
            <li><img src="https://i.ibb.co/jhNDBNb/settings-2.png" alt="">&nbsp;<span><a href="./user-settings.php">Settings</a></span> </li>
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
                    <a href="#" class="btn"><?php echo "Hello, " .  $_SESSION['username']; ?></a>

                    <div class="img-case">
                        <?php echo "<img src='https://ui-avatars.com/api/?name=" . $_SESSION['username'] . "'/>"; ?>
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
                            <form action="./user-transactions.php" method="POST">
                                <tr>
                                    <td>
                                        <?php
                                        if (isset($errors) && !empty($errors)) {
                                            foreach ($errors as $error) {
                                                echo "<p style='color:red;'>" . "-" . $error . "-" . "</p>";
                                            }
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="ptype">From Account*</label><br>
                                    <select name="ptype" id="ptype" >
                                        <option value="" selected>-Select-</option>
                                        <option value="reguler savings">Reguler Savings</option>
                                        <option value="youth  plus">Youth Plus</option>
                                        <option value="credit card">Credit Card</option>
                                    </select>
                                </td>
                                <td>
                                <label for="type">Type*</label><br>
                                    <select name="type" id="type" >
                                        <option value="" selected>-Select-</option>
                                        <option value="one time transaction">One Time Transaction</option>
                                        <option value="immediate transfer">Immediate Transfer</option>
                                        <option value="recurring transfer">Recurring Transfer</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="beneficiary_name">Beneficiary Name</label><br>
                                    <input type="text" name="beneficiary_name" placeholder="Beneficiary Name" >
                                </td>
                                <td>
                                    <label for="beneficiary_account">Beneficiary Account Number</label><br>
                                    <input type="text" name="beneficiary_account" placeholder="Beneficiary Account" >
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="beneficiary_email">Beneficiary Email*</label> <br>
                                    <input type="email" name="beneficiary_email" placeholder="Beneficiary Email" >
                                </td>
                                <td>
                                    <label for="branch">Branch*</label><br>
                                    <select name="branch" id="branch" >
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
                                    <label for="mobile_number">Beneficiary Mobile Number</label><br>
                                    <input type="text" name="mobile_number" placeholder="Mobile Number" >
                                </td>
                                <td>
                                    <label for="amount">Amount*</label><br>
                                    <input type="text" name="amount" placeholder="Amount" >
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="date">Date*</label><br>
                                    <input type="date" name="date" placeholder="Date">
                                </td>
                                <td>
                                    <label for="remarks">Remarks</label><br>
                                    <input type="text" name="remarks" placeholder="Remarks">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" value="Transfer &rarr;" name="submit" class="btn">
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
            </div>
        </div>


</body>

</html>