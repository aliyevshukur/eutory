-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 10:30 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eutory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`) VALUES
(1, 'Shukur Aliyev', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Shukur Aliyev', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `choosed`
--

CREATE TABLE `choosed` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `preview` varchar(500) DEFAULT NULL,
  `article` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choosed`
--

INSERT INTO `choosed` (`id`, `title`, `preview`, `article`) VALUES
(1, 'The Bronze Age', 'The rise of the Minoan (3000 BCE to 1100 BCE) and Mycenaean civilizations and their influence on the Aegean islands and mainland Greece shapes the earliest history of Southern Europe. The discovery of these early civilizations was a result of investigations by a new breed of 19th century archaeologists who studied the classical literature of the Ancient world for its historical value rather than its mythical content.', 'The rise of the Minoan (3000 BCE to 1100 BCE) and Mycenaean civilizations and their influence on the Aegean islands and mainland Greece shapes the earliest history of Southern Europe. The discovery of these early civilizations was a result of investigations by a new breed of 19th century archaeologists who studied the classical literature of the Ancient world for its historical value rather than its mythical content. The descriptions of kings and cities mentioned in the Iliad were investigated for ethnographical and geographical clues as to their location. Heinrich Schliemann and Arthur Evans were two pioneers in this type of investigation. Schliemann went in search of the city of Troy on the coast of modern day Turkey and Arthur Evans searched for the lost cities of the Aegean islands. Schliemann who had made his fortune from Crimean War contracts turned to an area of Turkey now called Hisarlik. Earlier investigations of the Hisarlik site had led some to propose that this was the fabl'),
(2, 'The Classical Period', 'The rise of the Greek city states from 1000 BCE onwards constitute in part a continuation of the hegemony that the Minoan and Mycenaean civilizations imposed upon the region.The rise of the Greek city states from 1000 BCE onwards constitute in part a continuation of the hegemony that the Minoan and Mycenaean civilizations imposed upon the region.', 'The rise of the Greek city states from 1000 BCE onwards constitute in part a continuation of the hegemony that the Minoan and Mycenaean civilizations imposed upon the region. However the Greeks took a distinctly different view of the city state and developed forms of government that relied on citizen participation of which Athens in the fifth century BCE is considered to be the high point. One of the unusual aspects of Greek society was the existence of the city state of Sparta situated on the Southern Peloponnese. Sparta was a formidible regional military power and a rival to Athens throughout the classical period. It was of interest to such Athenians as the philosopher Plato who examines the various forms of government in his book The Republic including the warrior caste system as found in Sparta. The action of the 300 Spartans who defended the pass at Thermopylae against the invading army of Persia is still considered as encapsulating the essence of the Spartan city state. In the ot'),
(3, 'Geography', 'Europe is not a discrete geographical unit, and it is too easy to see it as such, when in reality the cultures of Europe flow across its borders. The medieval peasants of Italy or Spain, for instance, shared far more in common with their close neighbours in North Africa than they did with their counterparts in Germany or England.', 'Europe is not a discrete geographical unit, and it is too easy to see it as such, when in reality the cultures of Europe flow across its borders. The medieval peasants of Italy or Spain, for instance, shared far more in common with their close neighbours in North Africa than they did with their counterparts in Germany or England. Similarly, large parts of Eastern Europe, most particularly Russia, show significant cultural influence from Asian cultures, and were historically more closely connected with the east than the west.\r\n\r\nA significant problem, therefore, is the porous nature of Europe\'s geographical borders. In the south, Europe\'s Mediterranean countries are only a short sail from the ports of North Africa. In the south-east, Europe is separated from Asia by nothing more than the short channel of the Bosphorus, and the most significant cultures in this region, such as the Byzantine Empire and the Ottoman Turks, were spread between modern Greece and Turkey. In Europe\'s far easter'),
(4, 'How To Approach Historical Investigation', 'History is frequently seen in narrative terms, as a story concerning the activities of our collective ancestors. It is true, to a great extent, that history is a form of storytelling, after all. However, unlike other forms of storytelling, history is closely based on real events and, as such, is shaped by certain rules and guidelines. ', 't is normal to speak of the fall of the Roman empire, but in many ways this description is too simple, and can be misleading. Certainly, the centralized state ruled by Augustus Caesar and his successors disappeared from history. However, the laws and language that Rome had given to a wide area of Europe persisted in its influence long after the empire had collapsed.\r\n\r\nThe Roman empire\'s later period was riddled with political and social turmoil. Much of the turmoil involved the failing Western empire. From the 3rd century, the Roman empire was under constant attack by internal and external forces. Tribes that Rome had never fully brought under Pax Romana saw in a weakened Rome the chance to either expand or raid. The cost of maintaining the furthest flung outposts and borders of the empire had meant that a professional army had to be maintained abroad permanently; a costly endeavour for any state in any period. Internally the militarization of the Roman empire meant that the army had ');

-- --------------------------------------------------------

--
-- Table structure for table `recent`
--

CREATE TABLE `recent` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `preview` varchar(300) DEFAULT NULL,
  `article` varchar(50000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recent`
--

INSERT INTO `recent` (`id`, `title`, `preview`, `article`) VALUES
(1, 'Timeline of human evolution & prehistoric inventions', 'Here is a list of the oldest evidence known to archaeology for things that humans did for the first time in prehistory', 'Australopithecus made stone tools at least 2.6 million years ago in Ethiopia (source). Modern and ancient chimps have been known to make and use stone tools for multiple purposes too (source), so the use of tools may date from well before the split between the two species some 6 million years ago. '),
(2, '5000 years of migrations from the Eurasian steppes to Europe Deutsche Fassung', 'The Pontic-Caspian steppe, extending from the Danube estuary to the Ural mountains, has played a crucial part in European and Asian history.', 'The Pontic-Caspian steppe, extending from the Danube estuary to the Ural mountains, has played a crucial part in European and Asian history. This is where the horse was domesticated, chariots invented, and one of the earliest place where the Bronze Age flourished and from which it expanded. From approximately 4000 BCE steppe people moved westwards to establish themselves around the Danube valley and the Carpathian basin, then little by little deeper into Europe. Here is a summary of this long series of migrations that is thought to have brought Indo-European languages and culture to Europe and contributed significantly to the modern European gene pool.'),
(3, 'Where and when were various plants and animals domesticated?', 'Agriculture is what allowed humans to settled down into villages, support larger populations, which evolved into towns, then cities until the rise of the first civilisations. It did not happen out of the blue and did not emerged as a whole package.', 'The food we eat today is the result of over 10,000 years of agricultural evolution and of exchanges of crops and animals between people from various parts of the world. One of the most recent exchange of crops happened when Europeans reached the New World, introducing their crops (and animals) to the Americas, and bringing back with them tomatoes, avocadoes, potatoes, maize (corn), squash (pumpkins, courgettes), chili peppers, sunflowers, peanuts, pineapple and cacao, prompting a culinary revolution that is still underway today.'),
(4, 'Interesting facts about the ancient Romans', 'The ancient Romans were originally an Italic tribe from the Latium, known as the Latins. Their language was also known as Latin. The Italics were an Indo-European people closely related to the Celts of Central Europe, from whom they probably split around 1200 BCE when one group crossed the Alps to s', 'During the Roman Republic (509 to 27 BCE), senators were elected to political offices following the so-called cursus honorum, which determined the minimum age and sequential order for each of public office. Each office was held for one year. The highest office was that of consul (two of them), who acted as the political and military heads of the state. Right under them were the praetors, who administered justice and could exercise the functions of the consuls in their absence. Then came the aediles, who were responsible for the urban maintenance of Rome, including roads, water supply and food, the regulation of public festivals, and the enforcement of public order. The most junior magisterial office was that of quaestor, who performed financial and legal duties.');

-- --------------------------------------------------------

--
-- Table structure for table `top`
--

CREATE TABLE `top` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `preview` varchar(5000) DEFAULT NULL,
  `article` varchar(50000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top`
--

INSERT INTO `top` (`id`, `title`, `preview`, `article`) VALUES
(1, 'Origins, People & Government', 'The ancient Romans were originally an Italic tribe from the Latium, known as the Latins. Their language was also known as Latin. The Italics were an Indo-European people closely related to the Celts of Central Europe, from whom they probably split around 1200 BCE when one group crossed the Alps to settle in Italy.', 'Rome was originally a kingdom, but in 509 BCE, the Romans rose up against the tyranny of the king and established a republic led by two consuls elected for one year, so as to prevent abuses of power. The reason why Julius Caesar was assassinated in 44 BCE was that some senators felt that he had accumulated too much power and may attempt to re-establish a monarchy with himself as king. Augustus is considered the first emperor, but he was careful never to use that title, preferring to call himself Princeps Civitatis (\"First Citizen of the State\") to give the illusion of the continuity of the Republic (see Principate). '),
(2, 'Neolithic Era', 'The Neolithic period was a period of human development characterized by the spread of agriculture and pottery. Tools such as the stone axe and microflint arose during this era, and are common throughout despite their origins predating the Neolithic era.', 'The Neolithic period was a period of human development characterized by the spread of agriculture and pottery. Tools such as the stone axe and microflint arose during this era, and are common throughout despite their origins predating the Neolithic era. The stone axe, though rudimentary in its design, is perfectly capable of forest clearance. It is only natural to presume that tools made of wood were also available to Neolithic man, and with the rise of agriculture, the need for wood yokes and ploughs. However, wood is not a durable material, and therefore archaeological finds are rare. Evidence for agrarian societies dates back to 9,000 BCE on the Asian continent and it is believed that agricultural practices spread over the course of two millennia into Europe. There is an argument for independent development of technologies not influenced by any other source except the internal ingenuity of the community itself, though further investigation will be needed to give full credence to this idea. For our purposes, we will view the spread of Neolithic technology as reliant on societies being in contact with one another and will adhere to the east to west advancement theories. '),
(3, 'The Aegean Sea and Southern Europe', 'Earliest evidence of European agriculture can be found at Knossos, Crete, and dates from the sixth millennium BCE. The Aegean Sea, with its numerous islands within short distance and clement weather, provided ideal conditions for settlement', 'Earliest evidence of European agriculture can be found at Knossos, Crete, and dates from the sixth millennium BCE. The Aegean Sea, with its numerous islands within short distance and clement weather, provided ideal conditions for settlement. Successive waves of migration by different tribal peoples from the east led to the establishment of communities throughout the Aegean and also along the coastal areas of modern day Turkey and Greece. It is no coincidence that the Romans believed themselves descendants of Aeneas, the legendary hero of Troy, for in the legends and myths of Classical Europe lies the eastern pantheon of gods and heroes. Crete, one of the largest islands in the Aegean and situated between the coasts of North Africa, the Southern European peninsula, and the coast of Asia Minor, had more natural resources than smaller Aegean islands as well as enough land mass to support a sizeable population. These factors made it ideal for colonization. The settlers of Crete arriving in 6,500 BCE brought with them both the agricultural practices of the East and seafaring skills. These played a large part in their eventual rise as a major force in the Aegean. '),
(4, 'Northern Europe', 'neolithic \"villages\" were probably trading and intermarrying across the Alps though this was in some respects limited by small population numbers and structured by family and tribal identification rather than nationhood.', 'The prehistoric Pile Dwellings of Vingelz in Switzerland (3,000 BCE) with its stone axe \"factory\" and dwellings near a water source are typical of other agrarian sites found in France, Germany, Austria and many other parts of Europe. These neolithic \"villages\" built near the lake shores and wetlands of the Alps show a continous settlement of 4,500 years. The Alps were no impediment to trade with archaeological finds of sherds, stone tools and dwelling structures showing similarities that can only be explained by contact and mutual exchange. These neolithic \"villages\" were probably trading and intermarrying across the Alps though this was in some respects limited by small population numbers and structured by family and tribal identification rather than nationhood.\r\n\r\nIt must be borne in mind by the reader that the regions of Europe developed at different times though extensive trade networks across Europe existed at this period. This fact does allow for a certain degree of uniformity within periods so that we can group early European periods according to archaelological finds, normally to do with tools, utensils and weapons. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choosed`
--
ALTER TABLE `choosed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent`
--
ALTER TABLE `recent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top`
--
ALTER TABLE `top`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `choosed`
--
ALTER TABLE `choosed`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recent`
--
ALTER TABLE `recent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `top`
--
ALTER TABLE `top`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
