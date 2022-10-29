<?php
if (session_id() == '') {
    session_start();
}

include 'inc/get.php';
include 'inc/connection.php';
include 'inc/update.php';
include 'inc/delete.php';
include 'inc/add.php';

 if (isset($_GET['function_code']) && $_GET['function_code'] == 'getAllData') {
    $data = getAllData($_POST);
    echo json_encode($data);
}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'updateData') {
    updateDataTable($_POST);
}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'imageUploadCategory') {

    $img = $_FILES['file']['name'];
    $target_dir = "uploads/category/";
    $target_file = $target_dir . basename($img);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif", "jfif", "svg", "webp");

    if (in_array($imageFileType, $extensions_arr)) {
        move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $img);
        editImages($_POST, $img);
    }

}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'uploadImagePackageEdit') {

    $img = $_FILES['file']['name'];
    $target_dir = "uploads/package/";
    $target_file = $target_dir . basename($img);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif", "jfif", "svg", "webp");

    if (in_array($imageFileType, $extensions_arr)) {
        move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $img);
        editImages($_POST, $img);
    }

}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'uploadImagevehicleEdit') {

    $img = $_FILES['file']['name'];
    $target_dir = "uploads/vehicle/";
    $target_file = $target_dir . basename($img);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif", "jfif", "svg", "webp");

    if (in_array($imageFileType, $extensions_arr)) {
        move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $img);
        editImages($_POST, $img);
    }

}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'addPackage') {

    $img = $_FILES['file']['name'];
    $target_dir = "uploads/package/";
    $target_file = $target_dir . basename($img);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif", "jfif", "svg", "webp");

    if (in_array($imageFileType, $extensions_arr)) {
        move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $img);
        addPackage($_POST, $img);
    }
}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'addVehicle') {

    $img = $_FILES['file']['name'];
    $target_dir = "uploads/vehicle/";
    $target_file = $target_dir . basename($img);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif", "jfif", "svg", "webp");

    if (in_array($imageFileType, $extensions_arr)) {
        move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $img);
        addVehicle($_POST, $img);
    }
}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'deleteData') {
    deleteDataTables($_POST);
}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'permanantDeleteData') {
    permanantDeleteDataTable($_POST);
}else if (isset($_GET['function_code']) && $_GET['function_code'] == 'changesettings') {
    changePageSettings($_POST);
}else if (isset($_GET['function_code']) && $_GET['function_code'] == 'SettingImage') {

    $img = $_FILES['file']['name'];
    $target_dir = "uploads/settings/";
    $target_file = $target_dir . basename($img);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif", "jfif", "svg", "webp");
    
    if (in_array($imageFileType, $extensions_arr)) {
        move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $img);
        editSettingImage($_POST, $img);
    }

}else if (isset($_GET['function_code']) && $_GET['function_code'] == 'insertImageUpload') {

    $img = $_FILES['file']['name'];
    $target_dir = "uploads/gallery/";
    $target_file = $target_dir . basename($img);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif", "jfif", "svg", "webp");
    
    if (in_array($imageFileType, $extensions_arr)) {
        move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $img);
        insertImagetoGallery($img);
    }

}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'login') {
	echo getLoginAdmin($_POST);
}else if (isset($_GET['function_code']) && $_GET['function_code'] == 'checkPasswordByEmail') {
    checkPasswordByName($_POST);
}else if (isset($_GET['function_code']) && $_GET['function_code'] == 'checkoutOrder') {
    checkoutOrder($_POST);
}else if (isset($_GET['function_code']) && $_GET['function_code'] == 'addcontact') {
	addMessage($_POST);
}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'addCustomer') {
    createCustomer($_POST);
}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'addDriver') {
    createDriver($_POST);
}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'addGuide') {
    createGuide($_POST);
}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'addStaff') {
    createStaff($_POST);
}
else if (isset($_GET['function_code']) && $_GET['function_code'] == 'checkEmail') {
    checkUserEmail($_POST);
}else if (isset($_GET['function_code']) && $_GET['function_code'] == 'checkPassword') {
    checkuserPassword($_POST);
}else if (isset($_GET['function_code']) && $_GET['function_code'] == 'getServiceData') {
    getAllServiceByIDHome($_POST); 
}else if (isset($_GET['function_code']) && $_GET['function_code'] == 'addBooking') {
    addBooking($_POST); 
}else if (isset($_GET['function_code']) && $_GET['function_code'] == 'addCategory') {

    $img = $_FILES['file']['name'];
    $target_dir = "uploads/category/";
    $target_file = $target_dir . basename($img);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif", "jfif", "svg", "webp");
    
    if (in_array($imageFileType, $extensions_arr)) {
        move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $img);
        addCategory($_POST, $img);
    }

}



?>