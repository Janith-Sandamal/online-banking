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
    <link rel="icon" href="../Images/Favicon sample.png" type="image/x-icon">

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

    <title>Services!</title>
</head>
<body>
    <!-- Header Section of web page -->
    <header class="header">
        <div class="container">
                <nav class="nav"> 
                   <ul>
                      <li><a href="#"><img  src="" alt="Logo"></a></li>
                      <li><a href="../index.Php" target="_self" >Home</a></li>
                      <li><a href="personal banking.Php" target="_self" >Peronal Banking</a></li>
                      <li><a href="#" class="active">services</a></li>
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
                      <li><a href="#"><img src="" alt="login"></a></li>
                      
                   </ul>
                </nav>
            </div>
        </div>
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Quisquam, quidem.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Quisquam, quidem.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Quisquam, quidem.
                            </p>
                            <div>
                                <button type="button" class="btn-1" ><a href="#Key-Values">Explore!</a></button>

                            </div>
            
                
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner -->

    <!-- Details About Digital Banking -->
<div class="digital-banking-info">
    <div class="container">
        <div class="features">
            <h2>features</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore tenetur fugiat, ullam sequi nisi aliquam expedita beatae rem veritatis, dolor amet aut necessitatibus consequatur dolorem vero, soluta veniam neque!</p>
        </div>
        <div class="available-facility">
            <h2>available-facility</h2>
            <ul>
                <li>facility</li>
                <li>facility</li>
                <li>facility</li>
                <li>facility</li>
                <li>facility</li>
                <li>facility</li>
                <li>facility</li>
                <li>facility</li>
                <li>facility</li>
                <li>facility</li>
            </ul>
        </div>
        <div class="Benifits">
            <h2>Benifits</h2>
        </div>
        <div class="how-to-register">
            <h2>How to Register</h2>
            <ol>
                <li>Step</li>
                <li>Step</li>
                <li>Step</li>
                <li>Step</li>
                <li>Step</li>
            </ol>
        </div>
        <div class="terms-condition">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium magnam sequi quod similique sit repellendus officia suscipit reiciendis! Eos explicabo qui voluptate adipisci fugit eveniet pariatur repudiandae repellendus quia ut.</p>
        </div>
        <div class="apply">
            <button><a href="application-form.Php?reason=digitalbanking"> Apply Online</a></button>
            <button>Download Application</button>
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
        <!-- Contact Form -->


<!-- More Info -->

<!-- <div class="more-info">
    <div class="heading">If You Want More Info?</div>
    <div class="description"><p>Please feel Free to use our Enquariy Form.</p></div>
    <div class="form">
        <form action="">
            <table>
                <tr>
                    <td>
                        <select name="select" id="select">
                            <option value="" selected>Like to learn more about</option>
                            <option value="">Web Development</option>
                            <option value="">Web Design</option>
                            <option value="">Web Hosting</option>
                            <option value="">Web Maintenance</option>
                            <option value="">Web Security</option>
                            <option value="">Web Design</option>
                            <option value="">Web Design</option>
                            <option value="">Web Design</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    
                    <td><input type="text" name="name" placeholder="Frist-Name*"></td>
                </tr>
                <tr>
                    
                    <td><input type="text" name="name" placeholder="Last-Name*"></td>
                </tr>
                <tr>
                    
                    <td><input type="email" name="email" placeholder="Email*"></td>
                </tr>
                <tr>
                    
                    <td><input type="text" name="phone" placeholder="Phone*"></td>
                </tr>
                <tr>
                    
                    <td><textarea name="message" id="" cols="45" rows="10" placeholder="Let us know if there are any special notes.*"></textarea></td>
                </tr>
                <tr>
                    
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>
</div> -->

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
                        <p>Asia Bank of Ceylon PLC</p>
                        <p>Asia House,No 21,Sri Razik Fareed Mawatha,P.O.Box 720 Colombo 07,Sri Lanka.</p>
                        
                        <br>
                        <p>Legal Notice | Accessibility | Security Measure</p>
                        <p>&copy; 2022 Aisa Bank. All Rights Reserved.</p>
            </div>
</body>
</html>