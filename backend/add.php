<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "project";
$connection = new mysqli($server_name, $user_name, $password, $dbname);
if (!$connection) {
	die("Failed " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// insert to flights database
	if (isset($_POST['add_flight'])) {
		$flightNumber = $_POST["flight"];
		$departurecity = $_POST["from"];
		$arrivalcity = $_POST["to"];
		$departureTime = $_POST["departure"];
		$arrivalTime = $_POST["return"];
		$layover = $_POST["layover"];
		$price = $_POST["price"];
		$sql = "INSERT INTO flight (flight,`from`,`to`,departure,`return`,layover,price) VALUES('$flightNumber','$departurecity','$arrivalcity','$departureTime','$arrivalTime','$layover','$price')";
		$connection->query($sql);
	}
	// insert cars to database
	if (isset($_POST['add_car'])) {
		$carprice = $_POST["cprice"];
		$carmodel = $_POST["cname"];
		$cartype = $_POST["ctype"];
		$cardescription = $_POST["cdescription"];
		$carimg = $_POST["cimg"];
		$sql = "INSERT INTO car_rental (price,`name`,`type`,`description`,img) VALUES ($carprice,'$carmodel','$cartype','$cardescription','$carimg')";
		$connection->query($sql);
	}
	// insert stays to database
	if (isset($_POST['add_hotel'])) {
		$hotelName = $_POST["hname"];
		$hotelLocation = $_POST["hlocation"];
		$hotelPrice = $_POST["hprice"];
		$propertytype = $_POST["hproperty_type"];
		$description = $_POST["hdescription"];
		$img = $_POST["himg"];
		$sql = "INSERT INTO stay (`name`,`location`,price,property_type,`description`,`img`) VALUES('$hotelName', '$hotelLocation', '$hotelPrice', '$propertytype', '$description', '$img')";
		$connection->query($sql);
	}
}

$connection->close();

header("Location: /add.html");
exit;

?>