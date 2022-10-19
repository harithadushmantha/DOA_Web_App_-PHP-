<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="./js/bootstrap.min.js" type="text/javascript"></script>
    <title>Document</title>
</head>

<body>

    <section class="login-header">

        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="logo" src="logo2.jpg" alt="logo">
                </div>
                <div class="col">


                </div>
                <div class="col" style="text-align: right;">
                    <a href="index.php" title="Back to home"><i style="font-size: 45px; margin-right: 25px; margin-top: 25px;" class="fa fa-home home-icon"></i></a>
                </div>

            </div>
            <div class="row rowclass">
                <div class="col">
                </div>
                <div class="col middle-column" style="text-align: center;">
                    <h1 class="login-h1">Welcome To EcoAgro</h1>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">


                </div>

                <div class="col" style="text-align: center;">
                    <form autocomplete="off" action="login.php" method="post" class="login-form">
                        <h3 style="margin-bottom: 40px;">Login</h3>
                        <div>
                            <input required type="text" id="username" name="username" class="input-login" placeholder="Enter Username ">

                        </div>

                        <div>
                            <input required type="password" id="password" name="password" class="input-login" placeholder="Enter Password">
                        </div>
                        <div style="margin-left: 100px; margin-bottom:20px ;">
                            <a style="text-decoration: none;" href="#">Forget Password?</a>
                        </div>
                        <div>
                            <a class="sign-in-btn-link" href=""> <button class="sign-in-btn">Sign In</button></a>
                        </div>
                        <div style="margin-top: 10px; ">
                            <p>Don't have an account?
                                <a class="signup-text" href="register.php">Sign up </a> Here
                            </p>
                        </div>
                    </form>
                </div>

                <div class="col">
                    <?php
                    if (isset($_SESSION["error"])) {
                        session_destroy();
                        echo '<span style="color:red; font-size:25px;background-color:white">' . $_SESSION["error"] . "</span>";
                    }
                    ?>

                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>