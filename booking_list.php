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
            <h2>Order List</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-0-100">
        <div class="container mt-5 mb-5">
            <div class="container mt-5">




                <table class="table table-borderless main">
                    <thead>
                        <tr class="head">
                            <th scope="col" class="ml-2">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                                </div>

                            </th>
                            <th scope="col">Order ID</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Date</th>
                            <th scope="col">Assign</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $getall = getAllOrderbyCustomer($customer_id);
                        while ($row = mysqli_fetch_assoc($getall)) {
                            $order_id = $row['order_id']; ?>

                        <tr class="rounded bg-white">
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                                </div>
                            </th>
                            <td class="order-color">#<?php echo $row['order_id']; ?></td>
                            <td>Rs. <?php echo $row['total']; ?>.00</td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm " type="button" id="dropdownMenuButton">
                                        <?php if($row['payment'] == 0) echo 'Paid'; ?>
                                    </button>

                                </div>
                            </td>
                            <td><?php echo $row['date_updated']; ?></td>
                            
                            <td>
                                <?php if ($row['driver_id'] != "0" && $row['guid_id'] != "0") { ?>
                                    <p>
                                    <?php $value = getDriverByID($row['driver_id']);
                                    $row3 = mysqli_fetch_assoc($value);
                                    echo $row3['name']; ?><br>

                                     <?php $value = getGuideByID($row['guid_id']);
                                    $row4 = mysqli_fetch_assoc($value);
                                    echo $row4['name']; ?>
                                </p>
                                <?php }else if ($row['driver_id'] != "0") { ?>
                                <p>
                                    <?php $value = getDriverByID($row['driver_id']);
                                    $row2 = mysqli_fetch_assoc($value);
                                    echo $row2['name']; ?>
                                </p>
                                <?php }elseif ($row['guid_id'] != "0") { ?>
                                <p>
                                    <?php $value = getGuideByID($row['guid_id']);
                                    $row2 = mysqli_fetch_assoc($value);
                                    echo $row2['name']; ?>
                                </p>
                                <?php }else{ ?>
                                    <p> </p>
                                <?php } ?>
                            </td>
                            <td><?php echo $row['traval_start_date']; ?></td>
                            <td>
                            <?php if ($row['order_status'] != "2") { ?>
                                <select
                                    onchange='updateDataFromHome(this, "<?php echo $order_id; ?>","order_status", "package_orders", "order_id")'
                                    id="order_status <?php echo $order_id; ?>" class='form-control norad tx12' name="order_status"
                                    type='text'>
                                    <option value="1">
                                        ... Please Select Cancel ...
                                    </option>
                                    <option value="2">
                                        Booking Canceled
                                    </option>
                                </select>
                                <?php }else{ ?>
                                    <?php if($row['order_status'] == 0){echo 'Pending'; }else if($row['order_status'] == 1){ echo 'Accept';} ?>
                                <?php } ?>
                            </td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>


            </div>
        </div>
    </section>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');



    .main {

        border-collapse: separate !important;
        border-spacing: 0 11px !important;
    }

    tr {

        border: 1px solid #eee;
    }

    .head th {

        font-weight: 500;
    }


    tr:nth-child(3) {
        border: solid thin;
    }

    .form-check-input:focus {
        border-color: #8bbafe;
        outline: 0;
        box-shadow: none;
    }

    .btn {

        height: 27px;
        line-height: 11px;
        color: #fff;
    }

    .form-check-input {
        width: 1.15em;
        height: 1.15em;
        margin-top: 3px;

    }



    .btn:focus {
        color: #fff;

        box-shadow: none !important;
    }

    .order-color {
        color: blue;
    }
    </style>

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