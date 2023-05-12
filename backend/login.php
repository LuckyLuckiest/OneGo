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

$email = $_POST["emailadd"];
$pass = $_POST["pwd"];

$cmd = "SELECT * FROM user WHERE email='$email' AND password='$pass'";

$result = $conn->query($cmd);

$conn->close();

header("Location: /index.html");
exit;

?>