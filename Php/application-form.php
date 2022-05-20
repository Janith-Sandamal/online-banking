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
<body  onload="slider()">
    <!-- Header Section of web page -->
    <header class="header">
        <div class="container">
                <nav class="nav"> 
                   <ul>
                      <li><a href="#"><img  src="#" alt="Logo" ></a></li>
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
        <h1>Apply for a loan</h1>
    </div>
</div>

        <!-- Contact Form -->
        <div class="contact-form">
            <div class="form-header">
                <h2>Fill This Form</h2>
            </div>
            <div class="form-description">
                <p>If you need help or want contact us,Complte the Online enquiry form below</p>
            </div>
            <div class="form-body">
                <form action="../Php/contact us.php" method="post">
                    <table >
                        <tr>
                            <td>
                                <label for="nic">NIC Number*</label>
                                <input type="text" name="nic" placeholder="National Identity Card No* " required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="title">Title*</label>
                                <select name="" id="" placeholder="Title*">
                                <option value="Mr." >Mr.</option>
                                <option value="Ms.">Ms.</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="firstname">First Name*</label>
                                <input type="text" name="fname" id="fname" placeholder="Enter your Frist Name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="lastname">Last Name*</label>
                                <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="address">Address*</label>
                                <input type="text" name="address1" id="" placeholder="Address Line 1*">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="address2" id="" placeholder="Address Line 2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="city">Nearest Branch*</label>
                                <input type="text" name="city" id="" placeholder="Nearest Branch*">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="Occupation">Occupation*</label>
                                <input type="text" name="occupation" id="" placeholder="Occupation*">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email*</label>
                                <input type="email" name="email" id="email" placeholder="Enter your Email " required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="phone">Phone Number*</label>
                                <input type="text" name="number" id="number" placeholder="Enter your Phone Number" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="For security and privacy    please don't include information like your bank account numbers or passwords." ></textarea>
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
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Bank Loans</a></li>
                        <li><a href="#">Downloads</a></li>
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
                        <!-- <p>Design & Developed by <strong><a href="#"> BinaryPage Solutions</a></strong></p> -->
            </div>
</body>
</html>