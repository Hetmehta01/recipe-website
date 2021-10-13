<!DOCTYPE html>
<html>
<meta name = "viewport" content="width = device-width initial-scale = 1.0">
<head>
        <title>EngineersKitchenette</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://kit.fontawesome.com/c740819ad3.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Header section -->
        <section class="sub-header">
            <nav>
                <a href="index.html"> <img src="images/logo.png"></a> 
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="recipe.html">RECIPES</a></li>
                        <li><a href="contact1.php">CONTACT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>Contact Us</h1>
        </section>

        <!-- Contact us -->
        <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609823277!2d72.74109995709657!3d19.08219783958221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1631848326793!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>XYZ Road, ABC Building</h5>
                        <p>Mumbai, Maharashtra, IN</p>
                    </span>
                    </div>
                    <div>
                    <i class="fa fa-phone-alt"></i>
                    <span>
                        <h5>+91 8080808080</h5>
                        <p>Monday to Saturday, 10AM to 6PM</p>
                    </span>
                    </div>
                    <div>
                    <i class="fa fa-envelope"></i>
                    <span>
                        <h5>hetmehta01@gmail.com</h5>
                        <p>Email us your query</p>
                    </span>
                    </div>
                </div>
                <div class="contact-col">
                    <form action="contact1.php" method="post">
                        <input type="text" name="fullname" placeholder="Enter your name" required>
                        <input type="email" name="email" placeholder="Enter email address" required>
                        <input type="text" name="subject" placeholder="Enter your subject" required>
                        <textarea rows="8" name="message" placeholder="Message" required></textarea>
                        <a href = "contact1.php"><button type="submit" name="submit" class="hero-btn red-btn">Send Message</button></a>
                    </form>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <section class="footer">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sunt velit consequatur odit aliquid
                 magnam quod? <br>Explicabo ipsam animi earum at doloribus nam, cumque reiciendis fugiat quidem assumenda dolor aspernatur vel.</p>
            <div class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
            <p>Made with <i class="fas fa-heart"></i> & <i class="fas fa-coffee"></i> by Het Mehta</p>
            </section>

        <!-- Javascript for toggle menu -->
        <script>
            var navLinks = document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.width = "200px";
            }
            function hideMenu(){
                navLinks.style.width= "0px";
            }
        </script>
    </body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe-website";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    // echo "Connection OK";
}
else
{
    echo "Connection Failed ".mysqli_connect_error();
}

$name =  $_REQUEST['fullname'];
$email =  $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$sql = "INSERT INTO contactus  VALUES ('$name', '$email','$subject','$message')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully." ;

    // echo nl2br("\n$name\n $email");
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}

mysqli_close($conn);

?>