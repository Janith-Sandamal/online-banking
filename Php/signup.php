<?php
require '../lib/db.php';

if (isset($_POST['submit'])) {
    
    $nic = $_POST['NIC'];
    $email = $_POST['Email'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $cPassword = $_POST['cPassword'];

    $errors = array();

    if (!isset($_POST['NIC']) || strlen(trim($_POST['NIC'])) < 1) {
        $errors[] = "There is a problem with NIC!";
    }
    if (!isset($_POST['Email']) || strlen(trim($_POST['Email'])) < 1) {
        $errors[] = "email is Missing/Invalid!";
    }
    if (!isset($_POST['Username']) || strlen(trim($_POST['Username'])) < 1) {
        $errors[] = "There is a problem with username!";
    }
    if (!isset($_POST['Password']) || strlen(trim($_POST['Password'])) < 1) {
        $errors[] = "There is a problem with password!";
    }
    if (!isset($_POST['cPassword']) || strlen(trim($_POST['cPassword'])) < 1) {
        $errors[] = "There is a problem with comfairm password!";
    }
    if (trim($_POST['Password']) != trim($_POST['cPassword'])) {
        $errors[] = "Passwords are not match";
    }
    if (strlen(trim($_POST['Password'])) < 8 || strlen(trim($_POST['cPassword'])) < 8) {
        $errors[] = "Please enter at least 8 characters";
    }




    if (empty($errors)) {
        $hashedPassword = sha1($password);

        $query = "SELECT nic FROM customers WHERE nic='{$nic}' LIMIT 1";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) < 1) {
            $errors[] = "You are not eligible for Online Banking Please visits near Branch";
        } else {
            $query = "INSERT INTO temp_users (nic, user_name, email, password) VALUES ('{$nic}', '{$username}', '{$email}', '{$hashedPassword}');";
            $result = mysqli_query($connection, $query);
            if ($result) {
                header('Location: ./login.php?success=true');
            } else {
                $errors[] = "Something went wrong";
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
    <link rel="icon" href="../Images/Favicon sample.png" type="image/x-icon">

    <!-- Link Normalize CSS file -->
    <link rel="stylesheet" href="../css/Normalize.css">

    <!-- Header CSS file -->
    <link rel="stylesheet" href="../css/header.css">

    <!-- Footer CSS file -->
    <link rel="stylesheet" href="../css/footer.css">

    <!-- Digital banking CSS file -->
    <link rel="stylesheet" href="../css/signup.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">


    <title>Signup Here!</title>
</head>

<body>
    <!-- Header Section of web page -->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <ul>
                    <li><a href="#"><img src="" alt="Logo"></a></li>
                    <li><a href="../index.Php" target="_self">Home</a></li>
                    <li><a href="./personal banking.php">Peronal Banking</a></li>
                    <li><a href="./services.php">services</a></li>
                    <li><a href="./Digital banking.Php" target="_self" class="active">Asia Bank Digital</a></li>
                    <li><a href="./about us.Php" target="_self">About Us</a></li>
                    <li><a href="./contact us.Php" target="_self">Contact Us</a></li>
                    <span class="search">
                        <li>
                            <form action="" method="">
                                <input type="text" name="search" placeholder="Search">
                                <input type="submit" name="submit" value="Search">

                            </form>
                        </li>
                    </span>
                    <li><a href="#"><img src="" alt="login"></a></li>

                </ul>
            </nav>
        </div>
        </div>
    </header>
    <section class="home-banner">
        <div class="banner">
            <div class="slider">
                <img src="../Images/digitalbanking.jpg" alt="Signup" id="slideimg">

            </div>
            <div class="overlay">
                <section id="login">
                    <div class="loginbox">
                        <img src="../Images/login-avatar.png" class="avatar">
                        <h1>Signup Here!</h1>
                        <form action="./signup.php" method="POST">
                            <p>NIC</p>
                            <input type="text" name="NIC" placeholder="Enter NIC Number">
                            <p>Email</p>
                            <input type="Email" name="Email" placeholder="Enter Email"><br>
                            <p>Username</p>
                            <input type="text" name="Username" placeholder="Enter Username"><br>
                            <p>Password</p>
                            <input type="password" name="Password" placeholder="Enter Password"><br>
                            <p>Password</p>
                            <input type="password" name="cPassword" placeholder="Re-enter Password"><br>
                            <input type="submit" name="submit" value="Signup"><br>
                            <a href="./Login.php" target="_self">Already Have a Account?</a>
                        </form>
                    </div>
                </section>
                <div class="content">
                    <!-- <h1>Connect With Online Banking!</h1> -->
                    <p>
                        <?php
                        if (!empty($errors)) {
                            echo "<h2 style='color:red;'>Errors</h2>"
                                . "<ul style='color:red;'>";
                            foreach ($errors as $error) {
                                echo '<li>' . $error . '</li>';
                            }
                            echo "</ul>";
                        }

                        ?>
                    </p>



                </div>
            </div>
        </div>
    </section>

    <!-- Body Section -->


    <!-- Footer Section of web page -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="./contact us.php" target="_self">Contact Us</a></li>
                        <li><a href="./cover-loans.php" target="_self">Bank Loans</a></li>
                        <li><a href="#">Downloads</a></li>
                        <li><a href="#">Credit Card Application</a></li>
                        <li><a href="./signup.php" target="_blank">New User Registrations</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Personal Banking</h4>
                    <ul>
                        <li><a href="./cover-deposit.php" target="_self">Deposits</a></li>
                        <li><a href="./cover-saving-accounts.php" target="_self">Youth Accounts</a></li>
                        <li><a href="./cover-cards.php" target="_self">Cards</a></li>
                        <li><a href="./cover-saving-accounts.php" target="_self">Savings Accounts</a></li>
                        <li><a href="./cover-loans.php" target="_self">Loans</a></li>    
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
                        <p>Meridian House,No 21,Sri Razik Fareed Mawatha,P.O.Box 720 Colombo 07,Sri Lanka.</p>
                        
                        <br>
                        <p>Legal Notice | Accessibility | Security Measure</p>
                        <p>&copy; 2022 MTC Bank. All Rights Reserved.</p>
            </div>../
</body>

</html>