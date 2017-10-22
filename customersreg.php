<!DOCTYPE html>
<html lang="en">
<head>
  <title><i class="fa fa-user-o" aria-hidden="true"></i>
  Staff & Employee List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .details{
  width: 50%;
  }
  body{
  background-color:#eff7f6;
  color:#011936;
  }
  hr {
    display: block;
    height: 1px;
    width: 90%;
    border: 0;
    border-top: 1px solid #011936;
    padding: 0; 
}

  </style>
</head>
<body>

<div class="container">

<h2 style="text-align:center;">
<i class="fa fa-id-badge" aria-hidden="true"></i>
Customer Registration</h2>
<hr>
<div class="container">
  <h4>Please fill up the following form.</h4>
  <form action="customerreg.php" method="post">
    <div class="form-group">
      <label for="Fname">Full Name:</label>
      <input type="text" class="form-control" id="Fname" placeholder="Full Name" name="Fname">
    </div>
        <div class="form-group">
      <label for="Number">Mobile Number:</label>
      <input type="number" class="form-control" id="number" placeholder="Mobile Number" name="number">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Current Address" name="address">
    </div>

    <button type="submit" class="btn btn-success" name="submit" value="submit">Register</button>
  </form>
</div>

<br><br>

</div>

</body>
</html>
