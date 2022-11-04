-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: newschema
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `diseases`
--

DROP TABLE IF EXISTS `diseases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `diseases` (
  `id` int NOT NULL AUTO_INCREMENT,
  `disease_name` varchar(45) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diseases`
--

LOCK TABLES `diseases` WRITE;
/*!40000 ALTER TABLE `diseases` DISABLE KEYS */;
INSERT INTO `diseases` VALUES (1,'Suy dinh dưỡng thể còm','Là hiện tượng cơ và mỡ cơ thể bị teo đi, được coi là suy dinh dưỡng cấp tính vì thường biểu hiện trong thời gian ngắn. Được xác định khi cân nặng theo chiều cao dưới -2SD');
/*!40000 ALTER TABLE `diseases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback_rateds`
--

DROP TABLE IF EXISTS `feedback_rateds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback_rateds` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rate` float DEFAULT NULL,
  `feedback` varchar(500) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback_rateds`
--

LOCK TABLES `feedback_rateds` WRITE;
/*!40000 ALTER TABLE `feedback_rateds` DISABLE KEYS */;
INSERT INTO `feedback_rateds` VALUES (1,4,'Ý tưởng của hệ thống khá hay, có thể áp dụng vào thực tế. Tuy nhiên hệ thống còn đơn giản, ít chức năng','user1'),(2,4,'Nhìn chung hệ thống cũng được, cần phát triển thêm một số chức năng như gợi ý từ khoá khi nhập vào thanh tìm kiếm ','user1'),(3,4,'Giao diện hệ thống đơn giản. Cần gợi ý cho người dùng bằng một số câu hỏi thay vì chỉ nhập từ khoá đơn giản như bây giờ. Nhìn chung ý tưởng của hệ thống là tốt','user2'),(4,5,'Tuyệt vời, nên phát triển hoàn thiện để áp dụng thực tế','user2'),
      (5,4,'Cũng được nhưng hệ thống vẫn còn quá đơn giản. Hy vọng phát triển thêm các tính năng khác để sử dụng được','user1'),(6,4,'Cần nhận thêm một số thông tin như tuổi, giới tính nữa. Nếu phát triển thêm thì tính ứng dụng cũng cao đấy','user'),(7,5,'he thong dung qua la tot luon','user'),(8,1,'Không có tính ứng dụng gì cả. Tìm triệu chứng trên google có khi còn nhanh hơn','user1'),(9,5,'Đánh giá cao ý tưởng của hệ thống ','user1'),(10,1,'Quá đơn giản, ý tưởng thì có nhưng mà thực hiện chưa tới, tương tác người dùng hoàn toàn bị động. cần phát triển theo hướng giống chatbot tư vấn thì tốt hơn','user'),(11,3,'Tạm được, không có gì đặc sắc lắm','admin'),
      (12,4,'','user'),(13,2,'Hệ thống hơi khó dùng, còn nhiều chỗ đánh giá chưa chính xác','admin'),(14,4,'','user'),(15,3,'Ít chức năng, lời khuyên hơi chung chung chưa giải quyết triệt để vấn đề đang gặp phải','admin');
/*!40000 ALTER TABLE `feedback_rateds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hibernate_sequence`
--

DROP TABLE IF EXISTS `hibernate_sequence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hibernate_sequence` (
  `next_val` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hibernate_sequence`
--

LOCK TABLES `hibernate_sequence` WRITE;
/*!40000 ALTER TABLE `hibernate_sequence` DISABLE KEYS */;
INSERT INTO `hibernate_sequence` VALUES (1);
/*!40000 ALTER TABLE `hibernate_sequence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medical_history`
--

DROP TABLE IF EXISTS `medical_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medical_histories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date_time` date DEFAULT NULL,
  `symptoms` varchar(100) DEFAULT NULL,
  `disease_name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medical_histories`
--

LOCK TABLES `medical_histories` WRITE;
/*!40000 ALTER TABLE `medical_histories` DISABLE KEYS */;
INSERT INTO `medical_histories` VALUES (8,'2022-10-17','gầy; sút cân nhiều','Suy dinh dưỡng thể phối hợp','admin'),(14,'2022-10-19','gầy','Suy dinh dưỡng thể phối hợp','admin'),(15,'2022-10-19','gầy; da bọc xương','Suy dinh dưỡng thể còm','admin'),(16,'2022-10-20','gầy; tóc mỏng; phù chân tay mặt','Suy dinh dưỡng thể phối hợp','admin'),(17,'2022-10-21','gầy; da bọc xương; khó chịu','Suy dinh dưỡng thể còm','admin'),(18,'2022-10-21','da bọc xương; bụng óng; khó chịu','Suy dinh dưỡng thể còm','admin'),(19,'2022-10-21','gầy; da bọc xương; bụng óng','Suy dinh dưỡng thể còm','admin'),(20,'2022-10-27','teo cơ; sút cân nhiều; gầy','Suy dinh dưỡng thể phối hợp','admin'),(21,'2022-10-27','teo cơ; sút cân nhiều; gầy','Suy dinh dưỡng thể phối hợp','admin');
/*!40000 ALTER TABLE `medical_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recommendations`
--

DROP TABLE IF EXISTS `recommendations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recommendations` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `recommendation` varchar(2048) DEFAULT NULL,
  `disease_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recommendations`
--

LOCK TABLES `recommendations` WRITE;
/*!40000 ALTER TABLE `recommendations` DISABLE KEYS */;
INSERT INTO `recommendations` VALUES (1,' Phục hồi mất nước:\nCháo muối: 1 nắm gạo (50g) + 1 nhúm muối (3.5g) + 6 bát ăn nước cơm, đun nhừ,\nlọc lấy nước uống\nNước gạo rang: 50g gạo rang vàng và nấu như cháo muối\n','Suy dinh dưỡng thể còm'),(2,'Nếu trẻ ít hơn 2 tuổi, nuôi con bằng sữa mẹ: Cho trẻ bú sữa mẹ càng sớm càng tốt, theo nhu cầu\nCho bú sữa mẹ hoàn toàn trong 6 tháng đầu,\nThời gian được bú sữa mẹ ít nhất 12 tháng, tốt nhất là 24 tháng\n','Suy dinh dưỡng thể còm'),(3,'Cho trẻ ăn bổ sung hợp lý:\nCho ăn bổ sung sau 6 tháng tuổi\nCho trẻ ăn từ ít đến nhiều, tập làm quen với thức ăn mới\nSố lượng thức ăn tăng theo độ tuổi\nĐảm bảo thức ăn mềm, dễ nhai, dễ nuốt\nThức ăn bổ cùng cần cân đối dinh dưỡng, có đủ các nhóm thức ăn\nTăng đậm độ năng lượng của thức ăn: thêm dầu, mỡ, vừng, lạc\nĐảm bảo vệ sinh thực phẩm\nCho trẻ ăn nhiều hơn trong và sau khi bị ốm, cho trẻ ăn uống nhiều chất lỏng hơn,\nđặc biệt là khi bị ỉa chảy và sốt cao\n','Suy dinh dưỡng thể còm'),(4,' Phục hồi mất nước:\nCháo muối: 1 nắm gạo (50g) + 1 nhúm muối (3.5g) + 6 bát ăn nước cơm, đun nhừ,\nlọc lấy nước uống\nNước gạo rang: 50g gạo rang vàng và nấu như cháo muối\n','Suy dinh dưỡng thể phù'),(5,'Nếu trẻ ít hơn 2 tuổi, nuôi con bằng sữa mẹ: Cho trẻ bú sữa mẹ càng sớm càng tốt, theo nhu cầu\nCho bú sữa mẹ hoàn toàn trong 6 tháng đầu,\nThời gian được bú sữa mẹ ít nhất 12 tháng, tốt nhất là 24 tháng\n','Suy dinh dưỡng thể phù'),(6,'Cho trẻ ăn bổ sung hợp lý:\nCho ăn bổ sung sau 6 tháng tuổi\nCho trẻ ăn từ ít đến nhiều, tập làm quen với thức ăn mới\nSố lượng thức ăn tăng theo độ tuổi\nĐảm bảo thức ăn mềm, dễ nhai, dễ nuốt\nThức ăn bổ cùng cần cân đối dinh dưỡng, có đủ các nhóm thức ăn\nTăng đậm độ năng lượng của thức ăn: thêm dầu, mỡ, vừng, lạc\nĐảm bảo vệ sinh thực phẩm\nCho trẻ ăn nhiều hơn trong và sau khi bị ốm, cho trẻ ăn uống nhiều chất lỏng hơn,\nđặc biệt là khi bị ỉa chảy và sốt cao\n','Suy dinh dưỡng thể phù'),(7,' Phục hồi mất nước:\nCháo muối: 1 nắm gạo (50g) + 1 nhúm muối (3.5g) + 6 bát ăn nước cơm, đun nhừ,\nlọc lấy nước uống\nNước gạo rang: 50g gạo rang vàng và nấu như cháo muối\n','Suy dinh dưỡng thể phối hợp'),(8,'Nếu trẻ ít hơn 2 tuổi, nuôi con bằng sữa mẹ: Cho trẻ bú sữa mẹ càng sớm càng tốt, theo nhu cầu\nCho bú sữa mẹ hoàn toàn trong 6 tháng đầu,\nThời gian được bú sữa mẹ ít nhất 12 tháng, tốt nhất là 24 tháng\n','Suy dinh dưỡng thể phối hợp'),(9,'Cho trẻ ăn bổ sung hợp lý:\nCho ăn bổ sung sau 6 tháng tuổi\nCho trẻ ăn từ ít đến nhiều, tập làm quen với thức ăn mới\nSố lượng thức ăn tăng theo độ tuổi\nĐảm bảo thức ăn mềm, dễ nhai, dễ nuốt\nThức ăn bổ cùng cần cân đối dinh dưỡng, có đủ các nhóm thức ăn\nTăng đậm độ năng lượng của thức ăn: thêm dầu, mỡ, vừng, lạc\nĐảm bảo vệ sinh thực phẩm\nCho trẻ ăn nhiều hơn trong và sau khi bị ốm, cho trẻ ăn uống nhiều chất lỏng hơn,\nđặc biệt là khi bị ỉa chảy và sốt cao\n','Suy dinh dưỡng thể phối hợp'),(10,'Cho trẻ ăn đủ thức ăn giàu vitamin A: hạt nêm, bơ thực vật, dầu thực vật, đường...','Thiếu vitamin A'),(11,'Ăn thực phẩm giàu sắt, giàu vitamin C để tăng cường hấp thu sắt','Thiếu máu dinh dưỡng'),(12,'Ăn các thực phẩm giàu vitamin: cà chua, rau ...','Thiếu máu dinh dưỡng'),(13,'Sử dụng muối i-ốt','Thiếu i-ốt và bướu cổ'),(14,'Sử dụng gia vị chứa i-ốt: bột canh, hạt nêm..','Thiếu i-ốt và bướu cổ'),(15,'Đảm bảo chế độ ăn cung cấp đủ nhu cầu kẽm','Thiếu kẽm'),(16,'Cung cấp đủ rau quả chứa nhiều vitamin C, giúp tăng hấp thụ kẽm','Thiếu kẽm'),(17,'Thay thế các loại thực phẩm có thành phần dinh dưỡng nhưng ít đường\nvà chất béo hơn như khoai lang, ngô. Có thể cho trẻ ăn nhiều rau xanh,\ncác loại trái cây thực phẩm chứa nhiều chất xơ.\n','Thừa cân, béo phì'),(18,'Không cho trẻ ăn các thức ăn nhiều dầu mỡ, đồ ăn chiên xào\nthay vào đó có thể hấp, luộc\n','Thừa cân, béo phì'),(19,'Cho trẻ ăn ít loại đồ ăn vừa chứa chất béo vừa nhiều\nđường như bánh nướng, khoai tây chiên, \n xúc xích...','Thừa cân, béo phì');
/*!40000 ALTER TABLE `recommendations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `symptoms`
--

DROP TABLE IF EXISTS `symptoms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `symptoms` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `symptom_name` varchar(255) DEFAULT NULL,
  `weight` float NOT NULL,
  `disease_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `symptoms`
--

LOCK TABLES `symptoms` WRITE;
/*!40000 ALTER TABLE `symptoms` DISABLE KEYS */;
INSERT INTO `symptoms` VALUES (1,'Da bọc xương, teo cơ',3,'Suy dinh dưỡng thể còm'),(2,'Mắt mỡ dưới da',3,'Suy dinh dưỡng thể còm'),(3,'Bộ mặt của ông già',3,'Suy dinh dưỡng thể còm'),(4,'Bụng ỏng, phình ra',2,'Suy dinh dưỡng thể còm'),(5,'Khó chịu, bứt rứt, quấy khóc',1,'Suy dinh dưỡng thể còm'),(6,'Phù chân tay mặt',2,'Suy dinh dưỡng thể phù'),(7,'Sút cân vừa phải',3,'Suy dinh dưỡng thể phù'),(8,'Mặt tròn, vòng cánh tay nhỏ, cơ yếu',2,'Suy dinh dưỡng thể phù'),(9,'Kém ngon miệng',1,'Suy dinh dưỡng thể phù'),(10,'Bứt rứt, lãnh đạm, thờ ơ, quấy khóc',1,'Suy dinh dưỡng thể phù'),(11,'Tóc mỏng, thưa, dễ nhổ',2,'Suy dinh dưỡng thể phù'),(12,'Sút cân nhiều',3,'Suy dinh dưỡng thể phối hợp'),(13,'Phù chân tay mặt',3,'Suy dinh dưỡng thể phối hợp'),(14,'Tóc mỏng, thay đổi da',3,'Suy dinh dưỡng thể phối hợp'),(15,'Gầy',1,'Suy dinh dưỡng thể phối hợp'),(16,'Thay đổi tinh thần',2,'Suy dinh dưỡng thể phối hợp'),(17,'Giảm thị lực trong điều kiện thiếu ánh sáng',2,'Thiếu vitamin A'),(18,'Không nhìn rõ lúc chập tối',1,'Thiếu vitamin A'),(19,'Sợ đi, ngồi 1 chỗ',1,'Thiếu vitamin A'),(20,'Đi vấp ngã, đi không đúng chỗ',1,'Thiếu vitamin A'),(21,'Mảng nổi lên có màu trắng sáng hoặc vàng nhạt,\nhình oval hoặc tam giác ở vị trí góc mũi hoặc thái dương\n',3,'Thiếu vitamin A'),(22,'Bề mặt mắt có vẩy hoặc chấm trắng như đám mây',3,'Thiếu vitamin A'),(23,'Sợ ánh sáng, chói, hay dụi mắt',2,'Thiếu vitamin A'),(24,'Bề mặt mắt bị phủ 1 lớp mây trắng đục,\ntoàn bộ giác mạc bị mềm nhũn\n',3,'Thiếu vitamin A'),(25,'Giác mạc bị đục',3,'Thiếu vitamin A'),(26,'Mệt mỏi, thờ ơ, ù tai, hoa mắt chóng mặt',3,'Thiếu máu dinh dưỡng'),(27,'Đau đầu, giảm trí nhớ, mất ngủ, tê tay chân',3,'Thiếu máu dinh dưỡng'),(28,'Đánh trống ngực, khó thở',3,'Thiếu máu dinh dưỡng'),(29,'Da xanh, niêm mạc nhợt nhạt',3,'Thiếu máu dinh dưỡng'),(30,'Lưỡi màu nhợt',2,'Thiếu máu dinh dưỡng'),(31,'Tóc rụng, móng tay giòn, dễ gãy',1,'Thiếu máu dinh dưỡng'),(32,'Mạch nhanh',1,'Thiếu máu dinh dưỡng'),(33,'Sờ thấy tuyến giáp, mỗi thùy bên của tuyến giáp\ncó kích thước lớn hơn đốt ngón tay cái\n',3,'Thiếu i-ốt và bướu cổ'),(34,'Ngửa cổ nhìn thấy tuyến giáp di động khi nuốt',3,'Thiếu i-ốt và bướu cổ'),(35,'Tuyến giáp to, nhìn thấy bướu khi cổ ở tư thế bình thường',3,'Thiếu i-ốt và bướu cổ'),(36,'Thấp còi, nhẹ cân',1,'Thiếu kẽm'),(37,'Chán ăn, rối loạn nhận thức',3,'Thiếu kẽm'),(38,'Thừa cân, nhiều mỡ',3,'Thừa cân, béo phì'),(39,'Thường xuyên đói bụng',1,'Thừa cân, béo phì'),(40,'Tê chân tay',2,'Thừa cân, béo phì');
/*!40000 ALTER TABLE `symptoms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_accounts`
--

DROP TABLE IF EXISTS `user_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_accounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phonenumber` varchar(45) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_accounts`
--

LOCK TABLES `user_accounts` WRITE;
/*!40000 ALTER TABLE `user_accounts` DISABLE KEYS */;
INSERT INTO `user_accounts` VALUES (1,'admin','123456','bruce','wayne','admin@gmail.com','123456789','user'),(2,'admin1','123456','michael','jordan','admin2@gmail.com','2346623655','user'),(3,'user1','123456','david','beckham','user@gmail.com','+848888888','user'),(4,'user2','123456*','marcus','rashford','user2@gmail.com','+84999999999','user');
/*!40000 ALTER TABLE `user_accounts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-27 16:56:44
