<!DOCTYPE html>
<html lang="en">

<?php include 'pages/head.php'; ?>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>
    
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="palatinNav">
                        
                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img style="width: 100%; height: 70px;" src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        
                        <!-- Menu -->
                        <div class="classy-menu">
                            
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="packages.php">Packages</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <?php if (isset($_SESSION['customer'])): ?>
                                    <li><a href="admin/logout.php">Logout</a></li>
                                    <li><a href="profile.php">Profile</a></li>
                                     
                                    <?php else: ?>
                                    <li><a href="admin/login.php">Login</a></li>
                                    <li><a href="admin/register.php">Register</a></li>
                                    <?php endif; ?>
                                </ul>
                                
                                <!-- Button -->
                                <!-- <div class="menu-btn">
                                    <a href="#" class="btn palatin-btn">Make a Reservation</a>
                                </div> -->
                                
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url('<?php echo $header_src; ?>');"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms"><?php echo $res['header_title']; ?></h2>
                                <p data-animation="fadeInUp" data-delay="700ms"><?php echo $res['header_desc']; ?>.</p>
                                <a href="packages.php" class="btn palatin-btn mt-50" data-animation="fadeInUp"
                                data-delay="900ms">Show Packages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
    
    
    <?php include 'pages/booking.php'; ?>
    
    <!-- ##### Pool Area Start ##### -->
    <section class="pool-area section-padding-100 bg-img bg-fixed" style="background-image: url('<?php echo $header_rotate_image_src; ?>');">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-7">
                    <div class="pool-content text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="section-heading text-center white">
                            <div class="line-"></div>
                            <h2><?php echo $res['about_title']; ?></h2>
                            <p><?php echo $res['about_desc']; ?></p>
                        </div>

                       
                        <!-- Button -->
                        <a href="about.php" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Pool Area End ##### -->

      <!-- ##### Rooms Area Start ##### -->
      <section class="rooms-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Our Package with Vehicle Category </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
            <?php 
                        $getall = getAllCategory();

                        while($row=mysqli_fetch_assoc($getall)){ 
                            $cat_id = $row['cat_id'];
                            $img = $row['cat_image'];
                            $img_src = "server/uploads/category/".$img;

                        $getallCp2 = getpackageByCatID($cat_id);
                        if ($row2 = mysqli_fetch_assoc($getallCp2)) {
                            ?>
                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                   <a href="packages.php?cat_id=<?php echo $cat_id; ?>">
                   <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url('<?php echo $img_src; ?>');"></div>
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4><?php echo $row['cat_name']; ?></h4>
                           
                        </div>

                    </div>
                   </a>
                </div>
                <?php } } ?>


            </div>
        </div>
    </section>

     <!-- ##### Rooms Area Start ##### -->
     <section class="rooms-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Our Packages</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
            <?php
            $getall = getAllAvailablepackage();

            while ($row = mysqli_fetch_assoc($getall)) {
                $package_id = $row['package_id'];
                $img = $row['package_image'];
                $img_src = "server/uploads/package/" . $img; ?>
                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url('<?php echo $img_src; ?>');"></div>
                        <!-- Price -->
                        <p class="price-from">Rs. <?php echo $row['package_price']; ?>.00</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4><?php echo $row['package_name']; ?></h4>
                           
                        </div>
                        <!-- Book Room -->
                        <a href="package_details.php?package_id=<?php echo $package_id; ?>" class="book-room-btn btn palatin-btn">Book This Package</a>
                    </div>
                </div>
                <?php } ?>


            </div>
        </div>
    </section>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area d-flex flex-wrap align-items-center">
        <div class="home-map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9263814348415!2d80.1009201!3d6.1405918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae177c197b15779%3A0x92a333e4a6c88a2!2sRoshan&#39;s%20Guest%20House!5e0!3m2!1sen!2slk!4v1668007130892!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Contact Info -->
        <div class="contact-info">
            <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                <div class="line-"></div>
                <h2>Contact Info</h2>
            </div>
            <h4 class="wow fadeInUp" data-wow-delay="300ms"><?php echo $res['company_address']; ?></h4>
            <h5 class="wow fadeInUp" data-wow-delay="400ms"><?php echo $res['company_phone']; ?></h5>
            <h5 class="wow fadeInUp" data-wow-delay="500ms"><?php echo $res['company_email']; ?></h5>
            <!-- Social Info -->
            <div class="social-info mt-50 wow fadeInUp" data-wow-delay="600ms">
                <a href="<?php echo $res['link_facebook']; ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a href="<?php echo $res['link_instragram']; ?>"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                <a href="<?php echo $res['link_twiiter']; ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php include 'pages/footer.php'; ?>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>