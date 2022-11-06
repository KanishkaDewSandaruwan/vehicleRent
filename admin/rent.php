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
                            <h1 class="h3 mb-3"><strong>Renting</strong> Dashboard</h1>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                            <div class="card flex-fill">

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>

                                            <th>Order ID</th>
                                            <th>Extend</th>
                                            <th>Customer</th>
                                            <th>Total Amount</th>
                                            <th>Payment</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Date Updated</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $getall = getAllRents();

                                        while ($row = mysqli_fetch_assoc($getall)) {
                                            $rent_id = $row['rent_id'];
                                        ?>


                                        <tr>

                                            <td class="order-color">
                                                <?php echo $row['rent_id']; ?>
                                            </td>
                                            <td class="order-color">
                                            <?php
                                                $getDetails = getExtendByID($rent_id);
                                                if ($row2 = mysqli_fetch_assoc($getDetails)): ?>
                                                YES
                                                <?php else : ?>
                                                NO
                                                <?php endif; ?>
                                            </td>
                                            <td class="order-color">
                                            <?php echo $row['name']; ?><br><?php echo $row['phone']; ?><br><?php echo $row['email']; ?><br><?php echo $row['address']; ?>
                                            </td>
                                            <td>Rs.
                                                <?php echo $row['total']; ?>.00
                                            </td>

                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-success btn-sm " type="button"
                                                        id="dropdownMenuButton">
                                                        <?php if ($row['payment'] == 0)
                                                echo 'Paid'; ?>
                                                    </button>

                                                </div>
                                            </td>
                                          
                                            <td>
                                                <?php echo $row['start_date']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['start_date']; ?>
                                            </td>
                                            <td> <select
                                                onchange='updateData(this, "<?php echo $rent_id; ?>","rent_status", "vehicle_rent", "rent_id")'
                                                id="rent_status <?php echo $rent_id; ?>" class='form-control'
                                                name="rent_status" type='text'>
                                                <option value="0" <?php if ($row['rent_status']=="0") echo "selected"; ?>>
                                                    Pending
                                                </option>
                                                <option value="1" <?php if ($row['rent_status']=="1") echo "selected"; ?>>
                                                    Accept
                                                </option>
                                                <option value="2" <?php if ($row['rent_status']=="2") echo "selected"; ?>>
                                                    Cancel
                                                </option>
                                            </select></td>
                                            <td>
                                                <?php echo $row['date_updated']; ?>
                                            </td>
                                            <td>
                                            <?php if ($row['rent_status'] == "1") { ?>
                                                <?php
                                                    $getDetails = getExtendByID($rent_id);
                                                    if ($row2 = mysqli_fetch_assoc($getDetails)): ?>
                                                <a href="release.php?rent_id=<?php echo $rent_id; ?>"
                                                    class="btn btn-darkblue"> <i class="fa-solid fa-check"></i>
                                                </a>
                                                <?php endif; } ?>
                                                <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 'admin'): ?>
                                                <button type="button"
                                                    onclick="deleteData(<?php echo $row['rent_id']; ?>,'vehicle_rent', 'rent_id')"
                                                    class="btn btn-darkblue"> <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <?php endif; ?>

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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>