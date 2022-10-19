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
    <title>Department Of Agriculture</title>

</head>

<body>
    <div class="alpha">

        <section class="headcontactus">
            <div class="container">
                <div class="row rowclass">
                    <div class="col">
                        <img class="logo" src="logo2.jpg" alt="logo">
                    </div>
                    <div class="col-5 row1col2">
                        <h1>කෘෂිකර්ම දෙපාර්තුමේන්තුව</h1>
                        <h3>வேளாண் துறை</h3>
                        <h3>Department Of Agriculture</h3>
                    </div>
                    <div class="col r-1c-3">

                        <?php
                        if (isset($_SESSION['userName'])) {
                        } else {
                            echo '<a class="loginlink" href="register.php"><button class="login-button">
                            Register
                        </button></a>';
                            echo '
                            <a class="loginlink" href="loginUI.php?error=none">
                                <button class="login-button">
                                    Login
                                </button>
                            </a>';
                        }
                        ?>
                        <div style="color: white;">
                            <?php if (isset($_SESSION['userName'])) {
                                
                                echo $_SESSION['userName'];
                                echo ',';
                                echo $_SESSION['userType'];
                                echo '<a href="logout.php"><button class = logoutbtn>Logout</button></a>';
                            } ?>
                        </div>
                    </div>

                </div>

                <div>
                    <nav class="navbar navbar-expand-xl">
                        <div class="container-fluid">

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: center;">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="aboutUs.php">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="fieldProblems.php">Field Problems</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ourServices.php">Our Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contactUs.php">Contact Us</a>
                                    </li>
                                    <?php
                                    if (isset($_SESSION["userType"])) {
                                        if ($_SESSION["userType"] === "admin") {
                                            echo '<li class="nav-item">
                                            <a class="nav-link" href="viewUsers.php">View Users</a>
                                        </li>';
                                        }
                                        if ($_SESSION["userType"] === "field-officer") {
                                            echo '<li class="nav-item">
                                            <a class="nav-link" href="answerQuestion.php">Answer Questions</a>
                                        </li>';
                                        }
                                        if ($_SESSION["userType"] === "farmer") {
                                            echo '<li class="nav-item">
                                            <a class="nav-link" href="makeQureis.php">Make Queries</a>
                                        </li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-success" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>

                <div class="row rowclass">
                    <div class="col"></div>
                    <div class="col" style="margin-top: 100px;">
                        <h1 style="text-align: center; color: white;">Contact Us</h1>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">

                <div class="row rowclass" style="margin-top: 30px;">
                    <div class="col">
                    <div class="col">
                    <h3 style="text-align: center;">Contact Us</h3>
                    <div style="text-align: center;">

                        <i style="font-size: 20px;" class="fa fa-map-marker"></i>
                        <p>Department of Agriculture, P.O.Box. 1,Peradeniya</p>
                    </div>
                    <div style="text-align: center;">
                        <i style="font-size: 20px;" class="fa fa-envelope"></i>
                        <p>info@doa.gov.lk</p>
                    </div>
                    <div style="text-align: center;">
                        <i style="font-size: 20px;" class="fa fa-phone"></i>
                        <p>+94 812 388331/32/34</p>
                    </div>
                </div>
                    </div>
                    <div class="col" style="text-align: center;">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="200" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=Department%20of%20Agriculture,%20P.O.Box.%201,%20Peradeniya,%20Sri%20Lanka&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 200px;
                                    width: 200px;
                                }
                            </style><a href="https://www.embedgooglemap.net">insert google map html</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 200px;
                                    width: 200px;
                                }
                            </style>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <div class="container">
            <div class="row " style="margin-top:50px ; background-color: black;">
                <div class="col footerp1">
                    <h3 style="text-align: center;">Contact Us</h3>
                    <div style="text-align: center;">

                        <i style="font-size: 20px;" class="fa fa-map-marker"></i>
                        <p>Department of Agriculture, P.O.Box. 1,Peradeniya</p>
                    </div>
                    <div style="text-align: center;">
                        <i style="font-size: 20px;" class="fa fa-envelope"></i>
                        <p>info@doa.gov.lk</p>
                    </div>
                    <div style="text-align: center;">
                        <i style="font-size: 20px;" class="fa fa-phone"></i>
                        <p>+94 812 388331/32/34</p>
                    </div>
                </div>
                <div class="col" style="text-align: center;">
                    <div class="col footerp1">
                        <h3 style="text-align: center;">Useful Links</h3>
                        <i style="font-size: 30px; color: white;" class="fa fa-link"></i>
                        <div style="text-align: center;">
                            <a style="text-decoration: none; color:white;" href="https://www.agrimin.gov.lk/">Ministry of Agriculture</a>
                        </div>
                        <div style="text-align: center;">
                            <a style="text-decoration: none; color:white;" href="http://www.meteo.gov.lk/index.php?lang=en">Department of Meteorology</a>
                        </div>
                        <div style="text-align: center;">
                            <a style="text-decoration: none; color:white;" href="http://www.hadabima.gov.lk/index.php/en/">Hadabima Authority of Sri Lanka</a>
                        </div>
                        <div style="text-align: center;">
                            <a style="text-decoration: none; color:white;" href="http://www.knowledgebank.irri.org/country-specific/asia/rice-knowledge-for-sri-lanka">Rice Knowledge Bank</a>
                        </div>
                    </div>
                </div>
                <div class="col" style="text-align: center; margin-top: 20px;">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="200" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=Department%20of%20Agriculture,%20P.O.Box.%201,%20Peradeniya,%20Sri%20Lanka&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 200px;
                                    width: 200px;
                                }
                            </style><a href="https://www.embedgooglemap.net">insert google map html</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 200px;
                                    width: 200px;
                                }
                            </style>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </section>
</body>

</html>