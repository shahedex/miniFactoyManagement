<?php
         $dbhost = '127.0.0.1';
         $dbuser = 'root';
	       $dbpass = 'hellotheres';
	       $dbname = 'factory';
         $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
         if($conn->connect_error ) {
            die('Could not connect: ' . connect_error());
	 }
	 $query = 'select * from expenses';
	 $result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<h2 style="text-align:center;">
<i class="fa fa-money" aria-hidden="true"></i>
Daily Income and Expense Records</h2>
<hr>
<div class="container" style="border: 1px solid grey; padding:12px; border-radius: 5px; margin:10px;">
  <h4 align="center">Today is: ---Day</h4>
           <hr>
           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Date</th>
        <th>Income</th>
        <th>Expense</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = $result->fetch_assoc()) { ?> 
      <tr>
        <td> <?php echo $row['DATE']; ?> </td>
        <td> <?php echo $row['INCOME']; ?>  Tk</td>
		<td> <?php echo $row['EXPENSE']; ?>  Tk</td>
      </tr>
     <?php } ?> 
    </tbody>
  </table>
</div>
<?php $conn->close();  ?>
</body>
</html>
