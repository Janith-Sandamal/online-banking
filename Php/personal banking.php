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

    <!-- Personal banking CSS file -->
    <link rel="stylesheet" href="../css/personal Banking.css">

    <!-- Header CSS File -->
    <link rel="stylesheet" href="../css/header.css">

    <!-- Footer CSS File -->
    <link rel="stylesheet" href="../css/footer.css">

    <title>Welcome to Aisa Bank!</title>
</head>
<body>
    <!-- Header Section of web page -->
    <header class="header">
        <div class="container">
                <nav class="nav"> 
                   <ul>
                      <li><a href="#"><img  src="" alt="Logo"></a></li>
                      <li><a href="../index.Php" target="_self" >Home</a></li>
                      <li><a href="#"  class="active">Peronal Banking</a></li>
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
            <img src="../Images/personalbanking.jpg" alt="banner" id="slideimg">
    
        </div>
        <div class="overlay">
            <div class="content">
                <h1>Welcome to Personal Banking.</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam, quidem.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam, quidem.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam, quidem.
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
            <div class="background-image"></div>
            <div class="publication-details"></div>
            <a href="#" class="author">User</a>
            <span class="data">Hello Customer</span>
        </div>
    </div>
    <div class="post-data">
        <h1 class="title">Savings Accounts</h1>
        <h2 class="subtitle">You Can rock the World</h2>
        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eaque rerum ratione consectetur nobis quae vitae consequatur ad suscipit modi facilis excepturi ut nesciunt non, voluptas error veniam quia quasi!</p>
        <div class="cta">
            <a href="cover-saving-accounts.Php">Read More &rarr;</a>
        </div>
    </div>
</div>
<div class="account-types-cards">
    <div class="card">
        <div class="image-data">
            <div class="background-image"></div>
            <div class="publication-details"></div>
            <a href="#" class="author">User</a>
            <span class="data">Hello Customer</span>
        </div>
    </div>
    <div class="post-data">
        <h1 class="title">Loans</h1>
        <h2 class="subtitle">You Can rock the World</h2>
        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eaque rerum ratione consectetur nobis quae vitae consequatur ad suscipit modi facilis excepturi ut nesciunt non, voluptas error veniam quia quasi!</p>
        <div class="cta">
            <a href="cover-loans.Php">Read More &rarr;</a>
        </div>
    </div>
</div>
<div class="account-types-cards">
    <div class="card">
        <div class="image-data">
            <div class="background-image"></div>
            <div class="publication-details"></div>
            <a href="#" class="author">User</a>
            <span class="data">Hello Customer</span>
        </div>
    </div>
    <div class="post-data">
        <h1 class="title">Cards</h1>
        <h2 class="subtitle">You Can rock the World</h2>
        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eaque rerum ratione consectetur nobis quae vitae consequatur ad suscipit modi facilis excepturi ut nesciunt non, voluptas error veniam quia quasi!</p>
        <div class="cta">
            <a href="cover-cards.Php">Read More &rarr;</a>
        </div>
    </div>
</div>
<div class="account-types-cards">
    <div class="card">
        <div class="image-data">
            <div class="background-image"></div>
            <div class="publication-details"></div>
            <a href="#" class="author">User</a>
            <span class="data">Hello Customer</span>
        </div>
    </div>
    <div class="post-data">
        <h1 class="title">Deposit</h1>
        <h2 class="subtitle">You Can rock the World</h2>
        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eaque rerum ratione consectetur nobis quae vitae consequatur ad suscipit modi facilis excepturi ut nesciunt non, voluptas error veniam quia quasi!</p>
        <div class="cta">
            <a href="cover-deposit.Php">Read More &rarr;</a>
        </div>
    </div>
</div>


<!-- Personal Banking Services -->

    <!-- Contact Form -->
    <div class="contact-form">
        <div class="form-header">
            <h2>Inform Us</h2>
        </div>
        <div class="form-description">
            <p>If you need help or want contact us,Complte the Online enquiry form below</p>
        </div>
        <div class="form-body">
            <form action="../Php/contact us.php" method="post">
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