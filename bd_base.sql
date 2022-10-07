CREATE DATABASE  IF NOT EXISTS `loja` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `loja`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: loja
-- ------------------------------------------------------
-- Server version	5.7.39

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
-- Table structure for table `acessorio_modelos`
--

DROP TABLE IF EXISTS `acessorio_modelos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `acessorio_modelos` (
  `id_acessorio_modelo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_acessorio` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_acessorio_modelo`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acessorio_modelos`
--

LOCK TABLES `acessorio_modelos` WRITE;
/*!40000 ALTER TABLE `acessorio_modelos` DISABLE KEYS */;
INSERT INTO `acessorio_modelos` VALUES (1,1,2,'2022-01-01 00:00:00','2022-09-21 15:11:33','2022-09-21 15:11:33'),(2,2,2,'2022-01-01 00:00:00','2022-09-21 14:32:36','2022-09-21 14:32:36'),(3,3,2,'2022-01-01 00:00:00','2022-09-21 15:11:19','2022-09-21 15:11:19'),(4,4,3,'2022-09-21 15:02:39','2022-09-21 15:05:07','2022-09-21 15:05:07'),(5,4,4,'2022-09-21 15:02:39','2022-09-21 15:05:07','2022-09-21 15:05:07'),(6,4,2,'2022-09-21 15:05:07','2022-09-21 15:05:15','2022-09-21 15:05:15'),(7,4,4,'2022-09-21 15:05:07','2022-09-21 15:05:15','2022-09-21 15:05:15'),(8,4,4,'2022-09-21 15:05:15','2022-09-21 15:05:21','2022-09-21 15:05:21'),(9,4,2,'2022-09-21 15:10:14','2022-09-21 15:10:19','2022-09-21 15:10:19'),(10,3,2,'2022-09-21 15:11:19','2022-09-21 15:16:12','2022-09-21 15:16:12'),(11,3,3,'2022-09-21 15:11:19','2022-09-21 15:16:12','2022-09-21 15:16:12'),(12,3,4,'2022-09-21 15:11:19','2022-09-21 15:16:12','2022-09-21 15:16:12'),(13,1,2,'2022-09-21 15:11:33','2022-09-21 15:16:15','2022-09-21 15:16:15'),(14,1,3,'2022-09-21 15:11:33','2022-09-21 15:16:15','2022-09-21 15:16:15'),(15,4,2,'2022-09-21 15:16:08','2022-09-21 15:16:08',NULL),(16,4,4,'2022-09-21 15:16:08','2022-09-21 15:16:08',NULL),(17,3,2,'2022-09-21 15:16:12','2022-09-21 15:16:12',NULL),(18,3,4,'2022-09-21 15:16:12','2022-09-21 15:16:12',NULL),(19,1,2,'2022-09-21 15:16:15','2022-09-21 15:16:15',NULL);
/*!40000 ALTER TABLE `acessorio_modelos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acessorios`
--

DROP TABLE IF EXISTS `acessorios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `acessorios` (
  `id_acessorio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `acessorio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_acessorio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acessorios`
--

LOCK TABLES `acessorios` WRITE;
/*!40000 ALTER TABLE `acessorios` DISABLE KEYS */;
INSERT INTO `acessorios` VALUES (1,'teste acessorio','teste','2022-01-01 00:00:00','2022-01-01 00:00:00',NULL),(2,'teste 2 acessorio','teste 2','2022-01-01 00:00:00','2022-09-21 14:32:36','2022-09-21 14:32:36'),(3,'teste 3 acessorio','teste 3','2022-01-01 00:00:00','2022-01-01 00:00:00',NULL),(4,'acessório 4','Eis que os caminhos do homem estão perante os olhos do Senhor, e ele pesa todas as suas veredas.\r\nProvérbios 5:21','2022-09-21 15:02:39','2022-09-21 15:02:39',NULL);
/*!40000 ALTER TABLE `acessorios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
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
-- Table structure for table `marcas`
--

DROP TABLE IF EXISTS `marcas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marcas` (
  `id_marca` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` VALUES (1,'marac de teste','2022-01-01 00:00:00','2022-09-20 22:32:40','2022-09-20 22:32:40'),(2,'ssstesd sad asd asd a ffffffffffffff','2022-01-01 00:00:00','2022-09-20 23:21:31',NULL),(3,'vvvv','2022-01-01 00:00:00','2022-09-20 22:45:33','2022-09-20 22:45:33'),(4,'rrrrr','2022-01-01 00:00:00','2022-09-20 22:36:08','2022-09-20 22:36:08'),(5,'maravilha','2022-09-20 23:23:25','2022-09-21 12:52:45',NULL),(6,'sd fsdf sdf sdf sdf sdf sdf','2022-09-20 23:23:29','2022-09-20 23:23:29',NULL);
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_09_13_192033_create_marcas_table',1),(6,'2022_09_13_192122_create_modelos_table',1),(7,'2022_09_13_192218_create_acessorios_table',1),(8,'2022_09_13_192252_create_acessorio_modelos_table',1),(9,'2022_09_13_192319_create_veiculos_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelos`
--

DROP TABLE IF EXISTS `modelos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modelos` (
  `id_modelo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_marca` int(11) NOT NULL,
  `modelo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anos_modelo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_modelo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelos`
--

LOCK TABLES `modelos` WRITE;
/*!40000 ALTER TABLE `modelos` DISABLE KEYS */;
INSERT INTO `modelos` VALUES (1,2,'modelo 1','2022','asdasdas','2022-01-01 00:00:00','2022-09-21 14:02:25','2022-09-21 14:02:25'),(2,5,'modelo 1','2022','Porque os lábios da mulher estranha destilam favos de mel, e o seu paladar é mais suave do que o azeite.\r\nMas o seu fim é amargoso como o absinto, agudo como a espada de dois gumes.\r\nOs seus pés descem para a morte; os seus passos estão impregnados do inferno.\r\n\r\nProvérbios 5:3-5','2022-09-21 14:20:22','2022-09-21 14:22:28',NULL),(3,6,'Modelo 2','2021','Para que não ponderes os caminhos da vida, as suas andanças são errantes: jamais os conhecerás.\r\nAgora, pois, filhos, dai-me ouvidos, e não vos desvieis das palavras da minha boca.\r\n\r\nProvérbios 5:6,7','2022-09-21 15:00:36','2022-09-21 15:12:04','2022-09-21 15:12:04'),(4,2,'Modelo 3','2021, 2022','Bebe água da tua fonte, e das correntes do teu poço.\r\nDerramar-se-iam as tuas fontes por fora, e pelas ruas os ribeiros de águas?\r\nSejam para ti só, e não para os estranhos contigo.\r\nSeja bendito o teu manancial, e alegra-te com a mulher da tua mocidade.\r\n\r\nProvérbios 5:15-18','2022-09-21 15:01:46','2022-09-21 15:01:46',NULL);
/*!40000 ALTER TABLE `modelos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Thomas Melo','thomas.melo@terra.com.br',NULL,'$2y$10$QkWj1fjqSD0.I4BnIcluI.tZYGSs9hGjdfGnbv0RYBFGTjcLSN5nK','f8AbqzC8kT1wntE5sKNtGi4Qtaj0MxCdIWBPiacdJiCmePwxxleXvLiY98Ro','2022-01-01 11:00:00','2022-09-17 22:01:42');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veiculos`
--

DROP TABLE IF EXISTS `veiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `veiculos` (
  `id_veiculo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `valor` decimal(10,2) NOT NULL DEFAULT '0.00',
  `cor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_veiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculos`
--

LOCK TABLES `veiculos` WRITE;
/*!40000 ALTER TABLE `veiculos` DISABLE KEYS */;
INSERT INTO `veiculos` VALUES (1,4,1,1234.00,'azul','abc1234','teste',NULL,'2022-09-21 16:09:15','2022-09-21 16:11:14','2022-09-21 16:11:14'),(2,4,1,1234.00,'bege','abc12345',NULL,'fotos/20220930142139.gif','2022-09-21 16:11:36','2022-09-30 14:21:39',NULL),(3,2,1,33333.00,'rrrr','rrrrr','sdfsdfsdfsd','fotos/20220930142208.png','2022-09-30 13:57:11','2022-09-30 14:22:08',NULL),(4,4,1,423432.00,'dfsdfdss','sdfsdf',NULL,'fotos/20220930142218.jpg','2022-09-30 14:03:35','2022-09-30 14:22:18',NULL),(5,2,1,444.00,'erter','terter',NULL,'fotos/20220930142257.jpg','2022-09-30 14:04:14','2022-09-30 14:22:57',NULL);
/*!40000 ALTER TABLE `veiculos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-07 11:43:55
