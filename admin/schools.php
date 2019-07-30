<?php
require_once "../classes/School.php";
 // create the instance/object
 $schools = new School;
 ?>



<!doctype html>
<html lang="en">

<head>
    <title>users</title>
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

    <div class="container">
        <div class="row" style="margin-top: 60px;">
            <div class="col mt-5">
                <div class="card-body">
                    <div class="container">
                        <div>
                            <table class="table table-striped table-borderless table-hover my-5">
                                <div class="card-header">
                                    <h4>Display School</h4>
                                </div>
                                <a href="add_schools.php"><button class="btn btn-success btn-block" type="submit" name="">Add
                                        Schools</button></a>
                                <thead>
                                    <th>School ID</th>
                                    <th>School Name</th>
                                    <th>School Phone</th>
                                    <th>School Info</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                $get_schools = $schools->selectAll();

                                if($get_schools) {
                                    foreach($get_schools as $key => $row) {
                                        $id = $row['school_id'];
                                        echo "<tr>";
                                        echo "<td>" .$row['school_id']."</td>";
                                        echo "<td>" .$row['school_name']."</td>";
                                        echo "<td>" .$row['school_phone']."</td>";
                                        echo "<td>" .$row['school_info']."</td>";
                                        echo "<td>" .$row['city']."</td>";
                                        echo "<td>
                                        <a href='edit_school.php?school_id=$id' class='btn btn-info btn-sm'>Edit</a>";
                                        ?>
                                    <a href='school_action.php?action=delete&school_id=<?php echo $id; ?>'
                                        class='btn btn-danger btn-sm'
                                        onclick='return confirm("Are you sure you want to delete?");'>Delete</a>
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