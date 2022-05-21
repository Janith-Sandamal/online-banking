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

    <!-- Services CSS file -->
    <link rel="stylesheet" href="../css/services.css">

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
                            <h1>Services.</h1>
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

            <!-- Services Cards -->
<section class="services-cards">
    <h1 class="heading" id="Key-Values">Key Values</h1>
    <div class="box-container">
        <div class="box">
            <div class="icon">
                <img src="../Images/support.png" alt="icon">
            </div>
            <h3 class="title">Careers</h3>
            <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Quisquam, quidem.Lorem ipsum dolor sit amet consectetur adipisicing  <br>
        </div>
        <div class="box">
            <div class="icon">
                <img src="../Images/support.png" alt="icon">
            </div>
            <h3 class="title">Careers</h3>
            <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Quisquam, quidem.Lorem ipsum dolor sit amet consectetur adipisicing <br> 
        </div>
        <div class="box">
            <div class="icon">
                <img src="../Images/support.png" alt="icon">
            </div>
            <h3 class="title">Careers</h3>
            <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Quisquam, quidem.Lorem ipsum dolor sit amet consectetur adipisicing <br>
        </div>
        <div class="box">
            <div class="icon">
                <img src="../Images/support.png" alt="icon">
            </div>
            <h3 class="title">Careers</h3>
            <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Quisquam, quidem.Lorem ipsum dolor sit amet consectetur adipisicing  <br>
        </div>
    </div>
</section>
    
            <!-- Services Cards -->
        
<!-- POST -->

<div class="blog-post">
    <div class="blog-post-img">
        <img src="../Images/img.jpg" alt="Banner">
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
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur impedit minus aperiam repellat incidunt,
                pariatur similique inventore, aut recusandae voluptas numquam quidem non earum temporibus ab, ullam saepe ea fuga!</p>
        </div>
        <div class="blog-post-read-more">
            <a href="cover-digital-banking.Php">Read More</a>
        </div>
    </div>
</div>


<div class="blog-post">
    <div class="blog-post-img">
        <img src="../Images/img.jpg" alt="Banner">
    </div>
    <div class="blog-post-info">
        <div class="blog-post-title">
            <h2>E-Passbook</h2>
        </div>
        <div class="blog-post-date">
            <span>Friday</span>
            <span>May 16 2022</span>
        </div>
        <div class="blog-post-description">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur impedit minus aperiam repellat incidunt,
                pariatur similique inventore, aut recusandae voluptas numquam quidem non earum temporibus ab, ullam saepe ea fuga!</p>
        </div>
        <div class="blog-post-read-more">
            <a href="cover-epassbook.Php">Read More</a>
        </div>
    </div>
</div>


<div class="blog-post">
    <div class="blog-post-img">
        <img src="../Images/img.jpg" alt="Banner">
    </div>
    <div class="blog-post-info">
        <div class="blog-post-title">
            <h2>Whatsapp Banking</h2>
        </div>
        <div class="blog-post-date">
            <span>Friday</span>
            <span>May 16 2022</span>
        </div>
        <div class="blog-post-description">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur impedit minus aperiam repellat incidunt,
                pariatur similique inventore, aut recusandae voluptas numquam quidem non earum temporibus ab, ullam saepe ea fuga!</p>
        </div>
        <div class="blog-post-read-more">
            <a href="#">Read More</a>
        </div>
    </div> 
</div>

<div class="blog-post">
    <div class="blog-post-img">
        <img src="../Images/img.jpg" alt="Banner">
    </div>
    <div class="blog-post-info">
        <div class="blog-post-title">
            <h2>Mobile Banking</h2>
        </div>
        <div class="blog-post-date">
            <span>Friday</span>
            <span>May 16 2022</span>
        </div>
        <div class="blog-post-description">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur impedit minus aperiam repellat incidunt,
                pariatur similique inventore, aut recusandae voluptas numquam quidem non earum temporibus ab, ullam saepe ea fuga!</p>
        </div>
        <div class="blog-post-read-more">
            <a href="#">Read More</a>
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
                        <p>Asia Bank of Ceylon PLC</p>
                        <p>Asia House,No 21,Sri Razik Fareed Mawatha,P.O.Box 720 Colombo 07,Sri Lanka.</p>
                        
                        <br>
                        <p>Legal Notice | Accessibility | Security Measure</p>
                        <p>&copy; 2022 Aisa Bank. All Rights Reserved.</p>
            </div>
</body>
</html>