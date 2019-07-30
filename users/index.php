<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
    
     <!-- ***** Welcome Area Start ***** -->
     <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2>What are you looking for?</h2>
                        <h4 class="text-center">This is help you</h4>
                    </div>
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                <h6>What are you looking for?</h6>
                                <form action="search_result.php" method="get">
                                <div class="form-group">
                                        <label>Sport Name</label>
                                        <select name="sport" id="sport" class="custom-select">
                                        <?php
                                            require_once "../classes/Sport.php";

                                            $sport = new Sport;
                                            $get_sport = $sport->selectALL();
                                            foreach($get_sport as $key => $row) {
                                                $sport_id = $row['sport_id'];
                                                $sport_name = $row['sport_name'];
                                                echo"<option value='$sport_id'>$sport_name</option>";
                                            }
                                        ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Club Interest</label>
                                        <select name="interest" id="ci" class="custom-select">
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
                                        <div class="form-group">
                                        <label>Prefecture</label>
                                        <select name="prefecture" id="prefecture" class="custom-select">
                                        <?php
                                            require_once "../classes/Prefecture.php";

                                            $prefecture = new Prefecture;
                                            $get_prefecture = $prefecture->selectALL();
                                            foreach($get_prefecture as $key => $row) {
                                                $prefecture_id = $row['prefecture_id'];
                                                $prefecture_name = $row['prefecture_name'];
                                                echo"<option value='$prefecture_id'>$prefecture_name</option>";
                                            }
                                        ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Club Level</label>
                                        <select name="level" id="level" class="custom-select">
                                        <?php
                                            require_once "../classes/Skill_level.php";

                                            $level = new Level;
                                            $get_level = $level->selectALL();
                                            foreach($get_level as $key => $row) {
                                                $level_id = $row['level_id'];
                                                $level_name = $row['level_name'];
                                                echo"<option value='$level_id'>$level_name</option>";
                                            }
                                        ?>
                                        </select>
                                        </div>
                                    <button type="submit" class="btn dorne-btn" style="margin-top: 32px;"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    


    



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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>