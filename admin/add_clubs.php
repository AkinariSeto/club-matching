<!doctype html>
<html lang="en">
  <head>
    <title>add club</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="icon" href="../assets/img/core-img/favicon.ico"> -->

    <!-- Core Stylesheet -->
    <link href="../assets/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="../assets/css/responsive/responsive.css" rel="stylesheet">
</head>
  <body>
<!-- Preloader
<div id="preloader">
        <div class="dorne-load"></div>
    </div> -->

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg bg-dark">
                        <a class="navbar-brand" href="../index.php"><img src="img/core-img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="../index.php">Home</a>
                                        <a class="dropdown-item" href="#">Explore</a>
                                        <a class="dropdown-item" href="#">Listing</a>
                                        <a class="dropdown-item" href="#">Single Listing</a>
                                        <a class="dropdown-item" href="#">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="../index.php">Home</a>
                                        <a class="dropdown-item" href="#">Explore</a>
                                        <a class="dropdown-item" href="#">Listing</a>
                                        <a class="dropdown-item" href="#">Single Listing</a>
                                        <a class="dropdown-item" href="#">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                            </div>
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                                <a href="#">Sign in  or Register</a>
                            </div>
                            <!-- Add listings btn -->
                            <div class="dorne-add-listings-btn">
                                <a href="#" class="btn dorne-btn">+ Add Listings</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

<!-- section-start -->

    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="container">
                                <form class="my-5" method="POST" action="club_action.php?action=add">
                                    <div class="card-header">
                                    <h4>Add Clubs</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="club" class="form-control-label">Club Name</label>
                                        <input type="text" id="club" class="form-control" name="club_name">
                                    </div>
                                    <div class="form-group">
                                        <label>School Name</label>
                                        <select name="school_name" id="school" class="form-control">
                                        <?php
                                            require_once "../classes/School.php";

                                            $school = new School;
                                            $get_school = $school->selectALL();
                                            foreach($get_school as $key => $row) {
                                                $school_id = $row['school_id'];
                                                $school_name = $row['school_name'];
                                                echo"<option value='$school_id'>$school_name</option>";
                                            }
                                        ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Sport Name</label>
                                        <select name="sport_name" id="sport" class="form-control">
                                        <?php
                                            require_once "../classes/Sport.php";

                                            $sport = new Sport;
                                            $get_sports = $sport->selectALL();
                                            foreach($get_sports as $key => $row) {
                                                $sport_id = $row['sport_id'];
                                                $sport_name = $row['sport_name'];
                                                echo"<option value='$sport_id'>$sport_name</option>";
                                            }
                                        ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Skill Level</label>
                                        <select name="level_name" id="level" class="form-control">
                                        <?php
                                            require_once "../classes/Skill_level.php";

                                            $level = new Level;
                                            $get_levels = $level->selectALL();
                                            foreach($get_levels as $key => $row) {
                                                $level_id = $row['level_id'];
                                                $level_name = $row['level_name'];
                                                echo"<option value='$level_id'>$level_name</option>";
                                            }
                                        ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Club Interest</label>
                                        <select name="ci_name" id="ci" class="form-control">
                                        <?php
                                            require_once "../classes/Club_interest.php";

                                            $ci = new Club_interests;
                                            $get_ci = $ci->selectALL();
                                            foreach($get_ci as $key => $row) {
                                                $ci_id = $row['ci_id'];
                                                $ci_name = $row['ci_name'];
                                                echo"<option value='$ci_id'>$ci_name</option>";
                                            }
                                        ?>
                                        </select>
                                        </div>
                                    <button class="btn btn-success btn-block" type="submit" name="register">Add
                                        Club</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- ****** Footer Area Start ****** -->
 <footer class="dorne-footer-area" style="background-color: #33FFDD">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
<p class="text-center">© 2019 Akinari Seto</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->



    <!-- jQuery-2.2.4 js -->
    <script src="../assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../assets/js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="../assets/js/active.js"></script>
  </body>
</html>