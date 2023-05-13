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
	// delete from flights database
	if (isset($_POST['delete_flight'])) {
		$flightId = $_POST["flight_id"];
		$sql = "DELETE FROM flight WHERE flight_id='$flightId'";
		$connection->query($sql);
	}
	// delete from cars database
	if (isset($_POST['delete_car'])) {
		$carId = $_POST["car_id"];
		$sql = "DELETE FROM car_rental WHERE car_id='$carId'";
		$connection->query($sql);
	}
	// delete from stays database
	if (isset($_POST['delete_hotel'])) {
		$hotelId = $_POST["hotel_id"];
		$sql = "DELETE FROM stay WHERE hotel_id='$hotelId'";
		$connection->query($sql);
	}
}

$connection->close();

header("Location: /delete.html");
exit;

?>