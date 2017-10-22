<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN PANEL : XYZ plastics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }



/* slideshow designs */

* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

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
/* Caption text */
.text1 {
  color: black;
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
  -webkit-animation-duration: 5.5s;
  animation-name: fade;
  animation-duration: 5.5s;
}

@-webkit-keyframes fade {
  from {opacity: .6} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
  </style>
</head>
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
      <a class="navbar-brand" href="#" style="color:#1E90FF;"> XYZ Plastics&nbsp;&nbsp;
   
      <span style="color:#7CFC00; font-size:10dp;">
      <span class="glyphicon glyphicon-user">AdminPanel
      </span>
        </a>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"> Home</a></li>

<li><a href="customers.php"><i class="glyphicon glyphicon-th-list"></i> Customers Lists</a></li>
<li><a href="orders.php"><i class="glyphicon glyphicon-shopping-cart"></i>
Product Orders</a></li>
<li><a href="expenses.php"><i class="glyphicon glyphicon-stats"></i>
Daily Cost & Income</a></li>
<li><a href="createProduct"><i class="glyphicon glyphicon-plus"></i>
Create Product</a></li>
<li><a href="productview.php"><i class="glyphicon glyphicon-list-alt"></i>
View Product list</a></li>

<li><a href="attendance.php"><i class="glyphicon glyphicon-sort"></i>
Daily Attendace </a></li>
<li><a href="staffs.php"><i class="glyphicon glyphicon-align-left"></i>
Employee and Staff List</a></li>
<li><a href="suppliers"><i class="glyphicon glyphicon-align-right"></i>
Buyers and Suppliers list</a></li>
        
      </ul>
    </div>
  </div>
</nav>


<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="slide1.jpg" style="width:100%">
  <div class="text"><h1>Online Order Managements</h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="slide2.jpg" style="width:100%">
  <div class="text1"><h1 color="black">Check and update products and stores</h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="slide3.jpg" style="width:100%">
  <div class="text"><h1>Manage Employee Salaries and attendance</h1></div>
</div>

</div>
<br>

<div style="text-align:center">
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
    setTimeout(showSlides,6000); // Change image every 2 seconds
}
</script>
<footer class="container-fluid text-center">
  <p>&copy; &nbsp;&nbsp; XYZ PLASTICS LTD.</p>  
</footer>

</body>
</html>
