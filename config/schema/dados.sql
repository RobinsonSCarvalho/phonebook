/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


 --
 -- Dumping data for table `contacts`
 --
 

 LOCK TABLES `contacts` WRITE;
 /*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (6, 'z', 'z@z.com', '1234');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (9, 'q', 'q@q.com', 'q');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (10, 'w', 'w@w.com', 'w');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (22, 'e', 'e@ee.com', 'e');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (25, 'xx', 'xx@xx.com', '123');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (26, 'sdasd', 'asdasd@asdasd.com', '123');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (27, 'dfasdf', 'adfadf@asdasd.com', '23135');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (28, 'teste', 'testex@testey.com', 'teste');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (29, 'kkk', 'kkk@kkk.com', '123');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (30, 'q', 'wqwqw@qqq.com', '4121123');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (31, 'xadssad', 'dasdas@SDAS.COM', '2132');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (32, 'XDASDASD', '13231@xn--dfkl-3oa.com', 'SDFADFDF');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (33, 'ZXSCZXC', 'XZXC@ASFASDASD.COM', '1213');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (34, 'sszxx', 'asdasdasdasd@assaddssd.com', '2123');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (35, 'q', 'q@w.com', 'w');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (36, 'qq', 'qq@ww.com', '1231');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (37, 'A', 'a@1a.com', 'A');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (38, 'A', 'A@S.COM', 'A');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (39, 'xxxteste', '123@321.com', '123');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (54, 'sdfsdf', 'xxxaaa@fdfdfdf.com', 'asdasd');
 INSERT IGNORE INTO `contacts` (`id`, `name`, `email`, `address`) VALUES  (55, 'vvvx', 'vvv@vvv.com', 'vvv');
 /*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `phones`
 --
 

 LOCK TABLES `phones` WRITE;
 /*!40000 ALTER TABLE `phones` DISABLE KEYS */;
 INSERT IGNORE INTO `phones` (`id`, `contact_id`, `phone`) VALUES  (1, 27, '(44) 44444-4444');
 INSERT IGNORE INTO `phones` (`id`, `contact_id`, `phone`) VALUES  (2, 27, '(33) 33333-3333');
 INSERT IGNORE INTO `phones` (`id`, `contact_id`, `phone`) VALUES  (3, 27, '(22) 22222-2222');
 INSERT IGNORE INTO `phones` (`id`, `contact_id`, `phone`) VALUES  (4, 27, '(11) 11111-1111');
 INSERT IGNORE INTO `phones` (`id`, `contact_id`, `phone`) VALUES  (8, 28, '(00) 00000-0000');
 INSERT IGNORE INTO `phones` (`id`, `contact_id`, `phone`) VALUES  (9, 28, '(00) 00000-0000');
 INSERT IGNORE INTO `phones` (`id`, `contact_id`, `phone`) VALUES  (10, 28, '(00) 00000-0000');
 INSERT IGNORE INTO `phones` (`id`, `contact_id`, `phone`) VALUES  (12, 29, '(16) 12345-1239');
 INSERT IGNORE INTO `phones` (`id`, `contact_id`, `phone`) VALUES  (16, 54, '(33) 33333-3330');
 INSERT IGNORE INTO `phones` (`id`, `contact_id`, `phone`) VALUES  (17, 54, '(22) 22222-2220');
 INSERT IGNORE INTO `phones` (`id`, `contact_id`, `phone`) VALUES  (18, 54, '(11) 11111-1110');
 /*!40000 ALTER TABLE `phones` ENABLE KEYS */;
 UNLOCK TABLES;
 

/* !40103 SET TIME_ZONE=@OLD_TIME_ZONE */;


/* !40101 SET SQL_MODE=@OLD_SQL_MODE */;
/* !40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/* !40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/* !40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/* !40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/* !40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/* !40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


-- Dump completed on 2017-03-09 16:16:53