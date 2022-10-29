<?php

function addPackage($data, $img)
{
	include 'connection.php';

	$package_name = $data['package_name'];
	$cat_id = $data['cat_id'];
	$package_details = $data['package_details'];
	$package_status = $data['package_status'];
	$package_price = $data['package_price'];

	$count = checkPackageByName($package_name);

	if ($count == 0) {

		$sql = "INSERT INTO package(package_name, cat_id, package_details, package_status, package_image, is_deleted, date_updated, package_price) 
		VALUES('$package_name', '$cat_id', '$package_details', '$package_status', '$img' , 0 , now(), '$package_price')";
		return mysqli_query($con, $sql);

	}
	else {
		echo json_encode($count);
	}
}

function addVehicle($data, $img)
{
	include 'connection.php';

	$vehicle_name = $data['vehicle_name'];
	$cat_id = $data['cat_id'];
	$vehicle_modal = $data['vehicle_modal'];
	$vehicle_number = $data['vehicle_number'];
	$vehicle_price = $data['vehicle_price'];
	$vehicle_status = $data['vehicle_status'];

	$count = getVehicleByName($vehicle_name);

	if ($count == 0) {

		$sql = "INSERT INTO vehicle(cat_id, vehicle_name, vehicle_modal, vehicle_number, vehicle_price, vehicle_status, vehicle_image, is_deleted, date_updated) 
		VALUES('$cat_id', '$vehicle_name', '$vehicle_modal', '$vehicle_number', '$vehicle_price', '$vehicle_status', '$img' , 0 , now())";
		return mysqli_query($con, $sql);

	}
	else {
		echo json_encode($count);
	}
}

function addCategory($data, $img)
{
    include 'connection.php';

    $category_name = $data['category_name'];


    $sql = "INSERT INTO category(cat_name, cat_image, is_deleted, date_updated) VALUES('$category_name', '$img', 0 , now())";
    return mysqli_query($con, $sql);

}

function addBooking($data)
{
	include 'connection.php';

	$customer_id = $data['customer_id'];
	$service_id = $data['service_id'];
	$booking_date = $data['booking_date'];
	$booking_time = $data['booking_time'];
	$booking_price = $data['booking_price'];
	$speacial_request = $data['speacial_request'];
	$number_of_works = $data['number_of_works'];
	$waiting_time = $data['waiting_time'];


    $newTime = date('H:i:s', strtotime($booking_time. ' + ' . $waiting_time . ' hours'));

	$newStartTime = $booking_date. " " . $booking_time;
	$newEndTime = $booking_date. " " . $newTime;

	$count = checkBookingDate($newStartTime, $newEndTime, $service_id);

	if ($count == 0 || $count < $number_of_works) {

		$sql = "INSERT INTO booking(service_id, customer_id, booking_date, speacial_request, booking_price, is_deleted, date_updated, end_time, status) 
		VALUES('$service_id', '$customer_id', '$newStartTime', '$speacial_request', '$booking_price', 0, now(), '$newEndTime', 0)";
		return mysqli_query($con, $sql);

	}
	else {
		echo json_encode($count);
	}
}


//contact
function addMessage($data)
{
    include 'connection.php';

    $name = $data['name'];
    $email = $data['email'];
    $subject = $data['subject'];
    $message = $data['message'];


	$sql = "INSERT INTO contact(name, email, subject, message, date_updated) VALUES('$name', '$email', '$subject', '$message', now())";
	return mysqli_query($con, $sql);
}


function createCustomer($data)
{
	include 'connection.php';

	$name = $data['name'];
	$email = $data['email'];
	$phone = $data['phone'];
	$nic = $data['nic'];
	$address = $data['address'];
	$gender = $data['gender'];
	$password = $data['password'];

	$sql = "INSERT INTO customer(name, email, phone, nic, address, gender, password, is_deleted) VALUES('$name', '$email', '$phone', '$nic', '$address', '$gender', '$password', 0 )";
	return mysqli_query($con, $sql);
	
}
function createDriver($data)
{
	include 'connection.php';

	$name = $data['name'];
	$email = $data['email'];
	$phone = $data['phone'];
	$nic = $data['nic'];
	$address = $data['address'];
	$gender = $data['gender'];

	$sql = "INSERT INTO driver(name, email, phone, nic, address, gender, is_deleted) VALUES('$name', '$email', '$phone', '$nic', '$address', '$gender', 0 )";
	return mysqli_query($con, $sql);
	
}
function createGuide($data)
{
	include 'connection.php';

	$name = $data['name'];
	$email = $data['email'];
	$phone = $data['phone'];
	$nic = $data['nic'];
	$address = $data['address'];
	$gender = $data['gender'];

	$sql = "INSERT INTO guide(name, email, phone, nic, address, gender, is_deleted) VALUES('$name', '$email', '$phone', '$nic', '$address', '$gender', 0 )";
	return mysqli_query($con, $sql);
	
}

function insertImagetoGallery($img)
{
    include 'connection.php';

	$sql = "INSERT INTO gallery(gallery_image) VALUES('$img')";
	return mysqli_query($con, $sql);
}

function createStaff($data)
{
	include 'connection.php';

	$name = $data['name'];
	$email = $data['email'];
	$phone = $data['phone'];
	$nic = $data['nic'];
	$address = $data['address'];
	$gender = $data['gender'];

	$sql = "INSERT INTO staff(name, email, phone, nic, address, gender, is_deleted) VALUES('$name', '$email', '$phone', '$nic', '$address', '$gender', 0 )";
	return mysqli_query($con, $sql);
	
}

?>