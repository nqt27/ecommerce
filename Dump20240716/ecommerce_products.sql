-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: ecommerce
-- ------------------------------------------------------
-- Server version	9.0.0

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Mid Backpack','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, totam eveniet distinctio ex nulla odio pariatur quis. Hic nisi, veritatis, corrupti voluptate dolorem corporis excepturi molestiae nostrum cupiditate officiis inventore?','image/pr1.png',800000.00,1,NULL,NULL),(15,'Nomad Backpack','- Chất liệu: Vải Polyester cao cấp có khả năng trượt nước\r\n- Màu sắc : Black / Light Gray / Beige / Navy\r\n- Kích thước: 41 x 29 x 13 cm (Chiều Cao x Chiều Dài x Chiều Rộng )\r\n- Ngăn chống sốc: Đựng vừa laptop 15.6 inch','storage/image/kRXmsa5e5us0dbMRa2PfRDL80iSslKd2yUYwKMRu.jpg',450000.00,1,'2024-07-14 18:46:46','2024-07-14 18:46:46'),(16,'Basic Backpack V1','- Chất liệu: Vải Polyester cao cấp có khả năng trượt nước\r\n - Màu sắc : Black / Light Gray / Beige / Navy\r\n - Kích thước: 41 x 29 x 13 cm (Chiều Cao x Chiều Dài x Chiều Rộng )\r\n - Ngăn chống sốc: Đựng vừa laptop 15.6 inch','storage/image/g85vfcb63IkWm820lUnt4lo4hbgHKGs1Qr1u5TBh.jpg',320000.00,1,'2024-07-14 18:48:17','2024-07-14 18:48:17'),(17,'Basic Backpack V1','- Chất liệu: Vải Polyester cao cấp có khả năng trượt nước - Màu sắc : Black / Light Gray / Beige / Navy - Kích thước: 41 x 29 x 13 cm (Chiều Cao x Chiều Dài x Chiều Rộng ) - Ngăn chống sốc: Đựng vừa laptop 15.6 inch','storage/image/frmS3ztepSitzlzF3U8SasWbJOcSISM7LWXa6h8M.jpg',320000.00,1,'2024-07-14 18:49:10','2024-07-14 18:49:10');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-16 16:34:17
