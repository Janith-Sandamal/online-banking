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

    <!-- Personal banking CSS file -->
    <link rel="stylesheet" href="../css/personal Banking.css">

    <!-- Header CSS File -->
    <link rel="stylesheet" href="../css/header.css">

    <!-- Footer CSS File -->
    <link rel="stylesheet" href="../css/footer.css">

    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    

    <title>Welcome to Aisa Bank!</title>
</head>
<body>
    <!-- Header Section of web page -->
    <header class="header">
    <nav>
         <ul>
            <li class="logo">Meridian Trust</li>
            <li class="btn"><span class="fas fa-bars"></span></li>
            <div class="items">
                    <li><a href="../index.Php" target="_self">Home</a></li>
                    <li><a href="#"  class="active">Peronal Banking</a></li>
                    <li><a href="./services.Php" target="_self">Services</a></li>
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
<section class="home-banner">
    <div class="banner">
        <div class="slider">
            <img src="../Images/pbankslide1.jpg" alt="banner" id="slideimg">
    
        </div>
        <div class="overlay">
            <div class="content">
                <h1>Welcome to Personal Banking.</h1>
                <p>
                Professional who takes care of the personal accounts of their customers,
                mostly in retail banking divisions Retail Banking Divisions 
                Retail banking or personal banking refers to the financial services 
                offered by the financial institutions exclusively to the individual clients.
                </p>
                <div>
                    <button type="button" class="btn-1" ><a href="../Php/Login.Php">Explore !</a></button>
                    <!-- <button type="button" class="btn-2"><a href="../Php/signup.html">Join Now!</a></button> -->
                </div>

    
            </div>
        </div>
    </div>
</section>

<!-- Personal Banking Services -->
<div class="account-types-cards">
    <div class="card">
        <div class="image-data">
            <div class="background-image"> <img src="../Images/SavingAccount.jpg" alt="credit card" id="cardimg"></div>
            <div class="publication-details"></div>
            <a href="#" class="author">User</a>
            <span class="data">Hello Customer</span>
        </div>
    </div>
    <div class="post-data">
        <h1 class="title">Savings Accounts</h1>
        <h2 class="subtitle">You Can rock the World</h2>
        <p class="description">This is a bank account at a retail bank whose features include the requirements 
            that only a limited number of withdrawals can take place, 
            it does not have cheque facilities and usually do not have a linked debit card facility, it has limited transfer facilities and cannot be overdrawn.</p>
        <div class="cta">
            <a href="cover-saving-accounts.Php">Read More &rarr;</a>
        </div>
    </div>
</div>
<div class="account-types-cards">
    <div class="card">
        <div class="image-data">
            <div class="background-image"><img src="../Images/billls.jpg" alt="credit card" id="cardimg"></div>
            <div class="publication-details"></div>
            <a href="#" class="author">User</a>
            <span class="data">Hello Customer</span>
        </div>
    </div>
    <div class="post-data">
        <h1 class="title">Loans</h1>
        <h2 class="subtitle">You Can rock the World</h2>
        <p class="description">Meridian Trust personal Loans have made it as easy as it can be to transcend 
            from dreaming to sharing. And what is more exciting and fulfilling than sharing a dream 
            with someone you love. It could be a trip abroad with your mother, or sending your child to
             university, or maybe to finance your perfect wedding. Whatever it may be, always remember, 
             the best things in life were meant to be shared.</p>
        <div class="cta">
            <a href="cover-loans.Php">Read More &rarr;</a>
        </div>
    </div>
</div>
<div class="account-types-cards">
    <div class="card">
        <div class="image-data">
            <div class="background-image" > <img src="../Images/cardss.jpg" alt="credit card" id="cardimg"></div>
            <div class="publication-details"></div>
            <a href="#" class="author">User</a>
            <span class="data">Hello Customer</span>
        </div>
    </div>
    <div class="post-data">
        <h1 class="title">Cards</h1>
        <h2 class="subtitle">You Can rock the World</h2>
        <p class="description">In today's fast-paced world, being able to do things on the move 
            is of paramount importance. This enables you, our valued customer, to command the 
            respect you deserve, in a world as challenging and competitive as ours. 
            The opportunity to be rewarded for your professionalism is surely more than welcome.
            that is why with the Meridian Account you are provided with the following benefits.</p>
        <div class="cta">
            <a href="cover-cards.Php">Read More &rarr;</a>
        </div>
    </div>
</div>
<div class="account-types-cards">
    <div class="card">
        <div class="image-data">
            <div class="background-image"><img src="../Images/Deposits.jpg" alt="credit card" id="cardimg"></div>
            <div class="publication-details"></div>
            <a href="#" class="author">User</a>
            <span class="data">Hello Customer</span>
        </div>
    </div>
    <div class="post-data">
        <h1 class="title">Deposit</h1>
        <h2 class="subtitle">You Can rock the World</h2>
        <p class="description">
            In today's fast-paced world, being able to do things on the move 
            is of paramount importance. This enables you, our valued customer, to command the 
            respect you deserve, in a world as challenging and competitive as ours. 
            The opportunity to be rewarded for your professionalism is surely more than welcome.
            that is why with the Meridian Account you are provided with the following benefits.</p>
        <div class="cta">
            <a href="cover-deposit.Php">Read More &rarr;</a>
        </div>
    </div>
</div>


<!-- Personal Banking Services -->

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
                        
                        <td><select name="type" id="type" placeholder="Select">
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