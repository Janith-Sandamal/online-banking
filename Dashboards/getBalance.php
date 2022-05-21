<?php
//Start Session
session_start();

require '../lib/db.php';

//Check the user is logged in
if (!isset($_SESSION['nic']) && strlen($_SESSION['nic']) < 10) {
    header('Location: ../index.php');
}

if (isset($_GET['selection'])) {
    
    $accNoReal = $_GET['selection'];
    $accNo = strval($_GET['selection']);
    $firstDigits = substr($accNo, 0, 3);

    if ($firstDigits == '800') {
        $query = "SELECT amount FROM saving_acc WHERE acc_no={$accNoReal};";
        $result = mysqli_query($connection, $query);
        $data = mysqli_fetch_assoc($result);
        echo json_encode($data);
    } elseif ($firstDigits == '600') {
        $query = "SELECT amount FROM youth_acc WHERE acc_no={$accNoReal};";
        $result = mysqli_query($connection, $query);
        $data = mysqli_fetch_assoc($result);
        echo json_encode($data);
    }
}
