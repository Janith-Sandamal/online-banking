<?php
require '../lib/db.php';
session_start();


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $errors = array();

//check required fields

$required = array('username', 'password');

foreach ($required as $field) {
    if (empty($_POST[$field]) || trim($_POST[$field]) == '') {
        $errors[] = $field . ' is required';
    }

}

// //min length
$min_length = array('username' => 8, 'password' => 8);

foreach ($min_length as $field => $length) {
    if (strlen($_POST[$field]) < $length) {
        $errors[] = $field . ' must be at least ' . $length . ' characters';
    }
}


    if (empty($errors)) {
        $hasedPassword = sha1($password);
        $query = "SELECT * FROM users WHERE user_name = '{$username}' AND password = '{$hasedPassword}' LIMIT 1;";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);

            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['user_name'];
            $_SESSION['nic'] = $user['nic'];
            header('Location: ../Dashboards/user.php');
        } else {
            $errors[] = "Something went wrong!";
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
    <link rel="icon" href="../Images/Favicon1.png" type="image/x-icon">

    <!-- Link Normalize CSS file -->
    <link rel="stylesheet" href="../css/Normalize.css">

    <!-- Header CSS file -->
    <link rel="stylesheet" href="../css/header.css">

    <!-- Footer CSS file -->
    <link rel="stylesheet" href="../css/footer.css">

    <!-- Digital banking CSS file -->
    <link rel="stylesheet" href="../css/login.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    

    <title>Login Here! | MTC Bank</title>
</head>

<body>
    <!-- Header Section of web page -->
    <header>
    <nav>
         <ul>
            <li class="logo">Meridian Trust</li>
            <li class="btn"><span class="fas fa-bars"></span></li>
            <div class="items">
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="Php/personal banking.Php" target="_self">Peronal Banking</a></li>
                    <li><a href="Php/services.Php" target="_self">Services</a></li>
                    <li><a href="Php/Digital banking.Php" target="_blank">MT Digital </a></li>
                    <li><a href="Php/about us.Php" target="_self">About Us</a></li>
                    <li><a href="Php/contact us.Php" target="_self">Contact Us</a></li>
                    <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
            </div>
            <li class="search-icon">
               <input type="search" placeholder="Search">
               <label class="icon">
               <span class="fas fa-search"></span>
               </label>
            </li>
         </ul>
      </nav>

    </header>

    <!-- Body Section -->
    <section class="home-banner">
        <div class="banner">
            <div class="slider">
                <img src="../Images/digitalbanking.jpg" alt="banner" id="slideimg">

            </div>
            <div class="overlay">
                <section id="login">
                    <div class="loginbox">
                        <img src="../Images/login-avatar.png" class="avatar">
                        <h1>Login Here!</h1>
                        <form action="./Login.php" method="POST">
                            <p>Username</p>
                            <input type="text" name="username" placeholder="Enter Username">
                            <p>Password</p>
                            <input type="password" name="password" placeholder="Enter Password"><br>
                            <?php
                            if (isset($_GET['success']) && $_GET['success'] == true) {
                                echo "<p style='color:lightgreen'>You successfully registered in the system. Please Login...</p><br>";
                            }
                            if (!empty($errors)) {

                                echo "<p><ul>";
                                foreach ($errors as $error) {
                                    echo '<li>' . $error . '</li>';
                                }
                                echo "</ul></p>";
                            }

                            ?>

                            <?php
                            if(isset($_GET['logout'])){
                                echo "<p style='color:lightgreen'>You successfully Logout in the system....</p><br>";
                            }
                            ?>
                            <input type="submit" name="submit" value="Login"><br>
                            <!-- <a href="../Html/signup.html" target="_self">Enroll to Digital Banking?</a><br> -->
                            <a href="./signup.php" target="_self">I don't have an account?</a>
                        </form>
                        <p></p>
                    </div>
                </section>
                <div class="content">
                    <!-- <h1>Connect With Online Banking!</h1> -->
                    <!-- <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam, quidem.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam, quidem.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam, quidem.
                </p> -->
                    <!-- <div>
                    <button type="button" class="btn-1" ><a href="../Php/Login.html">Login!</a></button>
                    <button type="button" class="btn-2"><a href="../Php/signup.html">Join Now!</a></button>
                </div> -->


                </div>
            </div>
        </div>
        <!-- <script src="../js/banner.js">
    
    </script> -->
    </section>

    <!-- Body Section -->


    <!-- Footer Section of web page -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="./Php/contact us.php" target="_self">Contact Us</a></li>
                        <li><a href="./php/cover-loans.php" target="_self">Bank Loans</a></li>
                        <li><a href="#">Downloads</a></li>
                        <li><a href="./php/application-form.php?reason=creditcard" target="_blank">Credit Card Application</a></li>
                        <li><a href="./php/signup.php" target="_blank">New User Registrations</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Personal Banking</h4>
                    <ul>
                        <li><a href="./php/cover-deposit.php" target="_self">Deposits</a></li>
                        <li><a href="./php/cover-saving-accounts.php" target="_self">Youth Accounts</a></li>
                        <li><a href="./php/cover-cards.php" target="_self">Cards</a></li>
                        <li><a href="./php/cover-saving-accounts.php" target="_self">Savings Accounts</a></li>
                        <li><a href="./php/cover-loans.php" target="_self">Loans</a></li>    
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>About us</h4>
                    <ul>
                        <li><a href="#">Our Vision</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">Archivement</a></li>
                        <li><a href="#">Board of Directors</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><img src="../Images/facebook.png" alt="facebook"></a>
                        <a href="#"><img src="../Images/instagram.png" alt="instagram"></a>
                        <a href="#"><img src="../Images/linkedin.png" alt="linkedin"></a>
                        <a href="#"><img src="../Images/youtube.png" alt="youtube"></a>
                    </div>
                </div>
            </div>
        </div>
</footer>
            <div class="sub-footer">
            <p>Meridian Trust Corparation PLC</p>
                        <p>No 24,Perahara Rd,P.O.Box 720 Colombo 07,Sri Lanka.</p>
                        
                        <br>
                        <p>Legal Notice | Accessibility | Security Measure</p>
                        <p>&copy; 2022 MTC Bank. All Rights Reserved.</p>
            </div>
</body>

</html>