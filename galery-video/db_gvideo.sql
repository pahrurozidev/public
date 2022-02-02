-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 04:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gvideo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gvideo`
--

CREATE TABLE `tbl_gvideo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `vname` varchar(255) NOT NULL,
  `actors` varchar(255) NOT NULL,
  `directors` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `quality` varchar(255) NOT NULL,
  `release` date NOT NULL,
  `countries` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gvideo`
--

INSERT INTO `tbl_gvideo` (`id`, `title`, `body`, `genre`, `img`, `vname`, `actors`, `directors`, `duration`, `quality`, `release`, `countries`) VALUES
(1, 'Adoration (2013 film)', 'Adoration (known in North America and the UK as Adore) is a 2013 drama film directed by Anne Fontaine. It stars Naomi Watts, Robin Wright, Ben Mendelsohn, Xavier Samuel, and James Frecheville. The film tells the story of a pair of middle-aged women who--h', 'horror', 'adoration.png', 'adoration.mp4', 'Naomi Watts, Robin Wright, Ben Mendelsohn, Xavier Samuel, and James Frecheville.', 'Anne Fontaine', 84, 'HD', '2013-01-18', 'Australia'),
(2, 'Zombiepura', 'When a mysterious virus breaks out in an isolated army camp, a lazy reservist soldier and his tough commander must work together to survive, and learn what it means to be real soldiers.', 'horror', 'zombiepura.jfif', 'zombiepura.mp4', 'Alaric, Benjamin, HengRayve Zen', 'Jacen Tan', 80, 'HD', '2018-10-25', 'Singapura'),
(3, 'Ghost Wife\r\n', 'Two teenage students fall in love and have a baby. But as their parents drive them apart, things go awry and the girl becomes a vengeful spirit. But sometimes love does make one blind.', 'horror', 'ghostwife.jfif', 'ghostwife.mp4', 'Supawadee, Kitisopakul, Chitipat, Wattanasiripong, Kamolnapatch Thanwong', 'Mate Yimsomboon', 97, 'HD', '2018-11-22', 'Thailand'),
(4, 'Name Not Found', '-', 'action', 'notfound.jfif', 'notfound.mp4', '-', '-', 106, 'HD', '0000-00-00', '-'),
(5, 'American Poltergeist', 'Horrific visions torment Taryn when she, her brother and college pals move into an infamous old house. Then, her bloody hallucinations become all too real.', 'horror', 'american-poltergeist.jfif', 'american-poltergeist.mp4', 'Donna, SpanglerSimona FuscoLuke, Brandon Field', 'Michael Rutkowski', 91, 'HD', '2015-05-29', 'Canada'),
(6, 'Mangga Muda', 'Agil (Tora Sudiro), a taxi driver, and his wife Luli (Alexandra Gottardo), a salon employee. live in a mediocre state. They are bussy looking for income. It makes them difficult to get a baby. Then Agil makes a wish: if his wife is pregnant then he will f', 'comedy', 'mangga-muda.jfif', 'mangga-muda.mp4', 'Tora Sudiro, Alexandra Gottardo, Ridwan Kamil', 'Girry Pratama', 97, 'HD', '2020-01-23', 'Indonesia'),
(7, 'Blok Janda', 'Menceritakan kehidupan para janda di Rusunawa yang penuh dengan suka dan duka, berawal dari janda diblok D yang dikenal dengan sebutan blok janda diketuai oleh ibu tiur pemilik kontrakan di blok janda, Ngatini Karmila dan para penghuni rusun dikontrakan i', 'comedy', 'blok-janda.jfif', 'blok-janda.mp4', 'Sumarni, Dewi Safitri, Yulia, Juni Irsandi, Firas Madani, Fitriyyah', '-', 50, 'HD', '0000-00-00', 'Indonesia'),
(8, 'Emerson Hights', 'Emerson Heights is a story of love that seeks to answer the age-old question - can you follow your passion, and still follow your heart? When Cody McClain (Austin James), an aspiring actor trying to make it in Los Angeles meets Briley Williams (Gatlin Kat', 'comedy', 'emerson-hights.jfif', 'emerson-hights.mp4', '-', 'Jennifer Hook', 95, 'HD', '2020-01-13', '-'),
(9, 'Scary Movie 4', 'Scary Movie 4 is a 2006 American science fantasy comedy horror film and the fourth installment in the Scary Movie film series, as well as the first film in the franchise to be released under The Weinstein Company banner since the purchase of Dimension Fil', 'comedy', 'scary-movie.jpg', 'scary-movie.mp4', 'Anna Faris, Regina Hall, Craig Bierko, Leslie Nielsen, Bill Pullman', 'David Zucker', 86, 'HD', '2006-04-14', 'United States'),
(10, 'Marvel', 'Spider-Man: Far From Home is a 2019 superhero film, based on the Marvel Comics superhero of the same name. The film is a sequel to Spider-Man: Homecoming and Avengers: Endgame. It is the twenty-third film in the Marvel Cinematic Universe, and the eleventh', 'action', 'marvel.jfif', 'marvel.mp4', 'Tom Holland, Samuel L. Jackson, Ben Mendelsohn, Jake Gyllenhaal, Marisa Tomei, Jon Favreau, Zendaya, Jacob Batalo, Tony Revolori, Angourie Rice, Remy Hii', 'Jon Watts', 68, 'HD', '2012-07-02', 'United States '),
(11, 'Bad President', 'The devil encourages media personality Donald Trump to run for president of the United States, so he can have a political puppet. But throughout Trump\'s many gaffes, the devil wonders if he even has a chance of winning.', 'action', 'bad-president.jfif', 'bad-president.mp4', 'Jeff Rector, Eddie Griffin', 'Param Gill', 90, 'HD', '2020-10-12', 'United States'),
(12, 'Ice House', 'Ice House follows the story of two friends, Grant and Wayne, on one night\'s excursion to a fish house on a frozen Minnesota lake for an evening of camaraderie. What seems to be a harmless outing between two friends slowly evolves into a murderous plot bet', 'thriller', 'ice-house.jfif', 'ice-house.mp4', 'Michael, AlexanderGreg BermanAbby, Ciardelli', 'Steven Elbert', 106, 'HD', '2020-11-24', 'United States'),
(13, 'The Bad Seed', 'The Bad Seed is a 2018 American made-for-television horror drama film directed by Rob Lowe for Lifetime. Lowe is also executive producer and stars in the film, alongside Mckenna Grace, Sarah Dugdale, Marci T. House, Lorne Cardinal, Chris Shields, Cara Buo', 'thriller', 'bad-seed.jfif', 'bad-seed.mp4', 'Mckenna Grace, Rob Lowe, Sarah Dugdale, Marci T. House, Lorne Cardinal, Chris Shields, Cara Buono, Luke Roessler, Shauna Johannesen, Patty McCormack', 'Mervyn LeRoy', 87, 'HD', '1956-09-12', 'United Stated'),
(14, 'Lockdown 2025', 'In the shadows of a highly contagious virus, a normal family seeks shelter in the safety of their own home during a nationwide LOCKDOWN in which MARTIAL LAW is declared. With nowhere to go and danger approaching from outside. The family is forced to confr', 'thriller', 'lockdown.jfif', 'lockdown.mp4', 'Marcia Beverly, James BlackLouie, Ski Carr', 'Mike Hall', 90, 'HD', '2021-01-01', 'United States'),
(15, 'Found (2014)', 'A devastating secret is revealed when two childhood friends are reunited after being estranged for over ten years.', 'thriller', 'found.jfif', 'found.mp4', 'Juan Riedinger, Sierra Gracelyn Brogmus, Danny Herb, Ronni Hawk, Allyson Serebof, Allyson Sereboff', 'Dawn Fields', 89, 'HD', '2014-03-01', 'United Stated'),
(16, 'Don\'t Look Back', 'Don\'t Look Back (French: Ne te retourne pas) is a 2009 French thriller film directed by Marina de Van and starring Sophie Marceau and Monica Bellucci.[2] Written by Jacques Akchoti and Marina de Van, the film is about a wife and mother of two children who', 'thriller', 'dont-look-back.jfif', 'dont-look-back.mp4', 'Sophie Marceau, Monica Bellucci, Andrea Di Stefano, Thierry Neuvic,\r\nBrigitte Catillon, Sylvie Granotier, Augusto Zucchi, Giovanni Franzoni,\r\nDidier Flamand, Vittoria Meneganti, Francesca Melucci', 'Marina de Van', 81, 'HD', '2009-06-03', 'France'),
(17, 'Avatar 2', 'Jake Sully lives with his newfound family formed on the planet of Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na\'vi race to protect their planet.', 'action', 'avatar.jfif', 'avatar.mp4', 'Kate Winslet, Zoe Saldana, Michelle Yeoh, Sigourney Weaver, Sam Worthington, Oona Chaplin, Jemaine Clement, Giovanni Ribisi', 'James Cameron	', 73, 'HD', '2020-12-18', 'United Stated'),
(18, 'CANNIBAL BOYS: THEY WILL EAT YOU', '-', 'horror', 'cannibal-boys.jfif', 'cannibal-boys.mp4', 'Ali Faulkner, Johnny Walter, Derek Lee Nixon', 'Duana Graves, Justin Meeks', 85, 'HD', '2012-08-04', 'Canada'),
(19, 'Dhumdaar Khilad', 'Dumdaar Khiladi is a 2018 film belonging to the romantic comedy genre. Directed by Trinadha Rao Nakkina, the film revolves around Anu and Sanju, who develop a great bond after the latter arrives in Hyderabad and moves in with Anu and her father. However, ', 'comedy', 'dhumdaar-khilad.jfif', 'dhumdaar-khilad.mp4', 'Pranitha Subhash, Anupama Parameswaran, Ram Pothineni, Prakash Raj ', 'Trinadha Rao Nakkina', 117, 'HD', '2018-10-18', 'India'),
(20, 'Tokyo Revengers', 'A middle-aged loser travels in time to his school years, and, in order to save the love of his life from future doom, he must become the leader of a dreaded school gang.', 'action', 'tokyo-revengers.jfif', 'tokyo-revengers.mp4', 'Takumi Kitamura, Yûki Yamada, Yôsuke Sugino', 'Tsutomu Hanabusa', 119, 'HD', '2019-07-19', 'Japan'),
(21, 'Aku, Benci & Cinta', 'A: Aku, Benci & Cinta merupakan film drama remaja Indonesia yang dirilis pada 16 Agustus 2017. Diangkat dari novel dengan judul sama karya Wulanfadi yang lebih dulu populer di wattpad. Film ini dibintangi oleh Jefri Nichol, Indah Permatasari, Amanda Rawle', 'romance', 'aku-benci-cinta.jpg', 'aku-benci-cinta.mp4', 'Jefri Nichol, Indah Permatasari, Amanda Rawles, Brandon Salim, Syifa Hadju, Ruth Permatasari, Mario Wiericx, Naomi Paulinda, Nicho Bryantm, Alif Joerg, Devin Putra', 'Rizki Balki', 94, 'HD', '2017-08-06', 'Indonesia'),
(22, 'Mariposa', '\r\nIqbal (Angga Yunanda) is like a Mariposa butterfly to Acha (Adhisty Zara). Each time someone approach, he always runs away. Acha is determined to win Iqbal, a man known to be handsome, smart, yet cold.', 'romance', 'mariposa.jfif', 'mariposa.mp4', 'Angga Yunanda, Adhisty Zara, Dannia Salsabila', 'Fajar Bustomi', 92, 'HD', '2020-03-12', 'Indonesia'),
(23, 'Dear Nathan', 'When Nathan (Jefri Nichol) seriously starts to change for Salma (Amanda Rawles), Nathan\'s past love comes to ask for Nathan\'s love back.', 'romance', 'dear-natan.jfif', 'dear-natan.mp4', 'Amanda Rawles, Jefri Nichol, Surya Saputra, Rayn Wijaya, Diandra Agatha', 'Indra Gunawan', 98, 'HD', '2017-03-23', 'Indonesia'),
(24, 'Melodylan', 'Melody moves to another school because of avoiding problems, moreover she has a bad past with David, her ex-lover. But in the new school, the problem re-emerges when Melody meets Dylan, a guy who had been famous for being cool, like to make trouble but st', 'romance', 'melodylan.jfif', 'melodylan.mp4', 'Devano Danendra, Aisyah Aqilah, Angga Yunanda, Zoe Abbas Jackson, Yasmin Napper, Naomi Paulinda, Bryan Andrew, Indra Jegel, Alzi Markers, Naima Al Jufri, Pangeran Lantang,', 'Fajar Nugros, Yogie Supra', 88, 'HD', '2019-04-04', 'Indonesia'),
(25, 'Dua Garis Biru', 'A young couple violated the boundary without knowing the consequences. They try to take responsibility for their choices and their innocence is tested when the families who really loved them knew, then forced into their chosen journey.', 'romance', 'dua-garis-biru.jfif', 'dua-garis-biru.mp4', 'Adhisty Zara, Angga Yunanda, Cut Mini Theo, Arswendy Bening Swara, Dwi Sasono, Lulu Tobing, Rachel Amanda, Maisha Kanna, Shakira Jasmine, Ligwina Hananto, Cindy Hapsari', 'Ginatri S. Noer', 92, 'HD', '2019-07-11', 'Indonesia'),
(26, '8 HARI MENAKLUKAN COWO', '8 Hari Menaklukan Cowo adalah film drama remaja yang disutradarai Boy Rano dan menampilkan Rangga Azof sebagai pemeran utama bersama Angelica Simperler. Film ini pun menjadi penampilan perdana Rangga Azof di layar lebar setelah meraih kepopuleran di layar', 'romance', 'menaklukan-cowo.jfif', 'menaklukan-cowo.mp4', 'Angelica Simperler, Rangga Azof, Marcell Darwin, Regina Rengganis, Fita Anggriani, Yama Carlos, Sarah Vi, Feby Febiola, Naufal Ghani', 'Boy Rano', 73, 'HD', '2016-09-22', 'Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gvideo`
--
ALTER TABLE `tbl_gvideo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gvideo`
--
ALTER TABLE `tbl_gvideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
