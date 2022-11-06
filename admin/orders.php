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
                            <h1 class="h3 mb-3"><strong>Orders</strong> Dashboard</h1>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                            <div class="card flex-fill">

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>

                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Total Amount</th>
                                            <th>Payment</th>
                                            <th>Date</th>
                                            <th>Start Date</th>
                                            <th>Status & Assign</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $getall = getAllOrders();

                                        while ($row = mysqli_fetch_assoc($getall)) {
                                            $order_id = $row['order_id'];
                                        ?>


                                        <tr>

                                            <td class="order-color">
                                                <?php echo $row['order_id']; ?>
                                            </td>
                                            <td class="order-color">
                                                <?php echo $row['name']; ?><br>
                                                <?php echo $row['phone']; ?><br>
                                                <?php echo $row['email']; ?><br>
                                                <?php echo $row['address']; ?>
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
                                                <?php echo $row['date_updated']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['traval_start_date']; ?>
                                            </td>
                                            <td> <select
                                                    onchange='updateData(this, "<?php echo $order_id; ?>","order_status", "package_orders", "order_id")'
                                                    id="order_status <?php echo $order_id; ?>" class='form-control'
                                                    name="order_status" type='text'>
                                                    <option value="0" <?php if ($row['order_status'] == "0")
                                                echo
                                                        "selected"; ?>>
                                                        Pending
                                                    </option>
                                                    <option value="1" <?php if ($row['order_status'] == "1")
                                                echo
                                                        "selected"; ?>>
                                                        Accept
                                                    </option>
                                                    <option value="2" <?php if ($row['order_status'] == "2")
                                                echo
                                                        "selected"; ?>>
                                                        Cancel
                                                    </option>
                                                </select>
                                                <?php if ($row['driver_id'] != "0" && $row['guid_id'] != "0") { ?>
                                                <p class="mt-2">
                                                    <?php $value = getDriverByID($row['driver_id']);
                                                $row3 = mysqli_fetch_assoc($value);
                                                echo $row3['name']; ?><br>

                                                    <?php $value = getGuideByID($row['guid_id']);
                                                $row4 = mysqli_fetch_assoc($value);
                                                echo $row4['name']; ?>
                                                </p>
                                                <?php } else if ($row['driver_id'] != "0") { ?>
                                                <p>
                                                    <?php $value = getDriverByID($row['driver_id']);
                                                $row2 = mysqli_fetch_assoc($value);
                                                echo $row2['name']; ?>
                                                </p>
                                                <?php } elseif ($row['guid_id'] != "0") { ?>
                                                <p>
                                                    <?php $value = getGuideByID($row['guid_id']);
                                                $row2 = mysqli_fetch_assoc($value);
                                                echo $row2['name']; ?>
                                                </p>
                                                <?php } else { ?>
                                                <p> </p>
                                                <?php } ?>

                                            </td>
                                            <td><?php if ($row['order_status'] == "1") { ?>
                                                <a href="package_adding.php?order_id=<?php echo $order_id; ?>"
                                                    class="btn btn-darkblue"> <i class="fa-solid fa-check"></i>
                                                </a>
                                                <?php } ?>
                                                <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 'admin'): ?>
                                                <button type="button"
                                                    onclick="deleteData(<?php echo $row['order_id']; ?>,'package_orders', 'order_id')"
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