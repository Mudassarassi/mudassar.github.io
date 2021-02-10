-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: Spotify
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

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
-- Table structure for table `UsuarioPro`
--

DROP TABLE IF EXISTS `UsuarioPro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `UsuarioPro` (
  `id` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nomUsuario` varchar(100) NOT NULL,
  `birthday` date DEFAULT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `pais` varchar(40) DEFAULT NULL,
  `codiPostal` int DEFAULT NULL,
  `subscribcionId` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscribcionId` (`subscribcionId`),
  CONSTRAINT `UsuarioPro_ibfk_1` FOREIGN KEY (`subscribcionId`) REFERENCES `subscribcionId` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UsuarioPro`
--

LOCK TABLES `UsuarioPro` WRITE;
/*!40000 ALTER TABLE `UsuarioPro` DISABLE KEYS */;
/*!40000 ALTER TABLE `UsuarioPro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `album` (
  `id` int NOT NULL,
  `artistaID` int DEFAULT NULL,
  `titol` varchar(40) DEFAULT NULL,
  `cancionid` int DEFAULT NULL,
  `year` date DEFAULT NULL,
  `portada` blob,
  PRIMARY KEY (`id`),
  UNIQUE KEY `artistaID` (`artistaID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artista`
--

DROP TABLE IF EXISTS `artista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artista` (
  `id` int NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `imagen` blob,
  `relacionId` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `relacionId` (`relacionId`),
  CONSTRAINT `artista_ibfk_1` FOREIGN KEY (`relacionId`) REFERENCES `artista` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artista`
--

LOCK TABLES `artista` WRITE;
/*!40000 ALTER TABLE `artista` DISABLE KEYS */;
/*!40000 ALTER TABLE `artista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cancion`
--

DROP TABLE IF EXISTS `cancion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cancion` (
  `id` int NOT NULL,
  `titol` varchar(30) DEFAULT NULL,
  `duration` float DEFAULT NULL,
  `reproduccion` int DEFAULT NULL,
  `UsuarioId` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cancion`
--

LOCK TABLES `cancion` WRITE;
/*!40000 ALTER TABLE `cancion` DISABLE KEYS */;
/*!40000 ALTER TABLE `cancion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cancionfav`
--

DROP TABLE IF EXISTS `cancionfav`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cancionfav` (
  `usuarioid` int DEFAULT NULL,
  `cancionid` int DEFAULT NULL,
  KEY `usuarioid` (`usuarioid`),
  KEY `cancionid` (`cancionid`),
  CONSTRAINT `cancionfav_ibfk_1` FOREIGN KEY (`usuarioid`) REFERENCES `UsuarioPro` (`id`),
  CONSTRAINT `cancionfav_ibfk_2` FOREIGN KEY (`cancionid`) REFERENCES `cancion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cancionfav`
--

LOCK TABLES `cancionfav` WRITE;
/*!40000 ALTER TABLE `cancionfav` DISABLE KEYS */;
/*!40000 ALTER TABLE `cancionfav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credit`
--

DROP TABLE IF EXISTS `credit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `credit` (
  `id` int NOT NULL,
  `cardNumber` int NOT NULL,
  `mes` int NOT NULL,
  `any` int NOT NULL,
  `codigoSeguridad` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credit`
--

LOCK TABLES `credit` WRITE;
/*!40000 ALTER TABLE `credit` DISABLE KEYS */;
/*!40000 ALTER TABLE `credit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment` (
  `id` int NOT NULL,
  `paypalId` int DEFAULT NULL,
  `creditId` int DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `usuarioProId` int DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `ordernumber` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ordernumber` (`ordernumber`),
  KEY `paypalId` (`paypalId`),
  KEY `creditId` (`creditId`),
  KEY `usuarioProId` (`usuarioProId`),
  CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`paypalId`) REFERENCES `paypal` (`id`) ON DELETE SET NULL,
  CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`creditId`) REFERENCES `credit` (`id`) ON DELETE SET NULL,
  CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`usuarioProId`) REFERENCES `UsuarioPro` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paypal`
--

DROP TABLE IF EXISTS `paypal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paypal` (
  `id` int NOT NULL,
  `nomUsuari` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paypal`
--

LOCK TABLES `paypal` WRITE;
/*!40000 ALTER TABLE `paypal` DISABLE KEYS */;
/*!40000 ALTER TABLE `paypal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playlist` (
  `id` int NOT NULL,
  `titol` varchar(40) DEFAULT NULL,
  `cancion` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `UsuarioId` int DEFAULT NULL,
  `playliststatusid` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `UsuarioId` (`UsuarioId`),
  KEY `playliststatusid` (`playliststatusid`),
  CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`UsuarioId`) REFERENCES `UsuarioPro` (`id`) ON DELETE SET NULL,
  CONSTRAINT `playlist_ibfk_2` FOREIGN KEY (`playliststatusid`) REFERENCES `playliststatus` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlist`
--

LOCK TABLES `playlist` WRITE;
/*!40000 ALTER TABLE `playlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `playlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playlistactive`
--

DROP TABLE IF EXISTS `playlistactive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playlistactive` (
  `id` int NOT NULL,
  `usuarioId` int DEFAULT NULL,
  `data` date DEFAULT NULL,
  `cancionid` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlistactive`
--

LOCK TABLES `playlistactive` WRITE;
/*!40000 ALTER TABLE `playlistactive` DISABLE KEYS */;
/*!40000 ALTER TABLE `playlistactive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playliststatus`
--

DROP TABLE IF EXISTS `playliststatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playliststatus` (
  `id` int NOT NULL,
  `activeId` int DEFAULT NULL,
  `deletes` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playliststatus`
--

LOCK TABLES `playliststatus` WRITE;
/*!40000 ALTER TABLE `playliststatus` DISABLE KEYS */;
/*!40000 ALTER TABLE `playliststatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seguir`
--

DROP TABLE IF EXISTS `seguir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seguir` (
  `id` int NOT NULL,
  `usuarioId` int DEFAULT NULL,
  `artistaId` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seguir`
--

LOCK TABLES `seguir` WRITE;
/*!40000 ALTER TABLE `seguir` DISABLE KEYS */;
/*!40000 ALTER TABLE `seguir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribcionId`
--

DROP TABLE IF EXISTS `subscribcionId`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscribcionId` (
  `id` int NOT NULL,
  `startDate` date DEFAULT NULL,
  `renew` date DEFAULT NULL,
  `paymentId` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `paymentId` (`paymentId`),
  CONSTRAINT `subscribcionId_ibfk_1` FOREIGN KEY (`paymentId`) REFERENCES `payment` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribcionId`
--

LOCK TABLES `subscribcionId` WRITE;
/*!40000 ALTER TABLE `subscribcionId` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscribcionId` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-10 19:55:39
-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: Pizzeria
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

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
-- Table structure for table `burger`
--

DROP TABLE IF EXISTS `burger`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `burger` (
  `id` int DEFAULT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `imagen` blob,
  `precio` float DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `burger`
--

LOCK TABLES `burger` WRITE;
/*!40000 ALTER TABLE `burger` DISABLE KEYS */;
/*!40000 ALTER TABLE `burger` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `id` int DEFAULT NULL,
  `nom` varchar(40) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  `cognom` varchar(20) DEFAULT NULL,
  `adress` varchar(100) DEFAULT NULL,
  `localitat_id` int DEFAULT NULL,
  `num` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `localitat_id` (`localitat_id`),
  CONSTRAINT `client_ibfk_1` FOREIGN KEY (`localitat_id`) REFERENCES `localitat` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comanda`
--

DROP TABLE IF EXISTS `comanda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comanda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data` datetime DEFAULT NULL,
  `per_repartir` bit(1) NOT NULL,
  `quantitat` int DEFAULT NULL,
  `preuTotal` float DEFAULT NULL,
  `client_id` int DEFAULT NULL,
  `emp_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `client_id` (`client_id`),
  KEY `emp_id` (`emp_id`),
  KEY `quantitat` (`quantitat`),
  CONSTRAINT `comanda_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  CONSTRAINT `comanda_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `emp` (`id`),
  CONSTRAINT `comanda_ibfk_3` FOREIGN KEY (`quantitat`) REFERENCES `productes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comanda`
--

LOCK TABLES `comanda` WRITE;
/*!40000 ALTER TABLE `comanda` DISABLE KEYS */;
/*!40000 ALTER TABLE `comanda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drink`
--

DROP TABLE IF EXISTS `drink`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `drink` (
  `id` int DEFAULT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `imagen` blob,
  `precio` float DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drink`
--

LOCK TABLES `drink` WRITE;
/*!40000 ALTER TABLE `drink` DISABLE KEYS */;
/*!40000 ALTER TABLE `drink` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp`
--

DROP TABLE IF EXISTS `emp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emp` (
  `id` int NOT NULL,
  `nom` varchar(25) NOT NULL,
  `cognom` varchar(25) DEFAULT NULL,
  `nif` varchar(9) NOT NULL,
  `telefon` int DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `tienda_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `tienda_id` (`tienda_id`),
  CONSTRAINT `emp_ibfk_1` FOREIGN KEY (`tienda_id`) REFERENCES `tienda` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp`
--

LOCK TABLES `emp` WRITE;
/*!40000 ALTER TABLE `emp` DISABLE KEYS */;
/*!40000 ALTER TABLE `emp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localitat`
--

DROP TABLE IF EXISTS `localitat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `localitat` (
  `id` int NOT NULL,
  `nom_localitat` varchar(40) DEFAULT NULL,
  `provincia_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `provincia_id` (`provincia_id`),
  CONSTRAINT `localitat_ibfk_1` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localitat`
--

LOCK TABLES `localitat` WRITE;
/*!40000 ALTER TABLE `localitat` DISABLE KEYS */;
/*!40000 ALTER TABLE `localitat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pizza`
--

DROP TABLE IF EXISTS `pizza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pizza` (
  `id` int DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `imagen` blob,
  `precio` float DEFAULT NULL,
  `categoria_id` int DEFAULT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `categoria_id` (`categoria_id`),
  CONSTRAINT `pizza_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pizza`
--

LOCK TABLES `pizza` WRITE;
/*!40000 ALTER TABLE `pizza` DISABLE KEYS */;
/*!40000 ALTER TABLE `pizza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productes`
--

DROP TABLE IF EXISTS `productes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productes` (
  `pizza_id` int DEFAULT NULL,
  `burger_id` int DEFAULT NULL,
  `drinks_id` int DEFAULT NULL,
  `id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productes`
--

LOCK TABLES `productes` WRITE;
/*!40000 ALTER TABLE `productes` DISABLE KEYS */;
/*!40000 ALTER TABLE `productes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincia`
--

DROP TABLE IF EXISTS `provincia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provincia` (
  `id` int NOT NULL,
  `nom_provincia` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincia`
--

LOCK TABLES `provincia` WRITE;
/*!40000 ALTER TABLE `provincia` DISABLE KEYS */;
/*!40000 ALTER TABLE `provincia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repartir`
--

DROP TABLE IF EXISTS `repartir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `repartir` (
  `id` int NOT NULL,
  `repartidor_id` int DEFAULT NULL,
  `comanda_id` int DEFAULT NULL,
  `entrega_id` int DEFAULT NULL,
  `hora` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comanda_id` (`comanda_id`),
  KEY `repartidor_id` (`repartidor_id`),
  KEY `entrega_id` (`entrega_id`),
  CONSTRAINT `repartir_ibfk_1` FOREIGN KEY (`comanda_id`) REFERENCES `comanda` (`id`),
  CONSTRAINT `repartir_ibfk_2` FOREIGN KEY (`repartidor_id`) REFERENCES `emp` (`id`),
  CONSTRAINT `repartir_ibfk_3` FOREIGN KEY (`entrega_id`) REFERENCES `emp` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repartir`
--

LOCK TABLES `repartir` WRITE;
/*!40000 ALTER TABLE `repartir` DISABLE KEYS */;
/*!40000 ALTER TABLE `repartir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tienda`
--

DROP TABLE IF EXISTS `tienda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tienda` (
  `id` int NOT NULL,
  `adress` varchar(100) DEFAULT NULL,
  `codi_postal` int DEFAULT NULL,
  `localitat_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `localitat_id` (`localitat_id`),
  CONSTRAINT `tienda_ibfk_1` FOREIGN KEY (`localitat_id`) REFERENCES `localitat` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tienda`
--

LOCK TABLES `tienda` WRITE;
/*!40000 ALTER TABLE `tienda` DISABLE KEYS */;
/*!40000 ALTER TABLE `tienda` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-10 19:55:39
-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: cul_de_ampolla
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

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
-- Table structure for table `CLIENT`
--

DROP TABLE IF EXISTS `CLIENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CLIENT` (
  `CLIENTid` int NOT NULL,
  `nom` varchar(25) NOT NULL,
  `adress` varchar(100) DEFAULT NULL,
  `telefon` int DEFAULT NULL,
  `data` date NOT NULL,
  `recomenatID` int DEFAULT NULL,
  PRIMARY KEY (`CLIENTid`),
  KEY `recomenatID` (`recomenatID`),
  CONSTRAINT `CLIENT_ibfk_1` FOREIGN KEY (`recomenatID`) REFERENCES `CLIENT` (`CLIENTid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CLIENT`
--

LOCK TABLES `CLIENT` WRITE;
/*!40000 ALTER TABLE `CLIENT` DISABLE KEYS */;
/*!40000 ALTER TABLE `CLIENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compra` (
  `marca` varchar(40) DEFAULT NULL,
  `graduacion` float(3,2) DEFAULT NULL,
  `muntura` varchar(24) DEFAULT NULL,
  `color_montura` varchar(20) DEFAULT NULL,
  `color_vidre` varchar(20) DEFAULT NULL,
  `preu` float(5,2) DEFAULT NULL,
  `orderID` int NOT NULL,
  `proveidorid` int DEFAULT NULL,
  PRIMARY KEY (`orderID`),
  UNIQUE KEY `proveidorid` (`proveidorid`),
  CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`proveidorid`) REFERENCES `proveider` (`proveidorID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleat`
--

DROP TABLE IF EXISTS `empleat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleat` (
  `id` int NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `adress` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleat`
--

LOCK TABLES `empleat` WRITE;
/*!40000 ALTER TABLE `empleat` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveider`
--

DROP TABLE IF EXISTS `proveider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveider` (
  `proveidorID` int NOT NULL,
  `Nom` varchar(25) DEFAULT NULL,
  `adresa` varchar(100) DEFAULT NULL,
  `telefon` int DEFAULT NULL,
  `NIF` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`proveidorID`),
  UNIQUE KEY `NIF` (`NIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveider`
--

LOCK TABLES `proveider` WRITE;
/*!40000 ALTER TABLE `proveider` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `venta` (
  `id` int NOT NULL,
  `orderid` int DEFAULT NULL,
  `empleatid` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empleatid` (`empleatid`),
  CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`empleatid`) REFERENCES `empleat` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-10 19:55:39
-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: Youtube
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

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
-- Table structure for table `canal`
--

DROP TABLE IF EXISTS `canal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `canal` (
  `id` int NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `creatorId` int DEFAULT NULL,
  `subscribeId` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `creatorId` (`creatorId`),
  UNIQUE KEY `subscribeId` (`subscribeId`),
  CONSTRAINT `canal_ibfk_1` FOREIGN KEY (`creatorId`) REFERENCES `usuario` (`id`) ON DELETE SET NULL,
  CONSTRAINT `canal_ibfk_2` FOREIGN KEY (`subscribeId`) REFERENCES `usuario` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canal`
--

LOCK TABLES `canal` WRITE;
/*!40000 ALTER TABLE `canal` DISABLE KEYS */;
/*!40000 ALTER TABLE `canal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentario` (
  `id` int NOT NULL,
  `text` varchar(200) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `usuarioId` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `usuarioId` (`usuarioId`),
  CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etiquetas`
--

DROP TABLE IF EXISTS `etiquetas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `etiquetas` (
  `id` int NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etiquetas`
--

LOCK TABLES `etiquetas` WRITE;
/*!40000 ALTER TABLE `etiquetas` DISABLE KEYS */;
/*!40000 ALTER TABLE `etiquetas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `megusta`
--

DROP TABLE IF EXISTS `megusta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `megusta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuarioId` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarioId` (`usuarioId`),
  CONSTRAINT `megusta_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `megusta`
--

LOCK TABLES `megusta` WRITE;
/*!40000 ALTER TABLE `megusta` DISABLE KEYS */;
/*!40000 ALTER TABLE `megusta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `megustacomentario`
--

DROP TABLE IF EXISTS `megustacomentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `megustacomentario` (
  `id` int NOT NULL,
  `usuarioId` int DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `usuarioId` (`usuarioId`),
  CONSTRAINT `megustacomentario_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `megustacomentario`
--

LOCK TABLES `megustacomentario` WRITE;
/*!40000 ALTER TABLE `megustacomentario` DISABLE KEYS */;
/*!40000 ALTER TABLE `megustacomentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nomegusta`
--

DROP TABLE IF EXISTS `nomegusta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nomegusta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuarioId` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarioId` (`usuarioId`),
  CONSTRAINT `nomegusta_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nomegusta`
--

LOCK TABLES `nomegusta` WRITE;
/*!40000 ALTER TABLE `nomegusta` DISABLE KEYS */;
/*!40000 ALTER TABLE `nomegusta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playlist` (
  `id` int NOT NULL,
  `videoId` int DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlist`
--

LOCK TABLES `playlist` WRITE;
/*!40000 ALTER TABLE `playlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `playlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `email` varchar(300) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nom_usuario` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `pais` varchar(80) DEFAULT NULL,
  `codi_postal` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nom_usuario` (`nom_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `video` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titol` varchar(200) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `size` varchar(200) DEFAULT NULL,
  `nomVideo` varchar(50) DEFAULT NULL,
  `duracionVideo` int DEFAULT NULL,
  `thubnail` blob,
  `reproduccion` int DEFAULT NULL,
  `likes` int DEFAULT NULL,
  `dislikes` int DEFAULT NULL,
  `usuarioId` int DEFAULT NULL,
  `estatVideo` varchar(1) DEFAULT NULL,
  `etiquetasId` int DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarioId` (`usuarioId`),
  KEY `etiquetasId` (`etiquetasId`),
  CONSTRAINT `video_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuario` (`id`) ON DELETE SET NULL,
  CONSTRAINT `video_ibfk_2` FOREIGN KEY (`etiquetasId`) REFERENCES `etiquetas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-10 19:55:39
