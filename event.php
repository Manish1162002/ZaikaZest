<?php
include 'include/header.php';
?>
    <!-- Hero Start -->
    <section class="all-hero-section">
        <div class="container text-center wow bounceInDown " data-wow-delay="0.1s">
            <h1 class="display-1 mb-4">Event</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item "><a href="#">Home</a></li>
                <li class="breadcrumb-item "><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark fs-6" aria-current="page">Event</li>
            </ol>
        </div>
    </section>
    <!-- Hero End -->
    <!-- Event section start -->
    <section class="event-section">
        <div class="container">
            <div class="text-center wow bounceInUp " data-wow-delay="0.1s">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Latest
                    Events</small>
                <h2 class="text-dark display-5">Our Social & Professional Events Gallery</h2>
            </div>
            <div class="event-btns-content text-center my-5 ">
                <ul class=" nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp "
                    data-wow-delay="0.1s" id="pills-tab" role="tablist">
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" id="pills-home-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-home" role="tab" aria-controls="pills-home"
                            aria-selected="true" href="#tab-1">
                            <span class="text-dark text-center " style="width: 150px;">All Events</span>
                        </a>
                    </li>
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none " href="#tab-2"
                            id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" role="tab"
                            aria-controls="pills-profile" aria-selected="false">
                            <span class="text-dark text-center " style="width: 150px;">Wedding</span>
                        </a>
                    </li>
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none" href="#tab-3"
                            id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" role="tab"
                            aria-controls="pills-contact" aria-selected="false">
                            <span class="text-dark text-center " style="width: 150px;">Corporate</span>
                        </a>
                    </li>
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none " id="pills-disabled-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-disabled" role="tab"
                            aria-controls="pills-disabled" aria-selected="false" href="#tab-4">
                            <span class="text-dark text-center " style="width: 150px;">Cocktail</span>
                        </a>
                    </li>
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none " id="pills-disabled-tab1"
                            data-bs-toggle="pill" data-bs-target="#pills-disabled1" role="tab"
                            aria-controls="pills-disabled1" aria-selected="false" href="#tab-5">
                            <span class="text-dark text-center " style="width: 150px;">Buffet</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-3 my-4 col-md-6  wow bounceInUp" data-wow-delay="0.1s">
                            <div class="event-img-content">
                                <img src="images/event-1.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Wedding</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModal1" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModal1" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-1.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-4 col-md-6  wow bounceInUp" data-wow-delay="0.3s">
                            <div class="event-img-content">
                                <img src="images/event-2.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Corporate</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModal2" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModal2" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-2.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-4 col-md-6  wow bounceInUp" data-wow-delay="0.5s">
                            <div class="event-img-content">
                                <img src="images/event-3.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Wedding</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModal3" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModal3" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-3.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-4 col-md-6  wow bounceInUp" data-wow-delay="0.7s">
                            <div class="event-img-content">
                                <img src="images/event-4.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Buffet</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModal4" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModal4" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-4.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 my-4 col-md-6  wow bounceInUp" data-wow-delay="0.1s">
                            <div class="event-img-content">
                                <img src="images/event-5.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Cocktail</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModal5" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModal5" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-5.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-4 col-md-6 wow bounceInUp" data-wow-delay="0.3s">
                            <div class="event-img-content">
                                <img src="images/event-6.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Corporate</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModal6" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModal6" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-6.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-4 col-md-6  wow bounceInUp" data-wow-delay="0.5s">
                            <div class="event-img-content">
                                <img src="images/event-7.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Corporat</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModal7" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModal7" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-7.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-4 col-md-6  wow bounceInUp" data-wow-delay="0.7s">
                            <div class="event-img-content">
                                <img src="images/event-8.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Buffet</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModal8" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModal8" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-8.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-3 my-4 col-md-6  wow bounceInUp" data-wow-delay="0.7s">
                            <div class="event-img-content">
                                <img src="images/event-1.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Wedding</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModalA" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModalA" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-1.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-4 col-md-6 ">
                            <div class="event-img-content">
                                <img src="images/event-2.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Corporate</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModalB" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModalB" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-2.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-3 my-4 col-md-6">
                            <div class="event-img-content">
                                <img src="images/event-3.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Wedding</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModalC" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModalC" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-3.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-4 col-md-6">
                            <div class="event-img-content">
                                <img src="images/event-4.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Buffet</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModalD" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModalD" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-4.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-3 my-4 col-md-6">
                            <div class="event-img-content">
                                <img src="images/event-5.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Cocktail</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModalE" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModalE" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-5.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-4 col-md-6">
                            <div class="event-img-content">
                                <img src="images/event-6.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Corporate</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModalF" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModalF" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-6.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-disabled1" role="tabpanel" aria-labelledby="pills-disabled-tab1"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-3 my-4 col-md-6">
                            <div class="event-img-content">
                                <img src="images/event-7.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Corporat</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModalG" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModalG" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-7.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 my-4 col-md-6">
                            <div class="event-img-content">
                                <img src="images/event-8.jpg" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text">Buffet</h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModalH" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModalH" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="images/event-8.jpg"
                                                        class="figure-img img-fluid rounded-3 mb-0">
                                                </div>
                                                <div class="close-btn-modal">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event section end -->
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
                        <div class="row">
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="">
                                    <option selected>Select Country</option>
                                    <option value="=1">USA</option>
                                    <option value="2">UK</option>
                                    <option value="3">India</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="">
                                    <option selected>Select City</option>
                                    <option value="=1">Depend On Country</option>
                                    <option value="2">UK</option>
                                    <option value="3">India</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="">
                                    <option selected>Select Palace</option>
                                    <option value="=1">Depend On Country</option>
                                    <option value="2">UK</option>
                                    <option value="3">India</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="">
                                    <option selected>Small Event</option>
                                    <option value="=1">Event Type</option>
                                    <option value="2">Big Event</option>
                                    <option value="3">Small Event</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="">
                                    <option selected>No. Of Palace</option>
                                    <option value="=1">100-200</option>
                                    <option value="2">300-400</option>
                                    <option value="3">500-600</option>
                                    <option value="3">700-800</option>
                                    <option value="3">900-1000</option>
                                    <option value="3">1000+</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="">
                                    <option selected>Vegetarian</option>
                                    <option value="=1">Vegetarian</option>
                                    <option value="2">Non Vegetarian</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <input class="book-input form-control p-2 bg-white" type="mobile"
                                    placeholder="Your Contact No.">
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <input class="book-input form-control p-2 bg-white" type="date"
                                    placeholder="select date">
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <input class="book-input form-control p-2 bg-white" type="email"
                                    placeholder="Enter Your Email">
                            </div>
                            <div class="col-lg-12 text-center my-4">
                                <button type="submit" class="btn book-btn px-5 py-3 rounded-pill">Submit Now</button>
                            </div>
                        </div>
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