<?php

require_once "../classes/User.php";

// create an instance
$user = new User;
$id = $_GET['user_id'];
$get_user = $user->selectOne($id);

?>


<!doctype html>
<html lang="en">

<head>
    <title>Edit users</title>
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

        <section id="posts">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-5">
                            <div class="card-body">
                                <form class="my-5" action="user_action.php?action=update" method="post">
                                    <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
                                    <div class="card-header">
                                        <h4>Edit User</h4>
                                    </div>
                                    <div class="form-group">
                                        <label>Usename</label>
                                        <input type="text" name="username" class="form-control"
                                            value="<?php echo $get_user['username']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="<?php echo $get_user['email']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Firstname</label>
                                        <input type="text" name="firstname" class="form-control"
                                            value="<?php echo $get_user['firstname']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Lastname</label>
                                        <input type="text" name="lastname" class="form-control"
                                            value="<?php echo $get_user['lastname']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Bio</label>
                                        <input type="text" name="bio" class="form-control"
                                            value="<?php echo $get_user['bio']; ?>">
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