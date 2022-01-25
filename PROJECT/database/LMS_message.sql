
--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `M_Id` int(10) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) DEFAULT NULL,
  `Msg` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  PRIMARY KEY (`M_Id`),
  KEY `UserName` (`UserName`),
  CONSTRAINT `message_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `user` (`UserName`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;


--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
INSERT INTO `message` VALUES (1,'b160111cs','Your request for BookId: 1  has been accepted','2018-10-15','23:47:40'),(2,'B160158CS','Your request for BookId: 1  has been accepted','2018-10-15','23:47:50'),(3,'B160158CS','Your request for BookId: 2  has been rejected','2018-10-15','23:47:58'),(4,'b160632cs','Your request for BookId: 3  has been accepted','2018-10-16','16:54:29'),(5,'b160511cs','Your request for BookId: 2  has been accepted','2018-10-16','16:54:58'),(6,'b160511cs','Your request for BookId: 6  has been accepted','2018-10-16','21:56:11'),(7,'b160854cs','Your request for BookId: 6 has been accepted','2018-10-16','22:11:12'),(8,'B160158CS','Your request for renewal of BookId: 1  has been accepted','2018-10-16','22:43:24'),(9,'b160511cs','Your request for return of BookId: 6  has been accepted','2018-10-16','22:44:24'),(10,'B160158CS','Your request for renewal of BookId: 1  has been accepted','2018-10-16','23:05:12'),(11,'B160158CS','Your request for renewal of BookId: 1  has been accepted','2018-10-16','23:09:51'),(12,'b160511cs','Your request for return of BookId: 6  has been accepted','2018-10-16','23:10:27'),(13,'b160511cs','Your request for return of BookId: 2  has been accepted','2018-10-16','23:36:10'),(14,'b160511cs','Your request for issue of BookId: 1  has been rejected','2018-10-16','23:36:20'),(15,'B160158CS','Your request for issue of BookId: 3  has been rejected','2018-10-16','23:43:37'),(16,'B160158CS','Your request for issue of BookId: 6  has been rejected','2018-10-16','23:43:42'),(17,'B160158CS','Your request for issue of BookId: 2  has been accepted','2018-10-16','23:47:31'),(18,'b160632cs','Your request for issue of BookId: 2  has been rejected','2018-10-16','23:47:34'),(19,'B160632CS','Your request for issue of BookId: 7  has been rejected','2018-10-25','23:25:25'),(20,'B160632CS','Your request for issue of BookId: 15  has been accepted','2018-10-25','23:25:27'),(21,'B160632CS','Your request for renewal of BookId: 3  has been accepted','2018-10-25','23:25:44'),(22,'b160632cs','Your request for return of BookId: 3  has been accepted','2018-10-25','23:25:48'),(23,'b160003ch','Your request for issue of BookId: 9  has been accepted','2018-10-25','23:27:46'),(24,'b160011ch','Your request for issue of BookId: 10  has been accepted','2018-10-25','23:27:49'),(25,'b160011ch','Your request for issue of BookId: 17  has been accepted','2018-10-25','23:27:53'),(26,'b160001cs','Your request for issue of BookId: 11  has been accepted','2018-10-25','23:27:57'),(27,'b160001cs','Your request for issue of BookId: 9  has been accepted','2018-10-25','23:30:41'),(28,'b160158cs','Your request for issue of BookId: 9  has been accepted','2018-10-25','23:30:43'),(29,'b160511cs','Your request for issue of BookId: 10  has been accepted','2018-10-25','23:30:46'),(30,'b160158cs','Your request for issue of BookId: 18  has been accepted','2018-10-25','23:30:49'),(31,'b160511cs','Your request for issue of BookId: 11  has been accepted','2018-10-25','23:30:58'),(32,'b160511cs','Your request for issue of BookId: 13  has been accepted','2018-10-25','23:31:01'),(33,'b160003ch','Your request for issue of BookId: 15  has been rejected','2018-10-26','03:04:51');
UNLOCK TABLES;

