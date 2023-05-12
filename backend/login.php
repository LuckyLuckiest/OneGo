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

// getting the email and password
$email = $_POST["emailadd"];
$pass = $_POST["pwd"];

// selecting the data
$cmd = "SELECT * FROM user WHERE email='$email' AND password='$pass'";

// run the query
$result = $conn->query($cmd);

if ($result->num_rows == 1) {
    // returning back to the main screen
    $conn->close();
    header("Location: /index.html");
    exit;
} else {
    // closing the connection
    $conn->close();
}

?>