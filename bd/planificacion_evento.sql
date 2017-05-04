/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : planificacion_evento

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-05-03 23:54:19
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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
INSERT INTO `auditorias` VALUES ('17', 'Canchas', '1', 'add: agrego una cancha', '1', '::1', '2017-05-03 22:54:09', '2017-05-03 22:54:09');
INSERT INTO `auditorias` VALUES ('18', 'Canchas', '0', 'index: Listo las canchas', '1', '::1', '2017-05-03 22:54:09', '2017-05-03 22:54:09');
INSERT INTO `auditorias` VALUES ('19', 'Canchas', '0', 'index: Listo las canchas', '1', '::1', '2017-05-03 22:57:44', '2017-05-03 22:57:44');
INSERT INTO `auditorias` VALUES ('20', 'Canchas', '0', 'index: Listo las canchas', '1', '::1', '2017-05-03 22:58:13', '2017-05-03 22:58:13');
INSERT INTO `auditorias` VALUES ('21', 'Canchas', '0', 'index: Listo las canchas', '1', '::1', '2017-05-03 23:00:29', '2017-05-03 23:00:29');
INSERT INTO `auditorias` VALUES ('22', 'Canchas', '1', 'edit: edito una cancha', '1', '::1', '2017-05-03 23:00:39', '2017-05-03 23:00:39');
INSERT INTO `auditorias` VALUES ('23', 'Canchas', '0', 'index: Listo las canchas', '1', '::1', '2017-05-03 23:00:39', '2017-05-03 23:00:39');
INSERT INTO `auditorias` VALUES ('24', 'Planificaciones', '2', 'add: Agrego una planificación', '1', '::1', '2017-05-03 23:09:41', '2017-05-03 23:09:41');
INSERT INTO `auditorias` VALUES ('25', 'PlanificacionDetalles', '3', 'add: Agrego un detalle a la planificación', '1', '::1', '2017-05-03 23:10:11', '2017-05-03 23:10:11');
INSERT INTO `auditorias` VALUES ('26', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:10:53', '2017-05-03 23:10:53');
INSERT INTO `auditorias` VALUES ('27', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:11:02', '2017-05-03 23:11:02');
INSERT INTO `auditorias` VALUES ('28', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:11:34', '2017-05-03 23:11:34');
INSERT INTO `auditorias` VALUES ('29', 'Canchas', '0', 'index: Listo las canchas', '1', '::1', '2017-05-03 23:12:31', '2017-05-03 23:12:31');
INSERT INTO `auditorias` VALUES ('30', 'Canchas', '0', 'index: Listo las canchas', '1', '::1', '2017-05-03 23:14:05', '2017-05-03 23:14:05');
INSERT INTO `auditorias` VALUES ('31', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:14:20', '2017-05-03 23:14:20');
INSERT INTO `auditorias` VALUES ('32', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:23:40', '2017-05-03 23:23:40');
INSERT INTO `auditorias` VALUES ('33', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:24:15', '2017-05-03 23:24:15');
INSERT INTO `auditorias` VALUES ('34', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:24:54', '2017-05-03 23:24:54');
INSERT INTO `auditorias` VALUES ('35', 'Canchas', '2', 'add: agrego una cancha', '1', '::1', '2017-05-03 23:27:07', '2017-05-03 23:27:07');
INSERT INTO `auditorias` VALUES ('36', 'Canchas', '0', 'index: Listo las canchas', '1', '::1', '2017-05-03 23:27:11', '2017-05-03 23:27:11');
INSERT INTO `auditorias` VALUES ('37', 'Canchas', '0', 'index: Listo las canchas', '1', '::1', '2017-05-03 23:28:18', '2017-05-03 23:28:18');
INSERT INTO `auditorias` VALUES ('38', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:30:25', '2017-05-03 23:30:25');
INSERT INTO `auditorias` VALUES ('39', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:31:06', '2017-05-03 23:31:06');
INSERT INTO `auditorias` VALUES ('40', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:31:16', '2017-05-03 23:31:16');
INSERT INTO `auditorias` VALUES ('41', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:31:44', '2017-05-03 23:31:44');
INSERT INTO `auditorias` VALUES ('42', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:36:22', '2017-05-03 23:36:22');
INSERT INTO `auditorias` VALUES ('43', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:36:29', '2017-05-03 23:36:29');
INSERT INTO `auditorias` VALUES ('44', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:37:12', '2017-05-03 23:37:12');
INSERT INTO `auditorias` VALUES ('45', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:37:27', '2017-05-03 23:37:27');
INSERT INTO `auditorias` VALUES ('46', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:38:03', '2017-05-03 23:38:03');
INSERT INTO `auditorias` VALUES ('47', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:38:09', '2017-05-03 23:38:09');
INSERT INTO `auditorias` VALUES ('48', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:44:40', '2017-05-03 23:44:40');
INSERT INTO `auditorias` VALUES ('49', 'Planificaciones', '2', 'edit: Edito una planificación', '1', '::1', '2017-05-03 23:45:07', '2017-05-03 23:45:07');
INSERT INTO `auditorias` VALUES ('50', 'Trabajadores', '3', 'add: Agrego un trabajador', '1', '::1', '2017-05-03 23:50:49', '2017-05-03 23:50:49');
INSERT INTO `auditorias` VALUES ('51', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-03 23:51:47', '2017-05-03 23:51:47');

-- ----------------------------
-- Table structure for canchas
-- ----------------------------
DROP TABLE IF EXISTS `canchas`;
CREATE TABLE `canchas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci,
  `activo` tinyint(1) DEFAULT '0',
  `eliminado` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of canchas
-- ----------------------------
INSERT INTO `canchas` VALUES ('1', 'Cancha 1', 'descripcion de la cancha 1', '1', '0', '2017-05-03 22:54:08', '2017-05-03 23:00:38');
INSERT INTO `canchas` VALUES ('2', 'Cancha 2', 'Descripcion de la cancha 2', '1', '0', '2017-05-03 23:27:06', '2017-05-03 23:27:06');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of planificacion_detalles
-- ----------------------------
INSERT INTO `planificacion_detalles` VALUES ('1', '1', '1', '1', '04:00:00', '15', '0', '2017-04-15 00:05:00', '2017-04-15 00:05:00');
INSERT INTO `planificacion_detalles` VALUES ('2', '1', '2', '2', '12:00:00', '30', '0', '2017-04-15 00:23:16', '2017-04-15 00:36:25');
INSERT INTO `planificacion_detalles` VALUES ('3', '2', '1', '1', '04:00:00', '20', '0', '2017-05-03 23:10:11', '2017-05-03 23:10:11');

-- ----------------------------
-- Table structure for planificaciones
-- ----------------------------
DROP TABLE IF EXISTS `planificaciones`;
CREATE TABLE `planificaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evento` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cancha_id` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci,
  `activo` tinyint(1) DEFAULT '0',
  `eliminado` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of planificaciones
-- ----------------------------
INSERT INTO `planificaciones` VALUES ('1', 'Evento 1', '1', '2017-04-14', '10:00:00', 'prueba', '1', '0', '2017-04-14 22:30:54', '2017-04-15 00:40:21');
INSERT INTO `planificaciones` VALUES ('2', 'Evento 2', '1', '2017-05-05', '08:00:00', 'Nuevo evento', '1', '0', '2017-05-03 23:09:40', '2017-05-03 23:45:07');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of trabajadores
-- ----------------------------
INSERT INTO `trabajadores` VALUES ('1', '1', 'Pedro', 'Perez', '1212', '11231', 'pedro@gmail.com', 'por ahi', '1', '0', '2017-04-14 22:59:47', '2017-04-14 22:59:47');
INSERT INTO `trabajadores` VALUES ('2', '2', 'Carlos', 'Ortiz', '121212', '1212313', 'cloa@hotmail.com', 'por ahi', '1', '0', '2017-04-14 23:03:50', '2017-04-14 23:03:50');
INSERT INTO `trabajadores` VALUES ('3', '1', 'Alberto', 'Carrillo', '191919', '9293923', 'alberto@gmail.com', 'por ahi', '1', '0', '2017-05-03 23:50:49', '2017-05-03 23:50:49');

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
