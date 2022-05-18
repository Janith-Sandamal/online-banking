<?php

//Connection
$connection = mysqli_connect("localhost", "root", "", "online_banking");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to the database: " . $mysqli->connect_error;
    exit();
}
?>