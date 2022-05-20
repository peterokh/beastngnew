<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "contact@beastng.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Beast NG</title>
    <link rel="icon" type="image/x-icon" href="/images/beast-favicon.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/sharp-sans" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/samsung-sharp-sans" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
                

</head>
<body>

<section class="serve-main">
        <nav>
           <a href="index.html" class="logo"> <img src="images/beast-logo-white.png"></a>
           
            <input class="menu-btn" type="checkbox" id="menu-btn">
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>

           <ul class="menu">
               <li><a href="index.html">Home</a></li>
               <li><a href="services.html">Services</a></li>
               <li><a href="about.html">About Us</a></li>
               <li><a href="contact.html">Contact</a></li>
           </ul>

           <div class="nav-socials">
            <a href="https://twitter.com/beast_ngr" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://instagram.com/beastngr" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://facebook.com/beastng" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/company/beastng" target="_blank"><i class="fa fa-linkedin"></i></a>
           </div>

        </nav>
</section>


<!------ Main Content ------->


<div class="about">
    <div class="about-text">
        <p>Thank you for contacting us. We will get back to you as soon as possible.</p>
        <p>Go to <a href="index.html" class="goto">Homepage</a></p>
    </div>
</div>




<!------------ Footer ----------->

<section class="footer">
    <div class="footer-container">
        <div class="footer-img">
            <img src="images/beast-logo-white.png">
            <p>© 2022, Beast NG. All Rights Reserved.</p>
        </div>
        <div class="footer-icons">
            <a href="https://twitter.com/beast_ngr" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://instagram.com/beastngr" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://facebook.com/beastng" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/company/beastng" target="_blank"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
</section>


';


?>