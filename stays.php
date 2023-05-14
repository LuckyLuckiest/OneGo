<?php 
    session_start();
    $stays = array();
    if (isset($_POST["1"])) {
        array_push($stays, 1);
        header("Location: checkin.php");
        $_SESSION["stays"] = $stays;
    }elseif(isset($_POST["2"])){
        array_push($stays, 2);
        header("Location: checkin.php");
        $_SESSION["stays"] = $stays;
    }elseif (isset($_POST["3"])) {
        array_push($stays,3);
        header("Location: checkin.php");
        $_SESSION["stays"] = $stays;
    }elseif (isset($_POST["4"])){
        array_push($stays,4);
        header("Location: checkin.php");
    }elseif (isset($_POST["5"])) {
        array_push($stays,5);
        header("Location: checkin.php");
        $_SESSION["stays"] = $stays;
    }elseif (isset($_POST["6"])) {
        array_push($stays,6);
        header("Location: checkin.php");
    }elseif (isset($_POST["7"])) {
        array_push($stays,7); 
        header("Location: checkin.php");
        $_SESSION["stays"] = $stays;
    }elseif (isset($_POST["8"])) {
        array_push($stays,8);
        header("Location: checkin.php");
        $_SESSION["stays"] = $stays;
    }


?>


<html lang="en">

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
                        <a href="car-rental.php">
                            <li>Car rentals <span class="bi bi-car-front-fill"></span></li>
                        </a>
                        <a href="flights.html">
                            <li>Flights <span class="bi bi-airplane-fill"></span></li>
                        </a>
                        <a href="stays.php" id="active">
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
        <div class="picture">
            <img src="assets/hotel.png" alt="hotel" class="img-fluid" />
        </div>
        <!-- Every page contains a title -->
        <hr>
        <h1 class="title">Stays</h1>
        <hr>
        <p id="description">
            Each of our stays is carefully selected for its unique character and quality, ensuring that you'll enjoy a
            comfortable and memorable stay. From the finest linens to the latest technology, we've thought of everything
            to make your stay as enjoyable as possible
        </p>



        <div class="customer-service">
            <div class="container" style="padding-top:25px; padding-bottom:25px;">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <h2>Famous hotels</h2>
                    </div>
                    <div class="col-2">
                        <img src="assets/hotels/hotellogo1.png" alt="BLUESTEM HOTEL" class="image">
                    </div>
                    <div class="col-2">
                        <img src="assets/hotels/hotellogo2.png" alt="TORVOK HOTEL" class="image">
                    </div>
                    <div class="col-2">
                        <img src="assets/hotels/hotellogo3.png" alt="BASECAMP" class="image">
                    </div>
                    <div class="col-2">
                        <img src="assets/hotels/hotellogo4.png" alt="MOUNTAIN LODGE" class="image">
                    </div>
                    <div class="col-2">
                        <img src="assets/hotels/hotellogo5.png" alt="KAVELRI GRAND" class="image">
                    </div>
                </div>
            </div>
        </div>




        <div class="container pb-2">
            <div class="row justify-content-md-center">
                <div class="card text-white mx-3 my-3">
                    <img class="card-img-top" src="assets/hotels/hotel1.jpg" alt="Kompose Boutique Hotel Sarasota">
                    <div class="card-body">
                        <h4 class="card-title">Kompose Boutique Hotel Sarasota</h4>
                        <p class="card-text">Location : USA</p>
                        <p class="card-text">Price : 33 R.O for one night</p>
                    </div>
                    <form action="stays.php" method="post">
                        <input type="submit" name="1" class="btn btn-outline-dark" style="margin-top: 10px;"  value="Rent">
                    </form>
                </div>
                <div class="card  text-white mx-3 my-3">
                    <img class="card-img-top" src="assets/hotels/hotel2.jpg" alt="Kananaskis Mountain Lodge">
                    <div class="card-body">
                        <h4 class="card-title">Kananaskis Mountain Lodge</h4>
                        <p class="card-text">Location : USA</p>
                        <p class="card-text">Price : 28 RO for 1 night</p>
                    </div>
                    <form action="stays.php" method="post">
                        <input type="submit" name="2" class="btn btn-outline-dark" style="margin-top: 10px;"  value="Rent">
                    </form>
                </div>

                <div class="card text-white mx-3 my-3">
                    <img class="card-img-top" src="assets/hotels/hotel3.PNG" alt="Arizona Biltmore">
                    <div class="card-body">
                        <h4 class="card-title">Arizona Biltmore</h4>
                        <p class="card-text">Location : USA</p>
                        <p class="card-text">Price : 55 R.O for one night</p>
                    </div>
                    <form action="stays.php" method="post">
                        <input type="submit" name="3" class="btn btn-outline-dark" style="margin-top: 10px;"  value="Rent">
                    </form>
                </div>

                <div class="card text-white mx-3 my-3">
                    <img class="card-img-top" src="assets/hotels/hotel5.PNG" alt="Tropical Islands">
                    <div class="card-body">
                        <h4 class="card-title">Tropical Islands</h4>
                        <p class="card-text">Location : Germany</p>
                        <p class="card-text">Price : 34 R.O for one night</p>
                    </div>
                    <form action="stays.php" method="post">
                        <input type="submit" name="4" class="btn btn-outline-dark" style="margin-top: 10px;"  value="Rent">
                    </form>orm>
                </div>

                <div class="card text-white mx-3 my-3">
                    <img class="card-img-top" src="assets/hotels/hotel4.PNG" alt="Boutique Hotel">
                    <div class="card-body">
                        <h4 class="card-title">Boutique Hotel</h4>
                        <p class="card-text">Location : USA</p>
                        <p class="card-text">Price : 87 R.O for one night</p>
                    </div>
                    <form action="stays.php" method="post">
                        <input type="submit" name="5" class="btn btn-outline-dark" style="margin-top: 10px;"  value="Rent">
                    </form>
                </div>

                <div class="card  text-white mx-3 my-3">
                    <img class="card-img-top" src="assets/hotels/hotel6.png" alt="Hard Roch Hotel">
                    <div class="card-body">
                        <h4 class="card-title">Hard Roch Hotel</h4>
                        <p class="card-text">Location : London</p>
                        <p class="card-text">Price : 133 RO for 1 night</p>
                    </div>
                    <form action="stays.php" method="post">
                        <input type="submit" name="6" class="btn btn-outline-dark" style="margin-top: 10px;"  value="Rent">
                    </form>
                </div>

                <div class="card  text-white mx-3 my-3">
                    <img class="card-img-top" src="assets/hotels/hotel7.png" alt="Nobu Hotel">
                    <div class="card-body">
                        <h4 class="card-title">Nobu Hotel</h4>
                        <p class="card-text">Location : London</p>
                        <p class="card-text">Price : 260 RO for 1 night</p>
                    </div>
                    <form action="stays.php" method="post">
                        <input type="submit" name="7" class="btn btn-outline-dark" style="margin-top: 10px;"  value="Rent">
                    </form>
                </div>

                <div class="card  text-white mx-3 my-3">
                    <img class="card-img-top" src="assets/hotels/hotel8.png" alt="Ritz Paris">
                    <div class="card-body">
                        <h4 class="card-title">Ritz Paris</h4>
                        <p class="card-text">Location : France</p>
                        <p class="card-text">Price : 243 RO for 1 night</p>
                    </div>
                    <form action="stays.php" method="post">
                        <input type="submit" name="8" class="btn btn-outline-dark" style="margin-top: 10px;"  value="Rent">
                    </form>
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
    body main .customer-service .container img {
        border-radius: 5px;
        border: 2px solid #5c5b5b;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }


    body main p#description {
        width: 50%;
        margin: auto;
        color: #F2F2F2;
        font-size: 20px;
        text-align: center;
        text-shadow: 2px 1px 5px rgba(242, 244, 243, 0.4);
    }

    div.card {
        width: 25%;
        height: 25rem;
        padding: 20px;
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
