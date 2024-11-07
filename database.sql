-- MySQL dump 10.13  Distrib 8.0.38, for macos14 (arm64)
--
-- Host: 127.0.0.1    Database: db
-- ------------------------------------------------------
-- Server version	5.5.5-10.11.8-MariaDB-ubu2204-log

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
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'J.K. Rowling','British author best known for the Harry Potter series.','British'),(2,'George R.R. Martin','American novelist known for A Song of Ice and Fire.','American'),(3,'J.R.R. Tolkien','English writer, author of The Lord of the Rings.','British'),(4,'Isaac Asimov','American writer and professor, known for science fiction.','American'),(5,'Agatha Christie','English writer known for her detective novels.','British'),(6,'Margaret Atwood','Canadian poet, novelist, and essayist, known for The Handmaid\'s Tale.','Canadian'),(7,'Neil Gaiman','British author known for his works in fantasy and horror.','British'),(8,'Stephen King','American author known for his horror and supernatural fiction.','American'),(9,'Chimamanda Ngozi Adichie','Nigerian writer and author of Half of a Yellow Sun.','Nigerian'),(10,'Toni Morrison','American novelist and winner of the Nobel Prize in Literature.','American'),(11,'F. Scott Fitzgerald','American novelist known for The Great Gatsby.','American'),(12,'Ray Bradbury','American author and screenwriter, best known for Fahrenheit 451.','American'),(13,'Mark Twain','American author known for The Adventures of Tom Sawyer.','American'),(14,'Harper Lee','American author known for To Kill a Mockingbird.','American'),(15,'Dan Brown','American author known for his thriller novels, including The Da Vinci Code.','American'),(16,'Margaret Atwood','Canadian poet, novelist, and essayist, known for The Handmaid\'s Tale.','Canadian'),(17,'Neil Gaiman','British author known for his works in fantasy and horror.','British'),(18,'Stephen King','American author known for his horror and supernatural fiction.','American'),(19,'Chimamanda Ngozi Adichie','Nigerian writer and author of Half of a Yellow Sun.','Nigerian'),(20,'Toni Morrison','American novelist and winner of the Nobel Prize in Literature.','American'),(21,'F. Scott Fitzgerald','American novelist known for The Great Gatsby.','American'),(22,'Ray Bradbury','American author and screenwriter, best known for Fahrenheit 451.','American'),(23,'Mark Twain','American author known for The Adventures of Tom Sawyer.','American'),(24,'Harper Lee','American author known for To Kill a Mockingbird.','American'),(25,'Dan Brown','American author known for his thriller novels, including The Da Vinci Code.','American');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_category`
--

DROP TABLE IF EXISTS `book_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book_category` (
  `book_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_category`
--

LOCK TABLES `book_category` WRITE;
/*!40000 ALTER TABLE `book_category` DISABLE KEYS */;
INSERT INTO `book_category` VALUES (1,1),(2,1),(3,1),(4,2),(5,3),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,2),(15,3),(1,2),(1,4),(2,6),(3,7),(6,7),(6,4);
/*!40000 ALTER TABLE `book_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_order`
--

DROP TABLE IF EXISTS `book_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book_order` (
  `order_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_order`
--

LOCK TABLES `book_order` WRITE;
/*!40000 ALTER TABLE `book_order` DISABLE KEYS */;
INSERT INTO `book_order` VALUES (1,1,1,19.99),(1,5,1,12.99),(1,12,1,15.99),(2,3,1,29.99),(3,14,1,16.99),(3,15,1,13.99),(4,4,1,18.99),(5,1,1,19.99),(5,2,1,25.99),(5,5,1,12.99),(5,2,2,12.99),(6,16,1,14.99),(6,18,1,18.99),(7,17,1,22.99),(8,8,1,29.99),(8,19,1,19.99),(9,20,1,15.99),(9,21,1,10.99),(10,22,1,12.99),(10,23,1,9.99),(11,24,1,14.99),(12,25,1,19.99),(12,6,1,19.99),(13,12,1,15.99),(13,5,1,12.99),(14,1,1,19.99),(15,2,1,25.99),(16,3,1,29.99),(17,4,1,18.99),(18,1,1,19.99),(19,8,1,21.99),(20,5,1,12.99),(21,6,1,19.99),(22,2,1,25.99),(23,7,1,22.99),(24,9,1,27.99),(25,10,1,30.99),(26,11,1,33.99),(27,12,1,36.99),(28,13,1,39.99),(29,14,1,42.99),(30,15,1,45.99),(31,1,1,19.99),(31,2,1,25.99),(31,3,2,29.99),(32,4,1,18.99),(32,5,1,12.99),(32,6,3,19.99),(33,7,2,19.99),(33,8,1,21.99),(33,9,1,22.99),(34,10,1,23.99),(34,11,2,24.99),(35,12,1,15.99),(35,13,1,22.99),(35,14,1,16.99),(36,15,2,13.99),(36,3,1,29.99),(37,1,1,19.99),(37,5,2,12.99),(37,9,1,22.99),(38,2,1,25.99),(38,7,2,19.99),(38,14,1,16.99),(39,6,1,19.99),(39,10,1,23.99),(39,15,1,13.99),(40,4,2,18.99),(40,12,1,15.99),(40,13,2,22.99);
/*!40000 ALTER TABLE `book_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Harry Potter and the Sorcerer\'s Stone',1,1,19.99,120,'1997-06-26'),(2,'A Game of Thrones',2,2,25.99,85,'1996-08-06'),(3,'The Lord of the Rings',3,3,29.99,95,'1954-07-29'),(4,'Foundation',4,3,18.99,60,'1951-05-01'),(5,'Murder on the Orient Express',5,5,12.99,110,'1934-01-01'),(6,'Harry Potter and the Chamber of Secrets',1,1,19.99,130,'1998-07-02'),(7,'Harry Potter and the Prisoner of Azkaban',1,1,19.99,100,'1999-07-08'),(8,'Harry Potter and the Goblet of Fire',1,1,21.99,90,'2000-07-08'),(9,'Harry Potter and the Order of the Phoenix',1,1,22.99,70,'2003-06-21'),(10,'Harry Potter and the Half-Blood Prince',1,1,23.99,65,'2005-07-16'),(11,'Harry Potter and the Deathly Hallows',1,1,24.99,50,'2007-07-21'),(12,'The Hobbit',3,4,15.99,105,'1937-09-21'),(13,'The Silmarillion',3,4,22.99,80,'1977-09-15'),(14,'I, Robot',4,5,16.99,60,'1950-12-02'),(15,'The Murder of Roger Ackroyd',5,5,13.99,120,'1926-06-01'),(16,'The Handmaid\'s Tale',6,4,14.99,75,'1985-04-17'),(17,'American Gods',7,3,22.99,60,'2001-06-19'),(18,'The Shining',8,2,18.99,80,'1977-01-28'),(19,'Half of a Yellow Sun',9,1,19.99,50,'2006-08-12'),(20,'Beloved',10,5,15.99,45,'1987-09-16'),(21,'The Great Gatsby',11,1,10.99,90,'1925-04-10'),(22,'Fahrenheit 451',12,4,12.99,85,'1953-10-19'),(23,'The Adventures of Tom Sawyer',13,5,9.99,100,'1876-06-01'),(24,'To Kill a Mockingbird',14,2,14.99,70,'1960-07-11'),(25,'The Da Vinci Code',15,1,19.99,95,'2003-03-18');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Fantasy','Books in the fantasy genre',NULL),(2,'Science Fiction','Books in the science fiction genre',NULL),(3,'Mystery','Books in the mystery genre',NULL),(4,'Cozy Mystery','Mystery books that really happend',3),(5,'Historical Mystery','Mystery books that are not real',3),(6,'Thriller','Books that are suspenseful and fast-paced',NULL),(7,'Young Adult','Books aimed at teenagers',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,'2024-10-10 14:30:00',45.97,1),(2,2,'2024-10-09 16:00:00',29.99,2),(3,3,'2024-10-08 10:15:00',35.99,3),(4,4,'2024-10-07 09:00:00',25.99,2),(5,5,'2024-10-06 12:45:00',52.97,1),(6,6,'2024-10-05 11:00:00',56.97,1),(7,7,'2024-10-04 15:30:00',45.97,2),(8,8,'2024-10-03 18:00:00',34.99,3),(9,9,'2024-10-02 09:30:00',27.98,1),(10,10,'2024-10-01 14:15:00',42.99,2),(11,11,'2024-10-11 10:45:00',22.99,3),(12,12,'2024-10-12 12:00:00',29.99,1),(13,13,'2024-10-13 16:20:00',49.99,2),(14,14,'2024-10-14 14:50:00',39.99,3),(15,15,'2024-09-26 11:10:00',55.99,1),(16,16,'2024-09-25 09:25:00',32.99,2),(17,17,'2024-09-24 13:30:00',46.99,3),(18,18,'2024-09-23 10:05:00',28.99,1),(19,19,'2024-09-22 15:15:00',30.99,2),(20,20,'2024-09-21 12:40:00',35.99,3),(21,21,'2024-09-20 09:50:00',21.99,1),(22,22,'2024-09-19 10:30:00',23.99,2),(23,23,'2024-09-18 13:00:00',25.99,3),(24,24,'2024-09-17 11:20:00',26.99,1),(25,25,'2024-09-16 14:10:00',27.99,2),(26,26,'2024-09-15 09:45:00',29.99,3),(27,27,'2024-09-14 10:55:00',31.99,1),(28,28,'2024-09-13 12:15:00',33.99,2),(29,29,'2024-09-12 15:00:00',34.99,3),(30,30,'2024-09-11 11:30:00',36.99,1),(31,31,'2024-09-10 10:40:00',37.99,2),(32,32,'2024-09-09 14:05:00',38.99,3),(33,33,'2024-08-08 12:30:00',39.99,1),(34,34,'2024-08-07 15:25:00',40.99,2),(35,35,'2024-08-06 13:45:00',41.99,3),(36,36,'2024-08-05 10:10:00',42.99,1),(37,37,'2024-08-04 12:20:00',43.99,2),(38,38,'2024-08-03 14:35:00',44.99,3),(39,39,'2024-08-02 11:15:00',45.99,1),(40,40,'2024-08-01 09:50:00',46.99,2);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publishers`
--

DROP TABLE IF EXISTS `publishers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publishers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publishers`
--

LOCK TABLES `publishers` WRITE;
/*!40000 ALTER TABLE `publishers` DISABLE KEYS */;
INSERT INTO `publishers` VALUES (1,'Bloomsbury','contact@bloomsbury.com','671a94d44b037-bloomsburry.jpg'),(2,'Bantam Books','info@bantambooks.com','671a94e574684-bantam-books.png'),(3,'HarperCollins','contact@harpercollins.com','671a94f64b748-harper-collins.jpg'),(4,'Penguin Random House','info@penguinrandomhouse.com','671a950bc572b-pinguin-random-house.png'),(5,'Simon & Schuster','contact@simonandschuster.com','671a951fd20c8-simon-schuster.png'),(6,'Macmillan Publishers','info@macmillan.com','671a76e3ad2be-logo-macmillan.png'),(7,'Saraband','info@saraband.com','671a77694f2ed-saraband-logo.jpg'),(8,'And Other Stories','info@and-other-stories.com','671a783a4ff5f-and-other-stories-publishing-logo.jpg');
/*!40000 ALTER TABLE `publishers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Pending'),(2,'Shipped'),(3,'Delivered');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'John','Doe','john.doe@example.com','password123'),(2,'Jane','Smith','jane.smith@example.com','password456'),(3,'Alice','Johnson','alice.johnson@example.com','password789'),(4,'Bob','Brown','bob.brown@example.com','password321'),(5,'Charlie','Davis','charlie.davis@example.com','password654'),(6,'David','Miller','david.miller@example.com','password987'),(7,'Eve','White','eve.white@example.com','password000'),(8,'Frank','Thomas','frank.thomas@example.com','password111'),(9,'Grace','Hill','grace.hill@example.com','password222'),(10,'Henry','Lewis','henry.lewis@example.com','password333'),(11,'Isabella','Clark','isabella.clark@example.com','password111'),(12,'James','White','james.white@example.com','password222'),(13,'Liam','Taylor','liam.taylor@example.com','password333'),(14,'Emma','Wilson','emma.wilson@example.com','password444'),(15,'Oliver','Anderson','oliver.anderson@example.com','password555'),(16,'Ava','Thomas','ava.thomas@example.com','password666'),(17,'Sophia','Martinez','sophia.martinez@example.com','password777'),(18,'Mason','Garcia','mason.garcia@example.com','password888'),(19,'Ella','Rodriguez','ella.rodriguez@example.com','password999'),(20,'Lucas','Hernandez','lucas.hernandez@example.com','password000'),(21,'Amelia','Young','amelia.young@example.com','password101'),(22,'Noah','King','noah.king@example.com','password202'),(23,'Oliver','Scott','oliver.scott@example.com','password303'),(24,'Mia','Lee','mia.lee@example.com','password404'),(25,'Elijah','Lewis','elijah.lewis@example.com','password505'),(26,'Harper','Hall','harper.hall@example.com','password606'),(27,'Aiden','Green','aiden.green@example.com','password707'),(28,'Abigail','Baker','abigail.baker@example.com','password808'),(29,'Ethan','Adams','ethan.adams@example.com','password909'),(30,'Lily','Nelson','lily.nelson@example.com','password010'),(31,'Sofia','Carter','sofia.carter@example.com','password111'),(32,'Jack','Mitchell','jack.mitchell@example.com','password222'),(33,'Zoe','Perez','zoe.perez@example.com','password333'),(34,'Henry','Roberts','henry.roberts@example.com','password444'),(35,'Chloe','Turner','chloe.turner@example.com','password555'),(36,'Samuel','Phillips','samuel.phillips@example.com','password666'),(37,'Victoria','Campbell','victoria.campbell@example.com','password777'),(38,'David','Parker','david.parker@example.com','password888'),(39,'Madison','Evans','madison.evans@example.com','password999'),(40,'Benjamin','Edwards','benjamin.edwards@example.com','password000');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-07 13:21:58
