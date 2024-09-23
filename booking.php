<?php
ob_start();
include 'include/header.php';
 if(!isset($_SESSION['role'])){
    header("Location:login.php");
 }
?>
    <!-- Hero Start -->
    <section class="all-hero-section">
        <div class="container text-center wow bounceInDown " data-wow-delay="0.1s">
            <h1 class="display-1 mb-4">Booking</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item "><a href="#">Home</a></li>
                <li class="breadcrumb-item "><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark fs-6" aria-current="page">Booking</li>
            </ol>
        </div>
    </section>
    <!-- Hero End -->
    <!-- book us section start-->
    <section class="book-section">
        <div class="container">
            <div class="row g-0 wow bounceInUp" data-wow-delay="0.1s">
                <div class="col-1">
                    <img src="images/background-site.jpg" alt=""
                        class="img-fluid w-100 h-100 object-fit-cover rounded-start">
                </div>
                <div class="col-10">
                    <div class="book-content border-bottom border-top py-5 px-4">
                        <div class="text-center">
                            <small
                                class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Book
                                Us
                            </small>
                            <h2 class="text-dark display-5 mb-5">Where you want Our Services</h2>
                        </div>
                        <form action="booking-post.php" method="post">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="" name="country">
                                    <option selected>Select Country</option>
                                    <option value="usa">USA</option>
                                    <option value="uk">UK</option>
                                    <option value="india">India</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="" name="city">
                                    <option selected>Select City</option>
                                    <option value="depend_on_country">Depend On Country</option>
                                    <option value="uk">UK</option>
                                    <option value="india">India</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="" name="palace">
                                    <option selected>Select Palace</option>
                                    <option value="depend_on_country">Depend On Country</option>
                                    <option value="uk">UK</option>
                                    <option value="india">India</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="" name="event">
                                    <option selected>Small Event</option>
                                    <option value="=event_type">Event Type</option>
                                    <option value="big_event">Big Event</option>
                                    <option value="small_event">Small Event</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="" name="nopalace">
                                    <option selected>No. Of Palace</option>
                                    <option value="=100_200">100-200</option>
                                    <option value="300_400">300-400</option>
                                    <option value="500_600">500-600</option>
                                    <option value="700_800">700-800</option>
                                    <option value="900_1000">900-1000</option>
                                    <option value="1000+">1000+</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="" name="vegetarian">
                                    <option selected>Vegetarian</option>
                                    <option value="vegetarian">Vegetarian</option>
                                    <option value="non_vegetarian">Non Vegetarian</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <input class="book-input form-control p-2 bg-white" type="mobile"
                                    placeholder="Your Contact No." name="contact">
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <input class="book-input form-control p-2 bg-white" type="date"
                                    placeholder="select date" name="date">
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <input class="book-input form-control p-2 bg-white" type="email"
                                    placeholder="Enter Your Email" name="email">
                            </div>
                            <div class="col-lg-12 text-center my-4">
                                <button type="submit" class="btn book-btn px-5 py-3 rounded-pill">Submit Now</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-1">
                    <img src="images/background-site.jpg" alt=""
                        class="img-fluid w-100 h-100 object-fit-cover rounded-end">
                </div>
            </div>
        </div>
    </section>
    <!-- book us section end-->
<?php include 'include/footer.php';?>