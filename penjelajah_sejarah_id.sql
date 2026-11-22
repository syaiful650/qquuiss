-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2026 at 11:28 AM
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
-- Database: `penjelajah_sejarah_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `explorers`
--

CREATE TABLE `explorers` (
  `id` int(11) NOT NULL,
  `explorer_name` varchar(100) NOT NULL,
  `total_score` int(11) NOT NULL DEFAULT 0,
  `title_awarded` varchar(100) DEFAULT NULL,
  `completed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `explorers`
--

INSERT INTO `explorers` (`id`, `explorer_name`, `total_score`, `title_awarded`, `completed_at`) VALUES
(1, 'Bima Sakti', 80, 'Penjelajah Andal Nusantara', '2026-11-21 14:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `explorer_answers`
--

CREATE TABLE `explorer_answers` (
  `id` int(11) NOT NULL,
  `explorer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `selected_option` enum('A','B','C','D') NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `points_earned` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `explorer_answers`
--

INSERT INTO `explorer_answers` (`id`, `explorer_id`, `question_id`, `selected_option`, `is_correct`, `points_earned`) VALUES
(1, 1, 1, 'B', 1, 20),
(2, 1, 2, 'B', 1, 20),
(3, 1, 3, 'B', 1, 20),
(4, 1, 4, 'C', 1, 20),
(5, 1, 5, 'A', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kingdoms`
--

CREATE TABLE `kingdoms` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `era` varchar(50) NOT NULL,
  `region` varchar(100) NOT NULL,
  `famous_king` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `relic` varchar(150) NOT NULL,
  `map_coord_x` decimal(5,2) NOT NULL,
  `map_coord_y` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kingdoms`
--

INSERT INTO `kingdoms` (`id`, `name`, `era`, `region`, `famous_king`, `description`, `relic`, `map_coord_x`, `map_coord_y`) VALUES
(1, 'Kerajaan Sriwijaya', 'Abad ke-7 - ke-13 M', 'Sumatera Selatan (Palembang)', 'Raja Balaputradewa', 'Kemaharajaan maritim terbesar di Asia Tenggara yang menguasai jalur perdagangan Selat Malaka.', 'Prasasti Kedukan Bukit & Candi Muara Takus', 24.50, 58.20),
(2, 'Kerajaan Majapahit', '1293 - 1527 M', 'Jawa Timur (Trowulan)', 'Hayam Wuruk & Mahapatih Gajah Mada', 'Kerajaan agraris dan maritim yang menyatukan wilayah Nusantara melalui ikrar Sumpah Palapa.', 'Kitab Negarakertagama & Candi Tikus', 39.80, 74.10),
(3, 'Kerajaan Kutai Martadipura', 'Abad ke-4 M', 'Kalimantan Timur (Muara Kaman)', 'Raja Mulawarman', 'Kerajaan Hindu tertua di Indonesia yang terletak di tepi Sungai Mahakam.', '7 Buah Prasasti Yupa', 51.20, 44.60),
(4, 'Kesultanan Gowa-Tallo', 'Abad ke-16 - ke-17 M', 'Sulawesi Selatan (Makassar)', 'Sultan Hasanuddin', 'Kerajaan maritim tangguh di timur Indonesia yang dijuluki Ayam Jantan dari Timur.', 'Benteng Somba Opu & Fort Rotterdam', 61.40, 59.80),
(5, 'Kesultanan Ternate & Tidore', 'Abad ke-13 - ke-17 M', 'Maluku Utara', 'Sultan Baabullah', 'Pusat penghasil rempah-rempah cengkih dan pala dunia yang mengusir Portugis dari Maluku.', 'Benteng Tolukko & Kedaton Ternate', 76.90, 43.20);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `id` int(11) NOT NULL,
  `kingdom_id` int(11) DEFAULT NULL,
  `question_text` text NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `correct_option` enum('A','B','C','D') NOT NULL,
  `points` int(11) NOT NULL DEFAULT 20,
  `historical_fact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `kingdom_id`, `question_text`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `points`, `historical_fact`) VALUES
(1, 1, 'Kerajaan maritim bercorak Buddha di Sumatera yang menguasai Selat Malaka pada abad ke-7 hingga ke-13 adalah...', 'Kerajaan Tarumanegara', 'Kerajaan Sriwijaya', 'Kerajaan Mataram Kuno', 'Kerajaan Singasari', 'B', 20, 'Sriwijaya mencapai puncak kejayaan pada masa Raja Balaputradewa.'),
(2, 2, 'Ikrar yang diucapkan Mahapatih Gajah Mada untuk mempersatukan Nusantara di bawah panji Majapahit disebut...', 'Sumpah Pemuda', 'Sumpah Palapa', 'Perjanjian Giyanti', 'Kitab Sutasoma', 'B', 20, 'Sumpah Palapa diucapkan pada tahun 1336 M saat Gajah Mada diangkat menjadi Mahapatih.'),
(3, 3, 'Bukti sejarah tertua Kerajaan Kutai Martadipura berupa tiang batu bertulis huruf Pallawa disebut...', 'Prasasti Ciaruteun', 'Prasasti Yupa', 'Prasasti Talang Tuo', 'Prasasti Canggal', 'B', 20, 'Prasasti Yupa menceritakan Raja Mulawarman yang menyedekahkan 20.000 ekor sapi.'),
(4, 4, 'Raja Kesultanan Gowa-Tallo yang mendapat julukan \"Ayam Jantan dari Timur\" adalah...', 'Sultan Ageng Tirtayasa', 'Sultan Iskandar Muda', 'Sultan Hasanuddin', 'Pangeran Diponegoro', 'C', 20, 'Sultan Hasanuddin memimpin perlawanan sengit melawan monopoli VOC di Makassar.'),
(5, 5, 'Kesultanan Ternate dan Tidore menjadi incaran bangsa Eropa karena kekayaan komoditas...', 'Emas dan Perak', 'Cengkih dan Pala', 'Kopi dan Teh', 'Kayu Jati dan Rotan', 'B', 20, 'Kepulauan Maluku dijuluki The Spice Islands karena menjadi penghasil utama cengkih dan pala.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `explorers`
--
ALTER TABLE `explorers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `explorer_answers`
--
ALTER TABLE `explorer_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_answer_explorer` (`explorer_id`),
  ADD KEY `fk_answer_question` (`question_id`);

--
-- Indexes for table `kingdoms`
--
ALTER TABLE `kingdoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_question_kingdom` (`kingdom_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `explorers`
--
ALTER TABLE `explorers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `explorer_answers`
--
ALTER TABLE `explorer_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kingdoms`
--
ALTER TABLE `kingdoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `explorer_answers`
--
ALTER TABLE `explorer_answers`
  ADD CONSTRAINT `fk_answer_explorer` FOREIGN KEY (`explorer_id`) REFERENCES `explorers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_answer_question` FOREIGN KEY (`question_id`) REFERENCES `quiz_questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD CONSTRAINT `fk_question_kingdom` FOREIGN KEY (`kingdom_id`) REFERENCES `kingdoms` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
