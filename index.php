<?php
ob_start();
include 'include/header.php';
?>
    <!-- header section end -->
     <!-- login form start -->
    <!-- <div class="login-outer">
        <div class="overlay" onclick="closemodal()">
        </div>
        <div class="login-form">
            <span>&times;</span>
            <form action="">
                <div>
                    <label for="">Username</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password">
                </div>
                <button>LOGIN</button>
            </form>
        </div>
        </div> -->
    <!-- hero section start -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-lg-7 py-5 ">
                    <small
                        class="d-inline-block small-btn fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-4  animated bounceInDown">welcome
                        to Zaika Zest</small>
                    <h1 class="animated bounceInDown">Book <span>Zaika </span> Zest For Your Dream Event</h1>
                    <a href="booking.php" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 my-4 hero-btn animated bounceInLeft" >Book
                        Now</a>
                    <a href="index.php" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 my-4 hero-btn animated bounceInLeft">Know
                        More</a>
                </div>
                <div class="col-lg-5 ">
                    <img src="images/hero0.webp" class="img-fluid py-5  animated zoomIn ">
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end -->
    <!-- about section start -->
    <section class="about-section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5  wow bounceInUp " data-wow-delay="0.1s">
                    <img src="images/about.jpg" class="img-fluid rounded ">
                </div>
                <div class="col-lg-7 my-3    wow bounceInUp" data-wow-delay="0.3s">
                    <small
                        class="d-inline-block small-btn fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">about
                        us</small>
                    <h2 class="text-dark display-5">Trusted By 200 + satisfied clients</h2>
                    <p class="par-about">Zaika Zest is where passion for food meets exceptional service. 
                        We specialize in creating unforgettable culinary experiences that bring people together through the joy of eating. With a menu inspired by diverse
                         regional flavors of India and global cuisines, we cater to 
                         weddings, corporate events, family gatherings, and everything in 
                         between. From traditional delicacies to contemporary fusion
                          dishes, every bite is crafted with fresh ingredients and a commitment to quality. Our team of 
                          seasoned chefs and dedicated staff ensures a personalized touch, making your event not just a 
                          meal but a feast to remember. At Zaika Zest, we don’t just serve food; we serve memories.
                        </p>
                    <div class="row mb-5 g-4">
                        <div class="col-sm-6 text-icon">
                            <i class="fa fa-share-alt me-2 shear-icon" aria-hidden="true"></i>
                            Fresh and Fast food Delivery
                        </div>
                        <div class="col-sm-6 text-icon">
                            <i class="fa fa-share-alt me-2 shear-icon" aria-hidden="true"></i>
                            24/7 Customer Support
                        </div>
                        <div class="col-sm-6 text-icon ">
                            <i class="fa fa-share-alt me-2 shear-icon" aria-hidden="true"></i>
                            Easy Customization Options
                        </div>
                        <div class="col-sm-6 text-icon">
                            <i class="fa fa-share-alt me-2 shear-icon" aria-hidden="true"></i>
                            Delicious Deals for Delicious Meals
                        </div>
                    </div>
                    <a href="about.php" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4  hero-btn">About us
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->
    <!-- customers count section start -->
    <section class="count-section">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-sm-4 wow bounceInUp " data-wow-delay="0.1s">
                            <div class="count-box rounded p-4 text-center">
                                <i class="fa fa-users  text-white mb-4 user-icon" aria-hidden="true"></i>
                                <h2 class="text-dark display-4 fw-bold" id="counter1" data-toggle="counter-up">689</h2>
                                <p class="text-dark text-uppercase fw-bold mb-0">Happy Customers</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow bounceInUp " data-wow-delay="0.5s">
                            <div class="count-box rounded p-4 text-center">
                                <i class="fa fa-cog  text-white mb-4 user-icon" aria-hidden="true"></i>
                                <h2 class="text-dark display-4 fw-bold" id="counter2" data-toggle="counter-up">107</h2>
                                <p class="text-dark text-uppercase fw-bold mb-0">Expert Chefs</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.7s">
                            <div class="count-box rounded p-4 text-center">
                                <i class="fa fa-check  text-white mb-4 user-icon" aria-hidden="true"></i>
                                <h2 class="text-dark display-4 fw-bold" id="counter3" data-toggle="counter-up">253</h2>
                                <p class="text-dark text-uppercase fw-bold mb-0">Events Complete</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="video wow bounceInUp" data-wow-delay="0.7s">
                        <button type="button" class="btn  btn-play" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <span></span>
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">YouTube Video</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body video-modal">
                                    <iframe width="100%" height="100%"
                                        src="https://www.youtube.com/embed/qg0w6yDv6Eg?si=Vlxr3webLJ43HKEn"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                </div>
            </div>
        </div>
    </section>
    <!-- customers count section end -->
    <!-- our services section start -->
    <section class="services-section">
        <div class="container">
            <div class="text-center wow bounceInUp " data-wow-delay="0.1s">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Our
                    Services</small>
                <h2 class="text-dark display-5">What We Offer</h2>
            </div>
            <div class="row my-5">
                <div class="col-lg-3 my-4 col-md-6 col-sm-12  wow bounceInUp" data-wow-delay="0.1s">

                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-coffee service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Wedding Services</h4>
                                <p class=" mb-3 sevice-par">At Zaika Zest, we offer personalized wedding catering with a blend of traditional and modern cuisines. Our expert chefs craft exquisite menus, ensuring exceptional taste and service, making your special day unforgettable for you and your guests.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="service-hover"></div>
                </div>
                <div class="col-lg-3 my-4 col-md-6 col-sm-12  wow bounceInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-glass service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Corporate Catering</h4>
                                <p class=" mb-3 sevice-par">Zaika Zest provides premium corporate catering services tailored to your business needs. From executive lunches to large conferences, we deliver diverse, high-quality menus with impeccable service, ensuring a seamless experience for your team and clients.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  my-4 col-md-6 col-sm-12  wow bounceInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-glass service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Bento Catering</h4>
                                <p class=" mb-3 sevice-par">Zaika Zest offers convenient and delicious bento catering services, perfect for corporate meetings, events, and team lunches. Our expertly curated bento boxes feature a balanced mix of flavors, ensuring a wholesome, satisfying meal delivered with quality and care.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  my-4 col-md-6 col-sm-12  wow bounceInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-coffee service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Bento Catering</h4>
                                <p class=" mb-3 sevice-par">Zaika Zest offers convenient and delicious bento catering services, perfect for corporate meetings, events, and team lunches. Our expertly curated bento boxes feature a balanced mix of flavors, ensuring a wholesome, satisfying meal delivered with quality and care.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4 col-md-6 col-sm-12  wow bounceInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-coffee service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Pub Party </h4>
                                <p class=" mb-3 sevice-par">Zaika Zest brings the ultimate pub party vibe to your event with our fun and flavorful catering. From hearty finger foods to gourmet bar bites, we deliver crowd-pleasing dishes that pair perfectly with drinks, ensuring a lively and delicious experience.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4 col-md-6 col-sm-12  wow bounceInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-ambulance service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Home Delivery</h4>
                                <p class=" mb-3 sevice-par">Zaika Zest offers convenient home delivery catering services, bringing delicious, chef-crafted meals  to your doorstep. Perfect for family gatherings, intimate events, or daily meals, we provide fresh, flavorful dishes with the ease of home delivery,.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4 col-md-6 col-sm-12  wow bounceInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-wheelchair-alt service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Sit-down Catering</h4>
                                <p class=" mb-3 sevice-par">Zaika Zest offer exceptional sit-down catering services, providing gourmet meals with personalized menus for corporate events, weddings, and private gatherings. Our professional team ensures seamless  dining experience for you and your guests.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4 col-md-6 col-sm-12  wow bounceInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-cutlery service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Buffet Catering</h4>
                                <p class=" mb-3 sevice-par">Enjoy our buffet catering services featuring a diverse array of delicious, freshly prepared dishes. Ideal for any occasion, our customizable menu options and professional service ensure a satisfying and enjoyable dining experience for all your guests.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our services section end -->
    <!-- Event section start -->
    <section class="event-section">
        <div class="container">
            <div class="text-center wow bounceInUp " data-wow-delay="0.1s">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Latest
                    Events</small>
                <h2 class="text-dark display-5">Our Social & Professional Events Gallery</h2>
            </div>
            <div class="event-btns-content text-center my-5 " >
                <ul class=" nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp " data-wow-delay="0.1s" id="pills-tab" role="tablist">
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
                        <?php
                        $query = "Select * from gallery limit 8";
                        $gallerydata = mysqli_query($con,$query);
                        if(mysqli_num_rows($gallerydata) > 0){
                            $i = 1;
                            while($gallery = mysqli_fetch_assoc($gallerydata)){
                        
                        ?>
                        <div class="col-lg-3 my-4 col-md-6  wow bounceInUp" data-wow-delay="0.1s">
                            <div class="event-img-content">
                                <img src="admin/gallery/<?= $gallery['image'];?>" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text"><?= ucfirst($gallery['type'])?></h4>
                                    <a data-bs-toggle="modal" data-bs-target="#imageModal<?=$gallery['id']?>" class="event-iocn">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start-->
                                    <div id="imageModal<?=$gallery['id'];?>" class="modal imageModal ">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="admin/gallery/<?= $gallery['image'];?>"
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

                        <?php  
                        $i++;     
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-3 my-4 col-md-6">
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
    <!-- our menu section start-->
    <section class="menu-section">
        <div class="container menu-btn">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Our
                    Menu</small>
                <h2 class="text-dark display-5">Most Popular Food in the World</h2>
            </div>
            <div class="menu-btns-content text-center my-5">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s" id="myTab" role="tablist">
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" 
                         role="tab" aria-controls="home-tab-pane" aria-selected="true" href="#tab-6">
                            <span class="text-dark text-center " style="width: 150px;">Starter</span>
                        </a>
                    </li>
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" 
                        role="tab" aria-controls="profile-tab-pane" aria-selected="false" href="#tab-7">
                            <span class="text-dark text-center " style="width: 150px;">Main Course</span>
                        </a>
                    </li>
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none " id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" 
                         role="tab" aria-controls="contact-tab-pane" aria-selected="false" href="#tab-8">
                            <span class="text-dark text-center " style="width: 150px;">Drinks</span>
                        </a>
                    </li>
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none " id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" 
                         role="tab" aria-controls="disabled-tab-pane" aria-selected="false" href="#tab-9">
                            <span class="text-dark text-center " style="width: 150px;">Offers</span>
                        </a>
                    </li>
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none "id="disabled-tab2" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane2" 
                        role="tab" aria-controls="disabled-tab-pane2" aria-selected="false" href="#tab-10">
                            <span class="text-dark text-center " style="width: 150px;">Our Spesial</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="menu-content tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                    aria-labelledby="home-tab" tabindex="0">
                    <div class="row d-flex align-items-center">
                        <?php
                        $sql="Select * from menus";
                        $result=mysqli_query($con,$sql);
                        if(mysqli_num_rows($result)> 0){
                            while($row=mysqli_fetch_assoc($result)){
                       
                        ?>
                        <div class="col-lg-6 py-3 wow bounceInUp" data-wow-delay="0.1s">
                            <div class="menu-item d-flex align-items-center">
                                <img src="admin/menus/<?=$row['product_image']?>" class="flex-shrink-0 img-fluid rounded-circle" alt="" height="100px" width="100px">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4><?=$row['product_name']?></h4>
                                        <h4 class="menu-reat">INR<?=$row['product_price']?></h4>
                                    </div>
                                    <p class="mb-0 menu-par"><?=$row['description']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        
                        }
                    }
                    ?>
                        </div>
            </div>
        </div>
    </section>
    <!-- our menu section end-->
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
    <!-- Our team section start-->
    <section class="team-section">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Our
                    team</small>
                <h2 class="text-dark display-5">We have experienced chef Team</h2>
            </div>
            <div class="row g-4 my-5">
                <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="team-iteam rounded">
                        <img src="images/team-1.jpg" alt="" class="img-fluid rounded-top ">
                        <div class="team-content text-center py-3 rounded-bottom">
                            <h4 class="iteam-text">Henry</h4>
                            <p class="text-white">Decoration Chef</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a href="#" class="share btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="team-iteam rounded">
                        <img src="images/team-2.jpg" alt="" class="img-fluid rounded-top ">
                        <div class="team-content text-center py-3 rounded-bottom">
                            <h4 class="iteam-text">Jemes Born</h4>
                            <p class="text-white">Executive Chef</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a href="#" class="share btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="team-iteam rounded">
                        <img src="images/team-3.jpg" alt="" class="img-fluid rounded-top ">
                        <div class="team-content text-center py-3 rounded-bottom">
                            <h4 class="iteam-text">Martin Hill</h4>
                            <p class="text-white">Kitchen Porter</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a href="#" class="share btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.7s">
                    <div class="team-iteam rounded">
                        <img src="images/team-4.jpg" alt="" class="img-fluid rounded-top ">
                        <div class="team-content text-center py-3 rounded-bottom">
                            <h4 class="iteam-text">Adam Smith</h4>
                            <p class="text-white">Head Chef</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a href="#" class="share btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our team section end-->
    <!-- testimonial section start-->
    <section class="testimonial-section">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase rounded-pill px-4 py-1 mb-3 ">Testimonial
                </small>
                <h2 class="text-dark display-5">What Our Customers says!</h2>
            </div>
            <div class="owl-carousel owl-theme first-carousel testimonial-carousel testimonial-carousel-1 mb-4 pt-4 wow bounceInUp"
                data-wow-delay="0.1s">
                <div class="item testimonial-item rounded ">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-1.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0 fw-bold">Person Name</h4>
                            <p class="m-0 text-head">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 text-par">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                            labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0 fw-bold">Person Name</h4>
                            <p class="m-0 text-head">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 text-par">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                            labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0 fw-bold">Person Name</h4>
                            <p class="m-0 text-head">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 text-par">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                            labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-4.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0 fw-bold">Person Name</h4>
                            <p class="m-0 text-head">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 text-par">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                            labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0 fw-bold">Person Name</h4>
                            <p class="m-0 text-head">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 text-par">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                            labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme second-carousel testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp"
                data-wow-delay="0.3s">
                <div class="item testimonial-item rounded ">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-1.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0 fw-bold">Person Name</h4>
                            <p class="m-0 text-head">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 text-par">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                            labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded ">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0 fw-bold">Person Name</h4>
                            <p class="m-0 text-head">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 text-par">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                            labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded ">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0 fw-bold">Person Name</h4>
                            <p class="m-0 text-head">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 text-par">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                            labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded ">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-4.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0 fw-bold">Person Name</h4>
                            <p class="m-0 text-head">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 text-par">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                            labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded ">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0 fw-bold">Person Name</h4>
                            <p class="m-0 text-head">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 text-par">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                            labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- testimonial section end-->
    <!-- Blog section start-->
    <section class="blog-section">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Our
                    Blog
                </small>
                <h2 class="text-dark display-5">Be First Who Read News</h2>
            </div>
            <div class="row gx-4 my-5 justify-content-center">
                <div class="col-lg-4 col-md-6 mb-5 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="blog-iteam">
                        <div class="overflow-hidden rounded blog-img">
                            <img src="images/blog-1.jpg" class="img-fluid">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light ">
                            <div class="blog-text  rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">16</p>
                                    <p class="fw-bold mb-0">sep</p>
                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="blog-iteam">
                        <div class="overflow-hidden rounded blog-img">
                            <img src="images/blog-2.jpg" class="img-fluid">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light">
                            <div class="blog-text  rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">16</p>
                                    <p class="fw-bold mb-0">sep</p>
                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="blog-iteam">
                        <div class="overflow-hidden rounded blog-img">
                            <img src="images/blog-3.jpg" class="img-fluid">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light">
                            <div class="blog-text  rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">16</p>
                                    <p class="fw-bold mb-0">sep</p>
                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end-->
 <?php
 include 'include/footer.php';
 ?>   