<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password);

if (!$con) {
    die("Connection failed" . mysqli_connect_error());
}

if (!mysqli_select_db($con, 'doa')) {
    echo "Database not selected";
}
$Name = $_POST['name'];
$District = $_POST['district'];
$Message = $_POST['message'];


$sql = "INSERT INTO qureis (name,district,message) VALUES ('$Name','$District','$Message')";


if (!mysqli_query($con, $sql)) {
    $_SESSION["message"] = "false";
} else {
    $_SESSION["message"] = "true";
}
header("refresh:1;url=makeQureis.php");
