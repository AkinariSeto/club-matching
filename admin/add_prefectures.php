<!doctype html>
<html lang="en">

<head>
    <title>Add Prefectures</title>
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
                                        <a class="dropdown-item" href="../users/index.php">Home</a>
                                        <a class="dropdown-item" href="users.php">Users</a>
                                        <a class="dropdown-item" href="schools.php">Schools</a>
                                        <a class="dropdown-item" href="clubs.php">Clubs</a>
                                        <a class="dropdown-item" href="sports.php">Sports</a>
                                        <a class="dropdown-item" href="club_interests.php">Club Interests</a>
                                        <a class="dropdown-item" href="prefectures.php">Prefectures</a>
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

    <!-- section-start -->

    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="container">
                                <form class="my-5" method="POST" action="prefecture_action.php?action=add">
                                    <div class="card-header">
                                        <h4>Add Prefectures</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="prefecture" class="form-control-label">Prefecture Name</label>
                                        <input type="user" id="prefecture" class="form-control" name="prefecture_name">
                                    </div>
                                    <button class="btn btn-success btn-block" type="submit" name="register">Add
                                        Prefecture</button>
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