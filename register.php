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
    <script src="./register.js"></script>
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
                    <a href="index.php" title="Back to home"><i style="font-size: 45px; margin-right: 25px; margin-top: 25px;"
                            class="fa fa-home home-icon"></i></a>
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

                <div class="col" style="text-align: center; margin-top: -40px;">
                    <form action="users.php" method="post" class="login-form" autocomplete="off">
                        <h3 style="margin-bottom: 40px;">Register Now</h3>
                        <div>
                            <input type="text" required id="username" name="username" class="input-login"
                                placeholder="Username*">

                        </div>

                        <div>
                            <input required type="password" id="password" name="password" class="input-login"
                                placeholder="Password*">
                        </div>
                        <div>
                            <input required type="text" id="telephone" name="telephone" class="input-login"
                                placeholder="Telephone Number">
                        </div>
                        <div>
                            <input  type="email" id="password" name="email" class="input-login"
                                placeholder="Email Address">
                        </div>
                        <div>
                            <select required name="user-type" id="user-type" class="dropdown"
                                onchange="getSelectedValue();">
                                <option value="" disabled selected hidden>Select User Type*</option>
                                <option value="field-officer" style="color: rgb(0, 0, 0);">Field Officer</option>
                                <option value="farmer" style="color: rgb(0, 0, 0);">Farmer</option>
                            </select>

                        </div>
                        <div>
                            <input style="visibility: hidden;" type="text" id="officer-id" name="officer-id"
                                class="input-login" placeholder="Officer Identity*">
                        </div>
                        <div>
                            <input style="visibility: hidden;" type="text" id="farmer-dist" name="farmer-dist"
                                class="input-login" placeholder="District">
                        </div>
                        <div >
                            <a class="sign-in-btn-link" href=""> <button class="sign-in-btn">Sign Up</button></a>
                        </div>
                        <div style="margin-top: 10px; ">
                            <p>Already have an account?
                                <a class="signup-text" href="loginUI.php">Sign in </a> Here
                            </p>
                        </div>
                    </form>
                </div>

                <div class="col">
                <?php
                    if (isset($_SESSION["registered"])) {
                        if($_SESSION["registered"]==="true")
                        {

                            session_destroy();
                            echo '<span style="color:red; font-size:25px;background-color:white"> Successfull </span>';
                        }
                        else if($_SESSION["registered"]==="false")
                        {
                            session_destroy();
                            echo '<span style="color:red; font-size:25px;background-color:white"> Unsuccessfull </span>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>