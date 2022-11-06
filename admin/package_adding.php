<!DOCTYPE html>
<html lang="en">
<?php include 'pages/head.php'; ?>

<body>
    <div class="wrapper">

        <?php include 'pages/navbar.php'; ?>

        <div class="main">

            <?php include 'pages/topbar.php'; ?>

            <main class="content">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-10">
                            <h1 class="h3 mb-3"><strong>Package Assign</strong></h1>
                        </div>

                    </div>



                    <div class="row">
                        <div class="col-12 col-lg-6 col-xxl-6 d-flex">
                            <div class="card flex-fill">
                                <form enctype="multipart/form-data" method="POST">

                                    <?php
                                if (isset($_REQUEST['order_id'])) {
                                    $getall = getOrderByID($_REQUEST['order_id']);
                                    $row = mysqli_fetch_assoc($getall);
                                    $order_id = $row['order_id']; 
                                    $guid_id = $row['guid_id']; 
                                    $driver_id = $row['driver_id']; 
                                    ?>


                                    <div class="form-group mt-2">
                                        <label for="inputName">Driver</label>
                                        <select class="form-select" name="driver_id" id="driver_id"
                                        onchange='updateData(this, "<?php echo $order_id; ?>","driver_id", "package_orders", "order_id")'
                                            aria-label="Default select example">
                                            <option value="0">Please Select Driver</option>
                                            <?php $getall = getAlldriver();
                                                while ($row2 = mysqli_fetch_assoc($getall)) { ?>
                                            <option value="<?php echo $row2['driver_id'] ?>" <?php if($row2['driver_id'] == $driver_id) echo "selected"; ?>><?php echo $row2['name'] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>

                                    <div class="form-group mt-2 mb-3">
                                        <label for="inputName">Guide</label>
                                        <select class="form-select" name="guid_id" id="guid_id"
                                        onchange='updateData(this, "<?php echo $order_id; ?>","guid_id", "package_orders", "order_id")'
                                            aria-label="Default select example">
                                            <option value="0">Please Select Guide</option>
                                            <?php $getall = getAllguide();
                                                while ($row2 = mysqli_fetch_assoc($getall)) { ?>
                                            <option value="<?php echo $row2['guid_id'] ?>" <?php if($row2['guid_id'] == $guid_id) echo "selected"; ?>><?php echo $row2['name'] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>


                                    <div class="col-md-4 mt-2">
                                        <div class="row mt-2">
                                            <a href="orders.php" class="btn btn-info">Back</a>
                                        </div>
                                    </div>
                                </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            <?php include 'pages/footer.php'; ?>

        </div>
    </div>

    <?php include 'pages/footer_script.php'; ?>

</body>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>