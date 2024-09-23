<?php include 'config/dbconnect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaika Zest</title>
    <link rel="icon" href="images/hero0.webp">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- loder section start -->
    <!-- <div id="preloader">
		<div class="center">
			<div class="ring"></div>
			<span>Loading...</span>
		</div>
	</div> -->
    <!-- header section start -->
    <section class="header-section">
        <nav class="navbar navbar-expand-lg border-bottom">
            <div class="container">
                <a class="navbar-brand " href="#">
                    <h2 class="fw-bold">Zaika <span class="text-dark">Zest</span></h2>
                </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav  w-100 justify-content-center menu">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="event.php">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="menu.php">Menu</a>
                        </li>
                        

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu drop-menu">
                                <li><a class="dropdown-item" href="booking.php">Booking</a></li>
                                <li><a class="dropdown-item" href="blog.php">Our
                                        Blog</a></li>
                                <li><a class="dropdown-item" href="team.php">Our
                                        Team</a></li>
                                <li><a class="dropdown-item" href="testimonial.php">Testimonial</a></li>
                                <li><a class="dropdown-item" href="404.php">404
                                        Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <button class="btn  search-btn d-none d-lg-block rounded-circle me-3 " data-bs-toggle="modal"
                    data-bs-target="#searchModal">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <!-- Modal Search Start -->
                <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content rounded-0">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body d-flex align-items-center">
                                <div class="input-group w-75 mx-auto d-flex">
                                    <input type="search" class="form-control bg-transparent p-3" placeholder="keywords"
                                        aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="input-group-text p-3"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Search End -->
                
                <a href="<?=isset($_SESSION['role'])?'booking.php':''?>" class="btn booking-btn py-2 px-4 d-none d-xl-inline-block rounded-pill">Book
                    Now</a>
                    <?= !isset($_SESSION['role'])?

                    
                    '<a href="login.php" class="btn booking-btn py-2 px-4 d-none d-xl-inline-block rounded-pill ms-3 btn-login" >Login
                        </a>':"<a href='account.php' class='btn booking-btn py-2 px-4 d-none d-xl-inline-block rounded-pill ms-3 btn-login'><span class='fa fa-user'></span>
                        </a>"?>

            </div>
        </nav>
    </section>
