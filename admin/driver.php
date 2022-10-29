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
                            <h1 class="h3 mb-3"><strong>Driver</strong> Dashboard</h1>
                        </div>
                        <div class="col-md-2">
                            <a data-bs-toggle="modal" data-bs-target="#DriverModal" class="btn btn-primary">Add New</a>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                            <div class="card flex-fill">

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>

                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>NIC</th>
                                            <th>Address</th>
                                            <th>Gender</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>

                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>NIC</th>
                                            <th>Address</th>
                                            <th>Gender</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                $getall = getAlldriver();

                                while($row=mysqli_fetch_assoc($getall)){ 
                                  $driver_id = $row['driver_id'];
                                  ?>


                                        <tr>

                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['nic']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php if ($row['gender']=="1"){ echo "Male"; }else{ echo "Female";} ?>
                                            </td>
                                            <td>
                                                <a href="driver_edit.php?driver_id=<?php echo $driver_id; ?>"
                                                    class="btn btn-darkblue"> <i class="fa-solid fa-edit"></i>
                                                </a> 
                                                <button type="button"
                                                    onclick="deleteData(<?php echo $row['driver_id']; ?>,'driver', 'driver_id')"
                                                    class="btn btn-darkblue"> <i class="fa-solid fa-trash"></i>
                                                </button>

                                            </td>
                                        </tr>

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
<div class="modal fade" id="DriverModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Drivers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" id="basicform" data-parsley-validate="" enctype="multipart/form-data">
                <div class="modal-body bg-white">
                    <form action="" method="post" id="basicform" data-parsley-validate="">
                        <div class="form-group mt-2">
                            <label for="inputName">Name</label>
                            <input id="inputName" type="text" name="name" data-parsley-trigger="change" required=""
                                placeholder="Enter Full Name" autocomplete="off" class="form-control">
                        </div>

                        <div class="form-group mt-2">
                            <label for="inputEmail">Email address</label>
                            <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required=""
                                placeholder="Enter email" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="inputPhone">Phone Number</label>
                            <input id="inputPhone" type="text" name="phone" data-parsley-trigger="change" required=""
                                placeholder="Enter Phone Number" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="inputNIC">NIC</label>
                            <input id="inputNIC" type="text" name="nic" data-parsley-trigger="change" required=""
                                placeholder="Enter NIC Number" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="inputAddress">Address</label>
                            <input id="inputAddress" type="text" name="address" data-parsley-trigger="change"
                                required="" placeholder="Enter Address" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="inputGender">Gender</label>
                            <select class="form-select" name="gender" id="gender" aria-label="Default select example">
                                <option value="1" selected>Male</option>
                                <option value="0">Female</option>
                            </select>
                        </div>
  
                </div>
                <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="addDriver(this.form)" name="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
</html>