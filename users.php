<?php
session_start();
$servername ="localhost";
$username = "root";
$password ="";

//connection string
$con = mysqli_connect($servername,$username,$password);

if(!$con)
{
    die("Connection failed".mysqli_connect_error()); 
}

if(!mysqli_select_db($con,'doa'))
{
    echo "Database not selected"; // Try to connect DB
}
//Variables for store values from form
$Username = $_POST['username'];
$Password = $_POST['password'];
$Telephone = $_POST['telephone'];
$Email = $_POST['email'];
$Usertype =$_POST['user-type'];
$OfficerId =$_POST['officer-id'];
$FarmerDist =$_POST['farmer-dist'];

//query for insert new user
$sql ="INSERT INTO users (username,password,telephone,email,userType,OfficerId,farmerDist) VALUES ('$Username','$Password','$Telephone','$Email','$Usertype','$OfficerId','$FarmerDist')";


if(!mysqli_query($con,$sql))
{
    $_SESSION["registered"]="false";
}
else{
    $_SESSION["registered"]="true";
}
header("refresh:1;url=index.php");

?>