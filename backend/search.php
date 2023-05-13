<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['search_car'])) {
    $search = $_GET['search_car'];
    $sql = "SELECT * FROM car_rental WHERE `name` LIKE '%$search%' OR `type` LIKE '%$search%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Car ID: " . $row["car_id"] . "<br>";
            echo "Name: " . $row["name"] . "<br>";
            echo "Type: " . $row["type"] . "<br>";
            echo "Price: OMR" . $row["price"] . "<br>";
            echo "Description: " . $row["description"] . "<br>";
            echo "<img src='/" . $row["img"] . "' alt='Car Image'><br>";
            echo "<hr>";
        }
    } else {
        echo "No matching records found.";
    }
}
if (isset($_GET['search_flight'])) {
    $search = $_GET['search_flight'];
    $sql = "SELECT * FROM flight WHERE `flight` LIKE '%$search%' OR `from` LIKE '%$search%' OR `to` LIKE '%$search%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Flight Number: " . $row["flight"] . "<br>";
            echo "Departure City: " . $row["from"] . "<br>";
            echo "Arrival City: " . $row["to"] . "<br>";
            echo "Departure Time: " . $row["departure"] . "<br>";
            echo "Arrival Time: " . $row["return"] . "<br>";
            echo "Layover: " . $row["layover"] . "<br>";
            echo "Price: OMR" . $row["price"] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "No matching records found.";
    }
}
if (isset($_GET['search_stay'])) {
    $search = $_GET['search_stay'];
    $sql = "SELECT * FROM stay WHERE `name` LIKE '%$search%' OR `location` LIKE '%$search%' OR `property_type` LIKE '%$search%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Stay ID: " . $row["stay_id"] . "<br>";
            echo "Name: " . $row["name"] . "<br>";
            echo "Location: " . $row["location"] . "<br>";
            echo "Property Type: " . $row["property_type"] . "<br>";
            echo "Price: OMR" . $row["price"] . "<br>";
            echo "Description" . $row["description"] . "<br>";
            echo "<img src='/" . $row["img"] . "' alt='Hotel image'><br>";
            echo "<hr>";
        }
    } else {
        echo "No matching records found.";
    }
}
$conn->close();
?>
