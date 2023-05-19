<?php
session_start();
class DatabaseReader
{
	private $conn; // Database connection

	public function __construct($host, $username, $password, $database)
	{
		// Create a new database connection
		$this->conn = new mysqli($host, $username, $password, $database);

		// Check if the connection was successful
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}
	}

	public function getAllRows($tableName)
	{
		$result = $this->conn->query("SELECT * FROM " . $tableName);

		$rows = array();

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$rows[] = $row;
			}
		}

		return $rows;
	}

	public function closeConnection()
	{
		$this->conn->close();
	}
	public function convertTOJson($arr)
	{
		$jsonString = json_encode($arr);

		// Write the JSON string to a file using file_put_contents()
		$file = 'data.json';
		file_put_contents($file, $jsonString);
	}
}

$host = "localhost";
$username = "root";
$password = "";
$database = "project";

$reader = new DatabaseReader($host, $username, $password, $database);
$rows = $reader->getAllRows("flight");
$reader->convertTOJson($rows);
$reader->closeConnection();


if (isset($_POST["ok"])) {
	$_SESSION["flight_id"] = $_POST["flight_id"];
	header("Location: checkin.php");
}


?>

<html lang="en">

<head>
	<link rel="stylesheet" href="styles/web-uni.css">
	<link rel="stylesheet" href="styles/navigation.css">
	<link rel="stylesheet" href="styles/footer.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<title>One Go</title>
</head>

<body>
	<!-- This is the navigation tab and would be placed at the top of every page -->
	<header>
		<div class="logo">
			<a href="index.html"><img src="assets/logo.png" /></a>
		</div>
		<nav>
			<ul>
				<a href="index.html">
					<li>Home</li>
				</a>
				<li class="dropdown">
					Services <span class="bi bi-caret-down-fill" style="font-size: 10px;"></span>
					<ul>
						<a href="car-rental.php">
							<li>Car rentals <span class="bi bi-car-front-fill"></span></li>
						</a>
						<a href="flights.html">
							<li>Flights <span class="bi bi-airplane-fill"></span></li>
						</a>
						<a href="stays.php">
							<li>Stays <span class="bi bi-building-fill"></span></li>
						</a>
					</ul>
				</li>
				<a href="contact.html">
					<li>Contact Us</li>
				</a>
				<a href="about.html">
					<li>About Us</li>
				</a>
				<a href="login.html" target="_blank">
					<li class="split">Log in</li>
				</a>
				<li class="dropdown split">
					Technical <span class="bi bi-caret-down-fill" style="font-size: 10px;"></span>
					<ul>
						<a href="calculation.html">
							<li>Calculation</li>
						</a>
						<a href="questionnaire.html">
							<li>Questionnaire</li>
						</a>
						<a href="funpage.html">
							<li>Fun</li>
						</a>
					</ul>
				</li>
				<li class="dropdown split">
					Database <span class="bi bi-caret-down-fill" style="font-size: 10px;"></span>
					<ul>
						<a href="add.html">
							<li>Add</li>
						</a>
						<a href="delete.html">
							<li>Delete</li>
						</a>
						<a href="search.html">
							<li>Search</li>
						</a>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	<!-- All the content of the page is here -->
	<main>
		<!-- Every page contains a title -->
		<h1 class="title">Flight Schedule</h1>

		<table id="flightsTable" style="font-size: x-large; color: white;">
			<thead id="flights_table_head">
				<tr>
					<th>flight id</th>
					<th>Flight Number</th>
					<th>Departure City</th>
					<th>Departure Time</th>
					<th>Arrival City</th>
					<th>Arrival Time</th>
					<th>Layovers</th>
					<th>Price</th>
				</tr>

			</thead>
			<tbody id="flight_table_body">
			</tbody>
		</table>
		<div id="form_div">
			<form action="schedule.php" method="post" id="form">
				<label> Enter the flight id:</label><br>
				<input type="text" name="flight_id" id="flight_id"><br>
				<input type="submit" name="ok" id="ok">
			</form>
		</div>
		<style>
			#form_div {
				margin: 20 auto;
				height: 200px;
				width: 60%;
				background-color: rgb(240, 255, 255);
				display: flex;
				justify-content: center;
			}

			#form {
				margin: 40px;
			}

			input {
				margin: 9px;
			}

			#flight_id {
				width: 200px;
				border-width: 1px;
				border-radius: 3px;
				height: 25px;
				font-size: 15px;
			}

			#ok {
				width: 200px;
				height: 25px;
				background-color: rgb(100, 149, 237);
				border-radius: 5px;
				border-width: 1px;
			}

			table {
				margin-bottom: 3%;
				border-collapse: collapse;
				width: 100%;
			}

			th,
			td {
				text-align: left;
				padding: 27px;
			}

			th {
				color: lightslategray;
				border: white;
			}

			tr:nth-child(even) {
				background-color: grey;
			}
		</style>

	</main>
	<!-- This would hold the footer of the page -->
	<footer>
		<h2>One Go</h2>
		<ul id="social">
			<a href="https://gmail.com" target="_blank">
				<li class="bi bi-envelope"></li>
			</a>
			<a href="https://whatsapp.com" target="_blank">
				<li class="bi bi-whatsapp"></li>
			</a>
			<a href="https://instagram.com" target="_blank">
				<li class="bi bi-instagram"></li>
			</a>
			<a href="https://youtube.com" target="_blank">
				<li class="bi bi-youtube"></li>
			</a>
			<a href="https://tiktok.com" target="_blank">
				<li class="bi bi-tiktok"></li>
			</a>
			<a href="https://twitter.com" target="_blank">
				<li class="bi bi-twitter"></li>
			</a>
		</ul>
		<p>Copyright &copy; 2023 OneGo</p>
	</footer>
</body>

</html>

<style>
	table {
		margin-bottom: 3%;
		width: 100%;
	}

	th,
	td {
		text-align: left;
		padding: 8px;
	}

	th {
		color: lightslategray;
	}

	main p {
		color: white;
		font-size: x-large;
		text-align: center;
		width: 50%;
		margin: auto;
	}

	main h2 {
		text-align: center;
		font-size: xx-large;
		color: gray;
		font-style: oblique;
	}
</style>



<script>
	const request = new XMLHttpRequest();
	request.open('GET', 'data.json', true);
	request.onload = function() {
		if (request.status >= 200 && request.status < 400) {
			const jsonData = JSON.parse(request.responseText);
			var array = jsonData;
			generateTable(array);
		} else {
			console.error('Failed to load JSON data.');
		}
	};
	request.onerror = function() {
		console.error('Failed to load JSON data.');
	};
	request.send();


	function generateTable(array) {
		var table = document.getElementById("flightsTable");
		var thead = document.getElementById("flights_table_head");
		var tbody = document.getElementById("flight_table_body");



		// Create table rows
		array.forEach(function(item) {
			var row = document.createElement('tr');
			for (var key in item) {
				var cell = document.createElement('td');
				cell.appendChild(document.createTextNode(item[key]));
				row.appendChild(cell);
			}
			tbody.appendChild(row);
		});
		table.appendChild(tbody);

		return table;
	}
</script>