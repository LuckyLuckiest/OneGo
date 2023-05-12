-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 10:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_rental`
--

CREATE TABLE `car_rental` (
  `car_id` int(11) UNSIGNED NOT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_rental`
--

INSERT INTO `car_rental` (`car_id`, `price`, `name`, `type`, `description`, `img`) VALUES
(1, 455, 'Lamborghini Aventador SVJ', 'SuperCar', 'The Lamborghini Aventador SVJ is a limited edition supercar with a V12 engine, advanced aerodynamics, and cutting-edge technology, capable of reaching top speeds of over 217 mph.', 'assets/cars/Aventador-SVJ.jpg'),
(2, 570, 'Bugatti Chiron', 'SuperCar', 'The Bugatti Chiron is a hypercar known for its unparalleled performance and engineering, featuring an 8.0-liter quad-turbocharged W16 engine that produces over 1,500 horsepower and a top speed of over 261 mph.', 'assets/cars/Bugatti.jpg'),
(3, 760, 'Rolls-Royce', 'SuperCar', 'Rolls-Royce is a luxury automobile brand known for its iconic Spirit of Ecstasy hood ornament, meticulous craftsmanship, and high-end features that offer a smooth, comfortable driving experience.', 'assets/cars/Rolls.jpg'),
(4, 570, 'McLaren 720S', 'SuperCar', 'The McLaren 720S is a high-performance supercar that offers exceptional speed and handling, featuring a 4.0-liter twin-turbo V8 engine, innovative aerodynamics, and advanced driver assistance technologies.', 'assets/cars/Mclaren.jpg'),
(5, 445, 'Ferrari', 'SuperCar', 'Ferrari is an iconic Italian luxury sports car manufacturer known for its high-performance supercars and racing heritage, featuring distinctive designs, powerful engines, and cutting-edge technology.', 'assets/cars/Ferrari.jpeg'),
(6, 340, 'Audi R8', 'SuperCar', 'The Audi R8 is a high-performance sports car that offers exceptional handling and acceleration, featuring a mid-engine layout, Quattro all-wheel drive system, and advanced technology such as Audi Virtual Cockpit and MMI Navigation plus.', 'assets/cars/Audi.jpg'),
(7, 38, 'Toyota Camry', 'PersonalCar', 'The Toyota Camry is a reliable and practical mid-size sedan that offers a comfortable ride, fuel efficiency, and advanced safety features such as Toyota Safety Sense, making it a popular choice for everyday driving.', 'assets/cars/Camry.jpg'),
(8, 30, 'Honda Accord', 'PersonalCar', 'The Honda Accord is a mid-size sedan that offers a well-rounded package of reliability, comfort, and driving performance, featuring fuel-efficient engines, a spacious interior, and advanced safety features such as Honda Sensing technology.', 'assets/cars/Accord.jpg'),
(9, 27, 'Hyundai Sonata', 'PersonalCar', 'The Hyundai Sonata is a mid-size sedan that offers a comfortable and spacious interior, fuel-efficient engines, and advanced safety features such as Blind-Spot Collision-Avoidance Assist and Forward Collision-Avoidance Assist, making it a great choice for families and commuters.', 'assets/cars/Sonata.jpg'),
(10, 25, 'Toyota Corolla', 'PersonalCar', 'The Toyota Corolla is a compact car that is known for its reliability, fuel efficiency, and practicality, offering advanced safety features such as Toyota Safety Sense and a comfortable interior with plenty of cargo space.', 'assets/cars/Corolla.jpg'),
(11, 26, 'Honda Civic', 'PersonalCar', 'The Honda Civic is a popular compact car known for its fuel efficiency, practicality, and fun-to-drive character, offering a range of engines, a spacious and versatile interior, and advanced safety features such as Honda Sensing technology.', 'assets/cars/Civic.jpg'),
(12, 25, 'Hyundai Accent', 'PersonalCar', 'The Hyundai Accent is a subcompact car that offers a great value for budget-conscious drivers, featuring a fuel-efficient engine, a comfortable and spacious interior, and advanced safety features such as Forward Collision-Avoidance Assist.', 'assets/cars/Accent.jpg'),
(13, 50, 'Tesla Model X', 'ElectricCar', 'The Tesla Model X is a luxury electric SUV known for its advanced technology, impressive acceleration, and long-range capabilities, featuring Falcon Wing doors, a panoramic windshield, Autopilot advanced safety and convenience features, and Ludicrous Mode acceleration that can propel the vehicle from 0 to 60 mph in just over 2 seconds.', 'assets/cars/Tesla.jpeg'),
(14, 60, 'Hummer EV', 'ElectricCar', 'The Hummer EV is an electric pickup truck that offers impressive performance and capability, featuring advanced off-road technologies such as CrabWalk mode, a powerful electric powertrain with up to 1,000 horsepower, and advanced features such as the Infinity Roof and Super Cruise autonomous driving technology.', 'assets/cars/HEV.jpg'),
(15, 65, 'Rivian R1S', 'ElectricCar', 'The Rivian R1S electric SUV is a high-performance and luxury electric vehicle that offers impressive range and off-road capabilities, featuring up to 7 seats, advanced battery technology, and a powerful electric powertrain that delivers up to 750 horsepower and 829 lb-ft of torque.', 'assets/cars/R1s.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_id` int(11) NOT NULL,
  `flight` varchar(45) DEFAULT NULL,
  `from` varchar(45) DEFAULT NULL,
  `to` varchar(45) DEFAULT NULL,
  `departure` time DEFAULT NULL,
  `return` time DEFAULT NULL,
  `layover` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_id`, `flight`, `from`, `to`, `departure`, `return`, `layover`, `price`) VALUES
(1, 'FL001', 'New York', 'Dubai', '10:00:00', '19:00:00', 1, 570),
(2, 'FL002', 'Dubai', 'Delhi', '18:00:00', '22:00:00', 2, 190),
(3, 'FL003', 'Delhi', 'New York', '14:00:00', '21:00:00', 1, 456),
(4, 'FL004', 'New York', 'Delhi', '09:00:00', '19:00:00', 2, 342),
(5, 'FL005', 'Delhi', 'Dubai', '06:00:00', '12:00:00', 2, 190),
(6, 'FL006', 'Dubai', 'New York', '00:00:00', '17:00:00', 2, 418),
(7, 'FL007', 'Dubai', 'Muscat', '04:00:00', '07:00:00', 1, 57),
(8, 'FL008', 'Muscat', 'New York', '09:00:00', '20:00:00', 2, 495),
(9, 'FL009', 'Muscat', 'Delhi', '20:00:00', '00:00:00', 1, 114),
(10, 'FL010', 'New York', 'Muscat', '02:00:00', '20:00:00', 1, 610);

-- --------------------------------------------------------

--
-- Table structure for table `stay`
--

CREATE TABLE `stay` (
  `stay_id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `property_type` varchar(45) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stay`
--

INSERT INTO `stay` (`stay_id`, `name`, `location`, `price`, `property_type`, `description`, `img`) VALUES
(1, 'Kompose Boutique Hotel Sarasota', 'USA', 33, 'Hotel', 'Kompose Boutique Hotel Sarasota is a modern and stylish hotel in the heart of Sarasota, offering 24 rooms and suites with a chic and contemporary design inspired by music. It features a rooftop pool and lounge, fitness center, and on-site restaurant and bar. Guests can easily explore Sarasota\'s cultural scene and beaches from the hotel\'s central location.', 'assets/hotels/hotel1.jpg'),
(2, 'Kananaskis Mountain Lodge', 'Canada', 28, 'Lodge', 'Kananaskis Mountain Lodge is a luxurious resort nestled in the heart of the Canadian Rockies in Alberta, Canada. The lodge offers a variety of accommodation options, including rooms, suites, and private cabins, all with stunning views of the surrounding mountains. The property boasts a range of amenities, such as a full-service spa, indoor and outdoor pools, multiple dining options, and a fitness center. Outdoor enthusiasts can enjoy the nearby hiking trails, mountain biking, skiing, and other recreational activities. With its idyllic location and top-notch facilities, Kananaskis Mountain Lodge is a perfect retreat for travelers seeking relaxation, adventure, and natural beauty.', 'assets/hotels/hotel2.jpg'),
(3, 'Arizona Biltmore', 'USA', 55, 'Resort', 'Arizona Biltmore is a historic and iconic luxury resort located in Phoenix, Arizona. The property, designed by legendary architect Frank Lloyd Wright, offers a range of accommodations, from guest rooms to private villas, each exquisitely decorated and furnished. The resort boasts a variety of amenities, including multiple outdoor pools, a full-service spa, fitness center, and a championship golf course. Guests can indulge in gourmet dining experiences at the on-site restaurants, relax in the lush gardens, or explore the nearby hiking trails and scenic wonders of the Sonoran Desert. With its rich history, elegant design, and world-class facilities, Arizona Biltmore is a top destination for luxury travelers.', 'assets/hotels/hotel3.PNG'),
(4, 'Tropical Islands', 'Germany', 34, 'Island', 'Tropical Islands is a unique and sprawling resort located in Krausnick, Germany, housed within the world\'s largest freestanding dome structure. The resort offers a variety of indoor and outdoor activities, including multiple water slides, pools, and a tropical lagoon, as well as sports facilities, a mini-golf course, and a rainforest-themed adventure park. Guests can also choose from a variety of accommodations, from cozy tents to comfortable rooms and suites, or even spend a night in a tropical-themed lodge in the heart of the rainforest. With its year-round tropical climate, fun-filled activities, and unique atmosphere, Tropical Islands is a perfect getaway for families and adventure seekers alike.', 'assets/hotels/hotel5.PNG'),
(5, 'Boutique Hotel', 'USA', 87, 'Hotel', 'A boutique hotel is a small, stylish, and often luxurious hotel, typically offering personalized service and unique, intimate accommodations. These hotels are usually independently owned and operated, with a focus on providing a distinctive atmosphere and guest experience. Boutique hotels often have fewer rooms than traditional hotels, with a strong emphasis on design, decor, and attention to detail. They may also offer unique amenities, such as on-site restaurants or spas, and may be located in trendy or offbeat neighborhoods. Overall, boutique hotels offer a more personalized and intimate travel experience, often catering to travelers seeking a one-of-a-kind stay.', 'assets/hotels/hotel4.PNG'),
(6, 'Hard Roch Hotel', 'London', 133, 'Hotel', 'Hard Rock Hotel is a chain of hotels known for its rock-and-roll themed decor, music-related amenities, and entertainment offerings. The hotels feature an extensive collection of music memorabilia on display, as well as on-site music venues, bars, and restaurants. The guest rooms and suites are typically modern and stylish, with a range of amenities such as music-themed bedding, state-of-the-art technology, and luxurious bath products. Many of the hotels also offer rock star suites with additional perks and services. Beyond the accommodations, guests can enjoy a variety of activities such as live music performances, DJ sets, and music-themed events. The Hard Rock Hotel brand has locations in various cities around the world, including Las Vegas, Orlando, and Bali.', 'assets/hotels/hotel6.png'),
(7, 'Nobu Hotel', 'London', 260, 'Hotel', 'Nobu Hotel is a luxury hotel brand that combines sophisticated design and exceptional dining experiences. Founded by world-renowned chef Nobu Matsuhisa, the hotels are designed to reflect a Japanese aesthetic with contemporary touches. The guest rooms and suites are elegantly appointed, with minimalist decor and high-end amenities. Many of the hotels feature on-site Nobu restaurants, serving up Matsuhisa\'s signature dishes alongside other international cuisine. Other amenities may include spas, fitness centers, and rooftop pools. Nobu Hotel has locations in several cities around the world, including Los Angeles, London, and Miami Beach, with each hotel offering its own unique interpretation of the brand\'s distinctive style and cuisine.', 'assets/hotels/hotel7.png'),
(8, 'Ritz Paris', 'France', 243, 'Hotel', 'Ritz Paris is an iconic luxury hotel located in the heart of Paris, France. The hotel, which first opened in 1898, has a rich history and has welcomed many famous guests over the years, including Ernest Hemingway, Coco Chanel, and Princess Diana. The guest rooms and suites are exquisitely designed with classic French style and offer modern amenities such as flat-screen TVs and high-speed internet. The hotel features a range of restaurants and bars, including L\'Espadon, a Michelin-starred restaurant, as well as a beautiful garden and a world-class spa. The Ritz Paris is ideally located for exploring the city\'s top attractions, including the Louvre Museum, the Champs-Elysées, and the Eiffel Tower. Overall, the Ritz Paris is a luxurious and elegant destination for travelers seeking a truly exceptional Parisian experience.', 'assets/hotels/hotel8.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `email` mediumtext DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Salim', 'Al-Zadjali', 's135683@student.squ.edu.om', 'pass1234'),
(2, 'Al-Waleed', 'Al-Hadrami', 's136442@student.squ.edu.om', 'p1234'),
(3, 'Hashim', 'Yousuf', 's132851@student.squ.edu.om', '1234'),
(12, 'Ashley', 'Martinez', 'ashley.martinez@mail.com', 'uG4pD#tV9Z'),
(13, 'Daniel', 'Kim', 'daniel.kim@mail.com', 'Bc8#yZ9cW2'),
(14, 'Olivia', 'Johnson', 'olivia.johnson@mail.com', 'Gm3!sF4bL6'),
(15, 'Ryan', 'Lee', 'ryan.lee@mail.com', 'Hj6$nD8xZ5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_rental`
--
ALTER TABLE `car_rental`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `stay`
--
ALTER TABLE `stay`
  ADD PRIMARY KEY (`stay_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_rental`
--
ALTER TABLE `car_rental`
  MODIFY `car_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stay`
--
ALTER TABLE `stay`
  MODIFY `stay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
