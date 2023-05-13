	
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
	// insert to flights database
	if (isset($_POST['add_flight'])) {
		$flightNumber = $_POST["flight"];
		$departurecity = $_POST["from"];
		$arrivalcity = $_POST["to"];
		$departureTime = $_POST["departure"];
		$arrivalTime = $_POST["return"];
		$class = $_POST["class"];
		$layover = $_POST["layover"];
		$price = $_POST["price"];
		$sql = "INSERT INTO flights(flight,from,to,departure,return,class,layover,price) 
VALUES(:flightNumber,:departurecity,:arrivalcity,:departurecTime,:arrivalTime,:class,:layover,:price)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(":flightNumber", $flightNumber);
		$stmt->bindParam(":departurecity", $departurecity);
		$stmt->bindParam(":arrivalcity", $arrivalcity);
		$stmt->bindParam(":departureTime", $departureTime);
		$stmt->bindParam(":arrivalTime", $arrivalTime);
		$stmt->bindParam(":class", $class);
		$stmt->bindParam(":layover", $layover);
		$stmt->bindParam(":price", $price);
		$stmt->execute();
	}
	// insert cars to database
	if (isset($_POST['add_car'])) {
		$carmodel = $_POST["name"];
		$cartype = $_POST["type"];
		$img = $_POST["img"];
		$carprice = $_POST["price"];
		$cardescription = $_POST["description"];
		$sql = "INSERT INTO cars (price,name, type,description,img);
VALUES (:carPrice,:carModel,:carType,:carPrice,:cardescription,:img)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(":carmodel", $carmodel);
		$stmt->bindParam(":cartype", $cartype);
		$stmt->bindParam(":carprice", $carprice);
		$stmt->bindParam(":cardescription", $cardescription);
		$stmt->bindParam(":img", $img);
		$stmt->execute();
	}
	// insert stays to database
	if (isset($_POST['add_hotel'])) {
		$hotelName = $_POST["name"];
		$hotelLocation = $_POST["location"];
		$hotelPrice = $_POST["price"];
		$propertytype = $_POST["property_type"];
		$noguests = $_POST["no_guests"];
		$sql = "INSERT INTO stays (name,location,price,property_type,no_guests) 
VALUES(:hotelName, :hotelLocation, :hotelPrice, :propertytype, :noguests)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(":hotelName", $hotelName);
		$stmt->bindParam(":hotelLocation", $hotelLocation);
		$stmt->bindParam(":hotelPrice", $hotelPrice);
		$stmt->bindParam(":propertytype", $propertytype);
		$stmt->bindParam(":noguests", $noguests);
		$stmt->execute();
	}
}

?>