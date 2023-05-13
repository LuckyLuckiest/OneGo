<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "project";
$connection = new mysqli($server_name, $user_name, $password, $dbname);
if (!$connection) {
	die("Failed " . mysqli_connect_error());
}
echo "Connection established successfully";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// delete from flights database
	if (isset($_POST['delete_flight'])) {
		$flightId = $_POST["flight_id"];
		$sql = "DELETE FROM flights WHERE flight_id=:flightId";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(":flightId", $flightId);
		$stmt->execute();
	}
	// delete from cars database
	if (isset($_POST['delete_car'])) {
		$carId = $_POST["car_id"];
		$sql = "DELETE FROM cars WHERE car_id=:carId";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(":carId", $carId);
		$stmt->execute();
	}
	// delete from stays database
	if (isset($_POST['delete_hotel'])) {
		$hotelId = $_POST["hotel_id"];
		$sql = "DELETE FROM stays WHERE hotel_id=:hotelId";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(":hotelId", $hotelId);
		$stmt->execute();
	}
}
