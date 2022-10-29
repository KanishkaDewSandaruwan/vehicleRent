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
                            <h1 class="h3 mb-3"><strong>vehicle</strong></h1>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#VehicleModal">Add
                                New</button>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                            <div class="card flex-fill">

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Vehicle Name</th>
                                            <th>Vehicle Modal</th>
                                            <th>Vehicle Number</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Price (Rs.)</th>
                                            <th>Available</th>
                                            <th>Date Updated</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                $getall = getAllvehicle();
                                while ($row = mysqli_fetch_assoc($getall)) {
                                    $vehicle_id = $row['vehicle_id'];
                                    $img = $row['vehicle_image'];
                                    $img_src = "../server/uploads/vehicle/" . $img; ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['vehicle_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['vehicle_modal']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['vehicle_number']; ?>
                                            </td>
                                            <td><img width="150px" src='<?php echo $img_src; ?>'></td>
                      
                                            <td><select
                                                    onchange='updateData(this, "<?php echo $vehicle_id; ?>","cat_id", "vehicle", "vehicle_id")'
                                                    id="cat_id <?php echo $vehicle_id; ?>" class='form-control norad tx12'
                                                    name="cat_id" type='text'>
                                                    <?php 
                                                    $getallCat = getAllCategory();
                                                    while($row2=mysqli_fetch_assoc($getallCat)){ ?>

                                                    <option value="<?php echo $row2['cat_id']; ?>"
                                                        <?php if ($row['cat_id']== $row2['cat_id']) echo "selected"; ?>>
                                                        <?php echo $row2['cat_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>

                                            <td>
                                                <input type="number" class="form-control"
                                                    onchange="updateData(this, '<?php echo $vehicle_id; ?>', 'vehicle_price', 'vehicle', 'vehicle_id');"
                                                    name="vehicle_price" id="vehicle_price <?php echo $vehicle_id; ?>"
                                                    value="<?php echo $row['vehicle_price']; ?>">
                                            </td>
                                            
                                            <td>
                                                <select
                                                    onchange="updateData(this, '<?php echo $vehicle_id; ?>', 'vehicle_status', 'vehicle', 'vehicle_id');"
                                                    id="vehicle_status <?php echo $vehicle_id; ?>"
                                                    class='form-control norad tx12' name="vehicle_status" type='text'>
                                                    <option value="1"
                                                        <?php if ($row['vehicle_status'] == "1" ) echo "selected" ; ?>>
                                                        Active
                                                    </option>
                                                    <option value="0"
                                                        <?php if ($row['vehicle_status'] == "0" ) echo "selected" ; ?>>
                                                        Deactive
                                                    </option>
                                                </select>
                                            </td>
                                            <td>
                                                <?php echo $row['date_updated']; ?>
                                            </td>
                                            <td>

                                                <a href="vehicle_edit.php?vehicle_id=<?php echo $row['vehicle_id']; ?>"
                                                    class="btn btn-darkblue">
                                                    <i class="fa-solid fa-pen-to-square"></i> </a>
                                                <?php if ($row['vehicle_status']=="0"): ?>
                                                <button type="button"
                                                    onclick="deleteData(<?php echo $row['vehicle_id']; ?>,'vehicle', 'vehicle_id')"
                                                    class="btn btn-darkblue"> <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <?php endif ?>

                                            </td>
                                            <?php } ?>

                                    </tbody>
                                </table>
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

<!-- Modal -->
<div class="modal fade" id="VehicleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Vehicle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" id="basicform" data-parsley-validate="" enctype="multipart/form-data">
                <div class="modal-body bg-white">
                    <form action="" method="post" id="basicform" data-parsley-validate="">
                        <div class="col-md-12">
                            <label for="vehicle_name" class="form-label">Vehicle Name</label>
                            <input type="text" class="form-control" name="vehicle_name" id="vehicle_name"
                                placeholder="Vehicle Name" required>
                        </div>

                        <div class="col-md-12">
                            <label for="vehicle_modal" class="form-label">Vehicle Modal</label>
                            <input type="text" class="form-control" name="vehicle_modal" id="vehicle_modal"
                                placeholder="Vehicle Modal" required>
                        </div>

                        <div class="col-md-12">
                            <label for="vehicle_number" class="form-label">Vehicle Number</label>
                            <input type="text" class="form-control" name="vehicle_number" id="vehicle_number"
                                placeholder="Vehicle Number" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="cat_id" class="form-label">Category</label>
                            <select class="form-select" name="cat_id" id="cat_id" aria-label="Default select example">
                                <?php $getall = getAllCategory();
                                while($row=mysqli_fetch_assoc($getall)){ ?>
                                <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></option>
                                <?php } ?>
                                
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="vehicle_price" class="form-label">Vehicle Price</label>
                            <input type="text" class="form-control" name="vehicle_price" id="vehicle_price"
                                placeholder="Vehicle Price" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="inputPassword">Active</label>
                            <select id="vehicle_status" class='form-control norad tx12' name="vehicle_status"
                                type='text'>
                                <option value="1"> Active</option>
                                <option value="0"> Deactive</option>
                            </select>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="file" class="form-label">Vehicle Image file</label>
                            <input class="form-control" name="file" type="file" id="file">
                        </div>

                </div>
                <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="addVehicle(this.form)" name="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>