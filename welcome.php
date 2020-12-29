<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header"><hr>
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. WELCOME TO CONNECT WORLD</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p><hr><!-- 
<!DOCTYPE html>
<html lang="en">
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HOMEPAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
}

.fa {font-size:50px;}
 /* Large rounded green border */
hr.new5 {
  border: 10px solid green;
  border-radius: 5px;
}
table, td, th {
  border: 1px white;
}

table {
  border-collapse: collapse;
  width: 80%;
}

body {
  
  margin: 0;
}

/* Style the header */
.header {
  background-color:red;
  padding: 20px;
  text-align: center;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: 3px}
  body {font-family: Arial, Helvetica, sans-serif;}

.callout {
  position: fixed;
  bottom: 50px;
  right: 8px;
  margin-left: 20px;
  max-width: 300px;
  top:500px;
}

.callout-header {
  padding: 25px 15px;
  background: #332900;
  font-size: 30px;
  color: white;
}

.callout-container {
  padding: 10px;
  background-color: #F9AA0D;
  color: black
}

.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 30px;
  cursor: pointer;
}

.closebtn:hover {
  color: lightgrey;
}
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #F9AA0D;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #332900;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body >

<div class="header">
  <h1>CONNET WORLD<sub>.com</sub></h1>
  <p>THE PERFECT WAY TO CONNECT WITH THE WORLD</p>
</div>

<div class="topnav">
   <a href="C:\Users\pc\Desktop\new folder\ankush\tickets\TICKETS.html">TICKETS</a>
  <a href="TRAVEL.html">TRAVEL</a>
  <a href="C:\Users\pc\Desktop\new folder\ankush\hotel\h1.html#">HOTELS</a>
   <a href="file:///C:/Users/pc/Desktop/new%20folder/TASNEEM/ESHOP.html">E-SHOP</a>
</div>

<div class="row">
  <div class="column" >
    <h2 >BOOKING SERVICES</h2>
    <p>E-commerce is revolutionizing the way we all shop in India. Why do you want to hop from one store to another in search of the latest phone when you can find it on the Internet in a single click? Not only mobiles, connect world's houses everything you can possibly imagine, from trending electronics like laptops, tablets, smartphones, and mobile accessories </p>
  </div>
  
  <div class="column">
    <h2>MANAGEMENTS</h2>
    <p>A world of limitless possibilities awaits you - connectworld+ was kickstarted as a loyalty reward programme for all its regular customers at zero subscription fee. All you need is 500 supercoins to be a part of this service. For every 100 rupees spent on connectworld order, Plus members earns 4 supercoins & non-plus members earn 2 supercoins. Free delivery, early access during sales and shopping festivals, exchange offers and priority customer service are the top benefits to a Flipkart Plus member. In short, earn more when you shop more!</p>
  </div>
  
  <div class="column">
    <h2>What Can You Buy From connect wolrd?</h2>
    <p>From budget phones to state-of-the-art smartphones, we have a mobile for everybody out there. Whether you're looking for larger, fuller screens, power-packed batteries, blazing-fast processors, beautification apps, high-tech selfie cameras or just large internal space, we take care of all the essentials. Shop from top brands in the country like Samsung, Apple, Oppo, Xiaomi, Realme, Vivo, and Honor to name a few. Rest assured, you're buying from only the most reliable names in the market.</p>
  </div>
</div>
<div class="topnav">
  <a href="file:///C:/Users/dell/Desktop/new%20folder/ankush/DEALS.html">OFFERS</a>
  <a href="file:///C:/Users/dell/Desktop/new%20folder/ankush/wishlist.html">WISH LIST</a>
  <a href="file:///C:/Users/dell/Desktop/new%20folder/ankush/cupan2.html">COUPAN</a>
  <a href="contact.html">FOLLOW US ON</a>
  <a href="login1.html">LOG OUT</a>
</div>
<fieldset>
<div class="slideshow-container" style="background-color: red">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="bus1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 /4</div>
  <img src="train2.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="5.png" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</fieldset>

<center><h1>OUR SERVICES</h1></center>
<center>
<table>
   <tr>
    <td>OUR PRODUCTS</td>
    <td>COMPANY</td>
    <td>TRAVEL RESOURCES</td>
  </tr> <tr>
    <td>Domestic hotels</td>
    <td>about us</td>
    <td>popular bus routes</td>
  </tr> <tr>
    <td>internation flights</td>
    <td>terms of services</td>
    <td>train PNR status</td>
  </tr> <tr>
    <td>domestic flights</td>
    <td>user agreement</td>
    <td>airport cabs</td>
  </tr> <tr>
    <td>international flights</td>
    <td>privacy </td>
    <td>hotel in india</td>
  </tr> <tr>
    <td>bus booking</td>
    <td>contact us</td>
    <td>popular airlines</td>
  </tr> <tr>
    <td>cab</td>
    <td>carriers</td>
    <td>GOIBIBO offers</td>
  </tr> <tr>
    <td>train ticket bookin</td>
    <td>corporate</td>
    <td>international airports</td>
  </tr>
  <tr>
    <td>route planner</td>
    <td>goibibo on mobile</td>
    <td>city airlines</td>
  </tr>
  <tr>
    <td>destination planner</td>
    <td>goibibo tv ad</td>
    <td>international travel guide</td>
  </tr>
  <hr class="new5">
</table>
<hr class="new5">
</center>
<p>Popular Flight SectorsDelhi Patna Flights |Delhi Goa Flights |Delhi Mumbai Flights |Delhi Pune Flights |Mumbai Hyderabad Flights |Bangalore Mumbai Flights </p>
<p>Top International RoutesBangalore Bangkok Flights |Mumbai Bali Flights |Mumbai to Toronto Flights |Delhi Toron Flights |Chennai Colombo Flights |Chennai Singapore Flights </p>
<hr><hr>





<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>150+</h3>
      <p>Partners</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>450+</h3>
      <p>Projects</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>10,700,10,000+</h3>
      <p>Happy Clients</p>
    </div>
  </div>
</div>

<footer style="background-color:red;" class="w3-container w3-padding-64 w3-yellow #000000 w3-center w3-opacity w3-xlarge" style="margin-top:128px">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="CONNECTWORLD.COM" target="_blank" class="w3-hover-text-green">CONNECTWORLD.COM</a></p>
   Copyright © 2017-2020 CONNECTWORLD Group. All rights reserved
   <center>All product names, logos, brands, trademarks and registered trademarks are property of their respective owners.</center>
</footer>
</body>
</html> -->
</body>
</html>