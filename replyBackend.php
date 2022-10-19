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

$Message = $_POST['message'];

$sql = "UPDATE qureis SET reply = '$Message' WHERE quryId=$_SESSION[qryid]";

if (!mysqli_query($con, $sql)) {
    $_SESSION["message"] = "false";
    echo "ERROR";
} else {
    $_SESSION["message"] = "true";
    header("refresh:1;url=answerQuestion.php");
}