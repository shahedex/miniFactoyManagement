<!DOCTYPE html>
<html lang="en">
<head>
  <title>XYZ Plastics - HOME</title>
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

/* modal login form */

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for buttons */
.button {
    background-color: #4CAF50;
    width: auto;
    padding: 10px 18px;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 20px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 95%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
  </style>
</head>
<body>
<!-- modal login here -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/adminLogin.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="admin.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id="uname"required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
      <input type="checkbox" checked="checked"> Remember me
        <br>
      <button type="submit" class="button" id="submit" name="submit">Login</button>    &nbsp;  
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<!-- modal buy now here -->

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/buynow.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="buynow.jpeg" alt="buynow">
    </div>

    <div class="container"> 
<h3>Order Info</h3>
<output><span id="time"> <span></output>
<br>
<output><span id="productName">you have ordered &&&&&&&&&&&&&&&&&&&&<span></output>
<br>
 
<input type="hidden" name="productNameInput" id="productNameInput">  
<label for="numberOfOrder">Order amount:</label>
<input type="number" class="form-control" id="numberOfOrder" style="width:20%;" name="numberOfOrder" required>
<br><hr>
<h3>Address Line</h3>

	<label for="Fname">Full Name:</label>
      <input type="text" class="form-control" id="Fname" name="Fname" required>
	<label for="Fname">Mobile No.:</label>
      <input type="text" class="form-control" id="mobile" name="mobile" required>
	<label for="Fname">Address:</label>
      <input type="text" class="form-control" id="address" name="address" required>
      <input type="hidden" name="timeInput" id="timeInput">             

	<br>
      <button type="submit" class="button" name="submit" id="submit">Check Out</button>    &nbsp;  
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel Order</button>
    </div>
  </form>
</div>




<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">XYZ Plastics</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"> Home</a></li>

   <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-log-in"> Admin login</a></li>
     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="customersreg.php"><span class="glyphicon glyphicon-user"></span> Register Customer</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
      <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CUETIAN OFFER!</div>
        <div class="panel-body"><img src="http://2.imimg.com/data2/MQ/CS/MY-3990596/red-plastic-chair-500x500.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Plastic Chair &nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-primary" value="pc" onclick="buynow(this.value)"> Buy Now</button></div>      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CUETIAN OFFER!</div>
        <div class="panel-body"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6kZgJDuVy9mzswNh3kohxKPrGvk1dJ289J5HIXP_sCnQk1V5K" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Regular rack &nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-primary" value="rr" onclick="buynow(this.value)"> Buy Now</button></div>      </div>
    </div>

   
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CUETIAN OFFER!</div>
        <div class="panel-body"><img src="https://3.imimg.com/data3/JM/LN/MY-8353281/plastic-round-stools-250x250.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">plastic stool &nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-primary" value="ps" onclick="buynow(this.value)"> Buy Now</button></div>      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CUETIAN OFFER!</div>
        <div class="panel-body"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQji03p2-qBKM34bhk3vZa1G3A8aIRMA_qXdQ5aBnma42JEjEWz" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Plastic wardrobe &nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-primary" value="pw" onclick="buynow(this.value)"> Buy Now</button></div>      </div>
    </div>

        <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CUETIAN OFFER!</div>
        <div class="panel-body"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1i8r-PMpZoJ2R4XEuOnCmko9Pmb3oZQ7ymGr4Rbp-_6xbWbqGzA" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> Plastic bucket  &nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-primary" value="pb" onclick="buynow(this.value)"> Buy Now</button></div>      </div>
    </div>

    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CUETIAN OFFER</div>
        <div class="panel-body"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIasVuRzqaN0T5elffpfW6NSmVbY7lE9gS8yoCdfhr95SAxRpptw" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Plastic Table &nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-primary" value="pt" onclick="buynow(this.value)"> Buy Now</button></div>
        
      </div>
    </div>
  </div>
</div><br><br>
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
 if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

function buynow(data){
document.getElementById('id02').style.display='block';

var currentdate = new Date(); 
var datetime = "<b>Order placing date </b>" + currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + "<b> at </b>  "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
    document.getElementById("time").innerHTML = datetime;
document.getElementById('timeInput').value = datetime;

if(data=='pt')    {
  document.getElementById("productName").innerHTML = "You have ordered: <b> Plastic Table</b>";
  document.getElementById('productNameInput').value = "Plastic Table";
  }
else if(data=='pb'){
   document.getElementById("productName").innerHTML = "You have ordered: <b> Plastic Bucket</b>";
  document.getElementById('productNameInput').value = "Plastic Bucket";
} 
else if(data=='pw'){
   document.getElementById("productName").innerHTML ="You have ordered: <b> Plastic Wardrobe</b>";
  document.getElementById('productNameInput').value = "Plastic Wardrobe";
  } 
else if(data=='ps'){
      document.getElementById("productName").innerHTML = "You have ordered: <b> Plastic Stool</b>";
  document.getElementById('productNameInput').value = "Plastic Stool";
  }
else if(data=='rr'){
    document.getElementById("productName").innerHTML = "You have ordered: <b> Regular Rack</b>";
  document.getElementById('productNameInput').value = "Regular Rack";
  }
else if(data=='pc'){
    document.getElementById("productName").innerHTML = "You have ordered: <b> Plastic Chair</b>";
  document.getElementById('productNameInput').value = "Plastic Chair";
  }
else{
alert("an error has been encountered");
  }
}

</script>
<footer class="container-fluid text-center">
  <p>&copy; &nbsp;&nbsp; XYZ PLASTICS LTD.</p>  
</footer>

</body>
</html>
