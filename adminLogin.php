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
    $uname = $_POST["uname"];
    $psw = $_POST["psw"];
    
    $sql_query = "select *  from admin where NAME='$uname' and PASSWORD='$psw'";
    
    $res = $conn->query($sql_query);
    echo $res->num_rows;
    if($res->num_rows != 0){
        header('Location: adminhome.php');
    }
    else 
    {
        echo "error";
    }
    }
      $conn->close();
?>