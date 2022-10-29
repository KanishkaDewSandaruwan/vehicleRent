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
                            <h1 class="h3 mb-3"><strong>Change Password</strong></h1>
                        </div>




                        <div class="row">
                            <div class="col-12 col-lg-6 col-xxl-6 d-flex">
                                <div class="card flex-fill">
                                    <form action="" method="post" id="basicform" class="col-md-6"
                                        data-parsley-validate="" enctype="multipart/form-data">

                                        <div class="col-md-12">
                                            <label for="current_password" class="form-label">Current Password
                                                Name</label>
                                            <input type="password" class="form-control" name="current_password"
                                                id="current_password" placeholder="Current Password Name" required>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="new_password" class="form-label">New Password</label>
                                            <input type="password" class="form-control" name="new_password"
                                                id="new_password" placeholder="New Password" required>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="confirm_new_password" class="form-label">Confirm New
                                                Password</label>
                                            <input type="password" class="form-control" name="confirm_new_password"
                                                id="confirm_new_password" placeholder="Confirm New Password" required>
                                        </div>

                                        <div class="col-md-12">
                                            <input type="hidden" class="form-control" name="email"
                                                value="<?php echo $_SESSION['admin']; ?>" id="email">
                                        </div>

                                        <div class="form-group mt-3 mt-5">

                                            <button type="button" class="btn btn-primary mr-5"
                                                onclick="changePasswordAdmin(this.form)">Change Password</button>
                                            <button type="button" class="btn btn-primary mr-5"
                                                onclick="window.location.href='index.php'">Home</button>

                                        </div>
                                    </form>

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