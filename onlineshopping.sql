-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 10:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `productname`, `quantity`, `amount`) VALUES
(17, 'user1', 'Yashika Women Art silk Sarees ', 1, '999.00'),
(18, 'user1', 'Himalaya Gentle Baby Wipes - 72 Pieces', 1, '299.00'),
(19, 'user1', 'Redmi Note 10S (Deep Sea Blue, 6GB RAM, 64GB Storage) -Super Amoled Display', 1, '16799.00'),
(20, 'user1', 'Redmi Note 10S (Deep Sea Blue, 6GB RAM, 64GB Storage) -Super Amoled Display', 1, '16799.00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `categoryname`) VALUES
(1, 'Mobiles'),
(2, 'Computers'),
(3, 'Women Fashion'),
(4, 'Baby Products'),
(5, 'appliances'),
(6, 'Tablets'),
(7, 'Men Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `pcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `cid`, `productname`, `price`, `description`, `pcode`) VALUES
(1, 1, 'Redmi Note 10S (Deep Sea Blue, 6GB RAM, 64GB Storage) -Super Amoled Display', '16799.00', 'Display: FHD+ (1080x2400) AMOLED Dot display; 16.33 centimeters (6.43 inch); 20:9 aspect ratio\r\nCamera: 64 MP Quad Rear camera with 8MP Ultra-wide, 2MP Macro and Portrait lens| 13 MP Front camera\r\nProcessor: MediaTek Helio G95 Octa-core; 12nm process; Up to 2.05GHz clock speed\r\nBattery: 5000 mAh large battery with 33W fast charger in-box and Type-C connectivity\r\nMemory, Storage & SIM: 6GB RAM | 64GB UFS 2.2 storage expandable up to 512GB with dedicated SD card slot | Dual SIM (nano+nano) dual standby (4G+4G)\r\nAlexa Hands-Free capable: Download the Alexa app on to use Alexa hands-free. Play music, make calls, hear news, open apps, navigate, and more, using just your voice, while on-the-go. Just ask and Alexa will respond instantly.', '1_1'),
(2, 1, 'Samsung Galaxy M12 (Blue,4GB RAM, 64GB Storage) ', '10000.00', '48MP+5MP+2MP+2MP Quad camera setup- True 48MP (F 2.0) main camera + 5MP (F2.2) Ultra wide camera+ 2MP (F2.4) depth camera + 2MP (2.4) Macro Camera| 8MP (F2.2) front came\n6000mAH lithium-ion battery, 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase\nAndroid 11, v11.0 operating system,One UI 3.1, with 8nm Power Efficient Exynos850 (Octa Core 2.0GH\n16.55 centimeters (6.5-inch) HD+ TFT LCD - infinity v-cut display,90Hz screen refresh rate, HD+ resolution with 720 x 1600 pixels resolution, 269 PPI with 16M color\nMemory, Storage & SIM: 4GB RAM | 64GB internal memory expandable up to 1TB| Dual SIM (nano+nano) dual-standby', '1_2'),
(3, 2, 'Lenovo Legion 5 AMD Ryzen 7 ', '160000.00', 'Lenovo Legion 5 AMD Ryzen 7 5800H 15.6\"(39.62cm) FHD IPS Gaming Laptop (16GB/2TB SSD/6GB Nvidia RTX 3060 Graphics/Windows 11/Office 2021/RGB Keyboard/165Hz Refresh Rate/Phantom Blue/2.4Kg), 82JU010NIN\r\nProcessor: 5th Gen AMD Ryzen 7 - 5800H | Speed: 3.2 GHz (Base) - 4.4 GHz (Max) | 8 Cores | 16 Threads | 16MB Cache\r\nDisplay: 15.6\" FHD (1920x1080) Dolby Vision | IPS Technology | 165 Hz Refresh Rate | 300Nits Brightness | 100% sRGB\r\nGraphics: NVIDIA GeForce RTX 3060 6GB GDDR6 Dedicated Graphics with max TGP 130W | Boost Clock 1425/1702MHz | Free-Sync and G-Sync\r\nMemory and Storage: 16GB RAM DDR4-3200 | 2 TB SSD\r\nAI Engine : Upto 15% more FPS and Best performance with Auto Detect Mode (Top 16 AAA Titles) and Auto Optimisation Mode | Q Control 4.0 to select between Quiet (Blue), Intelligent (White) and Performance (Red) Modes\r\nCooling: Legion Coldfront 3.0 with Quad Channel Exhaust System with Copper Fins\r\nOS and Pre-Installed Softare: Pre-Loaded Windows 11 Home with Lifetime Validity | MS Office Home and Student 2021', '2_2'),
(4, 4, 'Himalaya Gentle Baby Wipes - 72 Pieces', '299.00', 'Wipe gently with the power of herbs\r\nIndian Aloe: Moisturizes the skin\r\nIndian Lotus: Keeps skin soft and supple\r\nFree from Alcohols, Silicones & Lanolin, the usual factors for allergies, rashes, and irritation\r\nSpecially designed for gentle cleansing of baby’s delicate skin during diaper change and before bedtime. Maximum Shelf Life 36 Months\r\npH-balanced formula reduces skin irritation', '4_2'),
(5, 4, 'Himalaya Baby Body Lotion, For All Skin Types - 400ml', '200.00', 'Excellent moisturizer with the power of herbs, Olive Oil: Vitamin E nourishes and keeps your baby\'s skin moisturized. Olive Oil helps keeps baby\'s skin soft and smooth, and helps protect the skin due to its antioxidant property.\r\nAlmond Oil: Natural moisturizer; makes skin soft & supple\r\nLicorice & Country Mallow (Bala): Protect and soothe baby\'s dry or chapped skin\r\nFree from Parabens, Mineral Oil & Synthetic Colors, the usual factors for rashes & allergies\r\nClinically proven to be mild and gentle\r\nKeeps skin naturally moisturized. Maximum Shelf Life: 24 Months. Skin Type: All Skin Types. Organic: Yes', '4_1'),
(6, 2, 'ASUS VivoBook 14 (2021),', '38000.00', 'Processor: 11th Gen Intel Core i3-1115G4, 3.0 GHz Base Speed, Up to 4.1 GHz Max Turbo Speed, 2 cores, 4 Threads, 6MB Cache\r\nMemory & Storage: 8GB (4GB onboard + 4GB SO-DIMM) DDR4 3200MHz Dual Channel RAM, Upgradeable up to 12GB using 1x SO-DIMM Slot with, | Storage: 256GB M.2 NVMe PCIe 3.0 SSD with HDD housing for storage expansion\r\nGraphics: Integrated Intel UHD Graphics\r\nDisplay: 14-Inch (35.56 cms) LED-Backlit, FHD (1920 x 1080) 16:9, 220nits, NanoEdge bezel, Anti-Glare Plane with 45% NTSC, 82% Screen-To-Body Ratio\r\nOperating System: Pre-loaded Windows 11 Home with lifetime validity | Software Included: Office Home and Student 2021\r\nDesign & battery: Up to 19.9mm Thin | NanoEdge Bezels | Thin and Light Laptop | Laptop weight: 1.6 kg | 37WHrs, 2-cell Li-ion battery | Up to 6 hours battery life ;Note: Battery life depends on conditions of usage\r\nKeyboard: Chiclet Keyboard with 1.4mm Key Travel', '2_1'),
(7, 3, 'Yashika Women Art silk Sarees ', '999.00', 'Care Instructions: Machine Wash\r\nFabric:Art silk::Saree Length- 5.40 MTR, Blouse: 0.70 MTR,::Note: Slight Color Variation is possible due to difference in monitor resolutions and digital photography. The images displayed is for representation purpose only.\r\n1 Saree With Attached Blouse Piece\r\nBlouse Fabric::Art silk\r\nPrinted', '3_1'),
(8, 3, 'Silk Zone Women\'s Banarasi Artificial Silk', '899.00', 'Care Instructions: Dry Clean Only\r\nStyle details: Kanchipuram\r\nSize Type: Saree Length 5.5 meters, comes with unstitched blouse piece of 0.80 meters.\r\nWork Type: Thread and Zari Woven\r\nDesign: Thick Border with Zari Motif\r\nDisclaimer: Product color may slightly vary due to Photographic Lightining Source or Your Device Setting.', '3_2'),
(9, 4, 'Newborn Baby Bassinet with Cradle, Wheel, Mosquito net and Bedding Set', '7999.00', 'Built in Wheels: As safe as it is stylishm,this newborn bassinet features a sleek wheels design and makes it extremely easy and safe to room share with your little one from birth to 1 year, allow you to easily move it from room to room.\r\nQuick Conversion to Cradle Mode: Allows you to shake your baby and help the baby asleep quickly\r\nSmart Plug and Play: It has all necessities that new parent would need to take care of their baby. Mosquito net, bedding set, storage basket, all comes along with. Better to buy a complete package than buying just a bassinet and then look for add ons.\r\nAnti Choking mode: You can adjust the bed position by raising it so that it is easier for baby to digest the milk.\r\nOne click folding: ius one click folding design makes it easy for storage and transportation to grandparent\'s home in the car luggage box', '4_3'),
(10, 1, 'OPPO F19 Pro + 5G (Space Silver, 8GB RAM, 128GB Storage) ', '25990.00', '6.43\" inch (16.3cm) FHD+ Super AMOLED Punch-hole Display with 2400x1080 pixels. Larger Screen to Body ratio of 90.8%, In-display Fingerprint 3.0.\r\nMediatek Dimensity 800U 5G Supports Dual 5G or 4G Sim. Powerful 2.4 ghz Octa-core Processor, Support LPDDR4x memory and latest UFS 2.1 storage.\r\n4310 mAH Lithium Polymer Battery with 50W Flash Charging Technology.\r\n48MP Quad Camera ( 48MP Main + 8MP wide angle macro + 2MP portrait mono lens + 2MP Macro mono lens) - 16MP Front Camera.\r\nMemory, Storage & Sim: 8GB RAM -128GB Internal Memory Expandable up to 256gb, Dual sim (nano+nano) dual-standby (5g+5g). ColorOS 11.1 based on android v11.0 operating system.\r\n1 Year Manufacturer Warranty for Device and 6 Months Manufacturer Warranty for in-box accessories including batteries from the date of purchase.', '1_3'),
(11, 1, 'Samsung Galaxy M52 5G', '24999.00', 'Triple camera setup-64MP (F 1.8) main camera + 12MP (F2.2) Ultra wide camera+ 5MP (F2.4) depth camera 32MP (F2.2) front camera\r\n16.95 centimeters (6.7-inch) Super AMOLED Plus- Infinity O display, FHD+ resolution 1080 x 2400 (FHD+) pixels protected by Gorilla Glass 5\r\nQualcomm SDM 778G Octa Core 2.4GHz,1.8GHz Processor with the 11 band support for a True 5G experience\r\nMonster 5000 mAh Battery | Memory, Storage & SIM: 8GB RAM | 128GB internal memory expandable up to 1TB| SIM 1 + Hybrid (SIM or MicroSD)\r\nAndroid v11.0, One UI 3.1 operating system, 5000mAH lithium-ion battery, 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase', '1_4'),
(12, 4, 'Rabitat Organic Cotton Fitted Bedsheet Cribs/Cots Oh Baby ( Multi)', '799.00', 'The softest fabric - Rabitat 100% Organic Cotton Fitted Cradle Sheet is the softest fabric available for the new born’s skin. Free from Chemical dyes, fertilisers, the crib sheet is made from the most breathable fabric which ensures that your baby has a comfortable sleep all night long.\r\nDurable - The Rabitat 100% Organic Cotton Fitted Cradle Sheet lasts 5 times longer than regular Crib Sheets. Due to higher integral standards while manufacturing and the lack of chemicals used the cotton lasts 5x longer. Breathable cotton that wears well over time.\r\nGOTS Certified Organic Cotton - Fertilizers and Pesticides harm the environment and your baby. So we sought to manufacture our products that protect them by using 100% Certified Organic Cotton\r\nFully Fitted - our 28\" X 52\" crib sheets with an 8” drop fit snugly around standard size crib and toddler mattresses. Gentle encased elastic helps keep a secure fit.\r\nKey points- 300 thread count. Machine washable. Non toxic dyes.', '4_4'),
(13, 5, 'Whirlpool 60 cm 1100 m³/HR Auto-Clean Curved Glass Kitchen Chimney', '15999.00', 'Mounting Type	Wall Mount\r\nMaterial	Glass\r\nBrand	Whirlpool\r\nItem Dimensions LxWxH	60 x 48.1 x 47.1 Centimeters\r\nItem Weight	11.95 Kilograms\r\nAbout this item\r\nWarranty: 1 year on product, 10 years on motor\r\nSize: 60 C (2-4 burner stove for wall mounted chimneys)\r\nSuction capacity: 1100 m3/hr (for kitchen size more than 200 sqft & heavy frying/grilling)\r\nWarranty: 10 years on motor and 1 year comprehensive from date of purchase. Customer care: 7447440983/4/5\r\nType: curved glass, wall mounted, auto clean | Colour: Black\r\nControl type: touch panel control | no. Of lamps: 1 | maximum noise(db): 58', '5_1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `email`, `phone`, `address1`, `address2`) VALUES
(1, 'user1', 'user11', 'user1@gmail.com', '9874551248', 'erewr wr ', '46r3432465436'),
(2, 'user2', 'rrewr', 'krishna@gmail.com', '7894575879', 'abcd street house no -500, sai apartment ', 'xyz colony, house no 201, pin 760011'),
(3, 'user3', 'user3', 'user3@kjfk.com', '9887349339', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
