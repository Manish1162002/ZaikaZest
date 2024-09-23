<?php include 'include/header.php';?>
    <!-- Hero Start -->
    <section class="all-hero-section">
        <div class="container text-center wow bounceInDown " data-wow-delay="0.1s">
            <h1 class="display-1 mb-4">Menu</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item "><a href="#">Home</a></li>
                <li class="breadcrumb-item "><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark fs-6" aria-current="page">Menu</li>
            </ol>
        </div>
    </section>
    <!-- Hero End -->
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
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s"
                    id="myTab" role="tablist">
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" id="home-tab"
                            data-bs-toggle="tab" data-bs-target="#home-tab-pane" role="tab"
                            aria-controls="home-tab-pane" aria-selected="true" href="#tab-6">
                            <span class="text-dark text-center " style="width: 150px;">Starter</span>
                        </a>
                    </li>
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none " id="profile-tab"
                            data-bs-toggle="tab" data-bs-target="#profile-tab-pane" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="false" href="#tab-7">
                            <span class="text-dark text-center " style="width: 150px;">Main Course</span>
                        </a>
                    </li>
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none " id="contact-tab"
                            data-bs-toggle="tab" data-bs-target="#contact-tab-pane" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false" href="#tab-8">
                            <span class="text-dark text-center " style="width: 150px;">Drinks</span>
                        </a>
                    </li>
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none " id="disabled-tab"
                            data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" role="tab"
                            aria-controls="disabled-tab-pane" aria-selected="false" href="#tab-9">
                            <span class="text-dark text-center " style="width: 150px;">Offers</span>
                        </a>
                    </li>
                    <li class="nav-items p-2" role="presentation">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none " id="disabled-tab2"
                            data-bs-toggle="tab" data-bs-target="#disabled-tab-pane2" role="tab"
                            aria-controls="disabled-tab-pane2" aria-selected="false" href="#tab-10">
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
                                <img src="admin/menus/<?=$row['product_image']?>" class="flex-shrink-0 img-fluid rounded-circle" alt="">
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
                <div class="tab-pane menu-content fade" id="profile-tab-pane" role="tabpanel"
                    aria-labelledby="profile-tab" tabindex="0">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-01.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Paneer</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-03.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sabudana Tikki</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-04.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Pizza</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-05.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Bacon</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-06.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Chicken</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-07.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Blooming</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-08.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sweet</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane menu-content fade" id="contact-tab-pane" role="tabpanel"
                    aria-labelledby="contact-tab" tabindex="0">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-01.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Paneer</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-02.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sweet Potato</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-03.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sabudana Tikki</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-04.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Pizza</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-05.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Bacon</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-06.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Chicken</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-07.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Blooming</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-08.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sweet</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane menu-content fade" id="disabled-tab-pane" role="tabpanel"
                    aria-labelledby="disabled-tab" tabindex="0">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-01.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Paneer</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-02.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sweet Potato</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-03.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sabudana Tikki</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-04.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Pizza</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-05.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Bacon</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-06.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Chicken</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-07.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Blooming</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-08.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sweet</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane menu-content fade" id="disabled-tab-pane2" role="tabpanel"
                    aria-labelledby="disabled-tab2" tabindex="0">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-01.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Paneer</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-02.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sweet Potato</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-03.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sabudana Tikki</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-04.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Pizza</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-05.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Bacon</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-06.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Chicken</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-07.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Blooming</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-08.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sweet</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our menu section end-->
<?php include 'include/footer.php';?>