/* CREATE DATABSE: unit_test */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `content` text,
  `published` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`,`title`,`content`,`published`)
VALUES
	(1,'First Article','First Article Body',1),
	(2,'Second Article','Second Article Body',1),
	(3,'Third Article','Third Article Body',1);

/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

/* CREATE DATABASE: test_unit_test */