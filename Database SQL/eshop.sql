-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 09:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

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
-- Table structure for table `e_admin`
--

CREATE TABLE `e_admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `e_admin`
--

INSERT INTO `e_admin` (`id`, `admin_name`, `admin_password`, `role`) VALUES
(1, 'admin', 'admin123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `e_cart`
--

CREATE TABLE `e_cart` (
  `id` int(11) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `p_price` varchar(250) NOT NULL,
  `p_category` varchar(250) NOT NULL,
  `p_image` varchar(250) NOT NULL,
  `p_description` varchar(250) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `p_id` varchar(250) NOT NULL,
  `p_total` varchar(250) NOT NULL,
  `p_rid` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `e_cart`
--

INSERT INTO `e_cart` (`id`, `p_name`, `p_price`, `p_category`, `p_image`, `p_description`, `p_qty`, `p_id`, `p_total`, `p_rid`, `status`) VALUES
(107, 'cemera', '26000', 'Electronics', 'images/458991024.jpeg', 'cenon', 1, '7', '26000', '::1', ''),
(108, 'TV', '24000', 'Electronics', 'images/1407767663.jpg', 'LG smart TVs are Internet-connected televisions that offer access to a world of entertainment. Enjoy movies, TV, games, videos and apps; LG’s smart TVs make entertaining the family easier than ever.', 1, '4', '24000', '::1', '');

-- --------------------------------------------------------

--
-- Table structure for table `e_order`
--

CREATE TABLE `e_order` (
  `id` int(11) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `p_price` varchar(250) NOT NULL,
  `p_total` varchar(255) NOT NULL,
  `cust_name` varchar(250) NOT NULL,
  `cust_phone` varchar(250) NOT NULL,
  `cust_deladdress` varchar(250) NOT NULL,
  `cust_zipcode` varchar(255) NOT NULL,
  `p_mode` varchar(252) NOT NULL,
  `status` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `dates` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `p_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `e_products`
--

INSERT INTO `e_products` (`id`, `p_name`, `p_price`, `p_category`, `p_description`, `p_image`, `p_id`, `status`) VALUES
(2, 'VIVO VI20 PRO', '235999', 'Electronics', '16.94 centimeters (6.67-inch) FHD+ full screen dot display LCD multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution\r\n5020mAh lithium-polymer large battery providing talk-time of 29 hours and standby time of 556 hours | 18W fast charger in', 'images/1732265335.jpg', 'admin', 'In Stock'),
(4, 'LG Smart T.V', '24000', 'Electronics', 'LG smart TVs are Internet-connected televisions that offer access to a world of entertainment. Enjoy movies, TV, games, videos and apps; LG’s smart TVs make entertaining the family easier than ever.', 'images/1407767663.jpg', 'admin', 'In Stock'),
(7, 'Canon EOS', '26000', 'Electronics', 'Canon Best Dslr Camera with great features ', 'images/458991024.jpeg', 'admin', 'In Stock'),
(8, 'HUL Pureit Eco', '13499', 'Electronics', 'HUL Pureit Eco Water Saver Mineral RO+UV+MF AS wall mounted/Counter top Black 10L Water Purifier', 'images/1799030323.jpeg', 'admin', 'In Stock'),
(9, 'Dell 15 (2021)', '36999', 'Electronics', 'Dell 15 (2021) AMD Ryzen 3-3250U Laptop, 8GB DDR4, 256GB SSD, Windows 10 + MS Office, Radeon Graphics, 15.6 inches FHD Display, Carbon Black (Inspiron 3515, D560523WIN9BE), 1.8kg', 'images/672579478.jpeg', 'admin', 'In Stock'),
(10, 'Whirlpool 1.5 Ton 5 Star Split Inverter AC', '34999', 'Electronics', 'Blue Star 0.8 Ton 3 Star Split Inverter AC - White  (IC309RBTU, Copper Condenser)', 'images/2040185185.jpeg', 'admin', 'In Stock'),
(11, 'Whirlpool 1.5 Ton AC', '30000', 'Electronics', 'Blue Star 0.8 Ton 3 Star Split Inverter AC - White  (IC309RBTU, Copper Condenser)', 'images/1033348232.jpeg', 'admin', 'In Stock'),
(12, 'NOVA NHT 1052 USB Runtime:', '15000', 'Electronics', 'NOVA NHT 1052 USB Runtime: 90 min Trimmer for Men  (Black)', 'images/1820149899.jpeg', 'admin', 'In Stock'),
(13, 'SAMSUNG 192 L Direct Cool Single Door 2 Star Refrigerator', '17000', 'Electronics', 'SAMSUNG 198 L Direct Cool Single Door 5 Star Refrigerator with Base Drawer  (Camellia Blue, RR21T2H2WCU/HL)', 'images/1803340242.jpg', 'admin', 'In Stock'),
(14, 'USHA FANS', '10000', 'Electronics', 'CROMPTON Highspeed Torpedo 400 mm 3 Blade Table Fan  (Black, Pack of 1)', 'images/2013403396.jpg', 'admin', 'In Stock'),
(15, 'SAMSUNG Battery', '600', 'Electronics', 'MOBATREE Mobile Battery For Samsung Galaxy Note 4', 'images/1767414840.jpg', 'admin', 'In Stock'),
(16, ' Samsung Galaxy M32 5G ', '50000', 'Electronics', 'Samsung Galaxy M32 5G (Sky Blue, 8GB RAM, 128GB Storage)', 'images/1187004374.jpeg', 'admin', 'In Stock'),
(17, 'washing machine', '13500', 'Electronics', 'AmazonBasics 7 kg Fully Automatic Top Load Washing Machine', 'images/846997399.jpg', 'admin', 'In Stock'),
(19, 'GRAINDER', '5999', 'Electronics', 'Visit the Prestige Store\r\nPrestige IRIS Plus 750 watt mixer grinder', 'images/1930698820.jpg', 'admin', 'In Stock'),
(20, 'TOURCH', '1000', 'Electronics', 'Havells Ranger 10 1-Watt Rechargeable LED Torch (Black)', 'images/753816754.jpg', 'admin', 'In Stock'),
(21, 'Ceiling Fan', '2899', 'Electronics', 'Ottomate Sense Sweep 1200 mm Ceiling Fan(Pack of 1) (Mystic Grey)\r\n', 'images/2061135855.jpg', 'admin', 'In Stock'),
(22, 'Ceiling Fan', '3999', 'Electronics', 'OTTOMATE Sense Sweep 1200 mm Ceiling Fan(Pack of 1) (Royal Gold)', 'images/516565275.jpeg', 'admin', 'In Stock'),
(23, 'WIRELESS MOUSE', '1500', 'Electronics', 'Logitech M331 Silent Plus Wireless Mouse, 2.4GHz with USB Nano Receiver, 1000 DPI Optical Tracking, 3 Buttons, 24 Month Life Battery, PC/Mac/Laptop - Blue', 'images/1219365844.jpg', 'admin', 'In Stock'),
(24, 'KEYBOARD', '1500', 'Electronics', 'Logitech MK215 Wireless Keyboard and Mouse Combo for Windows, 2.4 GHz Wireless, Compact Design, 2-Year Battery Life(Keyboard),5 Month Battery Life(Mouse) PC/Laptop- Black', 'images/2031418852.jpg', 'admin', 'In Stock'),
(26, 'GRAINDER', '2500', 'Electronics', 'Lifelong LLMG45 Power Pro 500-Watt Mixer Grinder with 3 Jars (Liquidizing, Wet Grinding and Chutney Jar), Stainless Steel blades, 1 Year Warranty (White/Grey)', 'images/309253183.jpeg', 'admin', 'In Stock'),
(27, 'GRAINDER', '3500', 'Electronics', 'KENT 16065 TrueMix-B 750W | Pulse Function | Auto Shut-Off | 3 Stainless Steel Jars for Blending, Grinding, & Making Chutney', 'images/393193657.jpeg', 'admin', 'In Stock'),
(28, 'electric stove', '1700', 'Electronics', 'Prestige Iris 1.0 1200 Watt Glass Induction Cooktop with Push Button (Black)', 'images/1424883705.jpeg', 'admin', 'In Stock'),
(29, 'electric jud', '750', 'Electronics', 'iBELL SEKC18L 1800W Electric Kettle 1.8 Litre, Stainless Steel, Auto Cutoff Function | Green in Silver', 'images/1620022177.jpeg', 'admin', 'In Stock'),
(30, 'electric jud', '1500', 'Electronics', 'Borosil Stainless Steel Vacuum Insulated Teapot (Black, 500ML)', 'images/1567586274.jpeg', 'admin', 'In Stock'),
(31, 'electric', '6999', 'Electronics', 'Wellspire Multi Cooking Pot Smart Electric Pressure Cooker (6 Litres) with Instant 12-1 Single-Touch Functions and 7 Free Accesories (Black)', 'images/1531378547.jpeg', 'admin', 'In Stock'),
(34, 'guizer', '3116', 'Electronics', 'Visit the Bajaj Store\r\nBajaj Flora Instant 3 Litre Vertical Water Heater, 3KW, White', 'images/200112927.jpeg', 'admin', 'In Stock'),
(35, 'elctric guizer', '3499', 'Electronics', 'Candes Star Rated Automatic Instant Storage Electric Water Heater with Special Metal Body Anti Rust Coating With Installation Kit, 2kW Geyser (Ivory, 10Ltr)', 'images/444939144.jpeg', 'admin', 'In Stock'),
(36, 'headphones', '999', 'Electronics', 'boAt Rockerz 245 v2 Bluetooth Wireless in Ear Earphones with Mic (Active Black)', 'images/9366698.jpeg', 'admin', 'In Stock'),
(37, 'wireless headdphones', '2499', 'Electronics', 'Tribit XFree Go Over Ear Bluetooth Wireless Headphones,Bluetooth 5.0 On Ear Headphone with CVC 8.0 Noise Cancelling Mic,HiFi Sound,Deep Bass,USB Lightening Fast Charge,24H Playtime,Voice Control,Black', 'images/1030273939.jpeg', 'admin', 'In Stock'),
(38, 'Philips Radio ', '1599', 'Electronics', 'Philips Radio RL118/94 with MW/SW/FM Bands, 200mW RMS soundoutput,3-1 Power source External Battery:2xR6 (3V DC), Mains: 230V AC/ 50 Hz, Built in rechargeable battery', 'images/147413578.jpeg', 'admin', 'In Stock'),
(39, 'earbuds', '1499', 'Electronics', 'Noise Buds VS103 - Truly Wireless Earbuds with 18-Hour Playtime, HyperSync Technology, Full Touch Controls and Voice Assistant (Pearl White)', 'images/1465655008.jpeg', 'admin', 'In Stock'),
(40, 'iron box', '779', 'Electronics', 'Bajaj DX-7 1000W Dry Iron with Advance Soleplate and Anti-bacterial German Coating Technology, White', 'images/1712015342.jpeg', 'admin', 'In Stock'),
(41, 'Hair Dryer', '799', 'Electronics', 'Nova NHP 8202 Hair Dryer  (1400 W, Pink)', 'images/768274151.jpeg', 'admin', 'In Stock'),
(42, 'Hair Straightener', '1149', 'Electronics', 'PHILIPS HP8302/06 Hair Straightener  (Black)', 'images/1601566642.jpeg', 'admin', 'In Stock'),
(43, 'PHILIPS Hair Dryer ', '1499', 'Electronics', 'PHILIPS BHC010/10 Hair Dryer  (1200 W, Black)', 'images/2059111894.jpeg', 'admin', 'In Stock'),
(44, 'Power Bank', '799', 'Electronics', 'Ambrane 10000 mAh Power Bank (12 W, Fast Charging)  (Blue, Lithium Polymer)\r\n', 'images/1347325886.jpeg', 'admin', 'In Stock'),
(45, 'Security Camera ', '3199', 'Electronics', 'realme 360 Deg 1080p Wifi Smart Security Camera  (4 Channel)', 'images/1091079279.jpeg', 'admin', 'In Stock'),
(46, 'Vivo Y1s', '9999', 'Electronics', 'Vivo Y1s (Aurora Blue, 3GB RAM, 32GB Storage) with No Cost EMI/Additional Exchange Offers', 'images/1711480363.jpg', 'admin', 'In Stock'),
(47, 'Vivo Y72 5G', '20990', 'Electronics', 'Vivo Y72 5G (Prism Magic, 8GB RAM, 128GB Storage) with No Cost EMI/Additional Exchange Offers', 'images/196971871.jpg', 'admin', 'In Stock'),
(48, 'Vivo Y73', '20999', 'Electronics', 'Vivo Y73 (Diamond Flare, 8GB RAM, 128GB Storage) with No Cost EMI/Additional Exchange Offers', 'images/1194614818.jpg', 'admin', 'In Stock'),
(49, 'Samsung Galaxy Tab', '11980', 'Electronics', 'Samsung Galaxy Tab A7 Lite 22.05 cm (8.7 inch), Slim Metal Body, Dolby Atmos Sound, RAM 3 GB, ROM 32 GB Expandable, Wi-Fi-only Tablet, Gray', 'images/1593073805.jpg', 'admin', 'In Stock'),
(50, 'Samsung Galaxy Tab S7 FE 31.5 cm ', '39990', 'Electronics', 'Samsung Galaxy Tab S7 FE 31.5 cm (12.4 inch) Large Display, S-Pen in Box, Slim Metal Body, Dolby Atmos Sound, RAM 4 GB, ROM 64 GB Expandable, Wi-Fi Tablet, Mystic Silver', 'images/448800156.jpg', 'admin', 'In Stock'),
(51, 'Multimedia Speaker', '799', 'Electronics', 'Zebronics Zeb-Warrior 2.0 Multimedia Speaker with Aux Connectivity,USB Powered and Volume Control', 'images/458681362.jpg', 'admin', 'In Stock'),
(52, 'smart speaker', '2780', 'Electronics', 'Echo Dot (3rd Gen) - #1 smart speaker brand in India with Alexa (Black)', 'images/1011208643.jpg', 'admin', 'In Stock'),
(53, 'smart watch', '2999', 'Electronics', 'boAt Xtend Smartwatch with Alexa Built-in, 1.69” HD Display, Multiple Watch Faces, Stress Monitor, Heart & SpO2 Monitoring, 14 Sports Modes, Sleep Monitor & 5 ATM Water Resistance(Olive Green)', 'images/2025149379.jpg', 'admin', 'In Stock'),
(54, 'Sewing Machine Motor', '1349', 'Electronics', 'Al - Hind Sewing Machine Motor Full Copper Winding with Heavy Quality Speed Controller (Grey)', 'images/1569673219.jpeg', 'admin', 'In Stock'),
(55, 'Sewing Machine', '2990', 'Electronics', 'Usha Janome Dream Stitch Automatic Zig-Zag Electric Sewing Machine (White and Blue) with Free Sewing KIT Worth RS 500', 'images/1265282186.jpg', 'admin', 'In Stock'),
(56, 'Samsung Galaxy M32', '16990', 'Electronics', 'Samsung Galaxy M32 (Light Blue, 6GB RAM, 128GB Storage) 6 Months Free Screen Replacement for Prime\r\n', 'images/1950797411.jpg', 'admin', 'In Stock'),
(57, 'Samsung Galaxy M12', '13490', 'Electronics', 'Samsung Galaxy M12 (Blue,6GB RAM, 128GB Storage) 6 Months Free Screen Replacement for Prime', 'images/751143122.jpg', 'admin', 'In Stock'),
(58, ' LED Projector', '8990', 'Electronics', 'EGate i9 Pro-Max Full HD 1080p Modulated at 720p Base | 3300 L (330 ANSI ) with 150 \" (3.8 m) Large Display LED Projector | VGA , AV, HDMI , SD Card , USB, Audio Out Connectivity | (E03i31 ) (White)', 'images/185267183.jpg', 'admin', 'In Stock'),
(59, 'hp pendrive', '445', 'Electronics', 'HP FD236W 32GB USB 2.0 Pen Drive (Gray)', 'images/2129264947.jpg', 'admin', 'In Stock'),
(60, 'mAh Power Bank ', '899', 'Electronics', 'OnePlus 10000 mAh Power Bank (Fast PD Charging, 18 W) (Black, Lithium Polymer)', 'images/1701306293.jpg', 'admin', 'In Stock'),
(61, 'Ultra Compact Power Bank', '599', 'Electronics', 'URBN 10000 mAh Li-Polymer Ultra Compact Power Bank with 12W Fast Charge (Camo)', 'images/81028953.jpg', 'admin', 'In Stock'),
(62, 'mice', '940', 'Electronics', 'HP Z3700 Wireless Mouse (Black)\r\n', 'images/1470789103.jpg', 'admin', 'In Stock'),
(63, 'Moto E5 Plus', '15000', 'Electronics', 'Moto E5 Plus (Black, 3GB RAM, 32GB Storage)', 'images/1503256647.jpg', 'admin', 'In Stock'),
(64, 'Moto G6', '15000', 'Electronics', 'Moto G6 (Indigo Black, 4GB RAM, 64GB Storage)', 'images/1097573972.jpg', 'admin', 'In Stock'),
(65, ' FHD IPS 400Nits 2-in1 Touch Convertible Laptop', '79990', 'Electronics', 'Fujitsu UH-X 11th Gen Intel Core i5 13.3” (33.78cm) FHD IPS 400Nits 2-in1 Touch Convertible Laptop (8GB/512GB SSD/Win10/Office/Iris Xe Graphics/Backlit Kb/Black/997gms), 4ZR1D71992', 'images/1026950249.jpg', 'admin', 'In Stock'),
(66, 'ASUS VivoBook Flip 14 (2020)', '46990', 'Electronics', 'ASUS VivoBook Flip 14 (2020), Intel Core i3-10110U 10th Gen, 14\" (35.56cms) FHD Touch, 2-in-1 Laptop (8GB/256GB SSD/Office 2019/Windows 10/Integrated Graphics/Blue/1.5 kg), TP412FA-EC382TS', 'images/849028783.jpg', 'admin', 'In Stock'),
(67, 'Mechanical Gaming Multimedia Wired Keyboard ', '1450', 'Electronics', 'Quantum QHM9800 Rapid Strike Mechanical Gaming Multimedia Wired Keyboard with 6-Colour RGB LED, 12 Adjustable Lighting Modes, Lasting Durability and Rupee (₹) Key (Black)', 'images/1101112074.jpg', 'admin', 'In Stock'),
(68, 'Logitech K230 Compact Wireless Keyboard for Windows', '795', 'Electronics', 'Logitech K230 Compact Wireless Keyboard for Windows, 2.4GHz Wireless with USB Unifying Receiver, Space-Saving Design, 2-Year Battery Life, PC/Laptop- Black\r\nVisit the Logitech Store', 'images/1067827921.jpg', 'admin', 'In Stock'),
(69, ' Wireless Charger Pad ', '999', 'Electronics', 'UNIGEN UNIPAD 150 Premium Wireless Charger Pad | 15W Type-C PD | Glass Top Metal Base | Compatible iPhone 13/12/11/XS/XR/X/8, Galaxy S20/S10/S9/S8 & OnePlus 9 Pro (Space Grey)', 'images/1717881419.jpg', 'admin', 'In Stock'),
(70, 'pTron Bullet Wireless WX21 15W Fast Charging Pad ', '799', 'Electronics', 'pTron Bullet Wireless WX21 15W Fast Charging Pad with 3A Type-C 1.2 Meter Cable, Compatible with Wireless Charging Enabled Smartphones (Black)', 'images/1818482837.jpg', 'admin', 'In Stock'),
(71, 'Apple iPhone 13 Mini ', '69990', 'Electronics', 'Apple iPhone 13 Mini (128GB) - Blue', 'images/17556767.jpg', 'admin', 'In Stock'),
(72, ' Apple iPhone 12', '70199', 'Electronics', 'New Apple iPhone 12 (128GB) - Green', 'images/678519981.jpg', 'admin', 'In Stock'),
(73, 'HP Pavilion Gaming Laptop', '70850', 'Electronics', 'HP Pavilion Gaming Laptop, Ryzen 5-4600H 15.6\"(39.62cms) 144 Hz FHD Screen, 8 GB RAM, 4 GB NVIDIA 1650ti Graphics, 1TB HDD + 256GB SSD GB SSD, Windows 10 with Advanced Thermal Management, 15-ec1050AX', 'images/1074214044.jpg', 'admin', 'In Stock'),
(74, 'HP Pavilion AMD Ryzen 5-3550H 15.6 inches FHD Gaming Laptop ', '63990', 'Electronics', 'HP Pavilion AMD Ryzen 5-3550H 15.6 inches FHD Gaming Laptop (8GB/1TB HDD + 256GB SSD/Windows 10/4GB NVIDIA GeForce GTX 1650 Graphics, Shadow Black/2.25 kg), 15-ec0106ax', 'images/322686778.jpg', 'admin', 'In Stock'),
(75, 'WeCool Braided Charging Cable', '299', 'Electronics', 'WeCool Braided Charging Cable Compatible for-iPhone with Certified Lightning (1 Meter, Black)', 'images/568041424.jpg', 'admin', 'In Stock'),
(76, 'Vivitar VXX14 20.1 MP Selfie Cam Digital Camera', '7790', 'Electronics', 'Vivitar VXX14 20.1 MP Selfie Cam Digital Camera, Red', 'images/1306267320.jpg', 'admin', 'In Stock'),
(77, 'Assembled Desktop CPU', '12999', 'Electronics', 'Assembled Desktop CPU (Intel Core i5-650/ WiFi Ready/Windows 10 Home preloaded) (4 GB RAM / 500 GB HDD & 120 GB SSD)', 'images/1499041236.jpg', 'admin', 'In Stock'),
(78, 'TATA SKY HD', '1400', 'Electronics', 'TATA SKY HD Connection with 1 month basic package and free installation', 'images/1812508800.jpg', 'admin', 'In Stock'),
(79, '4-Seater Dining Table ', '14950', 'Furniture', 'Home Centre Diana Beechwood Veneer Finish 4-Seater Dining Table with 2 Chairs and 1 Small Bench (Beige, Walnut)', 'images/165875765.jpg', 'admin', 'In Stock'),
(80, 'Wood 2-Door Wardrobe with Mirror', '14950', 'Furniture', 'Home Centre Helios Reynan White Engineered Wood 2-Door Wardrobe with Mirror - 47 x 80 x 182 cm', 'images/1686630675.jpg', 'admin', 'In Stock'),
(81, ' Shoe Cabinet', '7107', 'Furniture', 'Home Centre Lewis Two Door Low Height Shoe Cabinet- 12 Shoes', 'images/1711105819.jpg', 'admin', 'In Stock'),
(82, 'Nylon Computer Office Executive Chair ', '5800', 'Furniture', 'Sunon Swivel PU Leather, Nylon Computer Office Executive Chair with Fixed Armrest (Black)', 'images/78019095.jpg', 'admin', 'In Stock'),
(83, 'Wood Sofa Couch', '53000', 'Furniture', 'Woodkartindia Golden Glossy Premium Teak Wood Sofa Couch Chaises Longues Victorian Style for Home Furniture Living Room Furniture Home Decor Garden Decor Wedding Gifting Item\r\n 5.0 out o', 'images/1040361767.jpg', 'admin', 'In Stock'),
(84, '7 Seater Sofa Set', '215000', 'Furniture', 'Woodkartindia Royal Design Maharajah Look 7 Seater Sofa Set with Couch and Center Table (Brown)', 'images/1911412050.jpg', 'admin', 'In Stock'),
(85, '2 Seater Sofa Couch ', '10999', 'Furniture', 'Trevi Polo Leatherette Upholstered Flip top Storage Bench 2 Seater Sofa Couch Pouffe Storage Ottoman (Standard, Red)', 'images/1336906049.jpg', 'admin', 'In Stock'),
(86, 'Foldable Collapsible Closet/Cabinet', '1319', 'Furniture', 'Maison & Cuisine® 6+2 Layer Fancy and Portable Foldable Collapsible Closet/Cabinet (Need to Be Assembled) 126x42.5x166cm (88130) (Brown)', 'images/1073759988.jpg', 'admin', 'In Stock'),
(87, 'Furnifry Wooden TV Entertainment Unit with 2 Wall Shelf', '1713', 'Furniture', 'Furnifry Wooden TV Entertainment Unit with 2 Wall Shelf/Wall Set Top Box Shelf Stand/TV Cabinet for Wall/Set Top Box Holder for Home/Living Room Ideal for TV Upto 42\" (Brown)', 'images/430420808.jpg', 'admin', 'In Stock'),
(88, 'Amaze Shoppee Wooden', '1299', 'Furniture', 'Amaze Shoppee Wooden Beautiful Handmade Stool | Table | for Office | Home Furniture | Outdoor | Décor - Brown(1)', 'images/1524138220.jpg', 'admin', 'In Stock'),
(89, 'Furniture Cafe Wooden TV Cabinet Wall Shelves', '899', 'Furniture', 'Furniture Cafe Wooden TV Cabinet Wall Shelves, Smart LED TV Entertainment Unit Set Top Box Stand | TV Stand Wall Shelf for Living Room Stylish | Hanging Rack Organizer | Home Decor Furniture (Colour- Brown)', 'images/338313634.jpg', 'admin', 'In Stock'),
(90, 'HAVAI Anti Bacterial Cover ', '699', 'Electronics', 'HAVAI Anti Bacterial Cover for Symphony Winter 56 Litre Desert Cooler Water Resistant.Cover Size(LXBXH) cm:63 X 44.5 X 110.5', 'images/1436257649.jpg', 'admin', ''),
(91, 'Foldable 2 Chair and Round Table ', '10399', 'Furniture', 'Home furniture Wooden Patio Dining Set Foldable 2 Chair and Round Table for Balcony Garden Indoor Outdoor Terrace Furniture', 'images/1218329243.jpg', 'admin', 'In Stock'),
(92, ' home furniture with 4 wooden legs cotton canvas', '2995', 'Furniture', 'nestroots stool for living room sitting printed standard ottoman upholstered foam cushioned pouffe puffy for foot rest home furniture with 4 wooden legs cotton canvas (14\" inch height red set of 2)', 'images/1695991770.jpg', 'admin', 'In Stock'),
(93, 'Furniture Cafe Wooden Wall Shelves ', '849', 'Furniture', 'Furniture Cafe Wooden Wall Shelves | Corner Hanging Shelf for Living Room Stylish | Zig Zag Home Decor Floating Display Rack Storage Organizer Unique Design with Finish 5 Tiers (Brown Finish)', 'images/377398264.jpg', 'admin', 'In Stock'),
(94, 'Home Furniture with 4 Wooden', '1795', 'Furniture', 'Nestroots Stool for Living Room Sitting Printed Ottoman upholstered Foam Cushioned pouffe Puffy for Foot Rest Home Furniture with 4 Wooden Legs Cotton Canvas (14\" inch Height Beige Grey)', 'images/1893405055.jpg', 'admin', 'In Stock'),
(95, 'PHIRKCRAFT Home Decor Wooden Stool Set', '899', 'Furniture', 'PHIRKCRAFT Home Decor Wooden Stool Set/ Garden Decor/ Decorative Fold-able Stool', 'images/65982773.jpg', 'admin', 'In Stock'),
(96, 'Webelkart Wooden Matte', '1495', 'Furniture', 'Webelkart Wooden Matte Finish Designer Home Side Wall Shelf, Key holder with 7 Keys Hooks ( Brown )', 'images/103536460.jpg', 'admin', 'In Stock'),
(97, ' Small Wooden Home Pooja Mandir', '999', 'Furniture', 'SSI Fully Handmade Beautiful Small Wooden Home and Office Temple/Pooja Mandir Home Temple Decorative Temple', 'images/70936194.jpg', 'admin', 'In Stock'),
(98, ' Wooden Stool Set Garden Decor/Decorative ', '999', 'Furniture', 'aaRF Home Decor Wooden Stool Set/Garden Decor/Decorative Fold-able Stool Wooden Beautiful Handmade Stool | Table | for Office | Home Furniture | Outdoor | Decor - Brown', 'images/859829273.jpg', 'admin', 'In Stock'),
(99, 'Furniture Cafe Set top Box Stand', '999', 'Furniture', 'Furniture Cafe Set top Box Stand | WiFi Router Holder Wooden Wall Shelves | Setup Box Stand for Home | Wall Mount Stylish WiFi Router Holder TV Cabinet Living Room Furniture (Color-Black)', 'images/2029129833.jpg', 'admin', 'In Stock'),
(100, 'Ciplaplast Strong', '1349', 'Furniture', 'Ciplaplast Strong and Heavy Rich Look Cabinet with Mirror - White', 'images/1036384974.jpg', 'admin', 'In Stock'),
(101, 'Setup Box Stand Wall', '1349', 'Furniture', 'YASAR HANDICRAFTS Engineered Wood Wall Mounted TV Unit Stand TV Cabinet Set Top Box/Setup Box Stand Wall Shelf for Home Living Room and Home Decor Items (Standard, Brown) YSH.173', 'images/1501971692.jpg', 'admin', 'In Stock'),
(102, 'Wood Desktop Storage Organizer ', '1999', 'Furniture', 'Callas Adjustable Wood Desktop Storage Organizer | Display Shelf Rack | Spice Rack | Counter Top Bookcase Book Shelf | Home Décor Display & Storage Rack Cabinet Unit |CA-WS1-Black', 'images/470364856.jpg', 'admin', 'In Stock'),
(103, 'Shoe Stand ', '1799', 'Furniture', 'Ebee Store Iron Collapsible Shoe Stand (Red, 4 Shelves)', 'images/1368483280.jpg', 'admin', 'In Stock'),
(104, 'Wooden Wall Rack Stand ', '1499', 'Furniture', 'Design Wall Shelf intersecting Wooden Wall Rack Stand for Living Room, Home Decor Items Beautiful Wooden Decorative Floating Wall Shelves ZH41', 'images/81820933.jpg', 'admin', 'In Stock'),
(105, 'Wolpin Wall Shelves Living Room Stylish ', '1399', 'Furniture', 'Wolpin Wall Shelves Living Room Stylish Home Decor Display Rack Shelf Floating Storage Organiser Set Top Box Holder and WiFi Organiser, Remote Holder (Pack of 1) Oak Wood Color', 'images/1470574449.jpg', 'admin', 'In Stock'),
(106, 'Pepperfry Chest of Drawers', '10599', 'Furniture', 'Pepperfry Chest of Drawers | Mintwud | Yuko | Colour: Columbia Walnut Finish | Cabinet | Wooden Cabinet | Chest of Drawers | Wooden Chest of Drawers | Storage Cabinet | Cabinet for living room | Cabinet for bedroom | Living room furniture | Bedroom furnit', 'images/727932048.jpg', 'admin', 'In Stock'),
(107, '5 Tire Bookshelf', '4299', 'Furniture', '@home by Nilkamal Checkers 5 Tire Bookshelf (Classic Walnut)', 'images/628261823.jpg', 'admin', 'In Stock'),
(108, 'Wood Study Desk ', '599', 'Furniture', '@home by Nilkamal Dalton Engineered Wood Study Desk in Teak Finish', 'images/1720293167.jpg', 'admin', 'In Stock'),
(109, 'Swing & Hammock Chair ', '699', 'Furniture', 'Curio Centre Make in India Round Cotton Home Swing & Hammock Chair (145 cm X 57 cm X 43 cm, White, 100 kgs Capacity)', 'images/1272903051.jpg', 'admin', 'In Stock'),
(110, ' Folding Sofa Cum Bed Furniture ', '6999', 'Furniture', 'Aart Store One Seater Folding Sofa Cum Bed Furniture 3x6 Feet for Home & Living Room Washable Cover- (Green)', 'images/1865271625.jpg', 'admin', 'In Stock'),
(111, ' Furniture wallpaper', '4999', 'Furniture', 'Wolpin Kitchen Wall Stickers Wood Wallpaper DIY PVC Shelf Liner, Furniture, Almirah, Table Top, Wardrobe, Kitchen Cupboard Decal, Mahogany Brown', 'images/511331782.jpg', 'admin', 'In Stock'),
(112, 'Wooden Plywood Temple', '1999', 'Furniture', 'Ranjeet Collection Mandir for Pooja Home Decoration Wall Hanging Beautiful Wooden Plywood Temple', 'images/1420228408.jpg', 'admin', 'In Stock'),
(113, ' Top Box Stand Holder', '899', 'Furniture', 'Moon Star Collection MDF Set Top Box Stand Holder | WiFi Router Holder | Setup Box Stand for Home | Wall Mount Stylish WiFi Router Holder TV Cabinet Living Room Furniture (White)', 'images/2059748871.jpg', 'admin', 'In Stock'),
(115, 'Wolpin Wall Stickers Wallpaper Wood Grain ', '4999', 'Furniture', 'Wolpin Wall Stickers Wallpaper Wood Grain (45 x 500 cm) Waterproof Plank Nautical Home Office, Furniture, Door, Wardrobe, Kids Room, Decoration, DIY Self Adhesive, Gray\r\n', 'images/863759869.jpg', 'admin', 'In Stock'),
(116, 'Decazone Macrame Wall Hanging Shelf Wood', '7999', 'Furniture', 'Decazone Macrame Wall Hanging Shelf Wood Floating Boho Shelves with Wooden Dowel Modern Chic Hand Woven Art Decor for Apartment Dorm Bedroom Living Room Nursery Beige 55 x 43 cm', 'images/1703528791.jpg', 'admin', 'In Stock'),
(117, 'Mobile Stand Holder for Wall', '799', 'Furniture', 'Sehaz Artworks 3 Pocket Mobile Stand Holder for Wall | Wall Shelves | Key Holder for Wall | Furnitures for Home Decor Items | Wall Decor', 'images/2092189268.jpg', 'admin', 'In Stock'),
(118, 'RAJ HANDICRAFTS Set top Box Stand', '299', 'Furniture', 'RAJ HANDICRAFTS Set top Box Stand | WiFi Router Holder Wooden Wall Shelves | Setup Box Stand for Home | Wall Mount Stylish WiFi Router Holder TV Cabinet Living Room Furniture (Color-Black) RH1821', 'images/1407316525.jpg', 'admin', 'In Stock'),
(120, 'Set Top Box Stand Wall Shelf for Home', '799', 'Furniture', 'Stylish Art Maker Wall Mount Speakers WiFi TV Router Game Console Remote Streaming Device Setup Box/ Set Top Box Stand Wall Shelf for Home', 'images/2075697497.jpg', 'admin', 'In Stock'),
(121, 'Foldable Storage Bins Box', '799', 'Furniture', 'ALMAND Living Foldable Storage Bins Box Ottoman Bench Container Organizer with Cushion Seat Lid, Cube,Multi Colour(30X30X30 cm) (1 pcs)', 'images/1789751959.jpg', 'admin', 'In Stock'),
(122, 'WOOD KARTINDIA', '299', 'Furniture', 'WOOD KARTINDIA Mdf Home Temple (45.7 x 15.2 x 8 cm, Brown)', 'images/1949700580.jpg', 'admin', 'In Stock'),
(123, 'Wall PE Foam Wall Stickers ', '199', 'Furniture', 'Wolpin 3D White Brick Wallpaper for Wall PE Foam Wall Stickers Self Adhesive DIY Wall Decor (70 x 77cm, Appx. 5.8Sq Feet)', 'images/1884262407.jpg', 'admin', 'In Stock'),
(124, 'POUXO® Furniture Lifter Mover Tool Set with Furniture Lifting Tool', '499', 'Furniture', 'POUXO® Furniture Lifter Mover Tool Set with Furniture Lifting Tool/Furniture Mover Lifter, Heavy Load Moving Wheels for Furniture Household Furniture Lifter and Rollers Set for Home Appliance', 'images/825508104.jpg', 'admin', 'In Stock'),
(125, ' Alloy Steel Metal Storage Shelve for Books Storage Organizer', '1099', 'Furniture', 'MemeHo Bookshelf| Alloy Steel Metal Storage Shelve for Books Storage Organizer| Children Book Rack| Bookcase for Home Furniture |Cabinet Shelves for Bedroom Office Living Room (Set of 4 Cases, Blue)', 'images/1300775837.jpg', 'admin', 'In Stock'),
(126, ' Wood Finish Wall ', '4945', 'Furniture', 'SleepX Work from Home (WFH) Wood Finish Wall Mounted Desk (Brown)', 'images/606159781.jpg', 'admin', 'In Stock'),
(127, 'PrettyKrafts Shirt Stacker Closet Organizer ', '166', 'Furniture', 'PrettyKrafts Shirt Stacker Closet Organizer - Shirts and Clothing Organizer - (Single) - Blue', 'images/1595138127.jpg', 'admin', 'In Stock'),
(128, 'Double BEDSHEET with Two Pillow Covers ', '299', 'Furniture', 'CG HOMES Kids Collection Microfibre Cartoon Printed Double BEDSHEET with Two Pillow Covers (Multicolor )', 'images/1524595156.jpg', 'admin', 'In Stock'),
(129, 'zankos Portable Multifunction Foldable Bed Study', '289', 'Furniture', 'zankos Portable Multifunction Foldable Bed Study/Laptop Table/Lapdesk with Tablet Slot and Cup Holder for Children, Office, Gaming, Home Gold (Pink)', 'images/1186901983.jpg', 'admin', 'In Stock'),
(130, 'AAROORA Engineered Wood TV Table', '2089', 'Furniture', 'AAROORA Engineered Wood TV Table Unit Display Storage Cabinet Rack with Decor Shelf (Wenge Finish)', 'images/565621325.jpg', 'admin', 'In Stock'),
(131, 'Wood Wall shelf Home Decor items ', '289', 'Furniture', 'Dime Store Engineered Wood Wall shelf Home Decor items ,Glossy Finish ,Set Of 1,Brown', 'images/236507925.jpg', 'admin', 'In Stock'),
(135, 'Vudy Exclusively Launched Wall Shelf with Drawer for Living Room ', '1499', 'Furniture', 'Vudy Exclusively Launched Wall Shelf with Drawer for Living Room , Storage and Home Decorative Items (Walnut, Set of 1)', 'images/1259629892.jpg', 'admin', 'In Stock'),
(136, 'Multi Color Design Cushion Cover', '239', 'Furniture', 'Zikrak Exim Multi Color Design Cushion Cover 5 Pieces Set- 16\" x 16\", (ZERV132)\r\n', 'images/1353541519.jpg', 'admin', 'In Stock'),
(137, 'Fluffy Living Room Carpet Comfy ', '5199', 'Furniture', 'HR_Soft Modern Shag Area Rugs Fluffy Living Room Carpet Comfy Bedroom Home Decorate Floor Kids Playing Mat [Size 5x5 feet (Squire)].', 'images/707106727.jpg', 'admin', 'In Stock'),
(138, 'ROCKY CARPETS_Soft Modern Shag Area Rugs Fluffy Living Room Carpet Comfy ', '15999', 'Furniture', 'ROCKY CARPETS_Soft Modern Shag Area Rugs Fluffy Living Room Carpet Comfy Bedroom Home Decorate Floor Kids Playing Mat [Size 7x10 feet].', 'images/2005847578.jpg', 'admin', 'In Stock'),
(139, 'Wolpin Wall Shelves Designer Key Holder', '249', 'Furniture', 'Wolpin Wall Shelves Designer Key Holder for Wall Stylish Shelf Organiser Racks (Pack of 1 with 5 Keys Hooks), Black Brown Wood Colour', 'images/1043768314.jpg', 'admin', 'In Stock'),
(140, 'Waltz Engineered Wood Queen Box Bed  ', '15999', 'Furniture', 'Flipkart Perfect Homes Waltz Engineered Wood Queen Box Bed  (Finish Color - Latin Walnut, Delivery Condition - Knock Down)', 'images/1472073478.jpg', 'admin', 'In Stock');

-- --------------------------------------------------------

--
-- Table structure for table `e_user`
--

CREATE TABLE `e_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(125) NOT NULL,
  `user_email` varchar(125) NOT NULL,
  `user_mobile` varchar(125) NOT NULL,
  `user_password` varchar(125) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `e_user`
--

INSERT INTO `e_user` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_password`, `role`) VALUES
(1, 'Pankaj Ps', 'ps@gmail.com', '7894561230', '202cb962ac59075b964b07152d234b70', 'user'),
(2, 'Json Roy', 'jr@gmail.com', '7986543210', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_admin`
--
ALTER TABLE `e_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_cart`
--
ALTER TABLE `e_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_order`
--
ALTER TABLE `e_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_products`
--
ALTER TABLE `e_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_user`
--
ALTER TABLE `e_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_mobile` (`user_mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e_admin`
--
ALTER TABLE `e_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `e_cart`
--
ALTER TABLE `e_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `e_order`
--
ALTER TABLE `e_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `e_products`
--
ALTER TABLE `e_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `e_user`
--
ALTER TABLE `e_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
