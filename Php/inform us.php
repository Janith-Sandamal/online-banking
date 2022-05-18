<?php 
require "../lib/db.php";

if(isset($_POST['submit'])){

    $type = $_POST['type'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

$errors=array();

if (!isset($_POST['fname']) || strlen(trim($_POST['fname'])) < 1) {
        $errors[] = "First Name is invalid";
}
if (!isset($_POST['lname']) || strlen(trim($_POST['lname'])) < 1) {
    $errors[] = "Last Name is invalid";
}
if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
    $errors[] = "Email is invalid";
}
if (!isset($_POST['number']) || strlen(trim($_POST['number'])) < 1) {
    $errors[] = "First Name is invalid";
}
if (!isset($_POST['message']) || strlen(trim($_POST['message'])) < 1) {
    $errors[] = "First Name is invalid";
}

if(empty($errors)){
    $query = "INSERT INTO  inform_us(type,frist_name,last_name,email,phone_number,massage) VALUES ('{$type}','{$fname}','{$lname}','{$email}','{$number}','{$message}');";
    $result = mysqli_query($connection,$query);

    if($result){
        header('Location: ../index.php');
    }
    else{
        $errors[] = "Something went wrong";
    }
    
}


}
?>