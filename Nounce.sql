-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 12 Septembre 2017 à 11:26
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Nounce`
--

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

CREATE TABLE `destination` (
  `id_utilisateurs` int(11) NOT NULL,
  `id_voyages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `habite`
--

CREATE TABLE `habite` (
  `id_utilisateurs` int(11) NOT NULL,
  `libelle` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `id` int(11) NOT NULL,
  `langue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `langues`
--

INSERT INTO `langues` (`id`, `langue`) VALUES
(1, 'Français'),
(2, 'Anglais'),
(3, 'Allemand'),
(4, 'Portugais'),
(5, 'Espagnol'),
(6, 'Russe'),
(7, 'Polobais'),
(8, 'Arabe'),
(9, 'Afrikaans'),
(10, 'Kirundi'),
(11, 'Tigrinia'),
(12, 'Amharique'),
(13, 'Sésotho'),
(14, 'Swahili'),
(15, 'Malgache'),
(16, 'Kinyarwanda'),
(17, 'Créole'),
(18, 'Somali'),
(19, 'Swati'),
(20, 'Pashtou'),
(21, 'Dari'),
(22, 'Arménien'),
(23, 'Azerbaïdjanais'),
(24, 'Bengali'),
(25, 'Birman'),
(26, 'Dzongkha'),
(27, 'Malais'),
(28, 'Khmer'),
(29, 'Chinois Wu'),
(30, 'Coréen'),
(31, 'Cantonais'),
(32, 'Géorgien'),
(33, 'Hindi'),
(34, 'Indonésie'),
(35, 'Iranien'),
(36, 'Farsi'),
(37, 'Hébreu'),
(38, 'Japonais'),
(39, 'Kazakh'),
(40, 'Kirghiz'),
(41, 'Laotien'),
(42, 'Malais'),
(43, 'Maldivien'),
(44, 'Mongol'),
(45, 'Khalkha'),
(46, 'Népali'),
(47, 'Ouzbek'),
(48, 'Ourdou'),
(49, 'Filipino'),
(50, 'Tamoul'),
(51, 'Singhalais'),
(52, 'Tadjik'),
(53, 'Thaï'),
(54, 'Turc'),
(55, 'Turkmène'),
(56, 'Vietnamien'),
(57, 'Néerlandais'),
(58, 'Danois'),
(59, 'Groenlandais'),
(60, 'Chamorro'),
(61, 'Kiribati'),
(62, 'Hawaïen'),
(63, 'Maori'),
(64, 'Tonguien'),
(65, 'Samoan'),
(66, 'Tuvaluan'),
(67, 'Bichlamar'),
(68, 'Albanais'),
(69, 'Catalan'),
(70, 'Biélorusse'),
(71, 'Serbe'),
(72, 'Croate'),
(73, 'Bosniaque'),
(74, 'Bulgare'),
(75, 'Grec'),
(76, 'Castillan'),
(77, 'Estonien'),
(78, 'Finnois'),
(79, 'Suèdois'),
(80, 'Hongrois'),
(81, 'Irlandais'),
(82, 'Islandais'),
(83, 'Italien'),
(84, 'Letton'),
(85, 'Lituanien'),
(86, 'Luxembourgeois '),
(87, 'Maltais'),
(88, 'Macédonien'),
(89, 'Moldave'),
(90, 'Monténégrin'),
(91, 'Bokmål'),
(92, 'Nynorsk'),
(93, 'Tchèque'),
(94, 'Roumain'),
(95, 'Slovaque'),
(96, 'Slovène'),
(97, 'Ukrainien'),
(98, 'Chinois Mandarin'),
(99, 'Javanais'),
(100, 'Télougou'),
(104, 'Marathi'),
(105, 'Gujarati'),
(106, 'Pendjabi de l\'Ouest'),
(107, 'Comorien'),
(108, 'Guarani'),
(109, 'Tokelauan'),
(111, 'Chinois Jinyu'),
(112, 'Bhojpouri'),
(113, 'Awadhi'),
(114, 'Malayalam'),
(115, 'Kannada'),
(116, 'Chinois Xiang'),
(117, 'Maithili'),
(118, 'Sundanais'),
(119, 'Oriya'),
(120, 'Persan'),
(121, 'Marwari'),
(122, 'Tagalog'),
(123, 'Chinois Hakka'),
(124, 'Algérien'),
(125, 'Haoussa'),
(126, 'Sindhi'),
(127, 'Yorouba'),
(128, 'Chinois Gan'),
(129, 'Chinois Min'),
(130, 'Kabyle'),
(131, 'Huiyu'),
(132, 'Pinghua'),
(133, 'Chhattisgarhi'),
(134, 'Ibo'),
(135, 'Oromo'),
(136, 'Assamais'),
(137, 'Kurde'),
(138, 'Cebuano'),
(139, 'Rangpouri'),
(140, 'Zhuang'),
(141, 'Madourais'),
(142, 'Bavarois'),
(143, 'Chittagonien'),
(144, 'Deccan'),
(145, 'Magahi'),
(146, 'Haryanvi'),
(147, 'Foulani'),
(148, 'Poular'),
(150, 'Basque'),
(151, 'Shona'),
(152, 'Zoulou'),
(153, 'Sylheti'),
(154, 'Quechua'),
(155, 'Breton'),
(156, 'Normand'),
(157, 'Alsacien'),
(158, 'Patois'),
(159, 'Sango'),
(160, 'Créole Capverdien'),
(161, 'Palaosien'),
(162, 'Portugais-Tétum'),
(163, 'Nauruan'),
(164, 'Rifain'),
(165, 'Tamazight-Atlas'),
(166, 'Chleuh'),
(167, 'Zenaba'),
(168, 'Chenoui'),
(169, 'Chaoui'),
(170, 'Nafusi'),
(171, 'Berbères des Oasis'),
(172, 'Touareg'),
(173, 'Inuktitut '),
(174, 'Fidjien'),
(175, 'Inuinnaqtun'),
(176, 'Tibétain'),
(177, 'Xhosa'),
(178, 'Khosa'),
(179, 'Setswana'),
(180, 'Siswati'),
(181, 'Setswana'),
(182, 'Sotho'),
(183, 'Songa'),
(184, 'Tshivenda'),
(185, 'Ouïgour'),
(186, 'Féroïen'),
(187, 'Galicien'),
(188, 'Kashmiri'),
(189, 'Manipuri'),
(190, 'Goujarat'),
(191, 'Assamais'),
(192, 'Konkani'),
(193, 'Gagaouze'),
(194, 'Niuéen'),
(195, 'Ruthène '),
(196, 'Romanche'),
(197, 'Adyguéen'),
(198, 'Altaïen'),
(199, 'Bachkir'),
(200, 'Bouriate'),
(201, 'Carélien'),
(202, 'Avar'),
(203, 'Darguine'),
(204, 'Lack'),
(205, 'Koumyk'),
(206, 'Iakoute'),
(207, 'Kabarde'),
(208, 'Kalmouk'),
(209, 'Karatchaï'),
(210, 'Tcherkesse'),
(211, 'Khakasse'),
(212, 'Komi'),
(213, 'Mari'),
(214, 'Mordve'),
(215, 'Oudmourte'),
(216, 'Ossète'),
(217, 'Tatar'),
(218, 'Tchétchène'),
(219, 'Tchouvache'),
(220, 'Touva'),
(221, 'Mahorais'),
(222, 'Créole Réunionnais'),
(223, 'Wallisien'),
(224, 'Futunien'),
(225, 'Tahitien'),
(226, 'Marquisien'),
(227, 'Paumotu'),
(228, 'Rapa'),
(229, 'Mangarévien'),
(230, 'Créole Guadeloupéen'),
(231, 'Créole Haïtien'),
(232, 'Papiamento'),
(233, 'Créole Guyanais'),
(234, 'Taki Taki'),
(235, 'Saramaka'),
(236, 'Hmong'),
(237, 'Créole Martiniquais'),
(238, 'Hassaniya'),
(239, 'Abkhaze'),
(240, 'Carolinien'),
(241, 'Guernesiais'),
(242, 'Jersiais'),
(246, 'Corse'),
(248, 'Angevin'),
(249, 'Auvergnat'),
(250, 'Béarnais'),
(251, 'Bourbonnais'),
(252, 'Berrichon'),
(253, 'Bourguignon'),
(254, 'Cauchois'),
(255, 'Champenois'),
(256, 'Chtimi'),
(257, 'Dauphinois'),
(258, 'Francique'),
(259, 'Flamand'),
(260, 'Forézien'),
(261, 'Franc-Comtois'),
(262, 'Gallo'),
(263, 'Gascon'),
(264, 'Jurassien'),
(265, 'Lyonnais'),
(266, 'Limousin'),
(267, 'Lorrain'),
(268, 'Languedocien'),
(269, 'Nissard'),
(270, 'Orléanais'),
(271, 'Parisien'),
(272, 'Picard'),
(273, 'Poitevin'),
(274, 'Provençal'),
(275, 'Provençal-Alpin'),
(276, 'Romand'),
(277, 'Saintongeais'),
(278, 'Savoyard'),
(279, 'Tourangeau'),
(280, 'Vald\'Aoste'),
(281, 'Wallon');

-- --------------------------------------------------------

--
-- Structure de la table `parle`
--

CREATE TABLE `parle` (
  `id_utilisateurs` int(11) NOT NULL,
  `id_langues` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `libelle` varchar(3) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `nationalite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`libelle`, `nom`, `nationalite`) VALUES
('AFG', 'Afghanistan', 'Afghane'),
('AIA', 'Anguilla', 'Anguillaise'),
('ALB', 'Albanie', 'Albanaise'),
('ALG', 'Algérie', 'Algérienne'),
('AND', 'Andorre', 'Andorranne'),
('ANG', 'Angola', 'Angolaise'),
('ANT', 'Antigua-et-Barbuda', 'Antiguaise-et-Barbudienne'),
('ARG', 'Argentine', 'Argentine'),
('ARM', 'Arménie', 'Arménienne'),
('ARU', 'Aruba', 'Arubéenne'),
('ASA', 'Samoa américaines', 'Samoan américains'),
('AUS', 'Australie', 'Australienne'),
('AUT', 'Autriche', 'Autrichienne'),
('AZE', 'Azerbaïdjan', 'Azerbaïdjanaise'),
('BAH', 'Bahamas', 'Bahaméenne'),
('BAN', 'Bangladesh', 'Bangladaise'),
('BAR', 'Barbade', 'Barbadienne'),
('BDI', 'Burundi', 'Burundaise'),
('BEL', 'Belgique', 'Belge'),
('BEN', 'Bénin', 'Béninoise'),
('BER', 'Bermudes', 'Bermudienne'),
('BHU', 'Bhoutan', 'Bhoutanaise'),
('BIH', 'Bosnie-Herzégovine', 'Bosnienne'),
('BIZ', 'Belize', 'Bélizienne'),
('BLM', 'Saint-Barthélémy', 'Saint-Barthinoise'),
('BLR', 'Biélorussie', 'Biélorusse'),
('BOL', 'Bolivie', 'Bolivienne'),
('BOT', 'Botswana', 'Botswanaise'),
('BRA', 'Brésil', 'Brésilienne'),
('BRN', 'Bahreïn', 'Bahreïnienne'),
('BRU', 'Brunei', 'Brunéienne'),
('BUL', 'Bulgarie', 'Bulgare'),
('BUR', 'Burkina Faso', 'Burkinabé'),
('CAF', 'République centrafricaine', 'Centrafricaine'),
('CAM', 'Cambodge', 'Cambodgienne'),
('CAN', 'Canada', 'Canadienne'),
('CAY', 'Îles Caïmans', 'Caïmanienne'),
('CGO', 'République du Congo', 'Congolaise'),
('CHA', 'Tchad', 'Tchadienne'),
('CHI', 'Chili', 'Chilienne'),
('CHN', 'République populaire de Chine', 'Chinoise'),
('CIV', 'Côte d\'Ivoire', 'Ivoirienne'),
('CMR', 'Cameroun', 'Camerounaise'),
('COD', 'République démocratique du Congo', 'Congolaise'),
('COK', 'Îles Cook', 'Cook Islander'),
('COL', 'Colombie', 'Colombienne'),
('COM', 'Comores', 'Comorienne'),
('CPV', 'Cap-Vert', 'Cap-Verdienne'),
('CRC', 'Costa Rica', 'Costaricienne'),
('CRO', 'Croatie', 'Croate'),
('CUB', 'Cuba', 'Cubaine'),
('CUR', 'Curaçao', 'Curacienne'),
('CYP', 'Chypre', 'Chypriote'),
('CZE', 'République tchèque', 'Tchèque'),
('DEN', 'Danemark', 'Danois'),
('DJI', 'Djibouti', 'Djiboutienne'),
('DMA', 'Dominique', 'Dominiquaise'),
('DOM', 'République dominicaine', 'Dominicaine'),
('ECU', 'Équateur', 'Équatorienne'),
('EGY', 'Égypte', 'Égyptienne'),
('ENG', 'Angleterre', 'Anglaise'),
('ERI', 'Érythrée', 'Érythréenne'),
('ESA', 'El Salvador', 'Salvadorienne'),
('ESP', 'Espagne', 'Espagnole'),
('EST', 'Estonie', 'Estonienne'),
('ETH', 'Éthopie', 'Éthiopienne'),
('FIJ', 'Fidji', 'Fidjienne'),
('FIN', 'Finlande', 'Finlandaise'),
('FLK', 'Îles Malouines', 'Malouine'),
('FRA', 'France', 'Française'),
('FRO', 'Îles Féroé', 'Féringienne'),
('FSM', 'États fédérés de Micronésie', 'Micronésienne'),
('GAB', 'Gabon', 'Gabonaise'),
('GAM', 'Gambie', 'Gambienne'),
('GBS', 'Guinée-Bissau', 'Bissau-Guinéenne'),
('GEO', 'Géorgie', 'Géorgienne'),
('GEQ', 'Guinée équatoriale', 'Guinéo-équatorienne'),
('GER', 'Allemagne', 'Allemande'),
('GGY', 'Guernesey', 'Guernesiaise'),
('GHA', 'Ghana', 'Ghanéenne'),
('GIB', 'Gibraltar', 'Gibraltarienne'),
('GLP', 'Guadeloupe', 'Guadeloupéenne'),
('GRE', 'Grèce', 'Grecque'),
('GRN', 'Grenade', 'Grenadienne'),
('GUA', 'Guatemala', 'Guatémaltèque'),
('GUF', 'Guyane', 'Guyanaise'),
('GUI', 'Guinée', 'Guinéenne'),
('GUM', 'Guam', 'Guamanienne'),
('GUY', 'Guyana', 'Guyanienne'),
('HAI', 'Haïti', 'Haïtienne'),
('HKG', 'Hong Kong', 'Hongkongaise'),
('HON', 'Honduras', 'Hondurienne'),
('HUN', 'Hongrie', 'Hongroise'),
('IMN', 'Île de Man', 'Mannoise'),
('INA', 'Indonésie', 'Indonésienne'),
('IND', 'Inde', 'Indienne'),
('IRL', 'Irlande', 'Irlandaise'),
('IRN', 'Iran', 'Iranienne'),
('IRQ', 'Irak', 'Irakienne'),
('ISL', 'Islande', 'Islandaise'),
('ISR', 'Israël', 'Israélienne'),
('ISV', 'Îles Vierges des États-Unis', 'Américaine'),
('ITA', 'Italie', 'Italienne'),
('IVB', 'Îles Vierges britanniques', 'Britannique'),
('JAM', 'Jamaïque', 'Jamaïcaine'),
('JEY', 'Jersey', 'Jersiaise'),
('JOR', 'Jordanie', 'Jordanienne'),
('JPN', 'Japon', 'Japonaise'),
('KAZ', 'Kazakhstan', 'Kazakhe'),
('KEN', 'Kenya', 'Kényane'),
('KGZ', 'Kirghizistan', 'Kirghiz'),
('KIR', 'Kiribati', 'Gilbertine'),
('KOR', 'Corée du Sud (République de Corée)', 'Sud-Coréenne'),
('KOS', 'Kosovo', 'Kosovar'),
('KSA', 'Arabie Saoudite', 'Saoudienne'),
('KUW', 'Koweït', 'Koweïtienne'),
('LAO', 'Laos', 'Laotienne'),
('LAT', 'Lettonie', 'Lettonne'),
('LBA', 'Libye', 'Libyenne'),
('LBN', 'Liban', 'Libanaise'),
('LBR', 'Liberia', 'Libérienne'),
('LCA', 'Sainte-Lucie', 'Sainte-Lucienne'),
('LES', 'Lesotho', 'Lesothane'),
('LIE', 'Liechtenstein', 'Liechtensteinoise'),
('LTU', 'Lituanie', 'Lituanienne'),
('LUX', 'Luxembourg', 'Luxembourgeoise'),
('MAC', 'Macao', 'Macanaise'),
('MAD', 'Madagascar', 'Malgache'),
('MAF', 'Saint-Martin', 'Saint-Martinoise'),
('MAR', 'Maroc', 'Marocaine'),
('MAS', 'Malaisie', 'Malaisienne'),
('MAW', 'Malawi', 'Malawienne'),
('MDA', 'Moldavie', 'Moldave'),
('MDV', 'Maldives', 'Maldivienne'),
('MEX', 'Mexique', 'Mexicaine'),
('MGL', 'Mongolie', 'Mongole'),
('MHL', 'Îles Marshall', 'Marshallaise'),
('MKD', 'République de Macédoine', 'Macédonienne'),
('MLI', 'Mali', 'Malienne'),
('MLT', 'Malte', 'Maltaise'),
('MNE', 'Monténégro', 'Monténégrine'),
('MON', 'Monaco', 'Monégasque'),
('MOZ', 'Mozambique', 'Mozambicaine'),
('MRI', 'Maurice', 'Mauricienne'),
('MSR', 'Montserrat', 'Montserratian'),
('MTN', 'Mauritanie', 'Mauritanienne'),
('MTQ', 'Martinique', 'Martiniquaise'),
('MYA', 'Birmanie (Myanmar)', 'Birmane'),
('MYT', 'Mayotte', 'Mahoraise'),
('NAM', 'Namibie', 'Namibienne'),
('NCA', 'Nicaragua', 'Nicaraguayenne'),
('NCL', 'Nouvelle-Calédonie', 'Néo-Calédonienne'),
('NED', 'Pays-Bas', 'Néerlandaise'),
('NEP', 'Népal', 'Népalaise'),
('NFK', 'Île Norfolk', 'Norfolkaise'),
('NGR', 'Nigeria', 'Nigériane'),
('NIG', 'Niger', 'Nigérienne'),
('NIR', 'Irlande du Nord', 'Nord-Irlandaise'),
('NIU', 'Niue', 'Niuéenne'),
('NOR', 'Norvège', 'Norvègienne'),
('NRU', 'Nauru', 'Nauruane'),
('NZL', 'Nouvelle-Zélande', 'Néo-Zélandaise'),
('OMA', 'Oman', 'Omani'),
('PAK', 'Pakistan', 'Pakistanaise'),
('PAN', 'Panama', 'Panaméenne'),
('PAR', 'Paraguay', 'Paraguayeenne'),
('PER', 'Pérou', 'Péruvienne'),
('PHI', 'Philippines', 'Philippine'),
('PLE', 'Palestine', 'Palestinienne'),
('PLW', 'Palaos', 'Paluane'),
('PNG', 'Papouasie-Nouvelle-Guinée', 'Papouane-néo-guinéenne'),
('POL', 'Pologne', 'Polonaise'),
('POR', 'Portugal', 'Portugaise'),
('PRK', 'Corée du Nord', 'Nord-Coréenne'),
('PUR', 'Porto Rico', 'Portoricaine'),
('PYF', 'Polynésie Française', 'Polynésienne'),
('QAT', 'Qatar', 'Qatarienne'),
('REU', 'La Réunion', 'Réunionnaise'),
('ROU', 'Roumanie', 'Roumaine'),
('RSA', 'Afrique du Sud', 'Sud-Africaine'),
('RUS', 'Fédération de Russie', 'Russe'),
('RWA', 'Rwanda', 'Rwandaise'),
('SAM', 'Samoa', 'Samoan'),
('SCO', 'Écosse', 'Écossaise'),
('SEN', 'Sénégal', 'Sénégalaise'),
('SEY', 'Seychelles', 'Seychelloise'),
('SIN', 'Singapour', 'Singapourienne'),
('SKN', 'Saint-Christophe-et-Niévès', 'Kititienne'),
('SLE', 'Sierra Leone', 'Sierra-léonaise'),
('SLO', 'Slovénie', 'Slovène'),
('SMR', 'Saint-Marin', 'Saint-Marinaise'),
('SOL', 'Salomon', 'Salomonienne'),
('SOM', 'Somalie', 'Somalienne'),
('SPM', 'Saint-Pierre et Miquelon', 'Saint-Pierraise et Miquelonnaise'),
('SRB', 'Serbie', 'Serbe'),
('SRI', 'Sri Lanka', 'Srilankaise'),
('SSD', 'Soudan du Sud', 'Sud-Soudanaise'),
('STP', 'Sao Tomé-et-Principe', 'Santoméenne'),
('SUD', 'Soudan', 'Soudanaise'),
('SUI', 'Suisse', 'Suissesse'),
('SUR', 'Suriname', 'Surinamienne'),
('SVK', 'Slovaquie', 'Slovaque'),
('SWE', 'Suède', 'Suèdoise'),
('SWZ', 'Swaziland', 'Swazis'),
('SYR', 'Syrie (République arabe syrienne)', 'Syrienne'),
('TAH', 'Tahiti', 'Tahitienne'),
('TAN', 'République unie de Tanzanie', 'Tanzanienne'),
('TCA', 'Îles Turques-et-Caïques', 'Turques-et-Caïques insulaire'),
('TGA', 'Tonga', 'Tongienne'),
('THA', 'Thaïlande', 'Thaïlandaise'),
('TJK', 'Tadjikistan', 'Tadjik'),
('TKL', 'Tokelau', 'Tokelauiense'),
('TKM', 'Turkménistan', 'Turkmène'),
('TLS', 'Timor oriental (Timor-Leste)', 'Est-Timoraise'),
('TOG', 'Togo', 'Togolaise'),
('TTO', 'Trinité-et-Tobago', 'Trinidadienne'),
('TUN', 'Tunisie', 'Tunisienne'),
('TUR', 'Turquie', 'Turque'),
('TUV', 'Tuvalu', 'Tuvaluan'),
('TWN', 'Taïwan', 'Taïwanaise'),
('UAE', 'Émirats arabes unis', 'Émiratie'),
('UGA', 'Ouganda', 'Ougandaise'),
('UKR', 'Ukraine', 'Ukrainienne'),
('URU', 'Uruguay', 'Uruguayenne'),
('USA', 'États-Unis d\'Amérique', 'Américaine'),
('UZB', 'Ouzbékistan', 'Ouzbek'),
('VAN', 'Vanuatu', 'Vanuataise'),
('VEN', 'Venezuela', 'Vénézuélienne'),
('VIE', 'Viêt Nam', 'Viêtnamienne'),
('VIN', 'Saint-Vincent-et-les-Grenadines', 'Saint-Vincentaise et Grenadine'),
('WAL', 'Pays de Galles', 'Galloise'),
('WLF', 'Wallis-et-Futuna', 'Wallisienne-et-Futunienne'),
('YEM', 'Yémen', 'Yéménite'),
('ZAM', 'Zambie', 'Zambienne'),
('ZIM', 'Zimbabwe', 'Zimbabwéenne');

-- --------------------------------------------------------

--
-- Structure de la table `statuts`
--

CREATE TABLE `statuts` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `statuts`
--

INSERT INTO `statuts` (`id`, `type`) VALUES
(1, 'Expatriation'),
(2, 'Travail'),
(3, 'Vacances');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `sexe` char(5) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(60) NOT NULL,
  `admin` tinyint(1) DEFAULT '0',
  `note` int(1) DEFAULT NULL,
  `disponible` tinyint(1) DEFAULT NULL,
  `nounce` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `nom`, `prenom`, `mdp`, `sexe`, `date_naissance`, `email`, `admin`, `note`, `disponible`, `nounce`) VALUES
(6, 'Samuel ', ' Lemuel ', 'Sam ', '202cb962ac59075b964b07152d234b70 ', 'Femme', '1994-04-24', 'Sam.Lemuel@nounce.fr ', 0, NULL, NULL, NULL),
(7, 'Lyonel ', ' Lyono', 'Neil ', '202cb962ac59075b964b07152d234b70 ', 'Homme', '1985-05-15', 'Neil.Lyo@nounce.fr ', 0, NULL, NULL, NULL),
(8, 'Victor ', ' Othor ', 'Vic ', '202cb962ac59075b964b07152d234b70 ', 'Homme', '1996-06-26', 'Vic.Othor@nounce.fr ', 0, NULL, NULL, NULL),
(9, 'Christopher ', ' Topher ', 'Chris ', '202cb962ac59075b964b07152d234b70 ', 'Homme', '1991-11-11', 'Chris.Topher@nounce.fr ', 0, NULL, NULL, NULL),
(10, 'Marcel ', ' Ele ', 'Marc ', '202cb962ac59075b964b07152d234b70 ', 'Homme', '1984-04-04', 'Marc.Ele@nounce.fr ', 0, NULL, NULL, NULL),
(11, 'DaïQuest ', ' Mounianman ', 'Julien ', '202cb962ac59075b964b07152d234b70 ', 'Homme', '1996-01-05', 'julienmounianman@gmail.com ', 0, NULL, NULL, NULL),
(22, 'GG ', ' Garner ', 'Gerald ', '202cb962ac59075b964b07152d234b70 ', 'Homme', '1994-04-04', 'GG@nounce.fr ', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `voyages`
--

CREATE TABLE `voyages` (
  `id` int(11) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(60) NOT NULL,
  `date_arrivee` date NOT NULL,
  `date_depart` date NOT NULL,
  `duree` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Contenu de la table `voyages`
--

INSERT INTO `voyages` (`id`, `pays`, `ville`, `date_arrivee`, `date_depart`, `duree`, `id_statuts`, `libelle_pays`) VALUES
(1, 'Zimbabwe', 'Harare', '2017-09-01', '2017-09-20', '2017-09-13 07:13:36.000000', 3, 'ZIM');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id_utilisateurs`,`id_voyages`);

--
-- Index pour la table `habite`
--
ALTER TABLE `habite`
  ADD PRIMARY KEY (`id_utilisateurs`,`libelle`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parle`
--
ALTER TABLE `parle`
  ADD PRIMARY KEY (`id_utilisateurs`,`id_langues`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`libelle`);

--
-- Index pour la table `statuts`
--
ALTER TABLE `statuts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;
--
-- AUTO_INCREMENT pour la table `statuts`
--
ALTER TABLE `statuts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `voyages`
--
ALTER TABLE `voyages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
