<?php 

// Import database connection
require "../lib/db.php";

// Define variables and initialize with empty values
$errors = array();



// Check if the form is submitted
if(isset($_POST['submit'])){

    $type=$_POST['type'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $message=$_POST['message'];


    //checking Required Fields
    $required_fields = array('type'=> 'type','fname' =>'First Name','lname' => 'Last Name','email' => 'Email','number' => 'Email','message' => 'Message');
            
        foreach($required_fields as $field => $label){
            if(empty($_POST[$field]) || $_POST[$field] == ''){
                $errors[] = $label.' is a required field.';
            }
        }

        //checking max length
        $max_length_fields = array('fname' => 255,'lname' => 255,'email' => 255,'number' => 10,'message' => 150);
        
        foreach($max_length_fields as $fieldname => $max_length){
            if(strlen(trim(($_POST[$fieldname]))) > $max_length){
                $errors[] = $fieldname . " must be less than " . $max_length . " characters.";
            }
        }

        //check if there are any errors in the form
if(empty($errors)){
    $query = "INSERT INTO  inform_us(type,first_name,last_name,email,phone_number,message) VALUES ('{$type}','{$fname}','{$lname}','{$email}','{$number}','{$message}');";
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
    <link rel="stylesheet" href="../css/services.css">

    <!-- Header CSS File -->
    <link rel="stylesheet" href="../css/header.css">

    <!-- Footer CSS File -->
    <link rel="stylesheet" href="../css/footer.css">

    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    

    <title>services | MTC Bank</title>
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
                    <li><a href="#" class="active">Services</a></li>
                    <li><a href="./Digital banking.Php" target="_blank">MT Digital </a></li>
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
                        <img src="../Images/servicesbanner.jpg" alt="banner" id="slideimg">
                
                    </div>
                    <div class="overlay">
                        <div class="content">
                            <h1>Services.</h1>
                            <p>
                            Meridian Trust Corparation Bank is a full-service community bank, which offers you a complete array of financial services solutions beyond traditional bank products and services. When it comes to professional financial solutions…think INSIDE the Bank!
                            </p>
                            <div>
                                <button type="button" class="btn-1" ><a href="#Key-Values">Explore!</a></button>

                            </div>
            
                
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner -->

            <!-- Services Cards -->
<section class="services-cards">
    <h1 class="heading" id="Key-Values">Key Values</h1>
    <div class="box-container">
        <div class="box">
            <div class="icon">
                <img src="../Images/support.png" alt="icon">
            </div>
            <h3 class="title">Utility Bill Payment</h3>
            <p class="description">
            Now with Internet Banking, utility bill payment is within your fingertips.
            NSB introduces the convenience of paying your utility bills under one roof.Electricity bills, Water bills,Telecommunication bills,
            Insurance payments and other bill payments <br>
        </div>
        <div class="box">
            <div class="icon">
                <img src="../Images/support.png" alt="icon">
            </div>
            <h3 class="title">SpeedCash</h3>
            <p class="description">
            MTB SpeedCash is a secured and fastest over the counter fund transfer service which facilitates to transfer funds between any two parties. <br> 
        </div>
        <div class="box">
            <div class="icon">
                <img src="../Images/support.png" alt="icon">
            </div>
            <h3 class="title">Environmental friendly</h3>
            <p class="description">
              By embracing paperless Digital Banking culture, you will be protecting the environment for the future generations.<br>
        </div>
        <div class="box">
            <div class="icon">
                <img src="../Images/support.png" alt="icon">
            </div>
            <h3 class="title">Trust Services</h3>
            <p class="description">
            Trust and Estate planning are fundamental to the preservation of your assets. 
            MTC Bank Trust Services provides professional advice that takes your individual needs and 
            goals into consideration.  <br>
        </div>
    </div>
</section>
    
            <!-- Services Cards -->
        
<!-- POST -->

<div class="blog-post">
    <div class="blog-post-img">
        <img src="../Images/settings.png" alt="Banner">
    </div>
    <div class="blog-post-info">
        <div class="blog-post-title">
            <h2>Digital Banking</h2>
        </div>
        <div class="blog-post-date">
            <span>Friday</span>
            <span>May 16 2022</span>
        </div>
        <div class="blog-post-description">
            <p>Meridian Trust Online Banking offers the ability for you to securely view and 
                manage your Meridian Trust personal or business accounts from anywhere at any time.</p>
        </div>
        <div class="blog-post-read-more">
            <a href="cover-digital-banking.Php">Read More</a>
        </div>
    </div>
</div>


<div class="blog-post">
    <div class="blog-post-img">
        <img src="../Images/epasscover.jpg" alt="Banner">
    </div>
    <div class="blog-post-info">
        <div class="blog-post-title">
            <h2>E-Passbook</h2>
        </div>
        <div class="blog-post-description">
            <p>Meridian Trust E-Passbook is an electronic version of the traditional passbook / current account 
                statement, which allows you to download and check your account balances and transaction 
                details in real-time, anywhere, anytime.</p>
        </div>
        <div class="blog-post-read-more">
            <a href="cover-epassbook.Php">Read More</a>
        </div>
    </div>
</div>


<div class="blog-post">
    <div class="blog-post-img">
        <img src="../Images/whatsapp.jpg" alt="Banner">
    </div>
    <div class="blog-post-info">
        <div class="blog-post-title">
            <h2>Whatsapp Banking</h2>
        </div>
        <div class="blog-post-description">
            <p>The bank is always ‘Available’ – 24/7 x 365 (even on holidays!), You don’t have 
                to be a customer of Meridian Trust Bank. We can still be friends.
                It is seriously secure! (End to end encryption)</p>
        </div>
        <div class="blog-post-read-more">
            <a href="cover-digital-banking.Php#whatsapp-banking">Read More</a>
        </div>
    </div> 
</div>

<div class="blog-post">
    <div class="blog-post-img">
        <img src="../Images/mobilebank.jpg" alt="Banner">
    </div>
    <div class="blog-post-info">
        <div class="blog-post-title">
            <h2>Mobile Banking</h2>
        </div>
        <div class="blog-post-description">
            <p>Available to all personal and business Meridian Trust Online Banking users, 
                Meridian Trust Mobile Banking offers secure access and money management tools 
                through an app for your smartphone and other mobile devices.</p>
        </div>
        <div class="blog-post-read-more">
            <a href="cover-digital-banking.Php#explore">Read More</a>
        </div>
    </div>
</div>

<!-- POST -->

<!-- More Info -->
 <!-- Contact Form -->
 <div class="contact-form">
    <div class="form-header">
        <h2 id="inform">Inform Us</h2>
    </div>
    <div class="form-description">
        <p>If you need help or want contact us,Complte the Online enquiry form below</p>
    </div>
    <div class="form-body">
        <form action="#inform" method="post">
            <table>
                <tr>
                    <td>
                    <?php
                    
                    if(!empty($errors)){
                        echo "<p style='color:red'>There were errors in your form</p>";
                        foreach($errors as $error){
                            echo "<p style='color:red'>-".$error."</p>";
                        }
                    }
                    ?>
                    </td>
                </tr>
                <tr>
                    
                    <td><select name="type" id="type">
                        <option value="">-Select-</option>
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
                        <input type="text" name="fname" id="fname" placeholder="Enter your Frist Name" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" name="email" id="email" placeholder="Enter your Email " >
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="number" id="number" placeholder="Enter your Phone Number" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="For security and privacy    please don't include information like your bank account numbers or passwords." ></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        
                        if(isset($_POST['submit']) && (empty($errors))){
                            echo "<p style='color:green'>Your message has been sent</p>";
                        }
                        
                        
                        ?>
                    </td>
                    </tr>
            </table>
            
        </form>
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
                        <li><a href="./Php/contact us.php" >Contact Us</a></li>
                        <li><a href="./php/cover-loans.php" >Bank Loans</a></li>
                        <li><a href="#">Downloads</a></li>
                        <li><a href="./php/application-form.php?reason=creditcard" >Credit Card Application</a></li>
                        <li><a href="./php/signup.php" >New User Registrations</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Personal Banking</h4>
                    <ul>
                        <li><a href="./php/cover-deposit.php" >Deposits</a></li>
                        <li><a href="./php/cover-saving-accounts.php" >Youth Accounts</a></li>
                        <li><a href="./php/cover-cards.php" >Cards</a></li>
                        <li><a href="./php/cover-saving-accounts.php" >Savings Accounts</a></li>
                        <li><a href="./php/cover-loans.php" >Loans</a></li>    
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