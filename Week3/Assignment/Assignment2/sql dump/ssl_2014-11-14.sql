# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38)
# Database: ssl
# Generation Time: 2014-11-14 17:13:35 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table fruits
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fruits`;

CREATE TABLE `fruits` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fruitname` varchar(50) DEFAULT '',
  `fruitcolor` varchar(50) DEFAULT '',
  `fruitimage` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `fruits` WRITE;
/*!40000 ALTER TABLE `fruits` DISABLE KEYS */;

INSERT INTO `fruits` (`id`, `fruitname`, `fruitcolor`, `fruitimage`)
VALUES
	(68,'Strawberry','Red','http://www.boldsky.com/img/2013/06/04-fruits.jpg'),
	(69,'Banana','Yellow','https://romanlosangelez.files.wordpress.com/2014/01/banana2.jpg'),
	(71,'Watermelon','Pink','http://www.missmeliss.com/wp-content/uploads/2012/07/watermelon.jpg'),
	(72,'Grapes','Purple','http://images6.fanpop.com/image/photos/34600000/Dark-Purple-Grapes-colors-34691311-285-316.jpg'),
	(73,'Blueberry','Blue ','http://getrealliving.com.au/wp-content/uploads/2013/10/blueberries.jpg'),
	(82,'Mango','Orange','http://upload.wikimedia.org/wikipedia/commons/b/b9/Mango_hedgehog.jpg'),
	(84,'Coconut','White','http://www.desktopaper.com/wp-content/uploads/fruit-fresh-coconut-hd-n-2732473.jpg'),
	(85,'Apple','Green','http://upload.wikimedia.org/wikipedia/commons/2/27/Green_apple.jpg');

/*!40000 ALTER TABLE `fruits` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
