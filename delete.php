<?php
session_start();

$servername ="localhost";
$username = "root";
$password ="";

$con = mysqli_connect($servername,$username,$password);

if(!$con)
{
    die("Connection failed".mysqli_connect_error());
}

if(!mysqli_select_db($con,'doa'))
{
    echo "Database not selected";
}
$Id = $_GET['id'];

$sql = "DELETE FROM users WHERE userId='$Id'";


if(mysqli_query($con,$sql))
{
    $_SESSION["deleted"]="true";
    header(("refresh:1;url=viewUsers.php"));
}
else{
    echo "Not Deleted";
}
?>