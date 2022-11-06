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

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"
        style="background-image: url(<?php echo $subheader_src; ?>);">
        <div class="bradcumbContent">
            <h2>Change Email</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-0-100">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center bg-white h-100 p-5">
                        <div class="d-inline-flex border  p-2 mb-4">
                            <h1 class="font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Full Name</h4>
                                <p class="m-0 text-primary"><?php echo $cus['name']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border  p-2 mb-4">
                            <h1 class="font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Email</h4>
                                <p class="m-0 text-primary"><?php echo $cus['email']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border  p-2 mb-4">
                            <h1 class="font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Phone Number</h4>
                                <p class="m-0 text-primary"><?php echo $cus['phone']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border  p-2 mb-4">
                            <h1 class="font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Address</h4>
                                <p class="m-0 text-primary"><?php echo $cus['address']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border p-2 mb-4">
                            <h1 class="font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>NIC</h4>
                                <p class="m-0 text-primary"><?php echo $cus['nic']; ?></p>
                            </div>
                        </div>
                        <div class="d-inline-flex border  p-2 mb-4">
                            <h1 class="font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Gender</h4>
                                <p class="m-0 text-primary">
                                    <?php if ($cus['gender']=="1") echo "Male"; else echo "Female"; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 mb-5 my-lg-12 py-5 pl-lg-5 bg-white">
                    <form method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                        <div class="col-md-12 mt-2">
                            <label for="current_email" class="form-label">Current Email Address</label>
                            <input type="email" class="form-control" name="current_email" id="current_email"
                                placeholder="Current Email Address" required>
                        </div>

                        <div class="col-md-12 mt-4">
                            <label for="new_email" class="form-label">New Email Address</label>
                            <input type="email" class="form-control" name="new_email" id="new_email"
                                placeholder="New Email Address" required>
                        </div>

                        <div class="col-md-12 mt-2">
                            <input type="hidden" class="form-control" name="customer_id"
                                value="<?php echo $_SESSION['customer']; ?>" id="customer_id">

                        </div>
                        <div class="col-md-12 mt-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" onclick="changeEmail(this.form)" class="btn btn-primary">Save
                                        changes</button>
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <a href="profile.php" class="btn btn-secondary" data-bs-dismiss="modal">Back
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