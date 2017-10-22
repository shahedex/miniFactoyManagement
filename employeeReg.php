<?php
        $dbhost = '127.0.0.1';
         $dbuser = 'root';
	       $dbpass = 'hellotheres';
	       $dbname = 'factory';
         $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
if($conn->connect_error){
    die("Connection failed : " .$conn->connect_error);
}
echo "connected";
echo $_POST["Fname"];
if(isset($_POST["submit"])){
    $name = $_POST["Fname"];
    $salary = $_POST["Salary"];
    $bonus = $_POST["Bonus"];
    
    echo "Name : " . $name . "<br>";
    echo "salary : " . $salary . "<br>";
    echo "bonus : " . $bonus . "<br>";
    
    $sql_query = "INSERT INTO staffs(NAME,SALARY,BONUS)
    VALUES('$name','$salary','$bonus')";
        if($conn->query($sql_query) === TRUE){
            header('Location: staffs.php');
        }
        else 
        {
            echo "error : " . $conn->error;
        }
    }
      $conn->close();
?>