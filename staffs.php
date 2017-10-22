<?php
         $dbhost = '127.0.0.1';
         $dbuser = 'root';
	       $dbpass = 'hellotheres';
	       $dbname = 'factory';
         $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
         if($conn->connect_error ) {
            die('Could not connect: ' . connect_error());
	 }
	 $query = 'select * from staffs';
	 $result = $conn->query($query);
?>

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
<i class="fa fa-user-circle" aria-hidden="true"></i>
Staff & Employee List</h2>
<hr>
<div class="container" style="border: 1px solid grey; padding:12px; border-radius: 5px;">
  <h4 align="center">Add a new employee here.</h4>
  <form action="employeeReg.php" method="post">
    <div class="form-group">
      <label for="FullName">Full Name:</label>
      <input type="text" class="form-control" id="Fname" placeholder="Full Name" name="Fname">
    </div>
    <div class="form-group">
      <label for="Salary">Salary:</label>
      <input type="number" class="form-control" id="Salary" placeholder="Salary" name="Salary">
    </div>
    <div class="form-group">
      <label for="Bonus">Bonus:</label>
      <input type="number" class="form-control" id="Bonus" placeholder="Bonus" name="Bonus">
    </div>&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn btn-success" value="submit" name="submit">Add Employee</button>
  </form>
</div>
<br><br>

  <p>As of today Staff Name and their Salaries are as belows.</p>

<table class="table table-bordered table-hover" width="80%">
    <thead>
      <tr>
        <th >Full Name</th>
        <th>Salary</th>
        <th>Bonus</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = $result->fetch_assoc()) { ?>  
      <tr>
        <td width="20%"> <?php echo $row['NAME']; ?> </td>
        <td width="20%"> <?php echo $row['SALARY']; ?> </td>
        <td width="20%"> <?php echo $row['BONUS']; ?> </td>
	<td width="14%">&nbsp;&nbsp;&nbsp;&nbsp;
	  <button type="button" class="btn btn-warning">Edit</button>&nbsp; &nbsp; &nbsp;
	  <button type="button" class="btn btn-danger" >Delete</button>&nbsp;&nbsp;
	</td>
      </tr>
      <?php } ?>
    </tbody>  
  </table>
</div>
<?php $conn->close();  ?>
</body>
</html>

