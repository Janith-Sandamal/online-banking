<?php

//Database Connection
require '../lib/db.php';


//Get form data to variables
// $nic = $_POST['nic'];
// $title = $_POST['title'];
// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $address1 = $_POST['address1'];
// $address2 = $_POST['address2'];
// $city = $_POST['city'];
// $occupation = $_POST['occupation'];
// $email = $_POST['email'];
// $number = $_POST['number'];
// $message = $_POST['message'];


$errors = array();

//check Submit button is clicked
if (isset($_POST['submit'])) {


    //checking required fields

    if (empty($_POST['nic'])) {
        $errors[] = "Please enter NIC";
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

    <!-- Application Form CSS file -->
    <link rel="stylesheet" href="../css/application-form.css">

    <!-- Header CSS file -->
    <link rel="stylesheet" href="../css/header.css">

    <!-- Footer CSS file -->
    <link rel="stylesheet" href="../css/footer.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">


    <title>Welcome to Aisa Bank!</title>
</head>

<body>
    <!-- Header Section of web page -->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <ul>
                    <li><a href="#"><img src="#" alt="Logo"></a></li>
                    <li><a href="../index.php" class="active">Home</a></li>
                    <li><a href="personal banking.Php" target="_self">Peronal Banking</a></li>
                    <li><a href="services.Php" target="_self">services</a></li>
                    <li><a href="Digital banking.Php" target="_self">Asia Bank Digital</a></li>
                    <li><a href="about us.Php" target="_self">About Us</a></li>
                    <li><a href="contact us.Php" target="_self">Contact Us</a></li>
                    <span class="search">
                        <li>
                            <form action="" method="">
                                <input type="text" name="search" placeholder="Search">
                                <input type="submit" name="submit" value="Search">

                            </form>
                        </li>
                    </span>
                    <li><a href="Php/Login.html" target="_self"><img src="" alt="login"></a></li>

                </ul>
            </nav>
        </div>
        </div>
    </header>

    <!-- Body Section -->

    <div class="application-form">
        <div class="form-header">
            <h1>Application Form</h1>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="contact-form">
        <div class="form-header">
            <h2>Fill This Form</h2>
        </div>
        <div class="form-description">
            <p>Fill this</p>
        </div>
        <?php
        if (!empty($errors)) {
            echo "<p>There Were Errors in your form</p>";
        }
        ?>
        <div class="form-body">
            <form action="./application-form.php" method="POST">
                <table>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="reason">Reason*</label>
                            <select name="reason" id="reason" disabled>
                                <option value="Saving Account">Saving Account</option>
                                <option value="Youth Account">Youth Account</option>
                                <option value="House Loan">House Loan</option>
                                <option value="Education Loan">Education Loan</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Fixed Deposit">Fixed Deposit</option>
                                <option value="Q Plus Invesment">Q Plus Invesment</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nic">NIC Number*</label>
                            <input type="text" name="nic" placeholder="National Identity Card No* ">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="title">Title*</label>
                            <select name="" id="" placeholder="Title*">
                                <option value="">-Select-</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="fname">First Name*</label>
                            <input type="text" name="fname" id="fname" placeholder="Enter your Frist Name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lname">Last Name*</label>
                            <input type="text" name="lname" id="lname" placeholder="Enter your Last Name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="address1">Address*</label>
                            <input type="text" name="address1" id="address1" placeholder="Address Line 1*">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="address2" id="address2" placeholder="Address Line 2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="city">Nearest Branch*</label>
                            <input type="text" name="city" id="city" placeholder="Nearest Branch*">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="occupation">Occupation*</label>
                            <input type="text" name="occupation" id="occupation" placeholder="Occupation*">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email*</label>
                            <input type="email" name="email" id="email" placeholder="Enter your Email ">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="number">Phone Number*</label>
                            <input type="text" name="number" id="number" placeholder="Enter your Phone Number">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="For security and privacy    please don't include information like your bank account numbers or passwords."></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit " value="Submit &rarr;">
                        </td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
    <!-- Contact Form -->


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
        <p>Asia Bank of Ceylon PLC</p>
        <p>Asia House,No 21,Sri Razik Fareed Mawatha,P.O.Box 720 Colombo 07,Sri Lanka.</p>

        <br>
        <p>Legal Notice | Accessibility | Security Measure</p>
        <p>&copy; 2022 Aisa Bank. All Rights Reserved.</p>
    </div>
</body>

</html>