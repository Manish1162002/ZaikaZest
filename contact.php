<?php include 'include/header.php';?>
      <!-- Hero Start -->
      <section class="all-hero-section">
        <div class="container text-center wow bounceInDown " data-wow-delay="0.1s">
            <h1 class="display-1 mb-4">Contact</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item "><a href="#">Home</a></li>
                <li class="breadcrumb-item "><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark fs-6" aria-current="page">Contact</li>
            </ol>
        </div>
    </section>
    <!-- Hero End -->
     <!-- contact section start -->
     <section class="contact-section">
        <div class="container">
            <div class="p-5 rounded contact-content wow bounceInUp " data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-12">
                        <small class="d-inline-block small-btn fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3">Get in touch
                        </small>
                       <h2 class="conact-head display-5 mb-0">Contact Us For Any Queries!</h2>
                    </div>
                    <div class="col-md-6 col-lg-7 contact-par">
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. 
                            <a href="">Download Now</a>.
                        </p>
                        <form action="contactpost.php" method="post">
                            <input type="text" name="name" class="w-100 form-control p-3 mb-4 conact-input" placeholder="Your Name">
                            <small class="text-danger"><?= isset($_GET['nameerr']) ? $_GET['nameerr']: ''?></small>
                            <input type="text" name="email" class="w-100 form-control p-3 mb-4 conact-input" placeholder="Enter Your Email">
                            <small class="text-danger"><?= isset($_GET['emailerr']) ? $_GET['emailerr']: ''?></small>
                            <textarea name="msg" class="w-100 form-control mb-4 p-3 conact-input" rows="4" cols="10" placeholder="Your Message"></textarea>
                            <small class="text-danger"><?= isset($_GET['msgerr']) ? $_GET['msgerr']: ''?></small>
                            <button type="submit" class="w-100 btn conact-btn form-control p-3  rounded-pill">Submit Now</button>
                        </form>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div>
                            <div class="d-inline-flex w-100  contact-box p-4 rounded mb-4">
                                <i class="fa fa-map-marker me-4" aria-hidden="true"></i>
                                <div>
                                    <h4>Address</h4>
                                    <p class="box-par">Techsima solution Pvt. Ltd. Ayodhya </p>
                                </div>
                            </div>
                            <div class="d-inline-flex w-100  contact-box p-4 rounded mb-4">
                                <i class="fa fa-envelope me-4" aria-hidden="true"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    
                                    <p class="box-par mb-0">manishkanojiya623@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-inline-flex w-100  contact-box p-4 rounded mb-4">
                                <i class="fa fa-phone me-4" aria-hidden="true"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="box-par mb-2">(+91) 8419098699</p>
                                    <p class="box-par mb-0">(+91) 6394884676</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
      <!-- contact section end -->
<?php include 'include/footer.php';?>