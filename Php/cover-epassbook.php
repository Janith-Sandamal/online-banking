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
        $success = "Your Response Recorded";
    }
    else{
        $errors[] = "Something went wrong";
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
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <!-- Services CSS file -->
    <link rel="stylesheet" href="../css/cover-epassbook.css">

    <!-- Header CSS File -->
    <link rel="stylesheet" href="../css/header.css">

    <!-- Footer CSS File -->
    <link rel="stylesheet" href="../css/footer.css">

    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    

    <title>e-Passbook | MTC Bank</title>
</head>
<body>
    <!-- Header Section of web page -->
    <header>
    <nav>
         <ul>
            <li class="logo">Meridian Trust</li>
            <li class="btn"><span class="fas fa-bars"></span></li>
            <div class="items">
                    <li><a href="../index.Php" target="_self">Home</a></li>
                    <li><a href="./personal banking.Php" target="_self">Peronal Banking</a></li>
                    <li><a href="./services.php" class="active">Services</a></li>
                    <li><a href="./Digital banking.Php" target="_self">MT Digital </a></li>
                    <li><a href="./about us.Php" target="_self">About Us</a></li>
                    <li><a href="./contact us.Php" target="_self">Contact Us</a></li>
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
            <!-- Banner -->
            <section class="home-banner" >
                <div class="banner">
                    <div class="slider">
                        <img src="../Images/epassbook.jpg" alt="banner" id="slideimg">
                
                    </div>
                    <div class="overlay">
                        <div class="content">
                            <h1>e-Passbook.</h1>
                            <p>
                            Meridian Trust E-Passbook is an electronic version of the traditional passbook / current account statement, which allows you to download and check your account balances and transaction details in real-time, anywhere, anytime.
                            </p>
                            <div>
                                <button type="button" class="btn-1" ><a href="#mainfeatures">Explore!</a></button>

                            </div>
            
                
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner -->

    <!-- Details Body Info-->
<div class="body-info">
    <div class="container">
        <div class="part1">
            <h1 id="mainfeatures">Main Features</h1>
            <p>Meridian Trust E-Passbook is an electronic version of the traditional passbook / current account statement, which allows you to download and check your account balances and transaction details in real-time, anywhere, anytime.</p>

            <ul>
                <li>Self-Registration with NIC and Mobile number (Local/ Foreign)</li>
                <li>Account balances & Transaction details</li>
                <li>Can view transaction details of the last 3 months</li>
                <li>Foreign remittances tracker</li>
                <li>Available in Tri-languages (Sinhala, English, or in Tamil as preferred)</li>
                <li>Optional login PIN</li>
                <li>Can be used on multiple devices (up to 5 devices per registration)</li>
                <li>Last-viewed transactions displayed in offline mode</li>
                <li>Assign preferred names for accounts for easy reference and identification</li>
                <li>‘Default Account’ option to view a selected account on top of the account list.</li>
            </ul>
        </div>
        <div class="part1">
            <h2>Eligibility</h2>
            <p>Personal Savings / Current account holders who have a valid mobile number registered with the Bank, including Joint Account holders.</p>
        </div>

        <div class="part1">
            <h2>Fees & charges</h2>
            <p>Meridian Trust E-Passbook is available for free of charge</p>
        </div>

        <div class="terms-condition">
            <h5>Terms & Conditions</h5>
            <p>We hereby formulate the Terms and Conditions of Online Banking Services (the “Terms”) in order to provide you with better Online Banking Services, prevent risks inherent in Online Banking, and specify the rights and obligations of the parties in the Online Banking. Please read the Terms carefully before you use any of our Online Banking Services. If you have any questions, please feel free to contact us, and you can browse our official.</p>
        </div>
         <div class="btnall">
            <div>
                <button type="button" class="btn-2"><a href="#"> Apply Online</a></button>
             </div>
            <div>
                <button type="button" class="btn-3"><a href="#"> Download </a></button>
            </div>
        </div>



    </div>
        
    </div>
</div>
   
    <!-- Details About Digital Banking -->

       <!-- Contact Form -->
<div class="contact-form">
    <div class="form-header">
      
    </div>
    <div class="form-description">
        
    </div>
    <div class="form-body">
        

    </div>
</div>
        <!-- Contact Form -->


<!-- More Info -->



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
                        <li><a href="./application-form.php?reason=creditcard" target="_blank">Credit Card Application</a></li>
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
                        <p>No 24,Perahara Rd,P.O.Box 720 Colombo 07,Sri Lanka.</p>
                        
                        <br>
                        <p>Legal Notice | Accessibility | Security Measure</p>
                        <p>&copy; 2022 MTC Bank. All Rights Reserved.</p>
            </div>
</body>
</html>