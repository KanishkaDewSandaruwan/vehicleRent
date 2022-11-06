<?php 
include 'server/api.php';  
include 'pages/assets.php';

$setting = getAllSettings();
$res = mysqli_fetch_assoc($setting);

$header = $res['header_image'];
$header_src = "server/uploads/settings/".$header;

$subheader = $res['sub_image'];
$subheader_src = "server/uploads/settings/".$subheader;

$about = $res['about_image'];
$about_src = "server/uploads/settings/".$about;

$header_rotate_image = $res['header_rotate_image'];
$header_rotate_image_src = "server/uploads/settings/".$header_rotate_image;

?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Vehicle Rent Service</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>