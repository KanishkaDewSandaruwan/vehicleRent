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


    <?php if (isset($_REQUEST['rent_id'])):

    $getall = getRentByID($_REQUEST['rent_id']);
    if ($row = mysqli_fetch_assoc($getall)) {
        $rent_id = $row['rent_id'];
    ?>
  
    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-0-100">
        <div class="container mt-5 mb-5">

            <div class="row d-flex justify-content-center">

                <div class="col-md-8">

                    <div class="card">


                        <div class="invoice p-5">

                          <div class="row">
                            <div class="col-md-10">
                            <a href="index.php"><i class="fa fa-home"></i> Back to Home</a>
                            </div>
                            <div class="col-md-2">
                            <a href="booking_list.php"><i class="fa fa-file"></i> Order List</a>
                            </div>
                          </div>
                            <h5 class="mt-3">Confirm Booking!</h5>

                            <span class="font-weight-bold d-block mt-4">Hello, <?php echo $cus['name']; ?></span>
                            <span>You order has been confirmed and Now you can pick your Vehicle</span>

                            <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                                <table class="table table-borderless">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="py-2">

                                                    <span class="d-block text-muted">Order Date</span>
                                                    <span><?php echo $row['date_updated']; ?></span>

                                                </div>
                                            </td>

                                            <td>
                                                <div class="py-2">

                                                    <span class="d-block text-muted">Order No</span>
                                                    <span>#<?php echo $_REQUEST['rent_id']; ?></span>

                                                </div>
                                            </td>

                                            

                                            <td>
                                                <div class="py-2">

                                                    <span class="d-block text-muted">Rent Status</span>
                                                    <span>We Will Confirm Soon</span>

                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>





                            </div>




                            



                            <div class="row d-flex justify-content-end">

                                <div class="col-md-5">

                                    <table class="table table-borderless">

                                        <tbody class="totals">


                                            <tr class="border-top border-bottom">
                                                <td>
                                                    <div class="text-left">

                                                        <span class="font-weight-bold">Total Payment</span>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-right">
                                                        <span class="font-weight-bold">Rs. <?php echo $row['total']; ?>.00</span>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>

                                </div>



                            </div>


                            <p class="font-weight-bold mb-0">Thanks for Booking with us!</p>
                            <span>Roshan's Guest House</span>





                        </div>


                        <div class="d-flex justify-content-between footer p-3">

                            <span><script>document.write(new Date())</script></span>

                        </div>




                    </div>

                </div>

            </div>

        </div>
    </section>
    <?php } endif; ?>

    <?php if (isset($_REQUEST['order_id'])):

$getall = getOrderByID($_REQUEST['order_id']);
if ($row = mysqli_fetch_assoc($getall)) {
    $order_id = $row['order_id'];
?>

<!-- ##### Rooms Area Start ##### -->
<section class="rooms-area section-padding-0-100">
    <div class="container mt-5 mb-5">

        <div class="row d-flex justify-content-center">

            <div class="col-md-8">

                <div class="card">


                    <div class="invoice p-5">

                      <div class="row">
                        <div class="col-md-10">
                        <a href="index.php"><i class="fa fa-home"></i> Back to Home</a>
                        </div>
                        <div class="col-md-2">
                        <a href="booking_list.php"><i class="fa fa-file"></i> Order List</a>
                        </div>
                      </div>
                        <h5 class="mt-3">Confirm Booking!</h5>

                        <span class="font-weight-bold d-block mt-4">Hello, <?php echo $cus['name']; ?></span>
                        <span>You order has been confirmed and Now you can pick your Vehicle</span>

                        <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                            <table class="table table-borderless">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="py-2">

                                                <span class="d-block text-muted">Order Date</span>
                                                <span><?php echo $row['date_updated']; ?></span>

                                            </div>
                                        </td>

                                        <td>
                                            <div class="py-2">

                                                <span class="d-block text-muted">Order No</span>
                                                <span>#<?php echo $_REQUEST['order_id']; ?></span>

                                            </div>
                                        </td>

                                        

                                        <td>
                                            <div class="py-2">

                                                <span class="d-block text-muted">Rent Status</span>
                                                <span>We Will Confirm Soon</span>

                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>





                        </div>




                        



                        <div class="row d-flex justify-content-end">

                            <div class="col-md-5">

                                <table class="table table-borderless">

                                    <tbody class="totals">


                                        <tr class="border-top border-bottom">
                                            <td>
                                                <div class="text-left">

                                                    <span class="font-weight-bold">Total Payment</span>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span class="font-weight-bold">Rs. <?php echo $row['total']; ?>.00</span>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>



                        </div>


                        <p class="font-weight-bold mb-0">Thanks for Booking with us!</p>
                        <span>Roshan's Guest House</span>





                    </div>


                    <div class="d-flex justify-content-between footer p-3">

                        <span><script>document.write(new Date())</script></span>

                    </div>




                </div>

            </div>

        </div>

    </div>
</section>
<?php } endif; ?>

    <!-- ##### Rooms Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
 
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