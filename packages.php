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
                        <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

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
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li ><a href="packages.php">Packages</a></li>
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

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo $subheader_src; ?>);">
        <div class="bradcumbContent">
            <h2>Packages</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

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
              if(isset($_REQUEST['cat_id'])){
                $getall = getpackageByCatID($_REQUEST['cat_id']);
            }else{
                $getall = getAllAvailablepackage();
            }

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

    <!-- ##### Rooms Area End ##### -->
    <?php include 'pages/gallery.php'; ?>
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