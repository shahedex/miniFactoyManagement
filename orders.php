<?php
         $dbhost = '127.0.0.1';
         $dbuser = 'root';
	       $dbpass = 'hellotheres';
	       $dbname = 'factory';
         $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
         if($conn->connect_error ) {
            die('Could not connect: ' . connect_error());
	 }
	 $query = 'select * from orders';
	 $result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Order Log</title>
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
    border-top: 2px solid #011936;
    padding: 0; 
}
  </style>
</head>
<body>

<div class="container">
  <h2 style="text-align:center;">
<i class="fa fa-product-hunt" aria-hidden="true"></i>
All orders log</h2>
  <hr>  
<table class="table  table-striped table-bordered">
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Amount</th>
        <th>Charge</th>
        <th>Item</th>
        <th>Date</th>
        <th>Made By</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = $result->fetch_assoc()) { ?> 
      <tr>
        <td> <?php echo $row['ID']; ?> </td>
        <td> <?php echo $row['numord']; ?> </td>
        <td> <?php echo $row['CHARGE']; ?> Tk.</td>
        <td> <?php echo $row['NAME']; ?> </td>
        <td> <?php echo $row['DATE']; ?> </td>
        <td> <?php echo $row['ORDERBY']; ?> </td>
        <td>  <?php echo $row['PHONE']; ?> </td>
        <td> <?php echo $row['ADDRESS']; ?> </td>
      </tr>
       <?php } ?>
    </tbody>
  </table>
</div>
<?php $conn->close();  ?>
</body>
</html>
