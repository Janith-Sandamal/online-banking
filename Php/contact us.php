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
    <link rel="icon" href="../Images/Favicon sample.png" type="image/x-icon">

    <!-- Link Normalize CSS file -->
    <link rel="stylesheet" href="../css/Normalize.css">
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <!-- About Us CSS file -->
    <link rel="stylesheet" href="../css/Contact Us.css">

    <!-- Header CSS file -->
    <link rel="stylesheet" href="../css/header.css">

    <!-- Footer CSS file -->
    <link rel="stylesheet" href="../css/footer.css">

    <title>Contact Us!</title>
</head>
<body>
    <!-- Header Section of web page -->
    <header class="header">
        <div class="container">
                <nav class="nav"> 
                   <ul>
                      <li><a href="#"><img  src="" alt="Logo"></a></li>
                      <li><a href="../index.Php">Home</a></li>
                      <li><a href="personal banking.Php">Peronal Banking</a></li>
                      <li><a href="services.Php" >services</a></li>
                      <li><a href="Digital banking.Php">Asia Bank Digital</a></li>
                      <li><a href="about us.Php">About Us</a></li>
                      <li><a href="#" class="active">Contact Us</a></li>
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
<!-- Body Section -->
<section class="home-banner">
    <div class="banner">
        <div class="slider">
            <img src="../Images/contact us.jpg" alt="banner" id="slideimg">
    
        </div>
        <div class="overlay">
            <div class="content">
                <h1>We are always ready to assist you.</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam, quidem.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam, quidem.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam, quidem.
                </p>
                <div>
                    <button type="button" class="btn-1" ><a href="../Php/Login.html">Contact!</a></button>
                </div>

    
            </div>
        </div>
    </div>
</section>

        <!-- Contact Details Section -->
<div class="contact-cards">
    <div class="card-1">
        <h2>Head Office</h2>
        <br>
        <pre><p>Asia Bank of Ceylon PLC,
Asia House,
No 21,Sri Razik Fareed Mawatha,
P.O.Box 720 Colombo 07,
Sri Lanka.</p></pre> 
            <br>
            <span>
                <p>+94114569872</p>
                <p>+94114569872</p>
                <p>+94114569872</p>
            </span>
            <br>
            <div class="email">
                <!-- Send Email -->
                <a href="mailto:info@asiabank.lk">info@asiabank.lk</a>
            </div>
    </div>
    <div class="card-2">
        <h2>24xh Service</h2>
        <br>
        <p>Feel free to voice</p>
        <br>
        <p>+94114569872</p>
        <br>
        <a href="https://skype.com/asiabank">Voice Support Center</a>
    </div>
</div>
        <!-- Contact Details Section -->

        <!-- Contact Form -->
<div class="contact-form">
    <div class="form-header">
        <h2 id="inform">Inform Us</h2>
    </div>
    <div class="form-description">
        <p>If you need help or want contact us,Complte the Online enquiry form below</p>
    </div>
    <div class="form-body">
        <form action="contact us.php" method="POST">
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
                    
                    <td>
                        <select name="type" id="type" placeholder="Select">
                        <option value="">-Select-</option>    
                        <option value="Credit Cards" >Credit Cards</option>
                        <option value="Saving Accounts">Saving Accounts</option>
                        <option value="Digital Banking">Digital Banking</option>
                        <option value="Home Loans">House Loans</option>
                        <option value="Education Loans">Education Loans</option>
                        <option value="Personal Loans">Q Plus Account</option>
                        <option value="Complains">Complains</option>
                        <option value="Others">Others</option>
                        </select>
                    </td>
                    
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
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="For security and privacy    please don't include information like your bank account numbers or passwords."></textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit" >
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
                        <p>Asia Bank of Ceylon PLC</p>
                        <p>Asia House,No 21,Sri Razik Fareed Mawatha,P.O.Box 720 Colombo 07,Sri Lanka.</p>
                        
                        <br>
                        <p>Legal Notice | Accessibility | Security Measure</p>
                        <p>&copy; 2022 Aisa Bank. All Rights Reserved.</p>
            </div>
</body>
</html>