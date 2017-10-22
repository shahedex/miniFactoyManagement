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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
button{
 display:block;
 float: right;
 }
</style>
</head>
<body>
<div class="container">

<h2 style="text-align:center;">
<i class="fa fa-users" aria-hidden="true"></i>
Employee Attendace Management</h2>
<hr>
<div class="container" style="border: 1px solid grey; padding:12px; border-radius: 5px; margin:10px;">
  <h4 align="center">Tick today's attendance.</h4>
           <hr>
             <form class="form-inline" action="attendance.php">
  <table class="table table-striped">
    <thead>
      <tr >
        <th class="text-center">Attendance</th>
        <th class="text-center">Full name</th>
        <th class="text-center">Current Salary</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = $result->fetch_assoc()) { ?> 
      <tr>
      <td><div class="checkbox" align="center">
	  	<label>
        	<input type="checkbox" value="1"></label>
         </div></td>
        <td class="text-center"> <?php echo $row['NAME']; ?> </td>
        <td class="text-center"> <?php echo $row['SALARY']; ?> </td>
      </tr>
       <?php } ?> 
      </tbody>
  </table>
  <button type="submit" class="btn btn-primary ">Submit</button>
  </form>
</div>
<?php $conn->close();  ?>
</body>
</html>
