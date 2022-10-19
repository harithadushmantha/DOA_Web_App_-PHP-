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

//trimming the user inputs
function validate ($data)
{   
    $data = trim($data);

    return $data;
}
$Username = validate($_POST['username']);
$Password = validate($_POST['password']) ;


//query for select users from DB
    $sql = "SELECT * FROM users WHERE username ='$Username' AND password ='$Password'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) === 1) //checking any data available in db
    {
        
        $row = mysqli_fetch_assoc($result);
        echo $row['username'];
        if($row['username'] === $Username && $row['password'] === $Password) // check user input match with db values
        {
            $_SESSION['userName'] = $row['username'];
            $_SESSION['userType'] =  $row['userType'];
            header("Location: index.php");
        }
        else{
            
            header("Location:login.php");

            exit();
        }
    }
    else{
        $_SESSION["error"] = "Username or password incorrect";
        header("Location: loginUI.php? error=Username or password incorrect");

            exit();
    }

?>