<?php

// getting the database credientials
$host = "localhost";
$user = "root";
$password = "";
$port = 3306;
$database = "project";

// connecting to the database
$conn = new mysqli($host, $user, $password, $database, $port);

// if connection failed
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// getting first name, last name, email, and password
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["emailadd"];
$pwd = $_POST["pwd"];

// adding the data to the table
$cmd = "INSERT INTO user (first_name, last_name, password, email) VALUES ('$fname', '$lname', '$pwd', '$email')";

// query it
$conn->query($cmd);

// close the connection
$conn->close();

// load to register.html
header("Location: /register.html");
exit;
?>