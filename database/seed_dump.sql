-- MySQL dump 10.13  Distrib 26.7.0, for macos26.6 (arm64)
--
-- Host: localhost    Database: school_db
-- ------------------------------------------------------
-- Server version	9.6.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '4e6fc088-36f7-11f1-9286-38d275d3c04a:1-3195';

--
-- Table structure for table `admission_enquiries`
--

DROP TABLE IF EXISTS `admission_enquiries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admission_enquiries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `parent_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_applying_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` enum('New','Contacted','Closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'New',
  `crm_status` enum('Pending','Sent','Failed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `crm_response` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admission_enquiries_mobile_class_applying_for_created_at_index` (`mobile`,`class_applying_for`,`created_at`),
  KEY `admission_enquiries_mobile_index` (`mobile`),
  KEY `admission_enquiries_status_index` (`status`),
  KEY `admission_enquiries_crm_status_index` (`crm_status`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admission_enquiries`
--

LOCK TABLES `admission_enquiries` WRITE;
/*!40000 ALTER TABLE `admission_enquiries` DISABLE KEYS */;
INSERT INTO `admission_enquiries` VALUES (1,'Rajesh Sharma','Aarav Sharma','Nursery','9876543210','rajesh.sharma@example.com','Interested in campus tour and bus transport details from Sector 76.','New','Sent','{\"status\": 200, \"message\": \"Synced to CRM\"}',NULL,'2026-11-14 04:26:10','2026-11-14 09:26:10'),(2,'Pooja Verma','Ananya Verma','Kindergarten','8765432109','pooja.verma@example.com','Query about age eligibility and admission process timeline.','Contacted','Sent','{\"status\": 200, \"message\": \"Synced to CRM\"}',NULL,'2026-11-13 09:26:10','2026-11-14 09:26:10'),(3,'Vikram Malhotra','Reyansh Malhotra','Pre-Nursery','7654321098','vikram.m@example.com','Looking for sibling discount details and day-care hours.','Closed','Sent','{\"status\": 200, \"message\": \"Synced to CRM\"}',NULL,'2026-11-11 09:26:10','2026-11-14 09:26:10'),(4,'Rajesh Sharma','Aarav Sharma','Nursery','9876543210','rajesh.sharma@example.com','Interested in campus tour and bus transport details from Sector 76.','New','Sent','{\"status\": 200, \"message\": \"Synced to CRM\"}',NULL,'2026-11-14 04:47:21','2026-11-14 09:47:21'),(5,'Pooja Verma','Ananya Verma','Kindergarten','8765432109','pooja.verma@example.com','Query about age eligibility and admission process timeline.','Contacted','Sent','{\"status\": 200, \"message\": \"Synced to CRM\"}',NULL,'2026-11-13 09:47:21','2026-11-14 09:47:21'),(6,'Vikram Malhotra','Reyansh Malhotra','Pre-Nursery','7654321098','vikram.m@example.com','Looking for sibling discount details and day-care hours.','Closed','Sent','{\"status\": 200, \"message\": \"Synced to CRM\"}',NULL,'2026-11-11 09:47:21','2026-11-14 09:47:21');
/*!40000 ALTER TABLE `admission_enquiries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_11_14_144957_create_news_events_table',2),(5,'2026_11_14_145011_create_admission_enquiries_table',2),(6,'2026_11_14_145224_add_is_admin_to_users_table',3),(7,'2026_11_14_150211_create_personal_access_tokens_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_events`
--

DROP TABLE IF EXISTS `news_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('News','Event','Achievement') COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_events_slug_unique` (`slug`),
  KEY `news_events_is_published_event_date_index` (`is_published`,`event_date`),
  KEY `news_events_is_published_category_event_date_index` (`is_published`,`category`,`event_date`),
  KEY `news_events_category_index` (`category`),
  KEY `news_events_event_date_index` (`event_date`),
  KEY `news_events_is_published_index` (`is_published`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_events`
--

LOCK TABLES `news_events` WRITE;
/*!40000 ALTER TABLE `news_events` DISABLE KEYS */;
INSERT INTO `news_events` VALUES (1,'Diwali Celebrations & Cultural Fest','diwali-celebrations-cultural-fest','Event','2026-11-10','news-events/diwali.jpg','Students and staff celebrated the festival of lights with traditional performances, rangoli competitions, and cultural workshops.','<p>The Manthan School illuminated with festive radiance as the school community came together to celebrate Diwali. The festivities kicked off with an auspicious diya lighting ceremony followed by soulful musical recitals and traditional dance performances by early years learners.</p><p>Students engaged in eco-friendly rangoli making, handcrafted clay diya painting, and collaborative storytelling sessions highlighting the values of kindness, victory of good over evil, and empathy. Parents were also invited to witness an inspiring theatrical presentation prepared by our kindergarten children.</p><p>The day concluded with sweet distributions and a pledge by the entire student body to celebrate a pollution-free green Diwali.</p>',1,'2026-11-14 09:26:10','2026-11-14 09:26:10'),(2,'Annual Sports Day: Sprinting Towards Excellence','annual-sports-day-sprinting-towards-excellence','Event','2026-11-04','news-events/sports.jpg','Students showcased agility, teamwork, and sportsmanship across various track, obstacle, and athletic competitions.','<p>Energy, passion, and unyielding team spirit echoed across the sports grounds during the Annual Sports Day celebration at The Manthan School. Over 300 students participated enthusiastically across diverse fun obstacle courses, 50m sprints, relay races, and balance drills.</p><p>The event was graced by esteemed athletic mentors who commended the children\'s disciplined coordination and perseverance. Trophies and medals were awarded across all age groups, celebrating not just winning, but active participation and healthy living.</p>',1,'2026-11-14 09:26:10','2026-11-14 09:26:10'),(3,'Janmashtami Utsav & Musical Extravaganza','janmashtami-utsav-musical-extravaganza','Event','2026-10-27','news-events/janmashtami.jpg','Joyful festivities including classical dance, flute decoration, and interactive enactment of Krishna folklore.','<p>The campus transformed into a vibrant cultural tableau as our pre-nursery and nursery children came dressed in colorful traditional attire portraying Radha and Krishna. The auditorium resonated with cheerful devotional rhymes and cheerful laughter.</p><p>Children took part in butter pot decoration crafts, peacock feather headband making, and an interactive puppet show demonstrating teamwork, friendship, and moral values.</p>',1,'2026-11-14 09:26:10','2026-11-14 09:26:10'),(4,'1st Prize at National Inter-School Storytelling Contest','1st-prize-at-national-inter-school-storytelling-contest','Achievement','2026-10-20','news-events/storytelling.jpg','Our young orators brought home prestigious laurels in voice modulation, narrative pacing, and expression.','<p>We are exceedingly proud to announce that students of Grade 1 and 2 from The Manthan School clinched the championship trophy at the National Storytelling and Oratory Conclave 2026.</p><p>Competing against 45 leading schools across the country, our learners captivated the jury with their dramatic flair, vocabulary enrichment, and confident stage presence. Kudos to our educators and speech mentors for nurturing these talents.</p>',1,'2026-11-14 09:26:10','2026-11-14 09:26:10'),(5,'Creative Strokes: Annual Art & Craft Exhibition','creative-strokes-annual-art-craft-exhibition','Event','2026-10-13','news-events/art.jpg','A vibrant exhibition of paintings, recycled sculptures, and tactile crafts created by our budding artists.','<p>Creativity knows no boundaries! The Creative Strokes exhibition provided a platform for students from Toddlers to Grade 2 to showcase their imaginative art. The exhibition gallery featured watercolor landscapes, pottery artifacts, papier-mâché sculptures, and recycled material installations.</p><p>Visiting parents praised the thematic depth and innovative medium exploration guided by the school\'s dedicated visual arts faculty.</p>',1,'2026-11-14 09:26:10','2026-11-14 09:26:10'),(6,'Launch of Advanced Robotics & AI Maker Space','launch-of-advanced-robotics-ai-maker-space','News','2026-10-05','news-events/robotics.jpg','State-of-the-art experiential laboratory equipped with modular robotics kits, sensor modules, and logic boards.','<p>In keeping with our vision of progressive experiential learning, The Manthan School is thrilled to inaugurate its new Robotics & AI Innovation Lab. Designed specifically for early childhood through primary learners, the facility introduces computational logic and creative problem solving through hands-on play.</p><p>Students will work with age-appropriate tangible coding blocks, tactile sensor circuits, and collaborative building modules that bring science and math concepts to life.</p>',1,'2026-11-14 09:26:10','2026-11-14 09:26:10'),(7,'Cambridge English Partner School Distinction','cambridge-english-partner-school-distinction','Achievement','2026-09-20','news-events/cambridge.jpg','Awarded prestigious recognition for excellence in foundational English language acquisition and phonics training.','<p>The Manthan School has been officially conferred the Cambridge English Partner Distinction in recognition of its structured phonics, early literacy framework, and communicative language development across all classrooms.</p><p>This accolade is a testament to our ongoing investment in world-class teacher training and internationally benchmarked curricula.</p>',1,'2026-11-14 09:26:10','2026-11-14 09:26:10'),(8,'Nature & Biodiversity Field Trip to Regional Botanical Garden','nature-biodiversity-field-trip-to-regional-botanical-garden','Event','2026-09-13','news-events/fieldtrip.jpg','Children explored indigenous flora, medicinal herbs, and butterfly conservatory in an immersive outdoor lesson.','<p>Learning extended beyond four walls as our nursery and kindergarten students spent an exhilarating day exploring nature at the regional botanical garden. Guided by naturalists, the children touched different leaf textures, observed pollination in the butterfly conservatory, and identified seasonal fruit trees.</p><p>The trip emphasized environmental stewardship, sensory discovery, and hands-on observation in alignment with our holistic growth curriculum.</p>',1,'2026-11-14 09:26:10','2026-11-14 09:26:10'),(9,'Diwali Celebrations & Cultural Fest','diwali-celebrations-cultural-fest-1','Event','2026-11-10','news-events/diwali.jpg','Students and staff celebrated the festival of lights with traditional performances, rangoli competitions, and cultural workshops.','<p>The Manthan School illuminated with festive radiance as the school community came together to celebrate Diwali. The festivities kicked off with an auspicious diya lighting ceremony followed by soulful musical recitals and traditional dance performances by early years learners.</p><p>Students engaged in eco-friendly rangoli making, handcrafted clay diya painting, and collaborative storytelling sessions highlighting the values of kindness, victory of good over evil, and empathy. Parents were also invited to witness an inspiring theatrical presentation prepared by our kindergarten children.</p><p>The day concluded with sweet distributions and a pledge by the entire student body to celebrate a pollution-free green Diwali.</p>',1,'2026-11-14 09:47:21','2026-11-14 09:47:21'),(10,'Annual Sports Day: Sprinting Towards Excellence','annual-sports-day-sprinting-towards-excellence-1','Event','2026-11-04','news-events/sports.jpg','Students showcased agility, teamwork, and sportsmanship across various track, obstacle, and athletic competitions.','<p>Energy, passion, and unyielding team spirit echoed across the sports grounds during the Annual Sports Day celebration at The Manthan School. Over 300 students participated enthusiastically across diverse fun obstacle courses, 50m sprints, relay races, and balance drills.</p><p>The event was graced by esteemed athletic mentors who commended the children\'s disciplined coordination and perseverance. Trophies and medals were awarded across all age groups, celebrating not just winning, but active participation and healthy living.</p>',1,'2026-11-14 09:47:21','2026-11-14 09:47:21'),(11,'Janmashtami Utsav & Musical Extravaganza','janmashtami-utsav-musical-extravaganza-1','Event','2026-10-27','news-events/janmashtami.jpg','Joyful festivities including classical dance, flute decoration, and interactive enactment of Krishna folklore.','<p>The campus transformed into a vibrant cultural tableau as our pre-nursery and nursery children came dressed in colorful traditional attire portraying Radha and Krishna. The auditorium resonated with cheerful devotional rhymes and cheerful laughter.</p><p>Children took part in butter pot decoration crafts, peacock feather headband making, and an interactive puppet show demonstrating teamwork, friendship, and moral values.</p>',1,'2026-11-14 09:47:21','2026-11-14 09:47:21'),(12,'1st Prize at National Inter-School Storytelling Contest','1st-prize-at-national-inter-school-storytelling-contest-1','Achievement','2026-10-20','news-events/storytelling.jpg','Our young orators brought home prestigious laurels in voice modulation, narrative pacing, and expression.','<p>We are exceedingly proud to announce that students of Grade 1 and 2 from The Manthan School clinched the championship trophy at the National Storytelling and Oratory Conclave 2026.</p><p>Competing against 45 leading schools across the country, our learners captivated the jury with their dramatic flair, vocabulary enrichment, and confident stage presence. Kudos to our educators and speech mentors for nurturing these talents.</p>',1,'2026-11-14 09:47:21','2026-11-14 09:47:21'),(13,'Creative Strokes: Annual Art & Craft Exhibition','creative-strokes-annual-art-craft-exhibition-1','Event','2026-10-13','news-events/art.jpg','A vibrant exhibition of paintings, recycled sculptures, and tactile crafts created by our budding artists.','<p>Creativity knows no boundaries! The Creative Strokes exhibition provided a platform for students from Toddlers to Grade 2 to showcase their imaginative art. The exhibition gallery featured watercolor landscapes, pottery artifacts, papier-mâché sculptures, and recycled material installations.</p><p>Visiting parents praised the thematic depth and innovative medium exploration guided by the school\'s dedicated visual arts faculty.</p>',1,'2026-11-14 09:47:21','2026-11-14 09:47:21'),(14,'Launch of Advanced Robotics & AI Maker Space','launch-of-advanced-robotics-ai-maker-space-1','News','2026-10-05','news-events/robotics.jpg','State-of-the-art experiential laboratory equipped with modular robotics kits, sensor modules, and logic boards.','<p>In keeping with our vision of progressive experiential learning, The Manthan School is thrilled to inaugurate its new Robotics & AI Innovation Lab. Designed specifically for early childhood through primary learners, the facility introduces computational logic and creative problem solving through hands-on play.</p><p>Students will work with age-appropriate tangible coding blocks, tactile sensor circuits, and collaborative building modules that bring science and math concepts to life.</p>',1,'2026-11-14 09:47:21','2026-11-14 09:47:21'),(15,'Cambridge English Partner School Distinction','cambridge-english-partner-school-distinction-1','Achievement','2026-09-20','news-events/cambridge.jpg','Awarded prestigious recognition for excellence in foundational English language acquisition and phonics training.','<p>The Manthan School has been officially conferred the Cambridge English Partner Distinction in recognition of its structured phonics, early literacy framework, and communicative language development across all classrooms.</p><p>This accolade is a testament to our ongoing investment in world-class teacher training and internationally benchmarked curricula.</p>',1,'2026-11-14 09:47:21','2026-11-14 09:47:21'),(16,'Nature & Biodiversity Field Trip to Regional Botanical Garden','nature-biodiversity-field-trip-to-regional-botanical-garden-1','Event','2026-09-13','news-events/fieldtrip.jpg','Children explored indigenous flora, medicinal herbs, and butterfly conservatory in an immersive outdoor lesson.','<p>Learning extended beyond four walls as our nursery and kindergarten students spent an exhilarating day exploring nature at the regional botanical garden. Guided by naturalists, the children touched different leaf textures, observed pollination in the butterfly conservatory, and identified seasonal fruit trees.</p><p>The trip emphasized environmental stewardship, sensory discovery, and hands-on observation in alignment with our holistic growth curriculum.</p>',1,'2026-11-14 09:47:21','2026-11-14 09:47:21');
/*!40000 ALTER TABLE `news_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  KEY `personal_access_tokens_expires_at_index` (`expires_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'School Administrator','admin@manthan.edu.in','2026-11-14 09:47:21','$2y$12$0Vrym3v2AWtQP4NzzMjHk.AEiQU4SPnrejnPk/84th4xMVVyM41lq',1,NULL,'2026-11-14 09:26:10','2026-11-14 09:47:21'),(2,'Admin User','admin@school.com','2026-11-14 09:47:21','$2y$12$5/YxwpgnfT322AgR9otspuhZrSTdrtfTuUsyRTKooMUalw6n7FKOm',1,NULL,'2026-11-14 09:26:10','2026-11-14 09:47:21');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-11-14 20:49:35
