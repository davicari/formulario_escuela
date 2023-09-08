-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Nota, siempre verificar que las dependencias de claves foraneas se cumplan.

-- Volcando datos para la tabla test.contacto: ~0 rows (aproximadamente)

-- Volcando estructura para tabla test.producto_tipo
CREATE TABLE IF NOT EXISTS `producto_tipo` (
  `id_producto_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_producto_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla test.producto_tipo: ~4 rows (aproximadamente)
INSERT INTO `producto_tipo` (`id_producto_tipo`, `nombre`) VALUES
	(1, 'MAX CAN PRO'),
	(2, 'MICHI SAN'),
	(4, 'OTRO'),
	(5, 'SUPER FISH');


-- Volcando estructura de base de datos para test
CREATE DATABASE IF NOT EXISTS `formulariocontacto` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `formulariocontacto`;



-- Volcando estructura para tabla test.contacto
CREATE TABLE IF NOT EXISTS `contacto` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto_tipo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(200) NOT NULL DEFAULT '',
  `mensaje` varchar(1000) DEFAULT '',
  `au_insert_date` datetime NOT NULL,
  PRIMARY KEY (`id_contacto`),
  KEY `FK1_ProductoTipo` (`id_producto_tipo`),
  CONSTRAINT `FK1_ProductoTipo` FOREIGN KEY (`id_producto_tipo`) REFERENCES `producto_tipo` (`id_producto_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
