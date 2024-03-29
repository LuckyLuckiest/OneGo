<?php
session_start();
$cars = array();
if (isset($_POST["1"])) {
    array_push($cars, 1);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["2"])) {
    array_push($cars, 2);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["3"])) {
    array_push($cars, 3);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["4"])) {
    array_push($cars, 4);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["5"])) {
    array_push($cars, 5);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["6"])) {
    array_push($cars, 6);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["7"])) {
    array_push($cars, 7);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["8"])) {
    array_push($cars, 8);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["9"])) {
    array_push($cars, 9);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["10"])) {
    array_push($cars, 10);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["11"])) {
    array_push($cars, 11);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["12"])) {
    array_push($cars, 12);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["13"])) {
    array_push($cars, 13);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST['14'])) {
    array_push($cars, 14);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
} elseif (isset($_POST["15"])) {
    array_push($cars, 15);
    header("Location: checkin.php");
    $_SESSION["cars"] = $cars;
}

?>


<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
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
                <li class="dropdown" id="active">
                    Services <span class="bi bi-caret-down-fill" style="font-size: 10px;"></span>
                    <ul>
                        <a href="car-rental.php" id="active">
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
        <!-- Background image for this page -->
        <div class="picture">
            <img src="assets/car_rental_background.jpg" alt="Car in highway" />
        </div>

        <!-- Every page contains a title -->
        <h1 class="title">Car Rentals</h1>
        <p id="description">
            Discover the ultimate driving experience with our supercars and casual vehicles. Great deals at great prices
            make your purchase stress-free
        </p>

        <div class="customer-service">
            <div class="container" style="padding-top:25px; padding-bottom:25px;">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <h2>Popular car hire brands</h2>
                    </div>
                    <div class="col-2">
                        <img src="assets/cars/brands/Europcar.png" alt="Europcar">
                    </div>
                    <div class="col-2">
                        <img src="assets/cars/brands/Interrent.png" alt="Interrent">
                    </div>
                    <div class="col-2">
                        <img src="assets/cars/brands/SixtOman.png" alt="SixtOman">
                    </div>
                    <div class="col-2">
                        <img src="assets/cars/brands/Thrifty.png" alt="Thrifty">
                    </div>
                    <div class="col-2">
                        <img src="assets/cars/brands/Enterprise.png" alt="Thrifty">
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h1 class="subtitle">SuperCars</h1>
        <hr>
        <div class="container">
            <div class="card col-order1">
                <img src="assets/cars/Aventador-SVJ.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The Lamborghini Aventador SVJ is a limited edition supercar with a V12 engine, advanced
                        aerodynamics, and cutting-edge technology, capable of reaching top speeds of over 217 mph.<br><br>
                        <strong> Price per day: 455 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="1" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
            <div class="card col-order1 ">
                <img src="assets/cars/Bugatti.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The Bugatti Chiron is a hypercar known for its unparalleled performance and engineering,
                        featuring an 8.0-liter quad-turbocharged W16 engine that produces over 1,500 horsepower and a
                        top speed of over 261 mph.<br><br>
                        <strong> Price per day: 570 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="2" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
            <div class="card col-order1">
                <img src="assets/cars/Rolls.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        Rolls-Royce is a luxury automobile brand known for its iconic Spirit of Ecstasy hood ornament,
                        meticulous craftsmanship, and high-end features that offer a smooth, comfortable driving
                        experience.<br><br>
                        <strong> Price per day: 760 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="3" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
            <div class="card col-order2">
                <img src="assets/cars/Mclaren.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The McLaren 720S is a high-performance supercar that offers exceptional speed and handling,
                        featuring a 4.0-liter twin-turbo V8 engine, innovative aerodynamics, and advanced driver
                        assistance technologies.<br><br>
                        <strong> Price per day: 570 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="4" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
            <div class="card col-order2">
                <img src="assets/cars/Ferrari.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        Ferrari is an iconic Italian luxury sports car manufacturer known for its high-performance
                        supercars and racing heritage, featuring distinctive designs, powerful engines, and cutting-edge
                        technology.<br><br><br>
                        <strong> Price per day: 445 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="5" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
            <div class="card col-order2">
                <img src="assets/cars/Audi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The Audi R8 is a high-performance sports car that offers exceptional handling and acceleration,
                        featuring a mid-engine layout, Quattro all-wheel drive system, and advanced technology such as
                        Audi Virtual Cockpit and MMI Navigation plus.<br><br>
                        <strong> Price per day: 340 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="6" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
        </div>

        <hr>
        <h1 class="subtitle">PersonalCars</h1>
        <h2 class="subtitle">(Sedans)</h2>
        <hr>
        <div class="container">
            <div class="card col-order1">
                <img src="assets/cars/Camry.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The Toyota Camry is a reliable and practical mid-size sedan that offers a comfortable ride, fuel
                        efficiency, and advanced safety features such as Toyota Safety Sense, making it a popular choice
                        for everyday driving.<br><br><br><br>
                        <strong> Price per day: 38 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="7" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
            <div class="card col-order1 ">
                <img src="assets/cars/Accord.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The Honda Accord is a mid-size sedan that offers a well-rounded package of reliability, comfort,
                        and driving performance, featuring fuel-efficient engines, a spacious interior, and advanced
                        safety features such as Honda Sensing technology.<br><br><br>
                        <strong> Price per day: 30 OMR</strong>

                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="8" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
            <div class="card col-order1">
                <img src="assets/cars/Sonata.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The Hyundai Sonata is a mid-size sedan that offers a comfortable and spacious interior,
                        fuel-efficient engines, and advanced safety features such as Blind-Spot Collision-Avoidance
                        Assist and Forward Collision-Avoidance Assist, making it a great choice for families and
                        commuters.<br><br>
                        <strong>Price per day: 27 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="9" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
            <div class="card col-order2">
                <img src="assets/cars/Corolla.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The Toyota Corolla is a compact car that is known for its reliability, fuel efficiency, and
                        practicality, offering advanced safety features such as Toyota Safety Sense and a comfortable
                        interior with plenty of cargo space.<br><br>
                        <strong> Price per day: 25 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="10" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
            <div class="card col-order2">
                <img src="assets/cars/Civic.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The Honda Civic is a popular compact car known for its fuel efficiency, practicality, and
                        fun-to-drive character, offering a range of engines, a spacious and versatile interior, and
                        advanced safety features such as Honda Sensing technology.<br><br>
                        <strong> Price per day: 26 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="11" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
            <div class="card col-order2">
                <img src="assets/cars/Accent.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The Hyundai Accent is a subcompact car that offers a great value for budget-conscious drivers,
                        featuring a fuel-efficient engine, a comfortable and spacious interior, and advanced safety
                        features such as Forward Collision-Avoidance Assist.<br><br>
                        <strong> Price per day: 25 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="12" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
        </div>

        <hr>
        <h1 class="subtitle">Electric</h1>
        <hr>
        <div class="container">
            <div class="card col-order1">
                <img src="assets/cars/Tesla.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The Tesla Model X is a luxury electric SUV known for its advanced technology, impressive
                        acceleration, and long-range capabilities, featuring Falcon Wing doors, a panoramic windshield,
                        Autopilot advanced safety and convenience features, and Ludicrous Mode acceleration that can
                        propel the vehicle from 0 to 60 mph in just over 2 seconds.<br><br>
                        <strong> Price per day: 50 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="13" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
            <div class="card col-order1 ">
                <img src="assets/cars/HEV.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The Hummer EV is an electric pickup truck that offers impressive performance and capability,
                        featuring advanced off-road technologies such as CrabWalk mode, a powerful electric powertrain
                        with up to 1,000 horsepower, and advanced features such as the Infinity Roof and Super Cruise
                        autonomous driving technology.<br><br>
                        <strong> Price per day: 60 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="14" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>
            <div class="card col-order1">
                <img src="assets/cars/R1s.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        The Rivian R1S electric SUV is a high-performance and luxury electric vehicle that offers
                        impressive range and off-road capabilities, featuring up to 7 seats, advanced battery
                        technology, and a powerful electric powertrain that delivers up to 750 horsepower and 829 lb-ft
                        of torque.<br><br>
                        <strong> Price per day: 65 OMR</strong>
                    </p>
                </div>
                <form action="car-rental.php" method="post">
                    <input type="submit" name="15" class="btn btn-outline-dark" style="margin-top: 10px;" value="Rent">
                </form>
            </div>


        </div>

        <div class="customer-service">
            <div class="container">
                <div class="card" style="height:fit-content;">
                    <a href="policy.html" style="text-decoration: none; color: inherit;">
                        <div class="card-body">
                            <p class="card-text" style="text-align: center; font-size:15px; font-weight:bold;font-style: italic;">Read
                                car rental policy</p>
                        </div>
                    </a>
                </div>
            </div>
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
</body>

</html>
<style>
    body main p#description {
        width: 50%;
        margin: auto;
        color: #F2F2F2;
        font-size: 20px;
        text-align: center;
        text-shadow: 2px 1px 5px rgba(242, 244, 243, 0.4);
    }

    body main .customer-service .container img {
        border-radius: 5px;
        border: 2px solid #5c5b5b;
    }

    body main hr {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    h1.subtitle {
        margin: 15px;
        padding: 0;
        text-align: center;
        font-size: 30px;
        font-weight: normal;
        color: rgba(255, 255, 255, 0.6);
        text-shadow: 1px 1px 5px #afadad;
    }

    h2.subtitle {
        margin: 0;
        padding: 0;
        text-align: center;
        font-size: 20px;
        font-weight: normal;
        color: rgba(255, 255, 255, 0.6);
        text-shadow: 1px 1px 5px #afadad;
    }

    div.card {
        width: 25%;
        height: 25rem;
        padding: 20px;
        padding-bottom: 50px;
        margin: 2%;
        box-sizing: content-box;
        background-color: rgba(119, 134, 127, 0.6);
        border-radius: 10px;
        box-shadow: 0px 0px 5px 5px rgba(20, 20, 20, 0.2);
    }

    div.card img {
        display: block;
        margin: auto;
        width: 95%;
        height: 10rem;
        border: 5px solid rgba(74, 123, 157, 0.3);
        border-radius: 10px;
        box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.2);
        object-fit: cover;
    }

    .card-text {
        text-align: justify;
    }
</style>