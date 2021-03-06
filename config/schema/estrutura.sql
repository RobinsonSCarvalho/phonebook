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


-- Starting the table structure `contacts` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `contacts` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`name` VARCHAR(500) COLLATE latin1_swedish_ci NOT NULL,
`email` VARCHAR(500) COLLATE latin1_swedish_ci NOT NULL,
`address` VARCHAR(500) COLLATE latin1_swedish_ci NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB;
-- End of table structure `contacts` --


-- Starting the table structure `phones` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `phones` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`contact_id` INTEGER(11) NOT NULL,
`phone` VARCHAR(20) COLLATE latin1_swedish_ci NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- End of table structure `phones` --


/* !40101 SET SQL_MODE=@OLD_SQL_MODE */;
/* !40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/* !40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/* !40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/* !40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/* !40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/* !40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

