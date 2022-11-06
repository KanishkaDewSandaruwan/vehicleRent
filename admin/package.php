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
                            <h1 class="h3 mb-3"><strong>Package</strong></h1>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#PackageModal">Add
                                New</button>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                            <div class="card flex-fill">

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Package Name</th>
                                            <th>Package Details</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Price (Rs.)</th>
                                            <th>Available</th>
                                            <th>Date Updated</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                $getall = getAllpackage();
                                while ($row = mysqli_fetch_assoc($getall)) {
                                    $package_id = $row['package_id'];
                                    $img = $row['package_image'];
                                    $img_src = "../server/uploads/package/" . $img; ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['package_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['package_details']; ?>
                                            </td>
                                            <td><img width="150px" src='<?php echo $img_src; ?>'></td>
                      
                                            <td><select
                                                    onchange='updateData(this, "<?php echo $package_id; ?>","cat_id", "package", "package_id")'
                                                    id="cat_id <?php echo $package_id; ?>" class='form-control norad tx12'
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
                                                    onchange="updateData(this, '<?php echo $package_id; ?>', 'package_price', 'package', 'package_id');"
                                                    name="package_price" id="package_price <?php echo $package_id; ?>"
                                                    value="<?php echo $row['package_price']; ?>">
                                            </td>
                                            
                                            <td>
                                                <select
                                                    onchange="updateData(this, '<?php echo $package_id; ?>', 'package_status', 'package', 'package_id');"
                                                    id="package_status <?php echo $package_id; ?>"
                                                    class='form-control norad tx12' name="package_status" type='text'>
                                                    <option value="1"
                                                        <?php if ($row['package_status'] == "1" ) echo "selected" ; ?>>
                                                        Active
                                                    </option>
                                                    <option value="0"
                                                        <?php if ($row['package_status'] == "0" ) echo "selected" ; ?>>
                                                        Deactive
                                                    </option>
                                                </select>
                                            </td>
                                            <td>
                                                <?php echo $row['date_updated']; ?>
                                            </td>
                                            <td>

                                                <a href="package_edit.php?package_id=<?php echo $row['package_id']; ?>"
                                                    class="btn btn-darkblue">
                                                    <i class="fa-solid fa-pen-to-square"></i> </a>

                                                <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 'admin'): ?>
                                                    <?php if ($row['package_status']=="0"): ?>
                                                    <button type="button"
                                                        onclick="deleteData(<?php echo $row['package_id']; ?>,'package', 'package_id')"
                                                        class="btn btn-darkblue"> <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                    <?php endif; ?>
                                                <?php endif; ?>

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
<div class="modal fade" id="PackageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" id="basicform" data-parsley-validate="" enctype="multipart/form-data">
                <div class="modal-body bg-white">
                    <form action="" method="post" id="basicform" data-parsley-validate="">
                        <div class="col-md-12">
                            <label for="cat_name" class="form-label">Package Name</label>
                            <input type="text" class="form-control" name="package_name" id="package_name"
                                placeholder="Package Name" required>
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
                            <label for="cat_name" class="form-label">Package Price</label>
                            <input type="text" class="form-control" name="package_price" id="package_price"
                                placeholder="Package Price" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="package_details">Package Details</label><br />
                            <textarea id="package_details" rows="5" cols="50" name="package_details"></textarea>
                        </div>

                        <div class="form-group mt-3">
                            <label for="inputPassword">Active</label>
                            <select id="package_status" class='form-control norad tx12' name="package_status"
                                type='text'>
                                <option value="1"> Active</option>
                                <option value="0"> Deactive</option>
                            </select>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="file" class="form-label">Package Image file</label>
                            <input class="form-control" name="file" type="file" id="file">
                        </div>

                </div>
                <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="addPackage(this.form)" name="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>