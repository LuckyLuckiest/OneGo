<?php

$host = "localhost";
$user = "root";
$password = "";
$port = 3306;
$database = "project";

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["emailadd"];
$pwd = $_POST["pwd"];

$cmd = "INSERT INTO user (first_name, last_name, password, email) VALUES ('$fname', '$lname', '$pwd', '$email')";

$conn->query($cmd);

$conn->close();

header("Location: /register.html");
exit;
?>