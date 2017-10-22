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
    $name = $_POST["Fname"];
    $number = $_POST["number"];
    $address = $_POST["address"];
    
    echo "Name : " . $name . "<br>";
    echo "number : " . $number . "<br>";
    echo "address : " . $address . "<br>";
    
    $sql_query = "INSERT INTO customers(NAME,PHONE,ADDRESS)
    VALUES('$name','$number','$address')";
        if($conn->query($sql_query) === TRUE){
            header('Location: customers.php');
        }
        else 
        {
            echo "error : " . $conn->error;
        }
    }
      $conn->close();
?>