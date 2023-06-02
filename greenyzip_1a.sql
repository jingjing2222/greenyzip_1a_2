SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenyzip_1a`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdID` int(6) NOT NULL,
  `AdName` varchar(255) NOT NULL,
  `AdPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdID`, `AdName`, `AdPassword`) VALUES
(000001, 'Kim','Noor Ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PID` int(11) NOT NULL,
  `PName` varchar(30) NOT NULL,
  `PPrice` decimal(10,0),
  `PStock` int(11),
  `PCategory` varchar(30) NOT NULL,
  `P_Description` varchar(1000) NOT NULL,
  `Pic1` varchar(30) NOT NULL,
  `Pic2` varchar(30) NOT NULL,
  `Pic3` varchar(30) NOT NULL,
  `Pic4` varchar(30) NOT NULL,
  `Pic5` varchar(30) NOT NULL,
  `Phumidity` varchar(500),
  `Plight` varchar(500) ,
  `Pwatering` varchar(500)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PID`, `PName`, `PPrice`, `PStock`, `PCategory`, `P_Description`, `Pic1`, `Pic2`, `Pic3`, `Pic4`, `Pic5`, `Phumidity`, `Plight`, `Pwatering`) VALUES
(1, 'Aloevera', '54', 20, 'Plants', 'Botanical name: Aloe barbadensis\r\nAloe Vera is an indoor succulent. It needs very little water and will flourish in a bright, sunny spot in your home. Native to the Arabian Peninsula, it has been around for thousands of years and is being widely used for cosmetics and medicinal properties.', 'Aloevera1.png', 'Aloevera2.png', 'Aloevera3.png', 'Aloevera4.png', 'Aloevera5.png', '1', '1', '1'),
(2, 'Pineapple', '50', 10, 'Plants', 'The botanical name of pineapple is Ananas comosus. It is considered an herbaceous, tropical, and monocot perennial plant. The size of the plant ranges from approximately 1–2 m tall and wide. Its leaves are spiral in arrangement and on the terminal ends has flowers which then produce edible fruit. The stem at its center is about 25–50 cm long.', 'pineapple1.png', 'pineapple2.png', 'pineapple3.png', 'pineapple4.png', 'pineapple5.png', '1', '1', '1'),
(3, 'Dracaena', '66', 12, 'Plants', 'Botanical name: Dracaena fragrans\r\nDracaena is an easy, low-maintenance indoor plant that will thrive and adapt in almost any environment. It is not pet-friendly. NASA lists Dracaenas as excellent plants for removing harmful toxins from the air.', 'Dracaena1.png', 'Dracaena2.png', 'Dracaena3.png', 'Dracaena4.png', 'Dracaena5.png', '1', '1', '1'),
(4, 'Clay Hanging Pot', '55', 15, 'Works', 'Made of matte fibreclay, these sturdy pots mix rustic texture with simple, modern shapes. Available in two shades of grey and in a range of different sizes, both with strong jute rope to make sure your plant is in safe hands.\r\nWhen you water your plant, please remove it from the pot first and then leave it to drain before placing it back in its pot. This will avoid water collecting in the bottom of your pot.\r\nAlso available in a standing version, for shelf or floor plants.', 'chpot1.png', 'chpot2.png', 'chpot3.png', 'chpot4.png', 'chpot5.png', '1', '1', '1'),
(5, 'Corby', '79', 20, 'Plants', 'Calatheas are wonderful houseplants. They come in a huge range of different patterns and colours and they’re all relatively easy to look after. Calathea orbifolia is a very handsome example, with large, round leaves striped with dark green and silver. \r\nCalatheas are commonly known as prayer plants, because their leaves fold together at night, like praying hands. If you’re up before sunrise, you might see the leaves unfold to catch the day’s rays.', 'corby1.png', 'corby2.png', 'corby3.png', 'corby4.png', 'corby5.png', '1', '1', '1'),
(6, 'Plant Gude1', '15', 20, 'Works', 'A fun, gifty guide to growing and caring for the top 50 houseplants. It includes advice on handling pests and diseases, troubleshooting problems, assessing your growing conditions, tips, and list detail everything from which plants are pet-friendly to the top five plants for frequent travellers.', 'PGuide11.png', 'PGuide12.png', 'PGuide13.png', 'PGuide14.png', 'PGuide15.png', '1', '1', '1'),
(7, 'Plant Guide 2', '20', 20, 'Works', 'Discover everything you need to transform your empty plot into a stunning garden oasis with this gardening Encyclopedia. This horticultural gem includes more than 2,000 recommendations from gardening experts and features valuable information and advice to expand on your gardening ideas.', 'PGuide21.png', 'PGuide22.png', 'PGuide23.png', 'PGuide24.png', 'PGuide25.png', '1', '1', '1'),
(8, 'Scissors', '35', 20, 'Works', 'Every plant parent needs a good pair of secateurs. Use them for cutting back unruly growth; removing old or yellow leaves; and for pruning your plant into the perfect shape.\r\nAfter hunting long and hard for the perfect secateurs, we decided to make our own. We love these so much we etched our name on the blade.\r\nTo make sure they\'re as safe as can be, they have a strap to keep the blades together when not in use and a branded silicone sheath to keep them in.', 'sce1.png', 'sce2.png', 'sce3.png', 'sce4.png', 'sce5.png', '1', '1', '1'),
(9, 'Pink Pot', '20', 10, 'Works', 'With a minimalist design, it is sure to pair nicely with your plant without stealing the show. Made from 80% recycled plastic. The simple, timeless look of this pot fits in with any home decor.', 'pinkpot1.png', 'pinkpot2.png', 'pinkpot3.png', 'pinkpot4.png', 'pinkpot5.png', '1', '1', '1'),
(10, 'White Orchid', '60', 9, 'Plants', 'An elegant Orchid is a perfect gift to send a loved one or to just treat yourself. White Orchids trace their symbolic roots of gratitude, admiration, and respect back to the early Victorian era and to the traditions of Japanese royalty. Orchids give a tropical yet sophisticated feel to any room.', 'whiteOrch1.png', 'whiteOrch2.png', 'whiteOrch3.png', 'whiteOrch4.png', 'whiteOrch5.png', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=800011;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
