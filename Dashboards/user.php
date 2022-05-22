<?php
require '../lib/db.php';
session_start();

//Check the user is logged in
if (!isset($_SESSION['nic']) && strlen($_SESSION['nic']) < 10) {
    header('Location: ../index.php');
}

$nic = $_SESSION['nic'];

//saving acc
$query = "SELECT * FROM saving_acc WHERE nic='{$nic}';";
$result = mysqli_query($connection, $query);

$saving_acc = mysqli_fetch_assoc($result);
$saving_acc_no = $saving_acc['acc_no'];

//youth acc
$query = "SELECT * FROM youth_acc WHERE nic='{$nic}';";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) == 1) {
    $youth_acc = mysqli_fetch_assoc($result);
    $youth_acc_no = $youth_acc['acc_no'];
}

//debit card
$query = "SELECT card_no FROM debit_cards WHERE nic='{$nic}';";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) == 1) {
    $debit_card = mysqli_fetch_assoc($result);
}

//loans
$query = "SELECT * FROM loans WHERE nic='{$nic}';";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) == 1) {
    $loan = mysqli_fetch_assoc($result);
}

//credit cards
$query = "SELECT * FROM credit_cards WHERE nic='{$nic}';";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) == 1) {
    $creditCard = mysqli_fetch_assoc($result);
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

    <!-- User CSS File -->
    <link rel="stylesheet" href="../css/user.css">

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
            <li><img src="https://i.ibb.co/4fxyt0k/transaction-1.png" alt="">&nbsp;<span><a href="./user-transactions.php">Transaction</a></span> </li>
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
                    <!-- <img src="notifications.png" alt=""> -->
                    <div class="img-case">
                        <?php echo "<img src='https://ui-avatars.com/api/?name=" . $_SESSION['username'] . "'/>"; ?>
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
                                    <select name="selected_acc" id="selected_acc">
                                        <option>--Account Number--</option>
                                        <?php
                                        echo "<option value='" . $saving_acc['acc_no'] . "'>" . $saving_acc['acc_no'] . "</option>";
                                        if (isset($youth_acc)) {
                                            echo "<option value='" . $youth_acc['acc_no'] . "'>" . $youth_acc['acc_no'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <h3>Available Account Balance</h3>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <h3 id="acc_balance" class="btn">RS: -----.--</h3>
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
                                    <h2>Debit Card</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Card Number</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="btn"><?php if (isset($debit_card)) {
                                                        echo $debit_card['card_no'];
                                                    } else {
                                                        echo "No Debit Card";
                                                    } ?></h4>
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
                                    <h2>Loans</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Loan Type</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="btn"><?php if (isset($loan)) {
                                                        echo $loan['loan_type'];
                                                    } else {
                                                        echo "No Loan Yet!";
                                                    } ?></h4>
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
                                    <h4 class="btn"><?php if (isset($loan)) {
                                                        echo $loan['loan_amount'];
                                                    } else {
                                                        echo "No Loan Yet!";
                                                    } ?></h4>
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
                        <!-- <a href="#" class="btn">View All</a> -->
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>

                        <?php

                        //sent Tran Saving
                        $query = "SELECT * FROM transactions WHERE sent_acc={$saving_acc_no} LIMIT 2;";
                        $result = mysqli_query($connection, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($data = mysqli_fetch_assoc($result)) {
                                echo "<tr>"
                                    . "<td>" . $data['receive_acc'] . "</td>"
                                    . "<td>" . "Sent Funds" . "</td>"
                                    . "<td>" . $data['amount'] . "</td>"
                                    . "<td>" . $data['datetime'] . "</td>"
                                    . "</tr>";
                            }
                        }

                        //Receive Tran Saving
                        $query = "SELECT * FROM transactions WHERE receive_acc={$saving_acc_no} LIMIT 2;";
                        $result = mysqli_query($connection, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($data = mysqli_fetch_assoc($result)) {
                                echo "<tr>"
                                    . "<td>" . $data['sent_acc'] . "</td>"
                                    . "<td>" . "Receive Funds" . "</td>"
                                    . "<td>" . $data['amount'] . "</td>"
                                    . "<td>" . $data['datetime'] . "</td>"
                                    . "</tr>";
                            }
                        }

                        //sent Tran Youth
                        $query = "SELECT * FROM transactions WHERE sent_acc={$youth_acc_no} LIMIT 2;";
                        $result = mysqli_query($connection, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($data = mysqli_fetch_assoc($result)) {
                                echo "<tr>"
                                    . "<td>" . $data['receive_acc'] . "</td>"
                                    . "<td>" . "Sent Funds" . "</td>"
                                    . "<td>" . $data['amount'] . "</td>"
                                    . "<td>" . $data['datetime'] . "</td>"
                                    . "</tr>";
                            }
                        }

                        //Receive Tran Youth
                        $query = "SELECT * FROM transactions WHERE receive_acc={$youth_acc_no} LIMIT 2;";
                        $result = mysqli_query($connection, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($data = mysqli_fetch_assoc($result)) {
                                echo "<tr>"
                                    . "<td>" . $data['sent_acc'] . "</td>"
                                    . "<td>" . "Receive Funds" . "</td>"
                                    . "<td>" . $data['amount'] . "</td>"
                                    . "<td>" . $data['datetime'] . "</td>"
                                    . "</tr>";
                            }
                        }





                        ?>
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
                            <td class="btn"><?php if (isset($creditCard)) {
                                                echo $creditCard['card_no'];
                                            } else {
                                                echo "No Credit Card Yet!";
                                            } ?></td>

                        </tr>
                        <tr>
                            <th>Expire Date</th>
                            <td><?php if (isset($creditCard)) {
                                    echo $creditCard['expire_date'];
                                } else {
                                    echo "No Credit Card Yet!";
                                } ?></td>

                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?php if (isset($creditCard)) {
                                    echo $creditCard['status'];
                                } else {
                                    echo "No Credit Card Yet!";
                                } ?></td>

                        </tr>
                        <tr>
                            <th>Available Balance</th>
                            <td><?php if (isset($creditCard)) {
                                    echo $creditCard['credit_limit'] - $creditCard['credit_amount'];
                                } else {
                                    echo "No Credit Card Yet!";
                                } ?></td>

                        </tr>
                        <tr>
                            <th>Credit Loan Amount</th>
                            <td><?php if (isset($creditCard)) {
                                    echo $creditCard['credit_amount'];
                                } else {
                                    echo "No Credit Card Yet!";
                                } ?></td>

                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    document.getElementById("selected_acc").addEventListener("change", function() {
        let xhr = new XMLHttpRequest();
        let endPoint = './getBalance.php?selection=' + this.value;
        xhr.open('GET', endPoint, true);

        xhr.onload = function() {
            if (this.status == 200) {
                let data = JSON.parse(this.responseText);
                document.getElementById("acc_balance").innerHTML = "Rs: " + data.amount;
            }
        }

        xhr.send();
    });
</script>

</html>