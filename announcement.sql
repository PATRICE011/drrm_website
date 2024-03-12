-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 12:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drrm_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `date`, `message`) VALUES
(1, '2024-03-07', ' sfaadgawegewwegefew'),
(2, '2024-03-22', ' Systems are ubiquitous in our world, encompassing everything from the intricate networks of our bodies to the complex structures of society and the environment. Understanding systems and their dynamics is crucial for comprehending the interconnectedness of various elements and the emergent properties that arise from their interactions.\r\n\r\nAt its core, a system consists of interrelated components working together towards a common goal or purpose. These components can be physical entities, such as organs in the human body, or abstract entities, such as policies in a government system. The interactions among these components give rise to system behavior, which can often be nonlinear and unpredictable.\r\n\r\nOne fundamental concept in system theory is feedback loops, which can either reinforce or dampen system behavior. Positive feedback loops amplify changes within a system, leading to exponential growth or collapse, while negative feedback loops stabilize the system by counteracting deviat'),
(3, '2024-03-02', ' gddsagasdgdsg'),
(4, '2024-03-06', ' \r\nTitle: The Philippines: A Tapestry of Culture, History, and Natural Beauty\r\n\r\nIntroduction:\r\nNestled in the heart of Southeast Asia lies a gem of diverse cultures, rich history, and unparalleled natural beauty – the Philippines. With over 7,000 islands comprising its archipelago, the Philippines boasts a unique blend of traditions, landscapes, and stories that have shaped its identity over centuries. From its vibrant festivals to its pristine beaches, the Philippines offers a tapestry of experiences that captivate the imagination and leave an indelible mark on all who visit.\r\n\r\nCultural Mosaic:\r\nThe Philippines is a melting pot of cultures, shaped by waves of migration and colonization throughout its history. Indigenous peoples such as the Igorots, Lumads, and Mangyans have preserved their traditions amidst modernity, while Malay, Chinese, Spanish, and American influences have left their mark on Filipino society. This cultural diversity is celebrated through festivals, dances, cuisine, and languages spoken across the archipelago, showcasing the resilience and adaptability of the Filipino spirit.'),
(5, '2024-03-08', ' Challenges and Opportunities:\r\nDespite its natural and cultural riches, the Philippines faces various challenges, including poverty, corruption, and environmental degradation. Rapid urbanization and industrialization threaten fragile ecosystems, while socioeconomic disparities persist among its diverse population. However, the Philippines also holds immense potential for sustainable development, with a growing tourism industry, a young and dynamic workforce, and a vibrant civil society driving positive change.\r\n\r\nConclusion:\r\nIn conclusion, the Philippines is a country of contrasts – a blend of ancient traditions and modern aspirations, colonial legacies and indigenous resilience, natural wonders and man-made challenges. Its beauty lies not only in its landscapes but also in the warmth and resilience of its people, who continue to forge ahead with hope and determination. As the Philippines navigates the complexities of the 21st century, it remains a beacon of diversity, resilience, and possibility in the heart of Southeast Asia.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
