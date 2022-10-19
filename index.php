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

        <section class="header-section">
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
                    <div class="col">
                        <h1 class="imgltr">
                            WHY ORGANIC?
                        </h1>
                    </div>
                </div>
                <div class="row rowclass">
                    <div class="col"></div>
                    <div class="col">
                        <a href="ourServices.php"><button class="imgltrbtn">
                            LEARN MORE ABOUT ORGANIC FARMING
                        </button></a>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row rowclass">
                    <div class="col"></div>
                    <div class="col-8" style="text-align: center;">
                        <h1>Who we are</h1>
                        <hr style="border-color: red;">
                        <h7>Department Of Agriculture (DOA) is the Sri Lanka's leading independent organic research organisation.

                            From climate emergency to food security, the way we farm is key to solving some of the biggest issues facing us today. Changes in our agricultural practices have never been more needed. If we continue intensive farming, we will be responsible for the continued decline of many species, including pollinators, soil organisms and the natural enemies of pests. Habitats will continue to be degraded, and pollution levels will rise.

                            It doesn’t have to be that way. Our in-the-field research and knowledge exchange activity enables the transition to naturally healthy and resilient farming systems. We build evidence and understanding of the positive impact of organic and agroecological farming, and practical information to help farmers and growers do it better</h7>
                        <br>
                        <a href="aboutUs.php"><button class="findoutbtn">Find Out More</button></a>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-11 rowcl" style="background-color: white;">
                        <h3>Events</h3>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="container">
                <div class="row " style="margin-top: 30px; text-align: center; justify-content: center;">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="./Images/farming.jpg" class="card-img-top" alt="Farming">
                            <div class="card-body">
                                <h5 class="card-title">Farming</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="background-color: white;">
                        <div class="card" style="width: 18rem;">
                            <img src="./Images/fertilizing.jpg" class="card-img-top" alt="fertilizing">
                            <div class="card-body">
                                <h5 class="card-title">Fertilizing</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="./Images/harvesting.jpg" class="card-img-top" alt="harvesting">
                            <div class="card-body">
                                <h5 class="card-title">harvesting</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row " style="margin-top:50px ;">
                    <div class="col">
                        <img class="ecoimg" src="./Images/eco.jpg" alt="ECO">
                    </div>
                    <div class="col-8" style="text-align: center;">
                        <h1>Eco Farming</h1>
                        <hr style="border-color: red;">
                        <h7>Ecological farming is recognised as the high-end objective among the proponents of sustainable agriculture. Ecological farming is not the same as organic farming, however there are many similarities and they are not necessarily incompatible.Eco-farming combines modern science and innovation with respect for nature and biodiversity. It ensures healthy farming and healthy food. It protects the soil, the water and the climate. It does not contaminate the environment with chemical inputs or use genetically engineered crops.Sustainable farming involves the use of alternative energy sources such as hydropower, solar power or wind farms which are eco-friendly. Solar panels can be used to run pumping and heating systems. Also, hydroelectric power sourced from river water can be used for various farming machinery.</h7>
                    </div>
                </div>
            </div>
        </section>
        <section>
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