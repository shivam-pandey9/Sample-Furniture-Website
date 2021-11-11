<?php 
include('signup.html');
// above line not important

$servername='localhost';
$username = 'root';
$password = "";
$port = "3306";
$dbname = "Furniture1";
$conn = mysqli_connect($servername,$username,$password,$dbname,$port);
// $user = $_POST[''];

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$user= $_POST['user'];
$pwd= $_POST['pass'];
// $gender= $_POST['gender'];
$gender = "Male";
$dob= $_POST['dob'];
$address= $_POST['txt'];
$pincode= $_POST['pincode'];
// $state= $_POST['state'];
$state = "Delhi";
$email = $_POST['email'];
// .value

if($conn)
{
	echo "Database Connected";
	$query "INSERT INTO signup(fname,lname,usr,pwd,gender,dob,address,pincode,state,email) VALUES( $fname,$lname,$user,$pwd,$gender,$dob,$address,$pincode,$state,$email )";
	$run = mysqli_query($conn,$query);
	if($run==true)
 	{
		echo "Query Successful";
	}
	else
	 {
	echo "Query Unsuccessful"; 
	}
}
else
{
	echo "Database Connection failed";
}


?>
