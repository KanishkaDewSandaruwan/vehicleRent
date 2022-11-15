<!DOCTYPE html>
<html lang="en">

<?php include 'pages/head.php'; ?>
<?php include 'pages/auth.php'; ?>

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
                                    <li><a href="packages.php">Packages</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <?php if (isset($_SESSION['rowtomer'])): ?>
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
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"
        style="background-image: url(<?php echo $subheader_src; ?>);">
        <div class="bradcumbContent">
            <h2>Extend Rent</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
    <?php 
$getall = getRentByIDWithVehicle($_REQUEST['rent_id']);
$row=mysqli_fetch_assoc($getall);
$rent_id = $row['rent_id']; ?>
    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-0-100">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-6">
                    
                    <div class="d-flex flex-column justify-content-center bg-white h-100 p-5">
                        <div class="d-inline-flex border  p-2 mb-4">
                            <h1 class="font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Rent</h4>
                                <p class="m-0 text-primary">#<?php echo $row['rent_id']; ?></p>
                                <p class="m-0 text-primary"><?php echo $row['date_updated']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border  p-2 mb-4">
                            <h1 class="font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Vehicle</h4>
                                <p class="m-0 text-primary"><?php echo $row['vehicle_name']; ?></p>
                                <p class="m-0 text-primary"><?php echo $row['vehicle_modal']; ?></p>
                                <p class="m-0 text-primary"><?php echo $row['vehicle_number']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border  p-2 mb-4">
                            <h1 class="font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Current Schedule Dates</h4>
                                <p class="m-0 text-primary"><?php echo $row['start_date']; ?></p>
                                <p class="m-0 text-primary"><?php echo $row['end_date']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border  p-2 mb-4">
                            <h1 class="font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Payments</h4>
                                <p class="m-0 text-primary">Rs. <?php echo $row['total']; ?>.00</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 mb-5 my-lg-12 py-5 pl-lg-5 bg-white">
                    <div class="col-md-12 mt-2">
                        <label for="change_date" class="form-label">Extend Date</label>
                        <form action="" method="post">
                            <input type="date" class="form-control" name="change_date" id="change_date" placeholder="Extend Date" required>
                            <input type="hidden" class="form-control" value="<?php echo $row['end_date']; ?>" name="end_date" id="end_date" placeholder="Extend Date" required>
                            <input type="hidden" class="form-control" value="<?php echo $row['vehicle_price']; ?>" name="vehicle_price" id="vehicle_price" placeholder="Extend Date" required>
                            <input type="hidden" class="form-control" value="<?php echo $row['total']; ?>" name="total" id="total" placeholder="Extend Date" required>
                            <button type="button" onclick="updatedDate(this.form)" class="btn btn-primary mt-2">Check</button>
                        </form>
                    </div>
                    <form method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    
                        <div class="col-md-12 mt-5">
                            <input type="hidden" class="form-control" name="changed_date" id="changed_date">
                            <input type="hidden" value="<?php echo $row['rent_id']; ?>" class="form-control" name="rent_id" id="rent_id">
                        </div>

                        <div class="col-md-12 mt-5">
                            <label for="num_ofDays" class="form-label">Number Of Days</label>
                            <input type="text" disabled class="form-control" name="num_ofDays" id="num_ofDays"
                                placeholder="Select Date" required>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label for="current_total" class="form-label">Current Total</label>
                            <input type="text" disabled class="form-control" name="current_total" id="current_total"
                                placeholder="Select Date" required>
                        </div>

                        <div class="col-md-12 mt-5">
                            <label for="extended_total" class="form-label">Total</label>
                            <input type="text" class="form-control" name="extended_total" id="extended_total"
                                placeholder="Select Date" required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="request_message" class="form-label">Your Request</label>
                            <input type="text" class="form-control" name="request_message" id="request_message"
                                placeholder="Your Request Message" required>
                        </div>

                        <div class="col-md-12 mt-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" onclick="requestExtend(this.form)" class="btn btn-primary">Save
                                        changes</button>
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <a href="rent_list.php" class="btn btn-secondary" data-bs-dismiss="modal">Back
                                        to
                                        Profile</a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>


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