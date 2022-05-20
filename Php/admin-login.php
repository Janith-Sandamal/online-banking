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

    <!-- Admin login CSS file -->
    <link rel="stylesheet" href="../css/admin-login.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    

    <title>Login Here!</title>
</head>
<body>
    <!-- Header Section of web page -->
    <header class="header">
        <div class="container">
                <nav class="nav"> 
                   <ul>
                      <li><a href="#"><img  src="" alt="Logo"></a></li>
                      <li><a href="../index.php" target="_self">Home</a></li>
                      <li><a href="#">Peronal Banking</a></li>
                      <li><a href="#">services</a></li>
                      <li><a href="Digital banking.php" target="_self" class="active">Asia Bank Digital</a></li>
                      <li><a href="about us.php" target="_self">About Us</a></li>
                      <li><a href="contact us.php" target="_self">Contact Us</a></li>
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
            <img src="../Images/Settings.png" alt="banner" id="slideimg">
    
        </div>
        <div class="overlay">
            <section id="login">
                <div class="loginbox">
                    <img src="../Images/admin.png" class="avatar">
                    <h1>Login Here!</h1>
                    <form action="../php/login.php" method="post">
                        <p>Admin-Username</p>
                        <input type="text" name="username" placeholder="Enter Username">
                        <p>Admin-Password</p>
                        <input type="password" name="password" placeholder="Enter Password"><br>
                        <input type="submit" name="submit" value="Login"><br>
                        <!-- <a href="../Html/signup.html" target="_self">Enroll to Digital Banking?</a><br> -->
                        <a href="password reset.html" target="_self">Admin account reset</a>
                    </form>
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
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Bank Loans</a></li>
                        <li><a href="#">Properties for Sale</a></li>
                        <li><a href="#">Credit Card Application</a></li>
                        <li><a href="#">New Customer Registrations</a></li>
                        <li><a href="#">New Card Application Status</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Personal Banking</h4>
                    <ul>
                        <li><a href="#">Deposits</a></li>
                        <li><a href="#">Current Accounts</a></li>
                        <li><a href="#">Cards</a></li>
                        <li><a href="#">Savings Accounts</a></li>
                        <li><a href="#">Loans</a></li>    
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
                        <p>Design & Developed by <strong><a href="#"> BinaryPage Solutions</a></strong></p>
            </div>
</body>
</html>