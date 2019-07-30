<?php

session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Schedule</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Core Stylesheet -->
    <link href="../assets/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="../assets/css/responsive/responsive.css" rel="stylesheet">
</head>



</head>

<body>
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
                                    <a class="nav-link" href="../users/index.php">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Display anything<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="index.php">Home</a>
                                        <a class="dropdown-item" href="../admin/users.php">Users</a>
                                        <a class="dropdown-item" href="../admin/schools.php">Schools</a>
                                        <a class="dropdown-item" href="../admin/clubs.php">Clubs</a>
                                        <a class="dropdown-item" href="../admin/sports.php">Sports</a>
                                        <a class="dropdown-item" href="../admin/club_interests.php">Club Interests</a>
                                        <a class="dropdown-item" href="../admin/prefectures.php">Prefectures</a>
                                    </div>
                                </li>
                            </ul>
                            <!-- Signin Register btn -->
                            <div class="dorne-signin-btn">
                                <a href="../register.php">Register</a>
                            </div>
                            <div class="dorne-signin-btn">
                                <a href="../login.php">Sign in</a>
                            </div>
                            <!-- sign out btn -->
                            <div class="dorne-signin-btn">
                                <a href="../logout.php">Sign out</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Features Events Area Start ***** -->
    <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50"
        style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading mt-5 text-center">
                        <span></span>
                        <h4>Set A Schedule</h4>
                    </div>
                </div>
            </div>
            <form action="" method="post">
            <input type="date" class="text-center form-control" id="start" name="schedule" min="2019-07-01" max="2050-12-31">

            <button class="btn btn-success btn-block mt-3" type="submit" name="invite">Invite</button>
            </form>
            <?php
                if(isset($_POST['invite'])){
                    $date = $_POST['schedule'];
                    $club_id = $_GET['club_id'];
                    $user_id = $_SESSION['user_id'];
                    require_once "../classes/Club.php";
                    $club = new Club;
                    $get_club = $club->selectClubsByUser($user_id);
                    $my_club_id = $get_club['club_id'];
                    $insert = $club->saveInvite($club_id, $my_club_id, $date);
                }
            ?>
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