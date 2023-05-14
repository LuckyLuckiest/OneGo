<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}

$stays = array();
if (isset($_SESSION["stays"])) {
    if (count($_SESSION["stays"]) >  0) {

        foreach ($_SESSION["stays"] as $id) {
            $sql = "SELECT * FROM stay WHERE stay_id = $id";
            $result = mysqli_query($conn, $sql);

            // 3. Store the rows in an array
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                foreach ($row as $key => $value) {
                    array_push($stays, $value);
                }
            }
        }
    }
}


$cars = array();
if (isset($_SESSION["cars"])) {
    if (count($_SESSION["cars"]) >  0) {

        foreach ($_SESSION["cars"] as $id) {
            $sql = "SELECT * FROM car_rental WHERE car_id = $id";
            $result = mysqli_query($conn, $sql);

            // 3. Store the rows in an array
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                foreach ($row as $key => $value) {
                    array_push($cars, $value);
                }
            }
        }
    }
}

if (isset($_POST["submit"])) {
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/web-uni.css">
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" href="styles/footer.css">
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
            </ul>
        </nav>
    </header>


    <!-- All the content of the page is here -->
    <main>
        <!-- Every page contains a title -->
        <h1 class="title">Check in</h1>
        <div id="display" style="height: fit-content; font-size: 15px; color:white; margin: 20px;">
            <h1 id="stays"></h1>
            <table id="display_table">
            </table>
        </div>


        <div id="display_1" style="height: fit-content; font-size: 15px; color:white; margin: 20px;">
            <h1 id="cars"></h1>
            <table id="display_table_1">
            </table>
        </div>
        <div class="container">
            <div class="container-item">
                <form action="checkin.php" method="post">
                    <h2>Payment</h2>

                    <br>

                    <label for="name">Name on Card</label>
                    <input type="text" name="name" required>

                    <label for="Credit">Credit card number</label>
                    <input type="text" name="Credit" required>

                    <label for="CVV">CVV</label>
                    <input type="text" name="CVV" required>


                    <label for="Mouth">Exp Month</label>
                    <input type="text" name="Exp Mouth" required>


                    <label for="Year">Exp Year</label>
                    <input type="text" name="Exp Year" required>

                    <h2>Billing Address</h2>

                    <br>

                    <label for="Name">Full Name</label>
                    <input type="text" name="Name" required>

                    <label for="email">Email</label>
                    <input type="email" name="email" required>

                    <label for="Address">Address</label>
                    <input type="text" name="Address" required>

                    <label for="City">City</label>
                    <input type="text" name="City" required>

                    <input type="submit" name="submit" value="pay">

                </form>
            </div>
            <br>
        </div>
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
    <script>
        function createStaystable() {
            var div = document.getElementById("display");
            var h1 = document.getElementById("stays");
            h1.innerHTML = 'stays';
            h1.style.textAlign = "center"

            // div.appendChild(document.createElement("h1").innerHTML = "stays");
            var table = document.getElementById("display_table");
            var arr = ["name", "location", "price", "property_type", "discription"];
            var tr = document.createElement("tr");
            table.appendChild(tr);
            for (const iterator of arr) {
                var td = document.createElement("td");
                td.innerHTML = iterator;
                tr.appendChild(td);
            }


        }

        function createCarRentalsTable() {
            var div = document.getElementById("display_1");
            var h1 = document.getElementById("cars");
            h1.innerHTML = 'cars';
            h1.style.textAlign = "center"

            // div.appendChild(document.createElement("h1").innerHTML = "cars");
            var table = document.getElementById("display_table_1");
            var arr = ["price", "name", "type", "decription"];
            var tr = document.createElement("tr");
            table.appendChild(tr);
            for (const iterator of arr) {
                var td = document.createElement("td");
                td.innerHTML = iterator;
                tr.appendChild(td);
            }


        }
        // Parse the JSON object
        var stays_rows = <?php echo json_encode($stays); ?>;
        stays_rows.shift();
        stays_rows.pop();

        if (stays_rows.length > 0) {
            createStaystable();
            var table = document.getElementById("display_table");
            var tr = document.createElement("tr");
            table.appendChild(tr);
            for (const iterator of stays_rows) {
                var td = document.createElement("td");
                td.innerHTML = iterator;
                tr.appendChild(td);
            }
            var total_stays = stays_rows[2];
        } else {
            total_stays = 0
        }
        var cars = <?php echo json_encode($cars); ?>;
        cars.shift();
        cars.pop();
        if (cars.length > 0) {
            createCarRentalsTable();
            var table = document.getElementById("display_table_1");
            var tr = document.createElement("tr");
            table.appendChild(tr);
            for (const iterator of cars) {
                var td = document.createElement("td");
                td.innerHTML = iterator;
                tr.appendChild(td);
            }
            var total_cars = cars[0];
        } else {
            total_cars = 0
        }

        var total = parseInt(total_cars) + parseInt(total_stays);
        var div = document.getElementById("display_1");
        var p = document.createElement("p");
        p.innerHTML = `total = ${total}`;
        p.style.textAlign = "center";
        div.appendChild(p);
    </script>
</body>

</html>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
    }

    .container {
        height: fit-content;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }

    .container-item {
        width: 500px;
        height: 1000px;
        padding: 20px 20px;
        margin: 0px;
        border: 1px solid #ccc;
        background-color: #f2f2f2;
        border-radius: 10px;
        margin-bottom: 90px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        font-weight: bold;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        padding: 10px;
        border-radius: 5px;
        border: none;
        margin-bottom: 20px;
    }

    textarea {
        height: 100px;
    }

    input[type="submit"] {
        background-color: #333;
        color: #fff;
        border: 1px solid #333;
        padding: 10px 20px;
        border-radius: 5px;
        margin-top: 10px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: white;
        color: #333;
        border: 1px solid #333;
    }
</style>