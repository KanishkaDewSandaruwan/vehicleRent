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
                            <h1 class="h3 mb-3"><strong>Vehicle</strong> Edit</h1>
                        </div>

                    </div>



                    <div class="row">
                        <div class="col-12 col-lg-6 col-xxl-6 d-flex">
                            <div class="card flex-fill">

                                <?php 
                                if (isset($_REQUEST['vehicle_id'])) {
                                    $getall = getvehicleByID($_REQUEST['vehicle_id']);
                                    $row = mysqli_fetch_assoc($getall);
                                    $vehicle_id = $row['vehicle_id'];
                                    
                                    $img = $row['vehicle_image'];
                                    $img_src = "../server/uploads/vehicle/" . $img;?>


                                <div class="form-group mt-2">
                                    <label for="vehicle_name">Vehicle Name</label>
                                    <input id="vehicle_name" type="text" name="vehicle_name" data-parsley-trigger="change"
                                        onchange="updateData(this, '<?php echo $vehicle_id; ?>', 'vehicle_name', 'vehicle', 'vehicle_id');"
                                        value="<?php echo $row['vehicle_name']; ?>" required=""
                                        placeholder="Vehicle Name" autocomplete="off" class="form-control">
                                </div>

                                <div class="form-group mt-2">
                                    <label for="vehicle_modal">Vehicle Modal</label>
                                    <input id="vehicle_modal" type="text" name="vehicle_modal" data-parsley-trigger="change"
                                        onchange="updateData(this, '<?php echo $vehicle_id; ?>', 'vehicle_modal', 'vehicle', 'vehicle_id');"
                                        value="<?php echo $row['vehicle_modal']; ?>" required=""
                                        placeholder="Vehicle Modal" autocomplete="off" class="form-control">
                                </div>

                                <div class="form-group mt-2">
                                    <label for="vehicle_number">Vehicle Number</label>
                                    <input id="vehicle_number" type="text" name="vehicle_number" data-parsley-trigger="change"
                                        onchange="updateData(this, '<?php echo $vehicle_id; ?>', 'vehicle_number', 'vehicle', 'vehicle_id');"
                                        value="<?php echo $row['vehicle_number']; ?>" required=""
                                        placeholder="Vehicle Number" autocomplete="off" class="form-control">
                                </div>


                                <div class="form-group mt-3">
                                    <form enctype="multipart/form-data" method="POST">
                                        <div class="mb-3">
                                            <input class="form-control" value="<?php echo $row['vehicle_id'] ?>" name="id"
                                                type="hidden" id="id">
                                            <input class="form-control" value="vehicle_id" name="id_fild" type="hidden"
                                                id="id_fild">
                                            <input class="form-control" value="vehicle" name="table" type="hidden"
                                                id="table">
                                            <input class="form-control" value="vehicle_image" name="field" type="hidden"
                                                id="field">
                                            <input onchange="uploadImagevehicleEdit(this.form);" class="form-control"
                                                name="file" type="file" id="formFile">
                                        </div>

                                        <img width="300px" src='<?php echo $img_src; ?>'>
                                </div>


                                <div class="col-md-4 mt-2">
                                    <div class="row mt-2">
                                        <a href="vehicle.php" class="btn btn-info">Back</a>
                                    </div>
                                </div>

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