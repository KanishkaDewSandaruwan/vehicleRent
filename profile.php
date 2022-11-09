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
            <h2>Profile</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-0-100">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-2"><a href="booking_list.php" class="btn btn-primary">My Packages List</a></div>
                <div class="col-md-4"><a href="rent_list.php" class="btn btn-primary">My Car Rent List</a></div>
            </div>
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
                    <div class="contact-form">
                        <div id="success"></div>
                        <div class="col-md-12 border-right">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-primary">Profile Settings</h4>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text"
                                            onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","name", "customer", "customer_id")'
                                            class="form-control" id="name" placeholder="Your name"
                                            value="<?php echo $cus['name']; ?>">
                                    </div>

                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text"
                                            onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","phone", "customer", "customer_id")'
                                            class="form-control" id="phone" placeholder="enter phone number"
                                            value="<?php echo $cus['phone']; ?>">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-12"><input type="text"
                                            onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","address", "customer", "customer_id")'
                                            class="form-control" id="address" placeholder="enter address"
                                            value="<?php echo $cus['address']; ?>">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" disabled
                                            onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","nic", "customer", "customer_id")'
                                            id="nic" class="form-control" placeholder="Enter NIC"
                                            value="<?php echo $cus['nic']; ?>">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="email"
                                            onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","email", "customer", "customer_id")'
                                            id="email" class="form-control" placeholder="Enter Email Address"
                                            value="<?php echo $cus['email']; ?>">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <select
                                            onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","gender", "customer", "customer_id")'
                                            id="gender <?php echo $customer_id; ?>" class='form-control'
                                            name="gender" type='text'>
                                            <option value="1" <?php if ($cus['gender']=="1") echo "selected"; ?>>
                                                Male</option>
                                            <option value="0" <?php if ($cus['gender']=="0") echo "selected"; ?>>
                                                Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center experience mt-5">
                                    <a class="border px-3 p-1 add-experience text-primary" id="change"
                                        href="change_email.php"><i class="fa fa-lock"></i>&nbsp;Change Email</a>
                                    <a href="change_password.php" class="border px-3 p-1 add-experience text-primary"><i
                                            class="fa fa-lock"></i>&nbsp;Change Password</a>
                                    <button class="btn btn-primary text-white btn-lg border px-3 p-1 add-experience"
                                        onclick="deleteDataFromHome(<?php echo $cus['customer_id']; ?>, 'customer', 'customer_id')"><i
                                            class="fa fa-trash"></i>&nbsp;Delete</button>
                                </div>

                            </div>

                        </div>
                    </div>
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