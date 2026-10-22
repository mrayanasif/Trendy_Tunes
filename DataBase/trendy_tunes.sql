-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2025 at 11:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trendy_tunes`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `artist` varchar(100) DEFAULT NULL,
  `album` varchar(100) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `is_new` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `title`, `artist`, `album`, `genre`, `year`, `language`, `description`, `file_path`, `thumbnail`, `is_new`, `created_at`) VALUES
(43, 'JAL PARI', 'Atif Aslam', 'Jal Pari', 'pop', '2004', 'Regional Language', 'Longing and soulful metaphor.', 'uploads/songs/689b493ec52ca_Jal Pari  Atif Aslam  Season 2  Coke Studio Pakistan  @RohailHyattMusic.mp3', '689b493ec52e0_Jal Pri ALbum.jpg', 0, '2025-08-12 14:01:34'),
(45, 'AADAT', 'Atif Aslam', 'Jal Pari', 'pop', '2003', 'Regional Language', 'Emotional rock ballad.', 'uploads/songs/689b4b34e9d6b_Aadat - Atif Aslam (Lyrics) -  Kalyug.mp3', '689b4b34e9d7c_aadat.jpg', 0, '2025-08-12 14:09:56'),
(46, 'EHSAAS', 'Atif Aslam', 'Jal Pari', 'pop', '2001', 'Regional Language', 'Heartfelt emotional expression.', 'uploads/songs/689b4c1b13c77_Ehsaas.mp3', '689b4c1b13c81_ehsaas.jpeg', 0, '2025-08-12 14:13:47'),
(47, 'AANKHON SE', 'Atif Aslam', 'Jal Pari', 'pop', '2014', 'Regional Language', 'Romantic soulful gaze.', 'uploads/songs/689b4cb4e11a7_[LYRICS] Aankhon Se - Atif Aslam.mp3', '689b4cb4e11ba_aankhon se.jpg', 0, '2025-08-12 14:16:20'),
(48, 'TU JANE NA', 'Atif Aslam', 'Jal Pari', 'Pop', '2008', 'Regional Language', 'Unspoken heartfelt love.', 'uploads/songs/689b4d1922488_Tu Jaane Na Lyrical - Ajab Prem Ki Ghazab Kahani  Atif Aslam  Ranbir Kapoor, Katrina Kaif  Pritam.mp3', '689b4d1922490_tu jaane.jpg', 0, '2025-08-12 14:18:01'),
(57, 'Dil Diyan Gallan', 'Atif Aslam', 'Bollywood Hits', 'classical', '2020', 'Regional Language', 'Amazing,Feels Relax', 'uploads/songs/689b741f3ab44_Dil Diyan Gallan Song  Tiger Zinda Hai  Salman Khan, Katrina Kaif  Atif Aslam  Vishal & Shekhar.mp3', '689b741f3ab4d_dil diyan galan.jpeg', 0, '2025-08-12 17:04:31'),
(58, 'Rafta Rafta', 'Atif Aslam', 'Bollywood Hits', 'classical', '2020', 'Regional Language', 'Classic', 'uploads/songs/689b746173256_Rafta Rafta - Official Music Video  Raj Ranjodh  Atif Aslam Ft. Sajal Ali  Tarish Music.mp3', '689b746173260_rafta.jpeg', 0, '2025-08-12 17:05:37'),
(59, 'Tere Sang Yaara', 'Atif Aslam', 'Bollywood Hits', 'classical', '2020', 'Regional Language', 'Classic', 'uploads/songs/689b74a68d67b_Tere Sang Yaara.mp3', '689b74a68d681_tere sang yara.jpeg', 0, '2025-08-12 17:06:46'),
(60, 'Hona Tha Pyar', 'Atif Aslam', 'Bollywood Hits', 'classical', '2020', 'Regional Language', 'Classical \r\n', 'uploads/songs/689b74db7a20e_Hona Tha Pyar.mp3', '689b74db7a215_hona tha pyar.jpeg', 0, '2025-08-12 17:07:39'),
(61, 'Pehli Dafa', 'Atif Aslam', 'Bollywood Hits', 'classical', '2020', 'Regional Language', 'Good', 'uploads/songs/689b7522c73c5_Hona Tha Pyar.mp3', '689b7522c73cc_pehli dafa.jpg', 0, '2025-08-12 17:08:50'),
(62, 'Bemathlab', 'Asim Azhar', 'Bemathlab', 'pop', '2017', 'Regional Language', 'Quality', 'uploads/songs/689b7581711b3_Bematlab (Official Video) Asim Azhar ft. Talha Anjum  BEMATLAB (1).mp3', '689b7581711ba_bemathlab album 1.jpeg', 0, '2025-08-12 17:10:25'),
(63, 'Kyun', 'Asim Azhar', 'Bemathlab', 'pop', '2017', 'Regional Language', 'Next Level', 'uploads/songs/689b767e4ef9f_Kyun (Lyric Video) Asim Azhar  BEMATLAB.mp3', '689b767e4efa5_Asim Azhar Cover.jpg', 0, '2025-08-12 17:14:38'),
(65, 'You', 'Asim Azhar', 'Bemathlab', 'pop', '2017', 'Regional Language', 'Pop ', 'uploads/songs/689b77902485f_You (Lyric Video) Asim Azhar feat. Hasan Raheem  BEMATLAB.mp3', '689b779024867_asim cover.jpeg', 0, '2025-08-12 17:19:12'),
(66, 'Karma', 'Asim Azhar', 'Bemathlab', 'pop', '2017', 'Regional Language', 'Soft Pop', 'uploads/songs/689b78569dbd9_Karma (Lyric Video) Asim Azhar feat. Talhah Yunus  BEMATLAB (1).mp3', '689b78569dbe3_karma .jpg', 0, '2025-08-12 17:22:30'),
(67, 'Mujhsa Na', 'Asim Azhar', 'Bemathlab', 'pop', '2017', 'Regional Language', 'POp Song', 'uploads/songs/689b788fef464_Mujhsa Na (Lyric Video) Asim Azhar feat. Nehaal Naseem  BEMATLAB.mp3', '689b788fef469_mujhse na.jpeg', 0, '2025-08-12 17:23:27'),
(68, 'Laila O Laila', 'Ali Zafar', 'Regional Hits', 'pop', '2015', 'Regional Language', 'Pashto', 'uploads/songs/689b79757130b_Laila O Laila - Ali Zafar ft Urooj Fatima  Lightingale Productions.mp3', '689b797571315_laila2.jpeg', 0, '2025-08-12 17:27:17'),
(69, 'Allay', 'Ali Zafar', 'Regional Hits', 'pop', '2015', 'Regional Language', 'Pahto Song', 'uploads/songs/689b79d108e4e_Allay (Munja Mar Wara)  Ali Zafar ft. Urooj Fatima & Abid Brohi  Lightingale Records.mp3', '689b79d108e54_Album 01.jpeg', 0, '2025-08-12 17:28:49'),
(70, 'Balo Batiyan', 'Ali Zafar', 'Regional Hits', 'pop', '2015', 'Regional Language', 'Bhai Sunlai', 'uploads/songs/689b7a8209b59_BALO BATIYAN - Ali Zafar X Atta Ullah Khan Esakhelvi.mp3', '689b7a8209b62_balo batiyan 1.jpeg', 0, '2025-08-12 17:31:46'),
(71, 'Karay Karay', 'Ali Zafar', 'Regional Hits', 'pop', '2015', 'Regional Language', 'Pashto famous Song', 'uploads/songs/689b7accd5094_Karay Karay - Ali Zafar & Salman Paras.mp3', '689b7accd509b_karay karay 1.jpeg', 0, '2025-08-12 17:33:00'),
(72, 'Larsha Pekhawar', 'Ali Zafar', 'Regional Hits', 'pop', '2015', 'Regional Language', 'Regional Hits', 'uploads/songs/689b7b41f08d8_Larsha Pekhawar  Ali Zafar ft. Gul Panra & Fortitude Pukhtoon Core  Pashto Song.mp3', '689b7b41f08de_pekhawar.jpeg', 0, '2025-08-12 17:34:57'),
(73, 'Chamkeeli', 'Abrar Ul Haq', 'Saada Ishq', 'soft-rock', '2007', 'Regional Language', 'great', 'uploads/songs/689b7c09a52f1_Abrar Ul Haq I Chamkeeli I Official Music Video.mp3', '689b7c09a52f9_chamkeeli 01.jpeg', 0, '2025-08-12 17:38:17'),
(74, 'Nach Punjaban', 'Abrar Ul Haq', 'Saada Ishq', 'soft-rock', '2007', 'Regional Language', 'Punjabi-Song', 'uploads/songs/689b7c4bf396f_NACH PUNJABAN - OFFICIAL VIDEO - ABRAR UL HAQ.mp3', '689b7c4bf3975_punjaban 1.jpeg', 0, '2025-08-12 17:39:23'),
(75, 'Ballay Ballay', 'Abrar Ul Haq', 'Saada Ishq', 'soft-rock', '2007', 'Regional Language', 'Amazing', 'uploads/songs/689b7cc7ae639_Coke Studio Season 11 Ballay Ballay Abrar Ul Haq and Aima Baig.mp3', '689b7cc7ae641_ballay01.jpeg', 0, '2025-08-12 17:41:27'),
(76, 'Kurian Lahore Di', 'Abrar Ul Haq', 'Saada Ishq', 'soft-rock', '2007', 'Regional Language', 'Amazing', 'uploads/songs/689b7d090acea_Kurian Lahore Diyan - Abrar-ul-Haq.mp3', '689b7d090acf1_kuriyan abrar.jpeg', 0, '2025-08-12 17:42:33'),
(77, 'Aaj Mela Vekhan', 'Abrar Ul Haq', 'Saada Ishq', 'soft-rock', '2007', 'Regional Language', 'good', 'uploads/songs/689b7d71f01ff_Aaj Mela Vekhan Aiyaan By Abrar Ul Haq.mp3', '689b7d71f0205_aaja1.jpeg', 0, '2025-08-12 17:44:17'),
(78, 'Alone', 'Alan Walker', 'Walker World', 'classical', '2024', 'International Language', 'good', 'uploads/songs/689b84229cabc_Alan Walker - Alone.mp3', '689b84229cac3_alone 1.jpeg', 1, '2025-08-12 18:12:50'),
(79, 'Faded', 'Alan Walker', 'Walker World', 'classical', '2024', 'International Language', 'good music', 'uploads/songs/689b8464c2618_Alan Walker - Faded (Lyrics).mp3', '689b8464c2621_fadeed2.jpeg', 1, '2025-08-12 18:13:56'),
(80, 'Children Of The Sun', 'Alan Walker', 'Walker World', 'classical', '2024', 'International Language', 'Good', 'uploads/songs/689b84cb10cfd_Alan Walker x Pritam - Children Of The Sun feat. Vishal Mishra (Official Lyric Video).mp3', '689b84cb10d04_cos2.jpeg', 1, '2025-08-12 18:15:39'),
(81, 'Heart Over MInd', 'Alan Walker', 'Walker World', 'classical', '2024', 'International Language', 'nice ', 'uploads/songs/689b853050767_Alan Walker, Daya - Heart over Mind (Official Music Video).mp3', '689b85305076e_ALan.jpeg', 1, '2025-08-12 18:17:20'),
(82, 'By Your Side', 'Alan Walker', 'Walker World', 'classical', '2024', 'International Language', 'good song ', 'uploads/songs/689b858279ba7_Alan x Walkers - By Your Side.mp3', '689b858279baf_by your side.jpeg', 1, '2025-08-12 18:18:42'),
(88, 'Baari', 'Bilal Saeed', 'Superstar', 'classical', '2024', 'Regional Language', 'nice', 'uploads/songs/689b8c38b9560_Baari by Bilal Saeed and Momina Mustehsan  Official Music Video.mp3', '689b8c38b956b_baari 1.jpeg', 1, '2025-08-12 18:47:20'),
(89, '3 Saal', 'Bilal Saeed', 'Superstar', 'classical', '2024', 'Regional Language', 'nice', 'uploads/songs/689b8c78bd4ef_3 saal  Bilal Saeed  Third from the Album New Song.mp3', '689b8c78bd4f4_3saal.jpeg', 1, '2025-08-12 18:48:24'),
(90, 'Been There', 'Bilal Saeed', 'Superstar', 'classical', '2024', 'Regional Language', 'good', 'uploads/songs/689b8ceb5a3c7_BTDT (Been There Done That) - Official Video  Bilal Saeed, Talha Anjum  Superstar Album.mp3', '689b8ceb5a3cf_bdtd1.jpeg', 1, '2025-08-12 18:50:19'),
(91, 'Misunderstood', 'Bilal Saeed', 'Superstar', 'soft-rock', '2024', 'Regional Language', 'talha x bilal', 'uploads/songs/689b8d3e5a84e_Misunderstood - Official Music Video  Bilal Saeed  SUPERSTAR ALBUM.mp3', '689b8d3e5a854_miss bilal.jpeg', 1, '2025-08-12 18:51:42'),
(92, 'Cold Hearted', 'Bilal Saeed', 'Superstar', 'soft-rock', '2024', 'International Language', 'nice song Must Listen', 'uploads/songs/689b8d8043054_Cold Hearted (Official Visualiser) Bilal Saeed Ft. Asim Azhar  SUPERSTAR ALBUM.mp3', '689b8d804305c_cold1.jpeg', 1, '2025-08-12 18:52:48'),
(93, 'Eraser', 'Ed-Sheeran', 'Divide', 'soft-rock', '2017', 'International Language', 'nice song', 'uploads/songs/689b8dc7dd0d9_Ed Sheeran - Eraser [Official Audio].mp3', '689b8dc7dd0e1_Eraser ed.avif1.jpeg', 0, '2025-08-12 18:53:59'),
(94, 'Castle On The Hill', 'Ed-Sheeran', 'Divide', 'classical', '2017', 'International Language', 'good song', 'uploads/songs/689b8e10e45b2_Ed Sheeran - Castle On The Hill [Official Music Video].mp3', '689b8e10e45b9_castle on hill.jpeg', 0, '2025-08-12 18:55:12'),
(95, 'Shape Of You', 'Ed-Sheeran', 'Divide', 'classical', '2017', 'International Language', 'nice', 'uploads/songs/689b8e548cab3_Ed Sheeran - Shape of You (Official Music Video).mp3', '689b8e548cab8_shape of u.avifj.jpeg', 0, '2025-08-12 18:56:20'),
(96, 'Happier', 'Ed-Sheeran', 'Divide', 'classical', '2017', 'International Language', 'goodd', 'uploads/songs/689b8ebccc75a_Ed Sheeran - Happier (Official Music Video).mp3', '689b8ebccc761_m.jpeg', 0, '2025-08-12 18:58:04'),
(97, 'Supermarket Flowers', 'Ed-Sheeran', 'Divide', 'classical', '2017', 'International Language', 'very nice ', 'uploads/songs/689b8f0f2b1aa_Ed Sheeran - Supermarket Flowers [Official Audio].mp3', '689b8f0f2b1b4_flower.,.jpeg', 0, '2025-08-12 18:59:27'),
(98, 'Memories', 'Hasan Raheem', 'Nautanki', 'pop', '2025', 'Regional Language', 'good song', 'uploads/songs/689b8fc94cf91_MEMORIES - Hasan Raheem ft Justin Bibis (Official Music Video)  Latest Urdu Punjabi Song 2025.mp3', '689b8fc94cf9b_memories hasan raheem.avif1.jpeg', 1, '2025-08-12 19:02:33'),
(99, 'Dil Fareb', 'Hasan Raheem', 'Nautanki', 'pop', '2025', 'Regional Language', 'Most Played', 'uploads/songs/689b90ba69e4b_Hasan Raheem - Dil fareb (Audio).mp3', '689b90ba69e52_dill fareb.jpeg', 1, '2025-08-12 19:06:34'),
(100, 'Fursat', 'Hasan Raheem', 'Nautanki', 'classical', '2025', 'Regional Language', 'Most Played', 'uploads/songs/689b9105a7b66_Hasan Raheem - Fursat (Audio).mp3', '689b9105a7b6b_fursat hasan 02.jpeg', 1, '2025-08-12 19:07:49'),
(101, 'Tareekh', 'Hasan Raheem', 'Nautanki', 'classical', '2025', 'Regional Language', 'Most Played', 'uploads/songs/689b915482d5c_Hasan Raheem - Tareekhi (Audio).mp3', '689b915482d65_tareekhi.jpeg', 1, '2025-08-12 19:09:08'),
(102, 'Kaleji', 'Hasan Raheem', 'Nautanki', 'pop', '2024', 'Regional Language', 'Most Played', 'uploads/songs/689b91a351bc9_Hasan Raheem - Kaleji (Audio).mp3', '689b91a351bcf_kaleji.jpeg', 1, '2025-08-12 19:10:27'),
(103, 'Unke Andaz E Karam', 'Nusrat Fateh Ali Khan', 'Old Is Gold', 'qawali', '2010', 'Regional Language', 'Best Qawali ', 'uploads/songs/689ccf9741e00_UNKE ANDAZ E KARAM (REMIX) - NUSRAT FATEH ALI KHAN X VIBRONO  EXTENDED VERSION.mp3', '689ccf9741e08_andaz.jpeg', 0, '2025-08-13 17:47:03'),
(104, 'Kamli Walay', 'Nusrat Fateh Ali Khan', 'Old Is Gold', 'qawali', '2010', 'Regional Language', 'best Qawali', 'uploads/songs/689ccfde73e09_Kamli Wale Muhammad To Sadke Mein Jaan   Nusrat Fateh Ali Khan   Best Qawwali24.mp3', '689ccfde73e11_kamli wale pic.jpeg', 0, '2025-08-13 17:48:14'),
(105, 'Othe Amlan De Honay', 'Nusrat Fateh Ali Khan', 'Old Is Gold', 'qawali', '2010', 'Regional Language', 'best', 'uploads/songs/689cd108003dc_Kise Nahi Teri Zaat Puchni- NUSRAT FATEH ALI KHAN.mp3', '689cd108003e5_othe amla de nusrat.jpeg', 0, '2025-08-13 17:53:12'),
(106, 'Jab Karam Hota Hai', 'Nusrat Fateh Ali Khan', 'Old Is Gold', 'qawali', '2010', 'Regional Language', 'Qawali', 'uploads/songs/689cd154570cf_Jab Karam Hota Hai Halat Badal Jate Hain  Sufiyana Qawwali  Nusrat Fateh Ali Khan.mp3', '689cd154570d5_karam hota hai 5.jpeg', 0, '2025-08-13 17:54:28'),
(107, 'Shahe Mardan Ali', 'Nusrat Fateh Ali Khan', 'Old Is Gold', 'qawali', '2010', 'Regional Language', 'Best', 'uploads/songs/689cd1feba79d_Shah-e-Mardane Ali ( Remix )  Nusrat Fateh Ali Khan Full Remix Qawali  Atiq\'s Creations.mp3', '689cd1feba7a4_shahay mardan jpeg.jpeg', 0, '2025-08-13 17:57:18'),
(108, 'Habibi', 'Nusrat Fateh Ali Khan', 'Back 2 Love', 'soft-rock', '2010', 'Regional Language', 'Back 2 Love', 'uploads/songs/689cd2f3e2ce3_Habibi (Official Lyric Video)  Rahat Fateh Ali Khan  Back 2 Love.mp3', '689cd2f3e2ce8_Habibi Rahat.jpeg', 0, '2025-08-13 18:01:23'),
(109, 'Rhishte Naathe', 'Rahat Fateh Ali Khan', 'Back 2 Love', 'soft-rock', '2010', 'Regional Language', 'nice song', 'uploads/songs/689cd34f41f67_Lyrics_ Rishte Naate Full Song  Rahat Fateh Ali Khan, Suzanne D\'Mello  Sayeed Quadri, Pritam.mp3', '689cd34f41f71_Rhishte Naate Rahat.jpeg', 0, '2025-08-13 18:02:55'),
(110, 'Nach Damadam', 'Rahat Fateh Ali Khan', 'Back 2 Love', 'soft-rock', '2010', 'Regional Language', 'good song ', 'uploads/songs/689cd39b5f469_Nach Dumadum (Official Lyric Video)  Rahat Fateh Ali Khan  Back 2 Love.mp3', '689cd39b5f476_nach damadam.jpeg', 0, '2025-08-13 18:04:11'),
(111, 'Rab Jaane', 'Rahat Fateh Ali Khan', 'Back 2 Love', 'soft-rock', '2010', 'Regional Language', 'good', 'uploads/songs/689cd3f8e2257_Rab Jaane.mp3', '689cd3f8e2260_rab janay.jpeg', 0, '2025-08-13 18:05:44'),
(112, 'Sab Jhoote', 'Rahat Fateh Ali Khan', 'Back 2 Love', 'soft-rock', '2010', 'Regional Language', 'GOOD', 'uploads/songs/689cd4475a52f_Sab Jhoote (Official Lyric Video)  Rahat Fateh Ali Khan  Back 2 Love.mp3', '689cd4475a538_sab jhoote 1.jpeg', 0, '2025-08-13 18:07:03'),
(113, 'Karachi Chal', 'Youngsters', 'Rebirth', 'Rap', '2017', 'Regional Language', 'Talha Anjum X Talha Yunus ', 'uploads/songs/689cd49856e5c_KARACHI CHAL - Young Stunners  Talha Anjum  Talhah Yunus (Feat. YAS) Prod. By Momin.mp3', '689cd49856e63_karachi chal4.jpeg', 0, '2025-08-13 18:08:24'),
(114, 'Dont Mind', 'Youngsters', 'Rebirth', 'Rap', '2017', 'Regional Language', 'Talha Anjum X Talha Yunus ', 'uploads/songs/689cd4d5ea2f2_DONT MIND - Young Stunners  Talhah Yunus  Talha Anjum  Rap Demon (Official Audio).mp3', '689cd4d5ea2f9_dont mind young 2.jpeg', 0, '2025-08-13 18:09:25'),
(115, 'I dont Know', 'Youngsters', 'Rebirth', 'Rap', '2017', 'Regional Language', 'Talha Anjum X Talha Yunus ', 'uploads/songs/689cd520e734f_I Don\'t Know - Young Stunners - Official Audio.mp3', '689cd520e7357_dont i know.jpeg', 0, '2025-08-13 18:10:40'),
(116, 'Uber', 'Youngsters', 'Rebirth', 'Rap', '2017', 'Regional Language', 'Talha Anjum X Talha Yunus ', 'uploads/songs/689cd594961e4_UBER - Young Stunners  Talhah Yunus  Talha Anjum  (Prod. Umair Khan) [Official Lyrical Video].mp3', '689cd594961ed_uber.jpeg', 0, '2025-08-13 18:12:36'),
(117, 'Rooh', 'Youngsters', 'Rebirth', 'Rap', '2017', 'Regional Language', 'Talha Anjum X Talha Yunus ', 'uploads/songs/689cd5df67672_ROOH - (REMIX) - Official Audio.mp3', '689cd5df67678_rooh..jpeg', 0, '2025-08-13 18:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `song_id` varchar(100) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `experience` text NOT NULL,
  `advice` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `song_id`, `song_name`, `artist_name`, `rating`, `experience`, `advice`, `created_at`) VALUES
(2, 19, '2', 'Aadat', 'Atif Aslam', 4, 'Good', 'Highly Recommend', '2025-08-10 21:15:04'),
(3, 19, '3', 'Ehsaas', 'Atif Aslam', 1, 'Fair', 'Highly Recommend', '2025-08-10 21:21:08'),
(14, 24, '6', 'Dil Diyan Gallan', 'Atif Aslam', 5, 'Good', 'Recommend', '2025-08-12 04:05:55'),
(15, 24, '25', 'Kuriyan Lahore Di', 'Abrar-Ul-Haq', 5, 'Poor', 'Recommend', '2025-08-12 04:12:10'),
(17, 19, '28', 'Children Of The Sun', 'Alan Walker', 5, 'Fair', 'Highly Recommend', '2025-08-12 06:29:45'),
(18, 19, '1', 'Jal Pari', 'Atif Aslam', 4, 'Good', 'Highly Recommend', '2025-08-12 08:05:56'),
(19, 19, '21', 'Chamkeeli', 'Abrar-Ul-Haq', 4, 'Good', 'Recommend', '2025-08-12 10:07:10'),
(20, 19, '10', 'Rafta Rafta', 'Atif Aslam', 5, 'Fair', 'Highly Recommend', '2025-08-12 10:08:54'),
(21, 20, '69', 'I Dont Know', 'Youngsters', 4, 'Fair', 'Recommend', '2025-08-12 12:29:33'),
(22, 19, '24', 'Aaj Mela', 'Abrar-Ul-Haq', 2, 'Good', 'Recommend', '2025-08-12 17:08:04'),
(24, 25, '30', 'By Your Side', 'Alan Walker', 1, 'Good', 'Do Not Recommend', '2025-08-13 07:55:55'),
(25, 25, '11', 'Allay', 'Ali Zafar', 2, 'Fair', 'Recommend', '2025-08-13 07:56:45'),
(27, 25, '36', '12 Saal', 'Bilal Saeed', 5, 'Poor', 'Highly Recommend', '2025-08-13 08:00:32'),
(32, 28, '7', 'Tere Sang Yaara', 'Atif Aslam', 5, 'Good', 'Highly Recommend', '2025-08-14 10:55:03'),
(34, 19, '7', 'Tere Sang Yaara', 'Atif Aslam', 5, 'Fair', 'Highly Recommend', '2025-08-14 10:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `phone_number`, `email`, `password`, `role`, `created_at`) VALUES
(19, 'Trendy Tunes', 'ADMIN', '01234567891', 'admin@gmail.com', 'TRENDYTUNES', 'admin', '2025-08-10 06:53:09'),
(20, 'Noman Ali', 'nomanali4', '03321115569', 'noman@gmail.com', '123', 'user', '2025-08-10 06:55:07'),
(24, 'Ali Khan', 'alikhan', '03352114458', 'ali@gmail.com', '1234', 'user', '2025-08-10 10:21:04'),
(25, 'Zain Ali', 'zainuser', '03313200056', 'zain@gmail.com', '123', 'user', '2025-08-10 13:47:26'),
(28, 'Muhammad Rayan Asif', 'rayanuser', '03352112258', 'rayan@gmail.com', '123', 'user', '2025-08-12 15:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `artist` varchar(100) DEFAULT NULL,
  `album` varchar(100) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `is_new` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `artist`, `album`, `genre`, `year`, `language`, `description`, `file_path`, `thumbnail`, `is_new`, `created_at`) VALUES
(5, 'Dil Se Mein', 'Other', 'Independence Day', 'pop', '2021', 'Regional Language', 'Pakistan Album', '689d9e5bd5e16_Haroon - Dil Se Maine Dekha Pakistan (OfficialMusicVideo) HD.mp4', '689d9e5bd5e1e_pakistan02.jpeg', 1, '2025-08-14 08:29:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
