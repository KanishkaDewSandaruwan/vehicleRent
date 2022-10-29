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
                            <h1 class="h3 mb-3"><strong>Package</strong> Edit</h1>
                        </div>

                    </div>



                    <div class="row">
                        <div class="col-12 col-lg-6 col-xxl-6 d-flex">
                            <div class="card flex-fill">

                                <?php 
                                if (isset($_REQUEST['package_id'])) {
                                    $getall = getpackageByID($_REQUEST['package_id']);
                                    $row = mysqli_fetch_assoc($getall);
                                    $package_id = $row['package_id'];
                                    
                                    $img = $row['package_image'];
                                    $img_src = "../server/uploads/package/" . $img;?>


                                <div class="form-group mt-2">
                                    <label for="inputName">Name</label>
                                    <input id="inputName" type="text" name="package_name" data-parsley-trigger="change"
                                        onchange="updateData(this, '<?php echo $package_id; ?>', 'package_name', 'package', 'package_id');"
                                        value="<?php echo $row['package_name']; ?>" required=""
                                        placeholder="Enter Full Name" autocomplete="off" class="form-control">
                                </div>

                                <div class="form-group mt-2">
                                    <label for="inputEmail">Package Details</label><br/>
                                    <textarea id="package_details" rows="5" cols="50" name="package_details"
                                        onchange="updateData(this, '<?php echo $package_id; ?>', 'package_details', 'package', 'package_id');"><?php echo $row['package_details']; ?></textarea>
                                </div>


                                <div class="form-group mt-3">
                                    <form enctype="multipart/form-data" method="POST">
                                        <div class="mb-3">
                                            <input class="form-control" value="<?php echo $row['package_id'] ?>" name="id"
                                                type="hidden" id="id">
                                            <input class="form-control" value="package_id" name="id_fild" type="hidden"
                                                id="id_fild">
                                            <input class="form-control" value="package" name="table" type="hidden"
                                                id="table">
                                            <input class="form-control" value="package_image" name="field" type="hidden"
                                                id="field">
                                            <input onchange="uploadImagePackageEdit(this.form);" class="form-control"
                                                name="file" type="file" id="formFile">
                                        </div>

                                        <img width="300px" src='<?php echo $img_src; ?>'>
                                </div>


                                <div class="col-md-4 mt-2">
                                    <div class="row mt-2">
                                        <a href="package.php" class="btn btn-info">Back</a>
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