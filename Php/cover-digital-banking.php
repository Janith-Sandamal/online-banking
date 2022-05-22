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
    <link rel="stylesheet" href="../css/cover-digital-banking.css">

    <!-- Header CSS File -->
    <link rel="stylesheet" href="../css/header.css">

    <!-- Footer CSS File -->
    <link rel="stylesheet" href="../css/footer.css">

    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    

    <title>digital Banking | MTC Bank</title>
</head>
<body>
    <!-- Header Section of web page -->
    <header>
    <nav>
         <ul>
            <li class="logo">Meridian Trust</li>
            <li class="btn"><span class="fas fa-bars"></span></li>
            <div class="items">
                    <li><a href="../index.Php" >Home</a></li>
                    <li><a href="./personal banking.Php" >Peronal Banking</a></li>
                    <li><a href="#" class="active">Services</a></li>
                    <li><a href="./Digital banking.Php" target="_blank">MT Digital </a></li>
                    <li><a href="./about us.Php" >About Us</a></li>
                    <li><a href="./contact us.Php" >Contact Us</a></li>
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
                        <img src="../Images/Services.jpg" alt="banner" id="slideimg">
                
                    </div>
                    <div class="overlay">
                        <div class="content">
                            <h1>Digital Banking.</h1>
                            <p>
                            Available To All Personal And Business Meridian Trust Online Banking Users, Meridian Trust Mobile Banking Offers Secure Access And Money Management Tools Through An App For Your Smartphone And Other Mobile Devices.</p>
                            <div>
                                <button type="button" class="btn-1" ><a href="#explore">Explore!</a></button>

                            </div>
            
                
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner -->

    <!-- Details About Digital Banking -->
<div class="body-info">
    <div class="container">
        <div class="part1">
            <h2>Meridian Trust online banking</h2>
            <p>Meridian Trust Online Banking offers the ability for you to securely view and 
                manage your Meridian Trust personal or business accounts from anywhere at any time.</p>
            <ul>
                <li>Account Information: View balances on your deposit and loan accounts</li>
                <li>Bill Pay: Pay Bills, people, send gifts or charitable contributions, and receive eBills</li>
                <li>View Check Images: Maintain images of checks for your record and account review</li>
                <li>Review Transactions: Reconcile your account by monitoring your purchases and activity</li>
                <li>Access eStatements and Notices: Maintain all account documents electronically for your review, print or save them for your financial needs facility</li>
                <li>Transfer Funds: Transfer funds between your Meridian Trust accounts and accounts at other financial institutions to make managing your money quick and simple</li>
                <li>Alerts: Set up personalized email and text alerts for items such as low balances, ACH credits/debits, bill payments, and more</li>
                <li>Account and Payment Management: Place stop payments, activate and/or report debit cards lost/ stolen, and more</li>
                <li>Mobile Banking: Gain additional access through Meridian Trust Mobile Bankingy</li>
            </ul>
        </div>
        <div class="btnall">
            <div>
                <button type="button" class="btn-2"><a href="application-form.Php"> Apply Online</a></button>
             </div>
            <div>
                <button type="button" class="btn-3"><a href="#"> Download </a></button>
            </div>
        </div>
        <div id="explore" class="part1">
            <h2>Meridian Trust mobile banking</h2>
        </div>
        <div class="part4" >
            <p>Available to all personal and business Meridian Trust Online Banking users, Meridian Trust Mobile Banking offers secure access and money management tools through an app for your smartphone and other mobile devices.</p>
            <ol>
                <li>My Accounts: View balances on your deposit and loan accounts</li>
                <li>Mobile Deposit: Deposit checks by enrolling in Remote / Mobile Deposit</li>
                <li>P2P: Pay friends, family or others with Person-to-Person Payments</li>
                <li>Bill Pay: Pay bills, people or send monetary or charitable gifts</li>
                <li>View Check Images: See check images when reviewing transactions</li>
                <li>Review Transactions: Reconcile your account by monitoring your purchases and activity</li>
                <li>Statements: Access eStatements and Notices from anywhere at any time</li>
                <li>Transfer Funds: Transfer funds between your Meridian Trust accounts and accounts at other financial institutions</li>
                <li>Alerts: Review personalized alerts for items such as low balances, ACH credits/debits, bill payments and more</li>
            </ol>
        </div>
        <div class="btnall">
            <div>
                <button type="button" class="btn-2"><a href="application-form.Php"> Apply Online</a></button>
             </div>
            <div>
                <button type="button" class="btn-3"><a href="#"> Download </a></button>
            </div>
        </div>
        <div id="whatsapp-banking" class="part5">
        <h2>Whatsapp Banking</h2>
            <h4>Here's why you'll love this!</h4>
            <p>The bank is always 'Available' - 24/7 x 365 (even on holidays!) <br>
                You don't have to be a customer of Meridian Trust Bank. We can still be friends.,<br>
                    It is seriously secure! (End to end encryption)</p>

            <h4>Things to do </h4>
            <p>Currently, Meridian Trust Bank lets you get the following things done. <br>
                You can click on each section for more details <br>
                We will continue to add more and more services for your convenience. </p>

            <h4>How to begin chatting with us?</h4>
            <p>
            Step 1. Register <br>
            Save the number 70659 70659 and send a WhatsApp message 'SUB' <br>
            Step 2. Begin chatting

            </p>

        </div>
        <div class="terms-condition">
            <h5>Terms & Conditions</h5>
            <p>We hereby formulate the Terms and Conditions of Online Banking Services (the “Terms”) in order to provide you with better Online Banking Services, prevent risks inherent in Online Banking, and specify the rights and obligations of the parties in the Online Banking. Please read the Terms carefully before you use any of our Online Banking Services. If you have any questions, please feel free to contact us, and you can browse our official.</p>
        </div>
        
    </div>
</div>
 
    <!-- Details About Digital Banking -->

    <!-- Contact Form -->
<div class="contact-form">
    <div class="form-header">
        <h2>Inform Us</h2>
    </div>
    <div class="form-description">
        <p>If you need help or want contact us,Complte the Online enquiry form below</p>
    </div>
    <div class="form-body">
        <form action="" method="post">
            <table>
                <tr>
                    
                    <td><select name="" id="" placeholder="Select">
                        <option value="Credit Cards" >Credit Cards</option>
                        <option value="Saving Accounts">Saving Accounts</option>
                        <option value="Digital Banking">Digital Banking</option>
                        <option value="Home Loans">Home Loans</option>
                        <option value="Education Loans">Education Loans</option>
                        <option value="Personal Loans">Personal Loans</option>
                        <option value="Complains">Complains</option>
                        <option value="Others">Others</option>
                    </select></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="fname" id="fname" placeholder="Enter your Frist Name" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" name="email" id="email" placeholder="Enter your Email " required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="number" id="number" placeholder="Enter your Phone Number" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="For security and privacy    please don't include information like your bank account numbers or passwords." required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
            
        </form>

        <?php
        if(isset($success)){
            echo "<script type='text/javascript'>alert('$success');</script>"; 
        }
        if (!empty($errors)) {
            $messages=implode(" | ", $errors);
            echo "<script type='text/javascript'>alert('$messages');</script>";
        }



        ?>

    </div>
</div>

<!-- More Info -->

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