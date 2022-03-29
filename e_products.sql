-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 12:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_products`
--

CREATE TABLE `e_products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `e_products`
--

INSERT INTO `e_products` (`id`, `p_name`, `p_price`, `p_category`, `p_description`, `p_image`, `p_id`) VALUES
(2, 'VIVO VI20 PRO', '235999', 'Electronics', '16.94 centimeters (6.67-inch) FHD+ full screen dot display LCD multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution\r\n5020mAh lithium-polymer large battery providing talk-time of 29 hours and standby time of 556 hours | 18W fast charger in', 'images/1732265335.jpg', 'admin'),
(4, 'TV', '24000', 'Electronics', 'LG smart TVs are Internet-connected televisions that offer access to a world of entertainment. Enjoy movies, TV, games, videos and apps; LG’s smart TVs make entertaining the family easier than ever.', 'images/1407767663.jpg', 'admin'),
(7, 'cemera', '26000', 'Electronics', 'cenon', 'images/458991024.jpeg', 'admin'),
(8, 'HUL Pureit Eco', '13499', 'Electronics', 'HUL Pureit Eco Water Saver Mineral RO+UV+MF AS wall mounted/Counter top Black 10L Water Purifier', 'images/1799030323.jpeg', 'admin'),
(9, 'Dell 15 (2021)', '36999', 'Electronics', 'Dell 15 (2021) AMD Ryzen 3-3250U Laptop, 8GB DDR4, 256GB SSD, Windows 10 + MS Office, Radeon Graphics, 15.6 inches FHD Display, Carbon Black (Inspiron 3515, D560523WIN9BE), 1.8kg', 'images/672579478.jpeg', 'admin'),
(10, 'Whirlpool 1.5 Ton 5 Star Split Inverter AC', '34999', 'Electronics', 'Blue Star 0.8 Ton 3 Star Split Inverter AC - White  (IC309RBTU, Copper Condenser)', 'images/2040185185.jpeg', 'admin'),
(11, 'Whirlpool 1.5 Ton AC', '30000', 'Electronics', 'Blue Star 0.8 Ton 3 Star Split Inverter AC - White  (IC309RBTU, Copper Condenser)', 'images/1033348232.jpeg', 'admin'),
(12, 'NOVA NHT 1052 USB Runtime:', '15000', 'Electronics', 'NOVA NHT 1052 USB Runtime: 90 min Trimmer for Men  (Black)', 'images/1820149899.jpeg', 'admin'),
(13, 'SAMSUNG 192 L Direct Cool Single Door 2 Star Refrigerator', '17000', 'Electronics', 'SAMSUNG 198 L Direct Cool Single Door 5 Star Refrigerator with Base Drawer  (Camellia Blue, RR21T2H2WCU/HL)', 'images/1803340242.jpg', 'admin'),
(14, 'USHA FANS', '10000', 'Electronics', 'CROMPTON Highspeed Torpedo 400 mm 3 Blade Table Fan  (Black, Pack of 1)', 'images/2013403396.jpg', 'admin'),
(15, 'SAMSUNG Battery', '600', 'Electronics', 'MOBATREE Mobile Battery For Samsung Galaxy Note 4', 'images/1767414840.jpg', 'admin'),
(16, ' Samsung Galaxy M32 5G ', '50000', 'Electronics', '\r\nSamsung Galaxy M32 5G (Sky Blue, 8GB RAM, 128GB Storage)', 'images/1187004374.jpeg', 'admin'),
(17, 'washing machine', '13500', 'Electronics', 'AmazonBasics 7 kg Fully Automatic Top Load Washing Machine', 'images/846997399.jpg', 'admin'),
(19, 'GRAINDER', '5999', 'Electronics', 'Visit the Prestige Store\r\nPrestige IRIS Plus 750 watt mixer grinder', 'images/1930698820.jpg', 'admin'),
(20, 'TOURCH', '1000', 'Electronics', 'Havells Ranger 10 1-Watt Rechargeable LED Torch (Black)', 'images/753816754.jpg', 'admin'),
(21, 'Ceiling Fan', '2899', 'Electronics', 'Ottomate Sense Sweep 1200 mm Ceiling Fan(Pack of 1) (Mystic Grey)\r\n', 'images/2061135855.jpg', 'admin'),
(22, 'Ceiling Fan', '3999', 'Electronics', 'OTTOMATE Sense Sweep 1200 mm Ceiling Fan(Pack of 1) (Royal Gold)', 'images/516565275.jpeg', 'admin'),
(23, 'WIRELESS MOUSE', '1500', 'Electronics', 'Logitech M331 Silent Plus Wireless Mouse, 2.4GHz with USB Nano Receiver, 1000 DPI Optical Tracking, 3 Buttons, 24 Month Life Battery, PC/Mac/Laptop - Blue', 'images/1219365844.jpg', 'admin'),
(24, 'KEYBOARD', '1500', 'Electronics', 'Logitech MK215 Wireless Keyboard and Mouse Combo for Windows, 2.4 GHz Wireless, Compact Design, 2-Year Battery Life(Keyboard),5 Month Battery Life(Mouse) PC/Laptop- Black', 'images/2031418852.jpg', 'admin'),
(26, 'GRAINDER', '2500', 'Electronics', 'Lifelong LLMG45 Power Pro 500-Watt Mixer Grinder with 3 Jars (Liquidizing, Wet Grinding and Chutney Jar), Stainless Steel blades, 1 Year Warranty (White/Grey)', 'images/309253183.jpeg', 'admin'),
(27, 'GRAINDER', '3500', 'Electronics', 'KENT 16065 TrueMix-B 750W | Pulse Function | Auto Shut-Off | 3 Stainless Steel Jars for Blending, Grinding, & Making Chutney', 'images/393193657.jpeg', 'admin'),
(28, 'electric stove', '1700', 'Electronics', 'Prestige Iris 1.0 1200 Watt Glass Induction Cooktop with Push Button (Black)', 'images/1424883705.jpeg', 'admin'),
(29, 'electric jud', '750', 'Electronics', 'iBELL SEKC18L 1800W Electric Kettle 1.8 Litre, Stainless Steel, Auto Cutoff Function | Green in Silver', 'images/1620022177.jpeg', 'admin'),
(30, 'electric jud', '1500', 'Electronics', 'Borosil Stainless Steel Vacuum Insulated Teapot (Black, 500ML)', 'images/1567586274.jpeg', 'admin'),
(31, 'electric', '6999', 'Electronics', 'Wellspire Multi Cooking Pot Smart Electric Pressure Cooker (6 Litres) with Instant 12-1 Single-Touch Functions and 7 Free Accesories (Black)', 'images/1531378547.jpeg', 'admin'),
(32, 'electric', '6999', 'Electronics', 'Wellspire Multi Cooking Pot Smart Electric Pressure Cooker (6 Litres) with Instant 12-1 Single-Touch Functions and 7 Free Accesories (Black)', 'images/880725016.jpeg', 'admin'),
(33, 'electric', '6999', 'Electronics', 'Wellspire Multi Cooking Pot Smart Electric Pressure Cooker (6 Litres) with Instant 12-1 Single-Touch Functions and 7 Free Accesories (Black)', 'images/1575369610.jpeg', 'admin'),
(34, 'guizer', '3116', 'Electronics', 'Visit the Bajaj Store\r\nBajaj Flora Instant 3 Litre Vertical Water Heater, 3KW, White', 'images/200112927.jpeg', 'admin'),
(35, 'elctric guizer', '3499', 'Electronics', 'Candes Star Rated Automatic Instant Storage Electric Water Heater with Special Metal Body Anti Rust Coating With Installation Kit, 2kW Geyser (Ivory, 10Ltr)', 'images/444939144.jpeg', 'admin'),
(36, 'headphones', '999', 'Electronics', 'boAt Rockerz 245 v2 Bluetooth Wireless in Ear Earphones with Mic (Active Black)', 'images/9366698.jpeg', 'admin'),
(37, 'wireless headdphones', '2499', 'Electronics', 'Tribit XFree Go Over Ear Bluetooth Wireless Headphones,Bluetooth 5.0 On Ear Headphone with CVC 8.0 Noise Cancelling Mic,HiFi Sound,Deep Bass,USB Lightening Fast Charge,24H Playtime,Voice Control,Black', 'images/1030273939.jpeg', 'admin'),
(38, 'Philips Radio ', '1599', 'Electronics', 'Philips Radio RL118/94 with MW/SW/FM Bands, 200mW RMS soundoutput,3-1 Power source External Battery:2xR6 (3V DC), Mains: 230V AC/ 50 Hz, Built in rechargeable battery', 'images/147413578.jpeg', 'admin'),
(39, 'earbuds', '1499', 'Electronics', 'Noise Buds VS103 - Truly Wireless Earbuds with 18-Hour Playtime, HyperSync Technology, Full Touch Controls and Voice Assistant (Pearl White)', 'images/1465655008.jpeg', 'admin'),
(40, 'iron box', '779', 'Electronics', 'Bajaj DX-7 1000W Dry Iron with Advance Soleplate and Anti-bacterial German Coating Technology, White', 'images/1712015342.jpeg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_products`
--
ALTER TABLE `e_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e_products`
--
ALTER TABLE `e_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
