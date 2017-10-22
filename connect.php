<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'hellotheres';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
  
         mysqli_close($conn);
?>
