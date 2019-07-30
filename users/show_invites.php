<?php
require_once "../classes/Club.php";
 // create the instance/object
 session_start();
 $user_id=$_SESSION['user_id'];
 $club_invite = new Club;
 $get_my_club = $club_invite->selectClubsByUser($user_id);
 $my_club_id = $get_my_club['club_id'];
 
 ?>


<!doctype html>
<html lang="en">

<head>
    <title>Show Invites</title>
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

        <section id="posts">
            <div class="container">
                <div class="row" style="margin-top: 60px;">
                    <div class="col mt-5">
                        <div class="card-body">
                            <div class="container">
                                <div>
                                    <table class="table table-striped table-borderless table-hover my-5">
                                        <div class="card-header">
                                            <h4>Show Invite</h4>
                                        </div>
                                        <thead>
                                            <th>Club</th>
                                            <th>School</th>
                                            <th>Prefecture</th>
                                            <th>Skill Level</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                           
                                $get_club_invite = $club_invite->selectAllInvites($my_club_id);

                                if($get_club_invite) {
                                    foreach($get_club_invite as $key => $row) {
                                        $id = $row['invite_id'];
                                        echo "<tr>";
                                        echo "<td>" .$row['club_name']."</td>";
                                        echo "<td>" .$row['school_name']."</td>";
                                        echo "<td>" .$row['prefecture_name']."</td>";
                                        echo "<td>" .$row['level_name']."</td>";
                                        echo "<td>" .$row['date']."</td>";
                                        echo "<td>" .$row['status']."</td>";
                                        if($row['status'] == "pending"){
                                        echo "<td>
                                        <a href='invite_action.php?action=ACCEPT&invite_id=$id' class='btn btn-success btn-sm'>Accept</a>
                                        <a href='invite_action.php?action=CANCEL&invite_id=$id' class='btn btn-danger btn-sm'>Cancel</a>
                                        ";
                                        }else{
                                            echo "<td></td>";
                                        }

                                        ?>
                                            </td>
                                            </tr>
                                            <?php

                                    }
                                }else {
                                    echo "<tr><td colspan='7' class='text-center'>Nothing to show</td></tr>";
                                }
                                ?>
                                        </tbody>
                                    </table>
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