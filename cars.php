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
            <h2>Vehicle</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <?php include 'pages/booking.php'; ?>
    <?php if(isset($_REQUEST['cat_id'])): 

         if(isset($_REQUEST['cat_id'])){
            $getall = getvehicleAvailable($_REQUEST['cat_id']);
        }else{

        }

        if ($row = mysqli_fetch_assoc($getall)) :
        
        ?>
    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Choose a Vehicle</h2>
                        </div>
                </div>
            </div>

            <div class="row">
            <?php

                if(isset($_REQUEST['cat_id'])){
                    $getall = getvehicleAvailable($_REQUEST['cat_id']);

                }else{

                }
           
            while ($row = mysqli_fetch_assoc($getall)) {
                $vehicle_id = $row['vehicle_id'];

                $rent_count = 0;

                $rent_count = getRentByDateAvailable($vehicle_id, $_REQUEST['start_date'], $_REQUEST['end_date']);
                $count = mysqli_num_rows($rent_count);

                if($count == 0) :

                $img = $row['vehicle_image'];
                $img_src = "server/uploads/vehicle/" . $img; ?>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url('<?php echo $img_src; ?>');"></div>
                        <!-- Price -->
                        <p class="price-from">Rs. <?php echo $row['vehicle_price']; ?>.00 / Hr</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4><?php echo $row['vehicle_name']; ?></h4>
                            <p><?php echo $row['vehicle_modal']; ?></p>
                        </div>
                        <!-- Book Room -->
                        <a href="car_details.php?vehicle_id=<?php echo $vehicle_id ?>&start_date=<?php echo $_REQUEST['start_date'] ?>&end_date=<?php echo $_REQUEST['end_date'] ?>" class="book-room-btn btn palatin-btn">Rent This Vehicle</a>
                    </div>
                </div>
            <?php endif;  } ?>

            </div>
        </div>
    </section>

    <?php else: ?>
        <h1 class="text text-primary p-5">Vehicle Not Available</h1>
    <?php endif; ?>
    <?php endif; ?>
    <!-- ##### Rooms Area End ##### -->

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