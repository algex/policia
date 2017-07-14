-- MySQL dump 10.15  Distrib 10.0.20-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u128995368_alp
-- ------------------------------------------------------
-- Server version	10.0.20-MariaDB-log

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
-- Table structure for table `formulariopolicial`
--

DROP TABLE IF EXISTS `formulariopolicial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formulariopolicial` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL,
  `so` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ip` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `navegador` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `revisado` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulariopolicial`
--

/*!40000 ALTER TABLE `formulariopolicial` DISABLE KEYS */;
INSERT INTO `formulariopolicial` VALUES (11,'gerardo','oer','gasldkjhas@sldkfjlsd.es','isdjfilasj','lsdjfsdjif','aoisdjajda','zxoifjsiofj','sodifjsdiofj','Windows 10','::1','Google Chrome',''),(12,'gerardo','oropeza','prueba@alpseguridad.com.ve','26195902','04126771227','robo','esto es una prueba','aksdjaklsd','Windows 10','186.167.244.110','Google Chrome',''),(13,'gerardi','irioeza','asjda@gmail.com','jkdk','skd+54','654','654','654','Windows 10','186.167.244.110','Google Chrome',''),(14,'asd','asad','Anonimo','asd','asd','asd','asd','asd','Windows 10','186.167.244.110','Google Chrome',''),(15,'Gerardo','Oropeza','gerardoj2411@gmail.com','26195902','04121478267','Robo','Guacara','Esto es una prueba de funcionamiento','Windows 10','186.167.250.230','Google Chrome','');
/*!40000 ALTER TABLE `formulariopolicial` ENABLE KEYS */;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `noticia` text NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (7,'Bienvenido al sistema de reportes','En este sistema podrÃ¡s ver las noticas de la paginas web principal solo publicadas por los administradores, podrÃ¡s visualizar en la secciÃ³n \"Denuncias\" todas las denuncias enviadas en los Ãºltimos dÃ­as y borrarlas. en la secciÃ³n \"usuarios\"podrÃ¡s visualizar los administradores Disponibles, borrar y agregar administradores. y si ya tu trabajo ha terminado puedes dar click en salir.  Para dudas o preguntas enviar correo a gerardoj2411@gmail.com . <br>\n\nProgramado totalmente por Gerardo Oropeza- 02455810063','2016-08-20');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;

--
-- Table structure for table `totales`
--

DROP TABLE IF EXISTS `totales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `totales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `mesaje` text NOT NULL,
  `so` varchar(30) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `navegador` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `totales`
--

/*!40000 ALTER TABLE `totales` DISABLE KEYS */;
INSERT INTO `totales` VALUES (1,'asd','asad','Anonimo','asd','asd','asd','asd','asd','Windows 10','186.167.244.110','Google Chrome'),(2,'Gerardo','Oropeza','gerardoj2411@gmail.com','26195902','04121478267','Robo','Guacara','Esto es una prueba de funcionamiento','Windows 10','186.167.250.230','Google Chrome');
/*!40000 ALTER TABLE `totales` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'gerardo','gerardo','gerardoj2411@gmail.com'),(26,'administrador','gerardo','elbasurero2411@hotmail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-21 14:23:04
