/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : planificacion_evento

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-04-15 14:05:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auditorias
-- ----------------------------
DROP TABLE IF EXISTS `auditorias`;
CREATE TABLE `auditorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tabla` varchar(200) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `tabla_id` text COLLATE utf8_spanish2_ci,
  `accion` varchar(60) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_conexion` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of auditorias
-- ----------------------------
INSERT INTO `auditorias` VALUES ('1', 'Users', '0', 'logout', '1', '::1', '2017-04-15 12:04:34', '2017-04-15 12:04:34');
INSERT INTO `auditorias` VALUES ('2', 'Users', '0', 'login', '1', '::1', '2017-04-15 12:04:43', '2017-04-15 12:04:43');
INSERT INTO `auditorias` VALUES ('3', 'Users', '0', 'login', '1', '::1', '2017-04-15 12:54:12', '2017-04-15 12:54:12');
INSERT INTO `auditorias` VALUES ('4', 'Users', '0', 'index: Listo los usuarios', '1', '::1', '2017-04-15 12:55:52', '2017-04-15 12:55:52');
INSERT INTO `auditorias` VALUES ('5', 'Users', '0', 'index: Listo los usuarios', '1', '::1', '2017-04-15 12:57:36', '2017-04-15 12:57:36');
INSERT INTO `auditorias` VALUES ('6', 'Cargos', '0', 'index: Listo los cargos', '1', '::1', '2017-04-15 12:59:23', '2017-04-15 12:59:23');
INSERT INTO `auditorias` VALUES ('7', 'Cargos', '0', 'index: Listo los cargos', '1', '::1', '2017-04-15 13:03:54', '2017-04-15 13:03:54');
INSERT INTO `auditorias` VALUES ('8', 'Cargos', '0', 'index: Listo los cargos', '1', '::1', '2017-04-15 13:05:03', '2017-04-15 13:05:03');
INSERT INTO `auditorias` VALUES ('9', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-04-15 13:05:31', '2017-04-15 13:05:31');
INSERT INTO `auditorias` VALUES ('10', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-04-15 13:10:43', '2017-04-15 13:10:43');
INSERT INTO `auditorias` VALUES ('11', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-04-15 13:11:33', '2017-04-15 13:11:33');
INSERT INTO `auditorias` VALUES ('12', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-04-15 13:11:45', '2017-04-15 13:11:45');
INSERT INTO `auditorias` VALUES ('13', 'Users', '0', 'index: Listo los usuarios', '1', '::1', '2017-04-15 13:46:09', '2017-04-15 13:46:09');
INSERT INTO `auditorias` VALUES ('14', 'Users', '1', 'edit: Edito un usuario', '1', '::1', '2017-04-15 14:00:04', '2017-04-15 14:00:04');
INSERT INTO `auditorias` VALUES ('15', 'Users', '0', 'index: Listo los usuarios', '1', '::1', '2017-04-15 14:00:05', '2017-04-15 14:00:05');
INSERT INTO `auditorias` VALUES ('16', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-04-15 14:01:11', '2017-04-15 14:01:11');

-- ----------------------------
-- Table structure for cargos
-- ----------------------------
DROP TABLE IF EXISTS `cargos`;
CREATE TABLE `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `eliminado` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of cargos
-- ----------------------------
INSERT INTO `cargos` VALUES ('1', 'Colaborador', '0', '2017-04-14 21:39:00', '2017-04-14 21:39:00');
INSERT INTO `cargos` VALUES ('2', 'Supervisor', '0', '2017-04-14 22:59:07', '2017-04-14 22:59:07');

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `eliminado` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'Administrador', '0', '2017-04-14 21:03:50', '2017-04-14 21:03:50');

-- ----------------------------
-- Table structure for planificacion_detalles
-- ----------------------------
DROP TABLE IF EXISTS `planificacion_detalles`;
CREATE TABLE `planificacion_detalles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `planificacion_id` int(11) DEFAULT NULL,
  `trabajador_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) DEFAULT NULL,
  `horas` time DEFAULT NULL,
  `pago` double DEFAULT NULL,
  `eliminado` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of planificacion_detalles
-- ----------------------------
INSERT INTO `planificacion_detalles` VALUES ('1', '1', '1', '1', '04:00:00', '15', '0', '2017-04-15 00:05:00', '2017-04-15 00:05:00');
INSERT INTO `planificacion_detalles` VALUES ('2', '1', '2', '2', '12:00:00', '30', '0', '2017-04-15 00:23:16', '2017-04-15 00:36:25');

-- ----------------------------
-- Table structure for planificaciones
-- ----------------------------
DROP TABLE IF EXISTS `planificaciones`;
CREATE TABLE `planificaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evento` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `lugar` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci,
  `activo` tinyint(1) DEFAULT '0',
  `eliminado` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of planificaciones
-- ----------------------------
INSERT INTO `planificaciones` VALUES ('1', 'Evento 1', 'Cancha 1', '2017-04-14', '10:00:00', 'prueba', '1', '0', '2017-04-14 22:30:54', '2017-04-15 00:40:21');

-- ----------------------------
-- Table structure for trabajadores
-- ----------------------------
DROP TABLE IF EXISTS `trabajadores`;
CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo_id` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `numero_identidad` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` text COLLATE utf8_spanish2_ci,
  `activo` tinyint(1) DEFAULT '0',
  `eliminado` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of trabajadores
-- ----------------------------
INSERT INTO `trabajadores` VALUES ('1', '1', 'Pedro', 'Perez', '1212', '11231', 'pedro@gmail.com', 'por ahi', '1', '0', '2017-04-14 22:59:47', '2017-04-14 22:59:47');
INSERT INTO `trabajadores` VALUES ('2', '2', 'Carlos', 'Ortiz', '121212', '1212313', 'cloa@hotmail.com', 'por ahi', '1', '0', '2017-04-14 23:03:50', '2017-04-14 23:03:50');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `activo` tinyint(1) DEFAULT '0',
  `eliminado` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'admin@admin.com', 'admin', '$2y$10$/OtPAMt9R.DDePeZysQBgOXzFcCWpmAR4OkYHxeYvxrUdBDsdrKI2', 'admin', 'admin', '1', '0', '2017-04-14 21:10:22', '2017-04-15 14:00:04');
SET FOREIGN_KEY_CHECKS=1;
