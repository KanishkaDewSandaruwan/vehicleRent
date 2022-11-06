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
    <section class="">

    </section>
    <!-- ##### Breadcumb Area End ##### -->


    <?php if (isset($_REQUEST['vehicle_id']) && isset($_REQUEST['starts_date']) && isset($_REQUEST['ends_date'])):

        $getall = getvehicleByID($_REQUEST['vehicle_id']);
        if ($row = mysqli_fetch_assoc($getall)) {
            $vehicle_id = $row['vehicle_id'];

            $img = $row['vehicle_image'];
            $img_src = "server/uploads/vehicle/" . $img;


            $fee = $row['vehicle_price'];
            $start_date = $_REQUEST['starts_date'];
            $end_date = $_REQUEST['ends_date'];

            $diff = abs(strtotime($start_date) - strtotime($end_date));
            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

            $total = $fee * $days;


            // $getdate = new Date($start_date);
    





    ?>
    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-0-100" style="margin-top: 20%;">
        <div class="container d-flex justify-content-center mt-5 mb-5">



            <div class="row g-3">

                <div class="col-md-6">

                    <span>Payment Method</span>
                    <div class="card">

                        <div class="accordion" id="accordionExample">

                            <div class="card">
                                <div class="card-header p-0" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button
                                            class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom"
                                            type="button" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="d-flex align-items-center justify-content-between">

                                                <span>Paypal</span>
                                                <img src="https://i.imgur.com/7kQEsHU.png" width="30">

                                            </div>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <h6 class="p-3">Not Available for Now</h6>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header p-0">
                                    <h2 class="mb-0">
                                        <button class="btn btn-light btn-block text-left p-3 rounded-0"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <div class="d-flex align-items-center justify-content-between">

                                                <span>Credit card</span>
                                                <div class="icons">
                                                    <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                                    <img src="https://i.imgur.com/W1vtnOV.png" width="30">
                                                    <img src="https://i.imgur.com/35tC99g.png" width="30">
                                                    <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                                </div>

                                            </div>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body payment-card-body">

                                        <span class="font-weight-normal card-text">Card Number</span>
                                        <div class="input">

                                            <i class="fa fa-credit-card"></i>
                                            <input type="text" id="p_name" class="form-control"
                                                placeholder="0000 0000 0000 0000">

                                        </div>

                                        <div class="row mt-3 mb-3">

                                            <div class="col-md-6">

                                                <span class="font-weight-normal card-text">Expiry Date</span>
                                                <div class="input">

                                                    <i class="fa fa-calendar"></i>
                                                    <input type="text" id="exdate" class="form-control"
                                                        placeholder="MM/YY">

                                                </div>

                                            </div>


                                            <div class="col-md-6">

                                                <span class="font-weight-normal card-text">CVC/CVV</span>
                                                <div class="input">

                                                    <i class="fa fa-lock"></i>
                                                    <input type="text" id="cvv" class="form-control" placeholder="000">

                                                </div>

                                            </div>


                                        </div>

                                        <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your
                                            transaction is secured with ssl certificate</span>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">
                    <span>Summary</span>

                    <div class="card">

                        <div class="p-3">

                            <div class="d-flex justify-content-between mb-2">

                                <span>Vehicle Name</span>
                                <span>
                                    <?php echo $row['vehicle_name']; ?>
                                </span>

                            </div>

                            <div class="d-flex justify-content-between mb-2">

                                <span>Vehicle Modal</span>
                                <span>
                                    <?php echo $row['vehicle_modal']; ?>
                                </span>

                            </div>
                            <div class="d-flex justify-content-between">

                                <span>Vehicle Number</span>
                                <span>
                                    <?php echo $row['vehicle_number']; ?>
                                </span>

                            </div>


                        </div>
                        <div class="d-flex justify-content-between p-3">

                            <div class="d-flex flex-column">

                                <span>This Vehicle Rent Price</span>

                            </div>

                            <div class="mt-1">
                                <sup class="super-price">Rs.
                                    <?php echo $row['vehicle_price']; ?>.00
                                </sup>
                                <span class="super-month">/Hr</span>
                            </div>

                        </div>

                        <hr class="mt-0 line">

                        <div class="p-3">

                            <div class="d-flex justify-content-between mb-2">

                                <span>Number of Days Requested</span>
                                <span>
                                    <?php echo $days; ?> Days
                                </span>

                            </div>

                            <div class="d-flex justify-content-between">

                                <span>Total Amount</span>
                                <span>Rs.
                                    <?php echo $total; ?>.00
                                </span>

                            </div>


                        </div>

                        <hr class="mt-0 line">

                        <div class="p-3">
                            <form action="" method="post">
                                <input type="hidden" value="<?php echo $vehicle_id; ?>" id="vehicle_id"
                                    name="vehicle_id">
                                <input type="hidden" value="<?php echo $start_date; ?>" id="start_date"
                                    name="start_date">
                                <input type="hidden" value="<?php echo $end_date; ?>" id="end_date" name="end_date">
                                <input type="hidden" value="<?php echo $_SESSION['customer']; ?>" id="customer_id"
                                    name="customer_id">
                                <input type="hidden" value="<?php echo $total; ?>" id="total" name="total">
                                <button type="button" onclick="bookRent(this.form)"
                                    class="btn btn-primary btn-block">Check out Booking</button>
                            </form>
                            <div class="text-center">

                            </div>

                        </div>




                    </div>
                </div>

            </div>


        </div>
    </section>

    <?php }endif; ?>


    <?php if (isset($_REQUEST['package_id'])):

        $getall = getpackageByID($_REQUEST['package_id']);
        if ($row = mysqli_fetch_assoc($getall)) {
            $package_id = $row['package_id'];

            $img = $row['package_image'];
            $img_src = "server/uploads/package/" . $img;

    ?>
    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-0-100" style="margin-top: 20%;">
        <div class="container d-flex justify-content-center mt-5 mb-5">



            <div class="row g-3">

                <div class="col-md-6">

                    <span>Payment Method</span>
                    <div class="card">

                        <div class="accordion" id="accordionExample">

                            <div class="card">
                                <div class="card-header p-0" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button
                                            class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom"
                                            type="button" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="d-flex align-items-center justify-content-between">

                                                <span>Paypal</span>
                                                <img src="https://i.imgur.com/7kQEsHU.png" width="30">

                                            </div>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <h6 class="p-3">Not Available for Now</h6>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header p-0">
                                    <h2 class="mb-0">
                                        <button class="btn btn-light btn-block text-left p-3 rounded-0"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <div class="d-flex align-items-center justify-content-between">

                                                <span>Credit card</span>
                                                <div class="icons">
                                                    <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                                    <img src="https://i.imgur.com/W1vtnOV.png" width="30">
                                                    <img src="https://i.imgur.com/35tC99g.png" width="30">
                                                    <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                                </div>

                                            </div>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body payment-card-body">

                                        <span class="font-weight-normal card-text">Card Number</span>
                                        <div class="input">

                                            <i class="fa fa-credit-card"></i>
                                            <input type="text" id="p_name" class="form-control"
                                                placeholder="0000 0000 0000 0000">

                                        </div>

                                        <div class="row mt-3 mb-3">

                                            <div class="col-md-6">

                                                <span class="font-weight-normal card-text">Expiry Date</span>
                                                <div class="input">

                                                    <i class="fa fa-calendar"></i>
                                                    <input type="text" id="exdate" class="form-control"
                                                        placeholder="MM/YY">

                                                </div>

                                            </div>


                                            <div class="col-md-6">

                                                <span class="font-weight-normal card-text">CVC/CVV</span>
                                                <div class="input">

                                                    <i class="fa fa-lock"></i>
                                                    <input type="text" id="cvv" class="form-control" placeholder="000">

                                                </div>

                                            </div>


                                        </div>

                                        <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your
                                            transaction is secured with ssl certificate</span>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">
                    <span>Summary</span>

                    <div class="card">
                        <form action="" method="post">
                            <div class="p-3">

                                <div class="cart mt-4 align-items-center">
                                    <input name="traval_start_date" id="traval_start_date" class="form-control"
                                        placeholder="Traval Start Date" type="text" onfocus="(this.type='date')"
                                        onblur="if(!this.value)this.type='text'">
                                </div>
                            </div>
                            <div class="p-3">

                                <div class="d-flex justify-content-between mb-2">

                                    <span>Package Name</span>
                                    <span>
                                        <?php echo $row['package_name']; ?>
                                    </span>

                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-3">

                                <div class="d-flex flex-column">

                                    <span>This Package Price</span>

                                </div>

                                <div class="mt-1">
                                    <sup class="super-price">Rs.
                                        <?php echo $row['package_price']; ?>.00
                                    </sup>
                                </div>

                            </div>

                            <hr class="mt-0 line">

                            <div class="p-3">

                                <div class="d-flex justify-content-between mb-2">

                                    <span>Vehicle Type</span>
                                    <span>
                                        <?php $value = getAllCategoryByID($row['cat_id']);
                                    $row2 = mysqli_fetch_assoc($value);
                                    echo $row2['cat_name']; ?>
                                    </span>

                                </div>

                                <div class="d-flex justify-content-between">

                                    <span>Total Amount</span>
                                    <span>Rs.
                                        <?php echo $row['package_price']; ?>.00
                                    </span>

                                </div>


                            </div>

                            <hr class="mt-0 line">

                            <div class="p-3">

                                <input type="hidden" value="<?php echo $package_id; ?>" id="package_id"
                                    name="package_id">
                                <input type="hidden" value="<?php echo $_SESSION['customer']; ?>" id="customer_id"
                                    name="customer_id">
                                <input type="hidden" value="<?php echo $row['package_price']; ?>" id="total"
                                    name="total">
                                <button type="button" onclick="bookpackage(this.form)"
                                    class="btn btn-primary btn-block">Check out Booking</button>
                                <div class="text-center">

                                </div>

                            </div>

                        </form>



                    </div>
                </div>

            </div>


        </div>
    </section>

    <?php }endif; ?>
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