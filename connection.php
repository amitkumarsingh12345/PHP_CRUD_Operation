<?php
//1-Mehod 
  //To connect the databse in using firstly create varibale the assign
// $host="localhost";
// $username='root';
// $password="";
// $database="registration";
// $conn=mysqli_connect($host,$username,$password,$database);

//2-Method
  //To connect the database in direct method
  // error_reporting;-To not show the error handling warning 
  //error_reporting(0);
$conn=mysqli_connect("localhost","root","","registration");
if($conn){
    // echo "Data Base Connection";
}else{
    echo "Data Base Not Connect".mysqli_connect_error();
}
?>