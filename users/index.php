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
                                        <a class="dropdown-item" href="#">Home</a>
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
    
     <!-- ***** Welcome Area Start ***** -->
     <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2>Discover places near you</h2>
                        <h4>This is the best guide of your city</h4>
                    </div>
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Places</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Events</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                <div class="form-group">
                                        <label>Sport Name</label>
                                        <select name="sport_name" id="sport" class="custom-select">
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
                                        <select name="ci_name" id="ci" class="custom-select">
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
                                        <select name="prefecture_name" id="prefecture" class="custom-select">
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
                                        <select name="level_name" id="level" class="custom-select">
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
                            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Your Destinations</option>
                                        <option value="1">New York</option>
                                        <option value="2">Latvia</option>
                                        <option value="3">Dhaka</option>
                                        <option value="4">Melbourne</option>
                                        <option value="5">London</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>All Catagories</option>
                                        <option value="1">Catagories 1</option>
                                        <option value="2">Catagories 2</option>
                                        <option value="3">Catagories 3</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Price Range</option>
                                        <option value="1">$100 - $499</option>
                                        <option value="2">$500 - $999</option>
                                        <option value="3">$1000 - $4999</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-1.png" alt="">
                                        <a href="#">
                                            <h6>Hotels</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-2.png" alt="">
                                        <a href="#">
                                            <h6>Restaurants</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-3.png" alt="">
                                        <a href="#">
                                            <h6>Shopping</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-4.png" alt="">
                                        <a href="#">
                                            <h6>Beauty &amp; Spa</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-5.png" alt="">
                                        <a href="#">
                                            <h6>Cinema</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>Discover your city with <br><span>Dorne</span></h2>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce quis tempus elit. Sed efficitur tortor neque, vitae aliquet urna varius sit amet. Ut rhoncus, nunc nec tincidunt volutpat, ex libero.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->

    <!-- ***** Editor Pick Area Start ***** -->
    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/bg-img/hero-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Cities you must see</h4>
                        <p>Editor’s pick</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/bg-img/editor-1.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">New York</a>
                                <a href="#">1643 Destinations</a>
                            </div>
                            <div class="add-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="img/bg-img/editor-2.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">Barcelona</a>
                                <a href="#">943 Destinations</a>
                            </div>
                            <div class="add-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                        <img src="img/bg-img/editor-3.jpg" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">paris</a>
                                <a href="#">243 Destinations</a>
                            </div>
                            <div class="add-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Editor Pick Area End ***** -->

    <!-- ***** Features Destinations Area Start ***** -->
    <section class="dorne-features-destinations-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Featured destinations</h4>
                        <p>Editor’s pick</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-1.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>FROM $59/night</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Ibiza</h5>
                                    <p>Party</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-2.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>FROM $59/night</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Paris</h5>
                                    <p>Luxury</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-3.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>FROM $59/night</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Lake Como</h5>
                                    <p>Spectacular</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-4.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>FROM $59/night</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Greece</h5>
                                    <p>Sunny</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-5.jpg" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>FROM $59/night</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Norway</h5>
                                    <p>All Year round</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Destinations Area End ***** -->

    <!-- ***** Features Restaurant Area Start ***** -->
    <section class="dorne-features-restaurant-area bg-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Featured Restaurants</h4>
                        <p>Editor’s pick</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-6.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">8.5</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Martha’s bar</h5>
                                    <p>Manhathan</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-7.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">9.5</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Delux Restaurant</h5>
                                    <p>Paris</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-8.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">8.2</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Jim’s corner Pub</h5>
                                    <p>Madrid</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-9.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">8.7</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>tower Risto bar</h5>
                                    <p>Sydney</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="img/bg-img/feature-10.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">9.8</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Pizzeria venezia</h5>
                                    <p>Hong Kong</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Restaurant Area End ***** -->

    <!-- ***** Features Events Area Start ***** -->
    <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Featured events</h4>
                        <p>Editor’s pick</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-1.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Jazz Concert</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-2.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>DeeJay in the house</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-3.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Theatre Night outside</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-4.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Wine tasting</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.6s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-5.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>New Moon Party</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.7s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-6.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Happy hour at pub</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Events Area End ***** -->

    <!-- ***** Clients Area Start ***** -->
    <div class="dorne-clients-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="clients-logo d-md-flex align-items-center justify-content-around">
                        <img src="img/clients-img/1.png" alt="">
                        <img src="img/clients-img/2.png" alt="">
                        <img src="img/clients-img/3.png" alt="">
                        <img src="img/clients-img/4.png" alt="">
                        <img src="img/clients-img/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Clients Area End ***** -->


    



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