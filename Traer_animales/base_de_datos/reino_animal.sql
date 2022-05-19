-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: reino_animal
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `animales`
--

DROP TABLE IF EXISTS `animales`;
DROP TABLE IF EXISTS `especies`;

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `especies` (
  `id_especie` int(50) NOT NULL AUTO_INCREMENT,
  `Especies` varchar(231) NOT NULL,
  PRIMARY KEY (`id_especie`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;


/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animales` (
  `id_animales` int(180) NOT NULL AUTO_INCREMENT,
  `vertebrado` tinyint(1) NOT NULL,
  `animal` varchar(20) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `alimentacion` varchar(50) NOT NULL,
  `habitat` varchar(100) NOT NULL,
  `extinto` tinyint(1) NOT NULL,
  `id_especie` int(180) NOT NULL,
  PRIMARY KEY (`id_animales`),
  KEY `id_especie` (`id_especie`),
  CONSTRAINT `animales_ibfk_1` FOREIGN KEY (`id_especie`) REFERENCES `especies` (`id_especie`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animales`
--

LOCK TABLES `especies` WRITE;
/*!40000 ALTER TABLE `especies` DISABLE KEYS */;
INSERT INTO `especies` VALUES (1,'Mamiferos'),(2,'Moluscos'),(3,'Anfibios'),(4,'Reptiles'),(5,'Peces'),(6,'Gusanos'),(7,'Aracnidos'),(8,'Insectos'),(9,'Aves');
/*!40000 ALTER TABLE `especies` ENABLE KEYS */;
UNLOCK TABLES;
LOCK TABLES `animales` WRITE;
/*!40000 ALTER TABLE `animales` DISABLE KEYS */;
INSERT INTO `animales` VALUES (1,1,'Tigre','Mamífero felino de unos 250 a 400 cm de longitud (cola incluida), de pelaje amarillo leonado con rayas transversales oscuras o negras en el lomo, la cabeza y la cola, blancuzco en el vientre; tiene cuerpo robusto, cola larga y uñas fuertes que usa para cazar; es muy fiero, ágil y veloz','se alimenta de mamiferos de gran tamaño y otros co','Zonas de Asia y la India',0,1),(2,0,'Pulpo','Molusco de gran variedad de colores y tamaños, pero vive en los oceanos y se caracteriza por su particular anatomia. o sea tiene la cabeza compuesta de una bolsa que contiene su estomago y cerebro mas 8 tentaculos con ventosas que cumplen la misma funcion que brazos','peces, otros moluscos de menor tamaño, tortugas en','oceano Pacifico e Indico',0,2),(3,1,'Cocodrilo','Reptil de gran tamaño','peces y animales que se acerquen al pantano o lago','Africa y en Centroamerica',0,4),(5,0,'Arañas','Las arañas son del orden de artropodos pero no insectos, tienen el cuerpo dividido en dos partes denominadas tagmas, y cuentan con cuatro pares de patas. en la boca tienen un par de uñas venenosas y otro de apéndices o palpos que en los machos sirven para la cópula. En el extremo del abdomen tiene el ano y las hileras u órganos productores de la seda con la que tapiza su vivienda, caza sus presas y se traslada de un lugar a otro','otras arañas, insectos de menor tamaño como moscas','En todo el mundo',0,7),(20,0,'Mosca','Insecto de cuerpo negro de unos 6 mm de largo, con dos alas transparentes cruzadas de nervios, seis patas muy finas con uñas y ventosas, ojos grandes y salientes, y un aparato bucal para chupar las sustancias de que se alimenta.','heces, basura y animales en descomposición ','En todo el mundo Exepto en el polo sur y norte',0,8),(21,1,'Vacas','Mamífero rumiante bóvido, hembra, de unos 150 cm de altura y 250 cm de longitud, cuerpo muy robusto, pelo corto, cabeza gruesa provista de dos cuernos curvos y puntiagudos, hocico ancho, papada en el pecho, y cola larga con un mechón en el extremo; de él se aprovechan la leche, la carne y la piel.','pasto, plantas no venenosas, y cereales ','todas partes del mundo que el ser humano las crie',0,1),(22,1,'Sapo','animal semi-acuatico de cuerpo más grueso que la rana y con la piel sembrada de verrugas.\r\nel sapo es un animal nocturno, que se caracteriza por sus patas cortas, sus ojos saltones y su piel con verrugas.','y se alimenta de insectos y pequeños vertebrados\"','en las zonas tropicales',0,3);
/*!40000 ALTER TABLE `animales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especies`
--



--
-- Dumping data for table `especies`
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-17 18:49:51
