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
                            <h1 class="h3 mb-3"><strong>Staff</strong> Dashboard</h1>
                        </div>
         
                    </div>



                    <div class="row">
                        <div class="col-12 col-lg-6 col-xxl-6 d-flex">
                            <div class="card flex-fill">

                                <?php 
                                if (isset($_REQUEST['staff_id'])) {
                                    $getall = getStaffByID($_REQUEST['staff_id']);
                                    $row = mysqli_fetch_assoc($getall);
                                    $staff_id = $row['staff_id']; ?>


                                <div class="form-group mt-2">
                                    <label for="inputName">Name</label>
                                    <input id="inputName" type="text" name="name" data-parsley-trigger="change"
                                        onchange="updateData(this, '<?php echo $staff_id; ?>', 'name', 'staff', 'staff_id');"
                                        value="<?php echo $row['name']; ?>" required="" placeholder="Enter Full Name"
                                        autocomplete="off" class="form-control">
                                </div>

                                <div class="form-group mt-2">
                                    <label for="inputEmail">Email address</label>
                                    <input id="inputEmail" type="email" name="email" data-parsley-trigger="change"
                                        onchange="updateData(this, '<?php echo $staff_id; ?>', 'email', 'staff', 'staff_id');"
                                        value="<?php echo $row['email']; ?>" required="" placeholder="Enter email"
                                        autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="inputPhone">Phone Number</label>
                                    <input id="inputPhone" type="text" name="phone" data-parsley-trigger="change"
                                        required="" placeholder="Enter Phone Number" autocomplete="off"
                                        onchange="updateData(this, '<?php echo $staff_id; ?>', 'phone', 'staff', 'staff_id');"
                                        value="<?php echo $row['phone']; ?>" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="inputNIC">NIC</label>
                                    <input id="inputNIC" type="text" name="nic" data-parsley-trigger="change"
                                        onchange="updateData(this, '<?php echo $staff_id; ?>', 'nic', 'staff', 'staff_id');"
                                        value="<?php echo $row['nic']; ?>" required="" placeholder="Enter NIC Number"
                                        autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="inputAddress">Address</label>
                                    <input id="inputAddress" type="text" name="address" data-parsley-trigger="change"
                                        onchange="updateData(this, '<?php echo $staff_id; ?>', 'address', 'staff', 'staff_id');"
                                        value="<?php echo $row['address']; ?>" required="" placeholder="Enter Address"
                                        autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="inputGender">Gender</label>
                                    <select
                                        onchange='updateData(this, "<?php echo $staff_id; ?>","gender", "staff", "staff_id")'
                                        id="gender <?php echo $staff_id; ?>" class='form-control norad tx12'
                                        name="gender" type='text'>
                                        <option value="1" <?php if ($row['gender']=="1") echo "selected"; ?>>
                                            Male</option>
                                        <option value="0" <?php if ($row['gender']=="0") echo "selected"; ?>>
                                            Female</option>
                                    </select>
                                </div>

                                <div class="col-md-4 mt-2">
                                    <div class="row mt-2">
                                        <a href="staff.php" class="btn btn-info">Back</a>
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