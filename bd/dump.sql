-- MySQL dump 10.13  Distrib 5.7.33, for Linux (x86_64)
--
-- Host: localhost    Database: projeto_web_2021_1
-- ------------------------------------------------------
-- Server version	5.7.33-0ubuntu0.18.04.1

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
-- Dumping data for table `cidades`
--

LOCK TABLES `cidades` WRITE;
/*!40000 ALTER TABLE `cidades` DISABLE KEYS */;
INSERT INTO `cidades` VALUES (1,1,'Belo Horizonte'),(2,2,'São Paulo'),(3,3,'Rio de Janeiro'),(4,1,'Três Corações');
/*!40000 ALTER TABLE `cidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `contatos`
--

LOCK TABLES `contatos` WRITE;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` VALUES (4,'Rômulo Ferreira Mesquita','35988182022','romulo.mesquita@unincor.edu.br','Teste testsetest ',4,'2021-06-17 11:50:45'),(5,'Rômulo Ferreira Mesquita','35988182011','romulo.mesquita@unincor.edu.br','Teste testsetest qEWRQREEQW',4,'2021-06-17 11:51:05');
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Minas Gerais','MG'),(2,'São Paulo','SP'),(3,'Rio de Janeiro','RJ'),(4,'Bahia','BA'),(5,'Rondônia','RO');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (1,'Alexandre','Listagem dos usuarios','2021-06-21 15:39:56'),(2,'Alexandre','Cadastro do usuário \'Teste\'','2021-06-21 15:40:16'),(3,'Alexandre','Listagem dos usuarios','2021-06-21 15:40:16'),(4,'Alexandre','Alteração do usuário \'Teste 1\'','2021-06-21 15:40:32'),(5,'Alexandre','Listagem dos usuarios','2021-06-21 15:40:50'),(6,'Alexandre','Exclusão do usuário \'\'','2021-06-21 15:41:02'),(7,'Alexandre','Listagem dos usuarios','2021-06-21 15:42:40'),(8,'Alexandre','Cadastro do usuário \'Romulo Teste\'','2021-06-21 15:43:07'),(9,'Alexandre','Listagem dos usuarios','2021-06-21 15:43:07'),(10,'Alexandre','Exclusão do usuário de id:5','2021-06-21 15:43:13'),(11,'Alexandre','Listagem dos usuarios','2021-06-21 15:43:15');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (6,'Romulo Teste','romulo','caf1a3dfb505ffed0d024130f58c5cfa','2021-06-21 15:43:07',NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'projeto_web_2021_1'
--

--
-- Dumping routines for database 'projeto_web_2021_1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-22 14:51:59
