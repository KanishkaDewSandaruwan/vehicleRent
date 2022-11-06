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
                            <h1 class="h3 mb-3"><strong>Category</strong></h1>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CategoryModal">Add
                                New</button>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                            <div class="card flex-fill">

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Cat ID</th>
                                            <th>Category Name</th>
                                            <th>Image</th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Cat ID</th>
                                            <th>Category Name</th>
                                            <th>Image</th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                            $getall = getAllCategory();

                            while($row=mysqli_fetch_assoc($getall)){

                                $cat_id = $row['cat_id'];
                                $img = $row['cat_image'];
                                $img_src = "../server/uploads/category/".$img;?>
                                        <tr>
                                            <td>#<?php echo $row['cat_id']; ?></td>
                                            <td>
                                                <div class="form-group">
                                                    <input id="cat_name  <?php echo $cat_id; ?>" type="text"
                                                        name="cat_name"
                                                        onchange="updateData(this, '<?php echo $cat_id; ?>', 'cat_name', 'category', 'cat_id');"
                                                        value="<?php echo $row['cat_name']; ?>"
                                                        data-parsley-trigger="change" required=""
                                                        placeholder="Enter Category Name" autocomplete="off"
                                                        class="form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <form class="w-20" enctype="multipart/form-data" method="POST">
                                                    <div class="mb-3">
                                                        <input class="form-control" value="<?php echo $row['cat_id'] ?>"
                                                            name="id" type="hidden" id="id">
                                                        <input class="form-control" value="cat_id" name="id_fild"
                                                            type="hidden" id="id_fild">
                                                        <input class="form-control" value="category" name="table"
                                                            type="hidden" id="table">
                                                        <input class="form-control" value="cat_image" name="field"
                                                            type="hidden" id="field">
                                                        <input onchange="uploadImage(this.form);" class="form-control"
                                                            name="file" type="file" id="formFile">
                                                    </div>
                                                </form>
                                                <img width="200px" src='<?php echo $img_src; ?>'>

                                            </td>
                                            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 'admin'): ?>
      
                                            <td><button type="button"
                                                    onclick="deleteDataCategory(<?php echo $row['cat_id']; ?>,'category', 'cat_id')"
                                                    class="btn btn-darkblue"> <i class="fa-solid fa-trash"></i>
                                                </button></td>
                                                <?php endif; ?>
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
<div class="modal fade" id="CategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" id="basicform" data-parsley-validate="" enctype="multipart/form-data">
                <div class="modal-body bg-white">
                    <form action="" method="post" id="basicform" data-parsley-validate="">
                        <div class="col-md-12">
                            <label for="cat_name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="category_name" id="cat_name"
                                placeholder="Category Name" required>
                        </div>
                        <div class="col-md-12">
                            <label for="file" class="form-label">Category Image file</label>
                            <input class="form-control" name="file" type="file" id="file">
                        </div>

                </div>
                <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="addCategory(this.form)" name="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>