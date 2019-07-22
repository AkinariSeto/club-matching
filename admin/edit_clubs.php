<?php

require_once "../classes/Club.php";

// create an instance
$club = new Club;
$id = $_GET['club_id'];
$get_club = $club->selectOne($id);

?>


<!doctype html>
<html lang="en">

<head>
    <title>Edit Club</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

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
                            <input type="search" name="caviarSearch" id="search"
                                placeholder="Search Your Desire Destinations or Events">
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
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav"
                                aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span
                                    class="fa fa-bars"></span></button>
                            <!-- Nav -->
                            <div class="collapse navbar-collapse" id="dorneNav">
                                <ul class="navbar-nav mr-auto" id="dorneMenu">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="../index.php">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore <i
                                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="../index.php">Home</a>
                                            <a class="dropdown-item" href="#">Explore</a>
                                            <a class="dropdown-item" href="#">Listing</a>
                                            <a class="dropdown-item" href="#">Single Listing</a>
                                            <a class="dropdown-item" href="#">Contact</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings
                                            <i class="fa fa-angle-down" aria-hidden="true"></i></a>
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
                                    <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i>
                                        Search</a>
                                </div>
                                <!-- Signin btn -->
                                <div class="dorne-signin-btn">
                                    <a href="#">Sign in or Register</a>
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

        <section id="posts">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-5">
                            <div class="card-body">
                                <form class="my-5" action="club_action.php?action=update" method="post">
                                    <input type="hidden" name="club_id" value="<?php echo $_GET['club_id']; ?>">
                                    <div class="card-header">
                                        <h4>Edit Club</h4>
                                    </div>
                                    <div class="form-group">
                                        <label>Club Name</label>
                                        <input type="text" name="clubname" class="form-control"
                                            value="<?php echo $get_club['club_name']; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label>School Name</label>
                                    <select name="school" id="" class="form-control">
                                        <?php
                                        require_once "../classes/School.php";

                                        $school = new School;
                                        $get_school = $school->selectAll();
                                        foreach($get_school as $key => $row) {
                                            $school_id = $row['school_id'];
                                            $school_name = $row['school_name'];
                                        ?>
                                        <option value="<?php echo $school_id; ?>">
                                        <?php if($get_school['school_id'] == $school_id) echo "selected"; ?>>
                                        <?php echo $school_name; ?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Sport Name</label>
                                    <select name="sport" id="" class="form-control">
                                        <?php
                                        require_once "../classes/Sport.php";

                                        $sport = new Sport;
                                        $get_sport = $sport->selectAll();
                                        foreach($get_sport as $key => $row) {
                                            $sport_id = $row['sport_id'];
                                            $sport_name = $row['sport_name'];
                                        ?>
                                        <option value="<?php echo $sport_id; ?>">
                                        <?php if($get_sport['sport_id'] == $sport_id) echo "selected"; ?>>
                                        <?php echo $sport_name; ?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Skill Level</label>
                                    <select name="level" id="" class="form-control">
                                        <?php
                                        require_once "../classes/Skill_level.php";

                                        $level = new Level;
                                        $get_level = $level->selectAll();
                                        foreach($get_level as $key => $row) {
                                            $level_id = $row['level_id'];
                                            $level_name = $row['level_name'];
                                        ?>
                                        <option value="<?php echo $level_id; ?>">
                                        <?php if($get_level['level_id'] == $level_id) echo "selected"; ?>>
                                        <?php echo $level_name; ?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Club Interest</label>
                                    <select name="ci" id="" class="form-control">
                                        <?php
                                        require_once "../classes/Club_interest.php";

                                        $ci = new Club_interests;
                                        $get_ci = $ci->selectAll();
                                        foreach($get_ci as $key => $row) {
                                            $ci_id = $row['ci_id'];
                                            $ci_name = $row['ci_name'];
                                        ?>
                                        <option value="<?php echo $ci_id; ?>">
                                        <?php if($get_ci['ci_id'] == $ci_id) echo "selected"; ?>>
                                        <?php echo $ci_name; ?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="add">Save</button>
                                </form>
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



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    </body>

</html>