-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2018 at 04:08 PM
-- Server version: 5.6.41
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kimd35_1st_look`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Oid` int(15) NOT NULL,
  `Cid` int(15) NOT NULL,
  `Pid` int(15) NOT NULL,
  `Pname` varchar(15) NOT NULL,
  `quantity` int(15) NOT NULL,
  `price` int(30) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Oid`, `Cid`, `Pid`, `Pname`, `quantity`, `price`, `adress`, `city`, `state`, `zip`) VALUES
(84, 55, 11, 'Princess Charmi', 9, 317, '36 Clark', 'Lodi', 'NJ', 7644),
(86, 39, 10, 'Good Knight tes', 4, 9999, '36 clark', 'Lodi', 'NJ', 7644),
(87, 56, 10, 'Good Knight tes', 2, 9999, 'Clark', 'Lodi', 'NJ', 7644),
(88, 39, 11, 'Princess Charmi', 1, 317, '3101 Walnut St', 'Philadelphia', 'PA', 19104),
(89, 56, 10, 'Good Knight tes', 3, 9999, '36 Clark ', 'Lodi', 'NJ', 7644),
(90, 56, 1, 'Blue-La-La', 2, 1377, '36 Clark ', 'Lodi', 'NJ', 7644),
(91, 56, 25, 'Cherry on Top', 2, 215, '66D Mary Street', 'Lodi', 'NJ', 7644);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Pid` int(10) NOT NULL,
  `Pname` varchar(250) NOT NULL,
  `Pprice` float NOT NULL,
  `quantity` int(15) NOT NULL,
  `image` varchar(250) NOT NULL,
  `category` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Pid`, `Pname`, `Pprice`, `quantity`, `image`, `category`) VALUES
(1, 'Blue-La-La', 1376.5, 996, '1.Blue-La-La.jpg', 1),
(10, 'Good Knight test', 9999, 9991, '10.Good Knight.jpg', 1),
(2, 'Berried Treasure', 5000, 10000, '2.Berried Treasure.jpg', 1),
(3, 'Steal His Name', 1829.5, 10000, '3.Steal His Name.jpg', 1),
(4, 'Set in Stones', 1347, 10000, '4.Set in Stones.jpg', 1),
(5, 'Sexy Divide', 1274.5, 10000, '5.Sexy Divide.jpg', 1),
(6, 'Meet Me at Sunset', 1937, 10000, '6.Meet Me at Sunset.jpg', 1),
(7, 'Lollipop', 1183, 10000, '7.Lollipop.jpg', 1),
(8, 'Mint Candy Apple', 1550, 10000, '8.Mint Candy Apple.jpg', 1),
(9, 'Decadent Diva', 1374, 10000, '9.Decadent Diva.jpg', 1),
(11, 'Princess Charming', 317, 5, '11.Princess Charming.jpg', 2),
(12, 'Moments to Mrs.', 398, 10000, '12.Moments to Mrs..jpg', 2),
(13, 'Indi-go For It', 345, 10000, '13.Indi-go For It.jpg', 2),
(14, 'Gold Gildinga', 322, 10000, '14.Gold Gilding.jpg', 2),
(15, 'Jade to Measure.', 309, 10000, '15.Jade to Measure.jpg', 2),
(16, 'Seeing Starts', 313, 10000, '16.Seeing Starts.jpg', 2),
(17, 'Tote-ally in Love', 399.5, 10000, '17.Tote-ally in Love.jpg', 2),
(18, 'Say It Aint Soho', 378.5, 10000, '18.Say It Aint Soho.jpg', 2),
(19, 'All Daisy Long', 399.5, 10000, '19.All Daisy Long.jpg', 2),
(20, 'Making Harmony', 312.5, 10000, '20.Making Harmony.jpg', 2),
(21, 'Dont Be Salty', 218, 4, '21.Dont Be Salty.jpg', 3),
(22, 'Perfect Mate', 243.6, 10000, '22.Perfect Mate.jpg', 3),
(23, 'In a Blush', 201.7, 10000, '23.In a Blush.jpg', 3),
(24, 'Picked to Perfection', 216.5, 19987, '24.Picked to Perfection.jpg', 3),
(25, 'Cherry on Top', 214.5, 8, '25.Cherry on Top.jpg', 4),
(26, 'Sittin Pretty', 297.5, 19987, '26.Sittin Pretty.jpg', 4),
(27, 'Jewel in the Crown', 218.4, 10000, '27.Jewel in the Crown.jpg', 4),
(28, 'Lots of Lux', 299, 10000, '28.Lots of Lux.jpg', 5),
(29, 'Minimally Modest', 269.5, 19987, '29.Minimally Modest.jpg', 5),
(30, 'Horse Doeuvres', 240, 10000, '30.Horse Doeuvres.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `Cid` int(15) NOT NULL,
  `Pid` int(15) NOT NULL,
  `Pname` varchar(15) NOT NULL,
  `Pprice` float NOT NULL,
  `total` int(200) NOT NULL,
  `quantity` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`Cid`, `Pid`, `Pname`, `Pprice`, `total`, `quantity`) VALUES
(0, 1, 'Blue-La-La', 1376.5, 2753, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `positionID` varchar(15) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(15) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `positionID`, `firstname`, `lastname`, `username`, `password`, `street`, `city`, `state`, `zip`, `phone`, `email`) VALUES
(57, 'M', 'Darae', 'Kim', 'Kimd35', '5f65edfe6c93931d6eba3729d0172265', '5 ROSETREE TER APT D3', 'RIDGEFIELD', 'NJ', 7657, 2019370281, 'darae819@gmail.com'),
(51, 'A', 'Anne', 'Frank', 'admin ', '4390642469352c1c3629441ace93a644', '149 Elm Street', 'New Haven', 'CT', 6520, 2012496729, 'Franka55@googal.com'),
(47, 'E', 'James', 'Johnson', 'Johnsonj32', 'fe269aff7b7b3b5e51e4f540c45b06d2', '116th St & Broadway', 'New York', 'NY', 10027, 2017366620, 'JohnsonJ32@googal.com'),
(46, 'E', 'Maria', 'Garcia', 'Garciam38', '9369917c838b4d4a31b98b84653a4ab7', '111 Washington St', 'Newark', 'NJ', 7102, 2011435762, 'Garciam38@googal.com'),
(44, 'E', 'John', 'Smith', 'Smithj42', '7f9afcc3009572f04663b67f93209c37', '200 Normal Ave', 'Montclair', 'NJ', 7043, 2019370288, 'SmithJ42@googal.com'),
(43, 'C', 'Siwoo', 'Kim', 'Kims60', '8d23914ecfa251d545a897d8e21b423b', '149 Elm Street', 'New Haven', 'CT', 6520, 2012496729, 'Kims60@googal.com'),
(42, 'C', 'Mary', 'Yoo', 'Yoom28', '60a419ba035c3fcc25761b64637b2054', '3101 Walnut St', 'Philadelphia', 'PA', 19104, 2010529312, 'Yoom28@googal.com'),
(41, 'C', 'Senada', 'Dushaj', 'Dushajs25', 'b38975b136504aab22151b8faa9e1c34', '116th St & Broadway', 'New York', 'NY', 10027, 2017366620, 'Dushajs25@googal.com'),
(40, 'C', 'Ejona', 'Kamberi', 'Kamberie27', '6b454e6dd625a40c4f24ce015e8aefd3', '111 Washington St', 'Newark', 'NJ', 7102, 2011435762, 'Kamberie27@googal.com'),
(39, 'C', 'Gregory', 'Markus', 'Markusg30', 'b5a6c04bbfa3edacb12648cc8509000b', '1 Normal Ave', 'Montclair', 'NJ', 7043, 2019370288, 'Makusg30@googal.com'),
(56, 'C', 'Elona', 'Zharri', 'zese', 'f1b817b7a5c95f44ae5aa98ae3036a6d', '36 Clark', 'Lodi', 'NJ', 7644, 2147483647, 'elonazharri@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Oid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Oid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
