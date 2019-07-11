-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 12:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compscience`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

CREATE TABLE `chatroom` (
  `autoincrement` int(200) NOT NULL,
  `name` varchar(5000) NOT NULL,
  `public_comment` varchar(5000) NOT NULL,
  `private_comment` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatroom`
--

INSERT INTO `chatroom` (`autoincrement`, `name`, `public_comment`, `private_comment`) VALUES
(14, 'mash', 'j', '0'),
(15, 'mash', ' ', '0'),
(16, 'mash', ' hello', '0'),
(17, 'mash', ' ', '0'),
(18, 'mash', ' Among the 30 strategic objectives identified by Chuka University is the development and enhancement of ICT and networking services. This cannot be realized without the establishment of an up-to-date ICT infrastructure to facilitate quick flow of information and exchange of ideas. This will help stimulate scholarship, efficiency and innovations through improved communication networks. In the higher education sector, the adoption and use of ICT services is realized through the extent to which ICT supports and fosters innovative research, learning and teaching in addition to supporting administrative processes. In line with this, Chuka University is rapidly developing its ICT infrastructure.', '0'),
(19, 'mash', ' Among the 30 strategic objectives identified by Chuka University is the development and enhancement of ICT and networking services. This cannot be realized without the establishment of an up-to-date ICT infrastructure to facilitate quick flow of information and exchange of ideas. This will help stimulate scholarship, efficiency and innovations through improved communication networks. In the higher education sector, the adoption and use of ICT services is realized through the extent to which ICT supports and fosters innovative research, learning and teaching in addition to supporting administrative processes. In line with this, Chuka University is rapidly developing its ICT infrastructure.', '0'),
(20, 'mash', ' ', '0'),
(21, 'mash', ' fhj', '0');

-- --------------------------------------------------------

--
-- Table structure for table `funcorner`
--

CREATE TABLE `funcorner` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `comment` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funcorner`
--

INSERT INTO `funcorner` (`id`, `name`, `comment`) VALUES
(1, 'mash', 'dog D = new Dog();'),
(2, 'ishad', 'wolf wolf'),
(3, 'hozy', 'can we video-chat');

-- --------------------------------------------------------

--
-- Table structure for table `maillist`
--

CREATE TABLE `maillist` (
  `autoincrmnt` int(11) NOT NULL,
  `mail` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maillist`
--

INSERT INTO `maillist` (`autoincrmnt`, `mail`) VALUES
(1, 'machariamuguku@gmail.com'),
(2, 'ianomondi@gmail.com'),
(3, 'maggy@gmail.com'),
(4, 'ishadtechnologies@ymail.com'),
(5, 'kennethmutuma@yahoo.com'),
(6, 'emelda@gmail.com'),
(7, 'lydia@ymail.co.ke'),
(8, 'mash@ymail.com'),
(9, 'mash@ymail.com'),
(10, 'mash@ymail.com'),
(11, 'me@me.me'),
(12, 'hjkh@hh.k');

-- --------------------------------------------------------

--
-- Table structure for table `newstudents`
--

CREATE TABLE `newstudents` (
  `autoincriment` int(200) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` text NOT NULL,
  `password` varchar(5000) NOT NULL,
  `idnumber` int(200) NOT NULL,
  `age` int(200) NOT NULL,
  `gender` varchar(5000) NOT NULL,
  `phone` int(200) NOT NULL,
  `email` varchar(5000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newstudents`
--

INSERT INTO `newstudents` (`autoincriment`, `firstname`, `lastname`, `username`, `password`, `idnumber`, `age`, `gender`, `phone`, `email`, `date`) VALUES
(21, 'maggy', 'karos', 'meg', 'mer86', 1204, 23, 'female', 720331801, 'me@karos', '2016-09-27'),
(31, 'mash', 'muguku', 'mash', '123456', 31005658, 22, 'male', 728655403, 'machariamaguku@gmail.com', '2016-12-02'),
(32, 'ishad', 'technologies', 'ishad', 'ishad', 31559012, 23, 'male', 715662642, 'shaddy@ymail.com', '2016-12-02'),
(33, 'hozy', 'kip', 'hozy', '1234', 33453456, 21, 'male', 702123333, 'hozy@mail.com', '2016-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `products_list`
--

CREATE TABLE `products_list` (
  `id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` text NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_image` varchar(60) NOT NULL,
  `product_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_list`
--

INSERT INTO `products_list` (`id`, `product_name`, `product_desc`, `product_code`, `product_image`, `product_price`) VALUES
(1, 'Cool T-shirt', 'Cool T-shirt, Cotton Fabric. Wash in normal water with mild detergent.', 'TSH1', 'tshirt-1.jpg', '8.50'),
(2, 'HBD T-Shirt', 'Cool Happy Birthday printed T-shirt.Crafted from light, breathable cotton.', 'TSH2', 'tshirt-2.jpg', '7.40'),
(3, 'Survival of Fittest', 'Yellow t-shirt makes the perfect addition to your casual wardrobe.', 'TSH3', 'tshirt-3.jpg', '9.50'),
(4, 'Love Hate T-shirt', 'Stylish and trendy, this crew neck short sleeved t-shirt is made with 100% pure cotton.', 'TSH4', 'tshirt-4.jpg', '10.80');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(250) NOT NULL,
  `page` varchar(5000) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `page`, `title`, `description`) VALUES
(1, 'index.php', 'about the home index page ', ' INFORMATION AND COMMUNICATION TECHNOLOGY   Among the 30 strategic objectives identified by Chuka University is the development and enhancement of ICT and networking services. This cannot be realized without the establishment of an up-to-date ICT infrastructure to facilitate quick flow of information and exchange of ideas. This will help stimulate scholarship, efficiency and innovations through improved communication networks. In the higher education sector, the adoption and use of ICT services is realized through the extent to which ICT supports and fosters innovative research, learning and teaching in addition to supporting administrative processes. In line with this, Chuka University is rapidly developing its ICT infrastructure.  The DCSICT department has the mandate to provide technical advice on ICT matters relating to hardware, software and networks. The centre also provides IT and communication services in support of teaching and research at Chuka University. These include:  Providing specification for'),
(2, 'about.php', 'stuff about the about us page', 'FACULTY OF ENGINEERING, SCIENCE AND TECHNOLOGY  Prof. Adiel M. Magana  Dean  The mission of the faculty of science and technology is to generate, transmit and preserve quality knowledge by promoting independent and interactive learning and a scientific inquiry in culture and striving for diverse national and global development in pure and applied research in sciences and technology, while seeking to integrate these perspectives. This is in line with the universityâ€™s vision and mission as elaborated in the strategic plan.  The faculty comprises of: physical sciences, computer science (ICT) and nursing departments.The faculty educates outstanding scholars, researchers and specialists, who contribute innovatively to the development and well being of humanity.  The faculty collaborates with community and industry at national and international levels in sharing knowledge and fostering of freedom and peaceful coexistence. In the resent past, the faculty was bought diverse equipment including the Atomic Absorption Spectrophotometer (AAS) for research and learning purposes. Plans are underway to establish a state of the art science research park aimed at conducting of cutting edge research and up scaling of innovations to boosts technology transfer to the public and business industry.    OUR MISSION:  To generate, preserve and share knowledge for effective leadership in higher education, training, evaluation, research and outreach through nurturing an intellectual culture that integrates theory with practice and innovation.    OUR VISION:  To be a renowned Department in a Premier University for the provision of quality education, training, and  research for sustainable national and global development.'),
(3, 'gallery.php', 'Latest Images From The University Gallery Description Goes Here', 'Latest Images From The University Gallery Description Goes Here'),
(4, 'contact.php', 'the contact us page', 'Your Comment  Submit Publicly  Submit Privately    Reset Form Recent public comments   By user1 Friday, 6th April 2045 @08:15:00 This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.   By user2 Friday, 6th April 2045 @08:15:00 This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.   By user3 Friday, 6th April 2045 @08:15:00 This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.'),
(5, 'index.php', 'the footer information 1', ' Check us out on Google Maps Â» Chuka University Computer Science Department 2337-20100  Chuka   0728655493   contact@compchuka.com'),
(6, 'index.php', 'the footer information 2', ' Check us out on Google Maps Â» Chuka University Computer Science Department 2337-20100  Chuka   0728655493   contact@compchuka.com'),
(7, 'index.php', 'the footer information 3', ' Check us out on Google Maps Â» Chuka University Computer Science Department 2337-20100  Chuka   0728655493   contact@compchuka.com'),
(8, 'index.php', 'the footer information 4', ' Check us out on Google Maps Â» Chuka University Computer Science Department 2337-20100  Chuka   0728655493   contact@compchuka.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `regno` varchar(11) NOT NULL,
  `password` varchar(60) NOT NULL,
  `sign_up_date` date NOT NULL,
  `activated` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`autoincrement`);

--
-- Indexes for table `funcorner`
--
ALTER TABLE `funcorner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maillist`
--
ALTER TABLE `maillist`
  ADD PRIMARY KEY (`autoincrmnt`);

--
-- Indexes for table `newstudents`
--
ALTER TABLE `newstudents`
  ADD PRIMARY KEY (`autoincriment`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `autoincrement` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `funcorner`
--
ALTER TABLE `funcorner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `maillist`
--
ALTER TABLE `maillist`
  MODIFY `autoincrmnt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `newstudents`
--
ALTER TABLE `newstudents`
  MODIFY `autoincriment` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
