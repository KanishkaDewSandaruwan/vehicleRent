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
                            <h1 class="h3 mb-3"><strong>Extend</strong></h1>
                        </div>

                    </div>



                    <div class="row">
                        <div class="col-12 col-lg-6 col-xxl-6 d-flex">
                            <div class="card flex-fill">
                                <form enctype="multipart/form-data" method="POST">

                                    <?php
                                    if (isset($_REQUEST['rent_id'])) {
                                        $getall = getAllRentsByIDAdmin($_REQUEST['rent_id']);
                                        $row = mysqli_fetch_assoc($getall);
                                        $rent_id = $row['rent_id'];

                                        $getDetails = getExtendByID($rent_id);

                                        if ($row2 = mysqli_fetch_assoc($getDetails)):

                                            $extend_id = $row2['extend_id'];

                                    ?>


                                    <div class="form-group mt-2">
                                        <p>
                                            <?php if ($row2['extend_status'] == 0) {
                                                echo 'Pending';
                                            } else if ($row2['extend_status'] == 1) {
                                                echo 'Accepted';
                                            } else {
                                                echo 'Not Approved';
                                            } ?>
                                        </p>
                                        <p>
                                            <?php echo $row2['changed_date']; ?>
                                        </p>
                                        <p>
                                            Rs.
                                            <?php echo $row2['extended_total']; ?>.00
                                        </p>
                                        <p>
                                            <?php echo $row2['request_message']; ?>
                                        </p>
                                    </div>

                                    <div class="form-group mt-5 mb-3">
                                        <label for="inputName">Approvel</label>
                                        <select
                                            onchange="updateData(this, '<?php echo $extend_id; ?>', 'extend_status', 'extend', 'extend_id');"
                                            id="extend_status <?php echo $extend_id; ?>" class='form-control norad tx12'
                                            name="extend_status" type='text'>
                                            <option value="0" <?php if ($row2['extend_status']=="1")
                                                echo "selected";
                                                ?>>
                                                Pending
                                            </option>
                                            <option value="1" <?php if ($row2['extend_status']=="1")
                                                echo "selected";
                                                ?>>
                                                Active
                                            </option>
                                            <option value="2" <?php if ($row2['extend_status']=="2")
                                                echo "selected";
                                                ?>>
                                                Not Approve
                                            </option>
                                        </select>
                                    </div>


                                    <div class="col-md-4 mt-2">
                                        <div class="row mt-2">
                                            <a href="rent.php" class="btn btn-info">Back</a>
                                        </div>
                                    </div>
                                </form>
                                <?php endif;
                                    } ?>
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