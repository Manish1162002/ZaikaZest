<?php include 'include/header.php';?>
    <!-- Hero Start -->
    <section class="all-hero-section">
        <div class="container text-center wow bounceInDown " data-wow-delay="0.1s">
            <h1 class="display-1 mb-4">Service</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item "><a href="#">Home</a></li>
                <li class="breadcrumb-item "><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark fs-6" aria-current="page">Service</li>
            </ol>
        </div>
    </section>
    <!-- Hero End -->
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
            <?php
                               $sql="Select * from services";
                                $result=mysqli_query($con,$sql);
                                 if(mysqli_num_rows($result)> 0){
                                 while($row=mysqli_fetch_assoc($result)){
                       
                              ?>
                <div class="col-lg-3 my-4 col-md-6 col-sm-12  wow bounceInUp" data-wow-delay="0.1s">

                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                            <!-- <i class="fa fa-coffee service-icon mb-4" aria-hidden="true"></i> -->
                                 <img src="admin/services/<?=$row['service_image']?>" height="200px" width="200px" class="flex-shrink-0 img-fluid rounded-circle" alt="">" 
                                <h4 class="fs-4 mb-4 fw-bold"><?=$row['service_name']?></h4>
                                <p class=" mb-3 sevice-par"><?=$row['service_desc']?></p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="service-hover"></div>
                </div>
                <?php
                        
                        }
                    }
                    ?>
                <!-- <div class="col-lg-3 my-4 col-md-6 col-sm-12  wow bounceInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-glass service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Corporate Catering</h4>
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
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
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
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
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
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
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
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
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
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
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
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
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- our services section end -->
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
<?php include 'include/footer.php';?>