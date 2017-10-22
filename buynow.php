<?php
        $dbhost = '127.0.0.1';
         $dbuser = 'root';
	       $dbpass = 'hellotheres';
	       $dbname = 'factory';
         $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
if($conn->connect_error){
    die("Connection failed : " .$conn->connect_error);
}
if(isset($_POST["submit"])){
    $name = $_POST["productNameInput"];
    $pnumber = $_POST["numberOfOrder"];
    $clientname = $_POST["Fname"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];
    // echo "Name : " . $name . "<br>";
    // echo "number : " . $number . "<br>";
    // echo "address : " . $address . "<br>";
    
    $sql_query = "INSERT INTO orders(NAME,numord, ORDERBY, PHONE,ADDRESS,DATE)
    VALUES('$name','$pnumber','$clientname','$mobile','$address',NOW())";
        if($conn->query($sql_query) === TRUE){
            header('Location: orders.php');
        }
        else 
        {
            echo "error : " . $conn->error;
        }
    }
      $conn->close();
?>