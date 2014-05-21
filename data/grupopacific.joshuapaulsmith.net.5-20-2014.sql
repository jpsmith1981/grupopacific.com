-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Host: mysql.joshuapaulsmith.net
-- Generation Time: May 20, 2014 at 10:24 PM
-- Server version: 5.1.56
-- PHP Version: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thecodemonkey`
--

-- --------------------------------------------------------

--
-- Table structure for table `Grupo_People`
--

DROP TABLE IF EXISTS `Grupo_People`;
CREATE TABLE IF NOT EXISTS `Grupo_People` (
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `bio` mediumtext NOT NULL,
  `miscFactTitle1` varchar(255) NOT NULL,
  `miscFact` mediumtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `Priority` varchar(255) NOT NULL,
  `peopleId` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`peopleId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Grupo_People`
--

INSERT INTO `Grupo_People` (`firstName`, `lastName`, `picture`, `bio`, `miscFactTitle1`, `miscFact`, `email`, `Priority`, `peopleId`) VALUES
('Dick', 'Lund', 'DickLund.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut erat nisl, eu convallis velit. Vestibulum mollis massa nec mi dapibus a convallis nisi consequat. In sit amet ultricies turpis. Ut sodales ornare accumsan. Etiam placerat, nulla ut pellentesque ultrices, massa orci imperdiet mauris, et luctus nisl justo eget nibh. Donec sit amet justo nunc. Fusce vel quam et neque gravida porta et a sapien. Quisque condimentum metus quis purus tempor sed eleifend tortor elementum. Vivamus elementum ornare vestibulum. In sed venenatis risus. Quisque sodales nisl vel mi suscipit placerat eu quis eros. Donec at rhoncus tortor. Sed consectetur, tortor fringilla tempor congue, enim felis malesuada purus, non porttitor tortor risus a ipsum. Pellentesque facilisis risus et leo tempus posuere. Morbi et varius lacus. Donec id mauris in ipsum iaculis adipiscing.', 'Fact 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut erat nisl, eu convallis velit. Vestibulum mollis massa nec mi dapibus a convallis nisi consequat. In sit amet ultricies turpis. Ut sodales ornare accumsan. Etiam placerat, nulla ut pellentesque ultrices, massa orci imperdiet mauris, et luctus nisl justo eget nibh. Donec sit amet justo nunc. Fusce vel quam et neque gravida porta et a sapien. Quisque condimentum metus quis purus tempor sed eleifend tortor elementum. Vivamus elementum ornare vestibulum. In sed venenatis risus. Quisque sodales nisl vel mi suscipit placerat eu quis eros. Donec at rhoncus tortor. Sed consectetur, tortor fringilla tempor congue, enim felis malesuada purus, non porttitor tortor risus a ipsum. Pellentesque facilisis risus et leo tempus posuere. Morbi et varius lacus. Donec id mauris in ipsum iaculis adipiscing.', 'dlund@grupopacific.com', '', 1),
('Hannah', 'Scott', 'HannahScott.jpg  ', 'As the daughter of Lund Design Group, Inc. founder, Dick Lund, I was brought on board as a temporary receptionist in early 2005.  While earning a Bachelor’s in Business Management from University of Phoenix, I worked side by side with my father creating a well-rounded design firm, which is now known as Grupo Pacific, Inc.  After graduation, I became the permanent Business Manager bringing to the team my business knowledge and background.\r\n \r\nCurrently, I am the Director of Business and work closely with each member at Grupo Pacific.  I am married to the love of my life, Jimi Scott, and we have a 3 year old boy, Brodi and are expecting twin girls, Madilyn and Mikayla, in early July 2012.\r\n', 'Fun Fact', 'Something you may not know about me is that at the age of 17, I was National Champion in Sprint Triathlons.  Currently, I am an avid runner, surfer and enjoy spending time with my family as much as possible (preferably on the beach).  My husband and I also own RTDkids, fully-functional surfboards designed for babies, toddlers and mini-groms.  Check us out at <a href="www.rtd-kids.com">www.rtd-kids.com.</a>', 'hscott@grupopacific.com', '', 2),
('Jeff', 'Tanneberger', 'JeffTanneberger.jpg', '“Character cannot be developed in ease and quiet. Only through experience of trial and suffering can the soul be strengthened, ambition inspired, and success achieved,” Helen Keller.  This quote reminds me that anything can be accomplished when we set out to use our gifts to achieve greatness in our everyday lives.  When our group of talented individuals at Grupo Pacific works together as a team, we not only create spaces that inspire but lasting designs that can positively shape the experience of the end user.\r\n\r\nOriginally from just outside of San Antonio, Texas, I am the oldest of three brothers and one sister in a close-knit German-Irish family.  I attended the University of Houston & Texas A&M University where I received a Bachelor of Science degree in Mechanical Engineering.  I also obtained a Bachelor of Science degree in Interior Design with an emphasis on Commercial Architecture from The Art Institute of California-San Diego. While at The Art Institute, I was the local ASID chapter president. Currently I am enrolled in evening courses at The Art Institute seeking an additional degree in Multi-media and Web Design with hopes of adding more of these services to Grupo Pacific’s offerings in the near future.\r\n\r\nBefore starting at Grupo Pacific in 2007, I worked for the McCulley Group in Solana Beach, CA.  In my design philosophy, I believe in a “hands-on” approach where the entire team interacts at every stage of design from start to finish as opposed to an assembly-line style that compartmentalizes the various aspects of design.  This produces consistency throughout the project and allows the client familiarity and a good confidence level with the team.  “Design is a journey, you need good direction!”\r\n', 'Fun Fact ', 'Something interesting you might not know about me is that of the varied careers in my past, for a time I worked in the Entertainment industry having worked at both Interscope Records and Merv Griffin’s, The Griffin Group.', 'jtanneberger@grupopacific.com', '', 3),
('Elizabeth', 'Marcial', 'ElizabethMarcial.jpg ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut erat nisl, eu convallis velit. Vestibulum mollis massa nec mi dapibus a convallis nisi consequat. In sit amet ultricies turpis. Ut sodales ornare accumsan. Etiam placerat, nulla ut pellentesque ultrices, massa orci imperdiet mauris, et luctus nisl justo eget nibh. Donec sit amet justo nunc. Fusce vel quam et neque gravida porta et a sapien. Quisque condimentum metus quis purus tempor sed eleifend tortor elementum. Vivamus elementum ornare vestibulum. In sed venenatis risus. Quisque sodales nisl vel mi suscipit placerat eu quis eros. Donec at rhoncus tortor. Sed consectetur, tortor fringilla tempor congue, enim felis malesuada purus, non porttitor tortor risus a ipsum. Pellentesque facilisis risus et leo tempus posuere. Morbi et varius lacus. Donec id mauris in ipsum iaculis adipiscing.', 'Fact 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut erat nisl, eu convallis velit. Vestibulum mollis massa nec mi dapibus a convallis nisi consequat. In sit amet ultricies turpis. Ut sodales ornare accumsan. Etiam placerat, nulla ut pellentesque ultrices, massa orci imperdiet mauris, et luctus nisl justo eget nibh. Donec sit amet justo nunc. Fusce vel quam et neque gravida porta et a sapien. Quisque condimentum metus quis purus tempor sed eleifend tortor elementum. Vivamus elementum ornare vestibulum. In sed venenatis risus. Quisque sodales nisl vel mi suscipit placerat eu quis eros. Donec at rhoncus tortor. Sed consectetur, tortor fringilla tempor congue, enim felis malesuada purus, non porttitor tortor risus a ipsum. Pellentesque facilisis risus et leo tempus posuere. Morbi et varius lacus. Donec id mauris in ipsum iaculis adipiscing.', 'emarcial@grupopacific.com', '', 4),
('Shauna', 'Hoffman', 'ShaunaHoffman.jpg  ', 'Graduating from The Art Institute of California-San Diego in 2010 with a Bachelor of Science degree in Interior Design, I achieved Highest Honors.  I remained on the honors, President''s, or Dean''s list throughout my college career.  While at Ai, I was the proud winner of a $15,000 scholarship.  Many of my student projects were also featured in order to further the Interior Design program’s accreditation.  Over the years I’m privileged to have earned a respected reputation among my clients, colleagues, and peers. \r\n\r\nMy professional experience and background consists of both high-end residential design and commercial design.  I am extremely adept at construction document development, code references as well as designing and specifying for the general health, safety and welfare.  Additional strengths include 3-D Modeling and Model Rendering being proficient in 3Ds Max and PhotoShop.  Besides computer aided drawings, my capabilities include hand rendering and sketching.  My unique strengths, along with the rest of the team’s individual specialized skill sets, allow us at Grupo Pacific to provide the client with an all in-house design and an efficient collaboration on all projects, which saves time and money.\r\n', 'Fun Fact', 'I love to play beach and indoor volleyball and play with a number of groups in San Diego and Orange County. ', 'shoffman@grupopacific.com', '', 5),
('Jason', 'Netwig', 'JasonNetwig.jpg ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut erat nisl, eu convallis velit. Vestibulum mollis massa nec mi dapibus a convallis nisi consequat. In sit amet ultricies turpis. Ut sodales ornare accumsan. Etiam placerat, nulla ut pellentesque ultrices, massa orci imperdiet mauris, et luctus nisl justo eget nibh. Donec sit amet justo nunc. Fusce vel quam et neque gravida porta et a sapien. Quisque condimentum metus quis purus tempor sed eleifend tortor elementum. Vivamus elementum ornare vestibulum. In sed venenatis risus. Quisque sodales nisl vel mi suscipit placerat eu quis eros. Donec at rhoncus tortor. Sed consectetur, tortor fringilla tempor congue, enim felis malesuada purus, non porttitor tortor risus a ipsum. Pellentesque facilisis risus et leo tempus posuere. Morbi et varius lacus. Donec id mauris in ipsum iaculis adipiscing.', 'Fact 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut erat nisl, eu convallis velit. Vestibulum mollis massa nec mi dapibus a convallis nisi consequat. In sit amet ultricies turpis. Ut sodales ornare accumsan. Etiam placerat, nulla ut pellentesque ultrices, massa orci imperdiet mauris, et luctus nisl justo eget nibh. Donec sit amet justo nunc. Fusce vel quam et neque gravida porta et a sapien. Quisque condimentum metus quis purus tempor sed eleifend tortor elementum. Vivamus elementum ornare vestibulum. In sed venenatis risus. Quisque sodales nisl vel mi suscipit placerat eu quis eros. Donec at rhoncus tortor. Sed consectetur, tortor fringilla tempor congue, enim felis malesuada purus, non porttitor tortor risus a ipsum. Pellentesque facilisis risus et leo tempus posuere. Morbi et varius lacus. Donec id mauris in ipsum iaculis adipiscing.', 'jnetwig@grupopacific.com', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `Grupo_Project`
--

DROP TABLE IF EXISTS `Grupo_Project`;
CREATE TABLE IF NOT EXISTS `Grupo_Project` (
  `ProjectTitle` varchar(255) NOT NULL,
  `ProjectCategory` varchar(255) NOT NULL,
  `ProjectDescription` mediumtext NOT NULL,
  `ProjectID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ProjectID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `Grupo_Project`
--

INSERT INTO `Grupo_Project` (`ProjectTitle`, `ProjectCategory`, `ProjectDescription`, `ProjectID`) VALUES
('Centerside I - Tower', 'CORPORATE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis luctus nunc sed egestas. Quisque lobortis arcu non eros molestie vitae', 1),
('5510 Morehouse', 'Corporate', '5510 Morehouse Drive is a four story glass and brick commercial office building built in the early 1980’s within the Sorrento Valley Science Park in San Diego, CA.  On the 4th Floor, we created for the client a “spec suite” space plan enabling marketing to a full-floor tenant.  Consideration for building exiting and ADA (American’s with Disabilities Act) were incorporated into the overall plans.', 2),
('5550 Morehouse', 'Corporate', '5550 Morehouse Drive is a two story glass and brick Research & Development (R&D) building built in the early 1980’s within the Sorrento Valley Science Park in San Diego, CA.   We produced complete as-built drawings for the building as it is currently configured as existing plans were missing.  Utilizing the as-built plan we conducted a square footage study to determine “rentable square footage” (RSF) numbers for both floors.  A background research study was also conducted for the client that included allowable square footages, zoning regulations, airport overlay zones and additional historical permit information on the property.', 3),
('5590 Morehouse', 'Corporate', '5590 Morehouse Drive is a two story glass and brick Research & Development (R&D) building built in the early 1980’s within the Sorrento Valley Science Park in San Diego, CA.   Originally a single tenant building, the client requested a Demising Wall Study be produced to determine the maximum number of tenants and various configurations that conformed to exiting code requirements for a multi-tenant commercial office conversion.', 4),
('Blueview Corp', 'Corporate', '“Inferno Lounge” is a hip conceptual club house / office work space loft for a group of young entrepreneurs in the historic La Jolla Village area of San Diego.  Originally a retail toy store and warehouse, plans for the inferno lounge call for a “flex space” program where entertaining spaces double as work sanctuaries.  \r\nA large vertical offset pivoting square glass door swings opens to allow golf carts to enter with designated parking inside the entry area.  Highlights of the design include a full-size basketball court that has “murphy style” beds that extend down from padded court walls and provide sleeping refuge.  A large screen TV lounge doubles as a functioning office space.  The loft additionally includes quite areas, a full gourmet kitchen and themed restroom with modern waterfall shower.\r\n', 5),
('Canyon View Office Condominiums', 'Corporate', 'The 2-story, Canyon View Office Condominium project consists of 16,339 total square feet of office space in Sorrento Valley, San Diego.  This project consisted of a total renovation of exterior spaces as well as the lobby and other common areas.  Building finish standards were created and incorporated into two “Spec” suites spaceplans.', 6),
('Hacienda Del Mar', 'Corporate', 'Hacienda Del Mar features Colonial Spanish architecture and detailing, dramatic lobby, open-air courtyard with lush gardens and an outdoor café.  This unique multi-tenant office building constructed in 1987 is located in Del Mar Heights, San Diego and has 65,955 sf of space.  Project features a renovated “Mission Style” lobby that reflects the character of “old San Diego.”', 7),
('Sorrento Gateway', 'Corporate', 'The Campus at Sorrento Gateway is a scalable campus offering, freeway visibility and outdoor picnic areas.  Concepts for the project included ideas to increase building street profile and an improved signage way-finding system.', 8),
('Lund Vandruff', 'Corporate', 'Interior Tenant Improvement project in Sorrento Valley, San Diego for a Corporate Design Firm.', 9),
('Lund Team Office', 'Corporate', 'The Lund Team, Inc is a family owned and operated real estate Company in Carlsbad, North San Diego County.  Tenant Improvement project consisted of a full office build-out from a "warm shell.”', 10),
('Life Force International Office', 'Corporate', 'Lifeforce International is a nutritional supplement manufacturing and distribution company located in Poway, North County San Diego.  Project created a new innovative corporate office and manufacturing facility within an existing complex.  Highlights included many architectural touches and an expansive lobby with water-wall.  Exterior facades were renovated along with the interiors.', 11),
('SAIC', 'Corporate', '', 12),
('Straub Corporate Office ', 'Corporate', '', 13);

-- --------------------------------------------------------

--
-- Table structure for table `Grupo_Project_Description`
--

DROP TABLE IF EXISTS `Grupo_Project_Description`;
CREATE TABLE IF NOT EXISTS `Grupo_Project_Description` (
  `Description` mediumtext NOT NULL,
  `ProjectID` int(10) NOT NULL,
  `DescriptionID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`DescriptionID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Grupo_Project_Description`
--

INSERT INTO `Grupo_Project_Description` (`Description`, `ProjectID`, `DescriptionID`) VALUES
('Straub has steadily grown into one of the most experienced and respected providers of construction services in the Southwestern United States.  The company specializes in public facility construction and planning for government, military and municipal clients.\r\n\r\nGrupo Pacific oversaw a recent relocation and expansion tenant improvement which involved department organization and adjacency studies.  Straub’s new corporate offices are located in a historic former orange packing plant in Fallbrook, CA.  Exterior walls were left with exposed aged red-brick from the original facility where possible to give the space much of its unique character.  Interior spaces were treated with “golden” slate floors to compliment the exposed brick.\r\n', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Grupo_Project_Index`
--

DROP TABLE IF EXISTS `Grupo_Project_Index`;
CREATE TABLE IF NOT EXISTS `Grupo_Project_Index` (
  `ProjectTitle` varchar(255) NOT NULL COMMENT 'The Title of Project',
  `ProjectCategory` varchar(255) NOT NULL COMMENT 'Which Category..',
  `ProjectLocation` varchar(255) NOT NULL COMMENT 'Location where all images are stored',
  `ProjectHTML` varchar(255) NOT NULL,
  `ProjectID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'The ID that is linked to all other tables',
  PRIMARY KEY (`ProjectID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='The main index of all projects' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Grupo_Project_Index`
--

INSERT INTO `Grupo_Project_Index` (`ProjectTitle`, `ProjectCategory`, `ProjectLocation`, `ProjectHTML`, `ProjectID`) VALUES
('SAIC', 'Corporate', 'projects/saic', '/project.php', 1),
('Straub Corporate Office ', 'Corporate', 'projects/straub/', 'index.php?project=2', 2),
('First Allied Plaza Lobby', 'Corporate', 'projects/FirstAlliedPlazaBuilding/', 'project.php?project=3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Grupo_Project_MainPic`
--

DROP TABLE IF EXISTS `Grupo_Project_MainPic`;
CREATE TABLE IF NOT EXISTS `Grupo_Project_MainPic` (
  `ProjectID` int(10) NOT NULL,
  `imgLocation` varchar(255) NOT NULL,
  `ProjectPicID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ProjectPicID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `Grupo_Project_MainPic`
--

INSERT INTO `Grupo_Project_MainPic` (`ProjectID`, `imgLocation`, `ProjectPicID`) VALUES
(1, '/ExteriorPhotos/SAIC-CAMPUSPOINT.jpg', 1),
(1, '/ExteriorPhotos/SAIC-CAMPUSPOINT2.jpg', 2),
(1, '/ExteriorPhotos/SAIC-CAMPUSPOINT3.jpg', 3),
(1, '/ExteriorPhotos/SAIC-CAMPUSPOINT4.jpg', 4),
(1, '/ExteriorPhotos/SAIC-CAMPUSPOINT5.jpg', 5),
(2, '/A-ExterirorPhotos/ExteriorBuilding.jpg', 6),
(2, '/B-CorporateHeadquarters/FinishedPhotos/ConferenceRoom.jpg', 7),
(2, '/B-CorporateHeadquarters/FinishedPhotos/Lobby%20IdentityWall.jpg', 8),
(3, 'A-ExteriorPhotos/FirstAlliedPlazaExterior1.jpg', 15),
(2, '/B-CorporateHeadquarters/FinishedPhotos/Straub_Cubies2.jpg', 10),
(2, '/B-CorporateHeadquarters/FinishedPhotos/Straub_Red_Wall.jpg', 13),
(2, '/B-CorporateHeadquarters/FinishedPhotos/Straub_Signage.jpg', 11),
(2, '/B-CorporateHeadquarters/FinishedPhotos/OfficePanorama.jpg', 14),
(3, 'A-ExteriorPhotos/FirstAlliedPlazaExterior2.jpg', 16),
(3, 'A-ExteriorPhotos/FirstAlliedPlazaExteriorNight1.jpg', 17);

-- --------------------------------------------------------

--
-- Table structure for table `Grupo_Project_OtherMedia`
--

DROP TABLE IF EXISTS `Grupo_Project_OtherMedia`;
CREATE TABLE IF NOT EXISTS `Grupo_Project_OtherMedia` (
  `Location` varchar(255) NOT NULL,
  `MediaTitle` varchar(255) NOT NULL,
  `ProjectID` int(10) NOT NULL,
  `RenderingsID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`RenderingsID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Grupo_Project_OtherMedia`
--

INSERT INTO `Grupo_Project_OtherMedia` (`Location`, `MediaTitle`, `ProjectID`, `RenderingsID`) VALUES
('/B-CorporateHeadquarters/Renderings/STRAUBRENDERING.jpg', 'Renderings', 2, 1),
('/B-CorporateHeadquarters/Spaceplans/StraubColoredSpacePlans.jpg', 'Spaceplans', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Grupo_Project_Photo`
--

DROP TABLE IF EXISTS `Grupo_Project_Photo`;
CREATE TABLE IF NOT EXISTS `Grupo_Project_Photo` (
  `ProjectID` int(10) NOT NULL,
  `imgLocation` varchar(255) NOT NULL,
  `ProjectPicID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ProjectPicID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `Grupo_Project_Photo`
--

INSERT INTO `Grupo_Project_Photo` (`ProjectID`, `imgLocation`, `ProjectPicID`) VALUES
(1, '/projects/corporate/Centerside%20I%20Tower/exterior/Centerside%201%20(PIC%201).jpg', 1),
(1, '/projects/corporate/Centerside%20I%20Tower/exterior/Centerside%201%20(PIC%202).jpg', 2),
(1, '/projects/corporate/Centerside%20I%20Tower/exterior/Centerside%201%20(PIC%203).jpg', 3),
(2, '/projects/corporate/5510Morehouse/A%20-%20Exterior%20Photos/5510%20Morehouse%20Exterior%20Photo%201.jpg', 4),
(2, '/projects/corporate/5510Morehouse/A%20-%20Exterior%20Photos/5510%20Morehouse%20Exterior%20Photo%202.jpg', 5),
(2, '/projects/corporate/5510Morehouse/A%20-%20Exterior%20Photos/5510%20Morehouse%20Exterior%20Photo%203.jpg', 6),
(2, '/projects/corporate/5510Morehouse/A%20-%20Exterior%20Photos/5510%20Morehouse%20Exterior%20Photo%204.jpg', 7),
(3, '/projects/corporate/5550Morehouse/A-ExteriorPhotos/5550MorehouseExteriorPhoto1.jpg', 8),
(3, '/projects/corporate/5550Morehouse/A-ExteriorPhotos/5550MorehouseExteriorPhoto2.jpg', 9),
(4, '/projects/corporate/5590Morehouse/A-ExteriorPhotos/5590MorehouseExteriorPhoto2.jpg', 0),
(4, '/projects/corporate/5590Morehouse/A-ExteriorPhotos/5590MorehouseExteriorPhoto1.jpg', 11),
(5, '/projects/corporate/BlueviewCorp/A-ExteriorPhotos/7836HerschelAve1.jpg', 12),
(5, '/projects/corporate/BlueviewCorp/A-ExteriorPhotos/7836HerschelAve2.jpg', 13),
(6, '/projects/corporate/CanyonViewOfficeCondominiums/A-ExteriorPhotos/ExteriorPhoto.jpg', 14),
(6, '/projects/corporate/CanyonViewOfficeCondominiums/A-ExteriorPhotos/ExteriorPhoto1.jpg', 15),
(7, '/projects/corporate/HaciendaDelMar/A-ExteriorPhotos/HaciendaDelMar1.jpg', 17),
(7, '/projects/corporate/HaciendaDelMar/A-ExteriorPhotos/HaciendaDelMar2.jpg', 18),
(7, '/projects/corporate/HaciendaDelMar/A-ExteriorPhotos/HaciendaDelMar3.jpg', 19),
(7, '/projects/corporate/HaciendaDelMar/A-ExteriorPhotos/HaciendaDelMar4.jpg', 20),
(7, '/projects/corporate/HaciendaDelMar/A-ExteriorPhotos/HaciendaDelMar5.jpg', 21),
(7, '/projects/corporate/HaciendaDelMar/A-ExteriorPhotos/IMG_0974.JPG', 22),
(7, '/projects/corporate/HaciendaDelMar/A-ExteriorPhotos/IMG_0978.JPG', 23),
(7, '/projects/corporate/HaciendaDelMar/A-ExteriorPhotos/IMG_0979.JPG', 24),
(8, '/projects/corporate/SorrentoGateway/A-ExteriorPhotos/5005WateridgeVistaDriveExterior1.jpg', 25),
(8, '/projects/corporate/SorrentoGateway/A-ExteriorPhotos/5005WateridgeVistaDriveExterior2.jpg', 26),
(8, '/projects/corporate/SorrentoGateway/A-ExteriorPhotos/5005WateridgeVistaDriveExterior3.jpg', 27),
(9, '/projects/corporate/LundVandruff/B-CorporateOfficesStudio/InteriorPhotos/Lund_Van_Lounge2.jpg', 31),
(9, '/projects/corporate/LundVandruff/B-CorporateOfficesStudio/InteriorPhotos/Lund_Van_Lounge_2.jpg', 32),
(9, '/projects/corporate/LundVandruff/B-CorporateOfficesStudio/InteriorPhotos/Lund_Van_WS_Front.jpg', 33),
(10, '/projects/corporate/LundTeamOffice/A-ExteriorPhotos/Lund_Team_Exterior.jpg', 34),
(11, '/projects/corporate/LifeforceInternational/A-ExteriorPhotos/ExteriorLifeforce1.jpg', 35),
(11, '/projects/corporate/LifeforceInternational/A-ExteriorPhotos/ExteriorLifeforce2.JPG', 36),
(12, '/saic/ExteriorPhotos/SAIC-CAMPUSPOINT.jpg', 40),
(12, '/saic/ExteriorPhotos/SAIC-CAMPUSPOINT2.jpg', 43),
(12, '/saic/ExteriorPhotos/SAIC-CAMPUSPOINT3.jpg', 44),
(12, '/saic/ExteriorPhotos/SAIC-CAMPUSPOINT4.jpg', 45),
(12, '/saic/ExteriorPhotos/SAIC-CAMPUSPOINT5.jpg', 46),
(13, '/straub/A-ExterirorPhotos/ExteriorBuilding.jpg', 47),
(13, '/straub/B-CorporateHeadquarters/FinishedPhotos/ConferenceRoom.jpg', 48),
(13, '/straub/B-CorporateHeadquarters/FinishedPhotos/Lobby%20IdentityWall.jpg', 49),
(13, '/straub/B-CorporateHeadquarters/FinishedPhotos/OfficePanorama.jpg', 50),
(13, '/straub/B-CorporateHeadquarters/FinishedPhotos/Straub_Cubies2.jpg', 51),
(13, '/straub/B-CorporateHeadquarters/FinishedPhotos/Straub_Red_Wall.jpg', 52),
(13, '/straub/B-CorporateHeadquarters/FinishedPhotos/Straub_Signage.jpg', 53);
