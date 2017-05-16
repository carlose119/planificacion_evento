/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : planificacion_evento

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-05-15 22:10:51
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
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
INSERT INTO `auditorias` VALUES ('52', 'Users', '0', 'login', '1', '::1', '2017-05-10 19:18:25', '2017-05-10 19:18:25');
INSERT INTO `auditorias` VALUES ('53', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:18:59', '2017-05-10 19:18:59');
INSERT INTO `auditorias` VALUES ('54', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:29:09', '2017-05-10 19:29:09');
INSERT INTO `auditorias` VALUES ('55', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:29:48', '2017-05-10 19:29:48');
INSERT INTO `auditorias` VALUES ('56', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:29:53', '2017-05-10 19:29:53');
INSERT INTO `auditorias` VALUES ('57', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:29:57', '2017-05-10 19:29:57');
INSERT INTO `auditorias` VALUES ('58', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:30:02', '2017-05-10 19:30:02');
INSERT INTO `auditorias` VALUES ('59', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:30:05', '2017-05-10 19:30:05');
INSERT INTO `auditorias` VALUES ('60', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:31:30', '2017-05-10 19:31:30');
INSERT INTO `auditorias` VALUES ('61', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:34:01', '2017-05-10 19:34:01');
INSERT INTO `auditorias` VALUES ('62', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:34:32', '2017-05-10 19:34:32');
INSERT INTO `auditorias` VALUES ('63', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:34:53', '2017-05-10 19:34:53');
INSERT INTO `auditorias` VALUES ('64', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:36:01', '2017-05-10 19:36:01');
INSERT INTO `auditorias` VALUES ('65', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:37:19', '2017-05-10 19:37:19');
INSERT INTO `auditorias` VALUES ('66', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:44:53', '2017-05-10 19:44:53');
INSERT INTO `auditorias` VALUES ('67', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:45:12', '2017-05-10 19:45:12');
INSERT INTO `auditorias` VALUES ('68', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:45:25', '2017-05-10 19:45:25');
INSERT INTO `auditorias` VALUES ('69', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:45:36', '2017-05-10 19:45:36');
INSERT INTO `auditorias` VALUES ('70', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 19:46:19', '2017-05-10 19:46:19');
INSERT INTO `auditorias` VALUES ('71', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 20:06:20', '2017-05-10 20:06:20');
INSERT INTO `auditorias` VALUES ('72', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 20:08:58', '2017-05-10 20:08:58');
INSERT INTO `auditorias` VALUES ('73', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 20:17:56', '2017-05-10 20:17:56');
INSERT INTO `auditorias` VALUES ('74', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 20:18:08', '2017-05-10 20:18:08');
INSERT INTO `auditorias` VALUES ('75', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 20:19:16', '2017-05-10 20:19:16');
INSERT INTO `auditorias` VALUES ('76', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 20:36:14', '2017-05-10 20:36:14');
INSERT INTO `auditorias` VALUES ('77', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 20:36:58', '2017-05-10 20:36:58');
INSERT INTO `auditorias` VALUES ('78', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 20:38:02', '2017-05-10 20:38:02');
INSERT INTO `auditorias` VALUES ('79', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 20:40:12', '2017-05-10 20:40:12');
INSERT INTO `auditorias` VALUES ('80', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 20:40:22', '2017-05-10 20:40:22');
INSERT INTO `auditorias` VALUES ('81', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 20:40:42', '2017-05-10 20:40:42');
INSERT INTO `auditorias` VALUES ('82', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 20:41:39', '2017-05-10 20:41:39');
INSERT INTO `auditorias` VALUES ('83', 'Users', '0', 'login', '1', '::1', '2017-05-10 21:11:16', '2017-05-10 21:11:16');
INSERT INTO `auditorias` VALUES ('84', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 21:22:46', '2017-05-10 21:22:46');
INSERT INTO `auditorias` VALUES ('85', 'Trabajadores', '1', 'edit: Edito un trabajador', '1', '::1', '2017-05-10 21:23:08', '2017-05-10 21:23:08');
INSERT INTO `auditorias` VALUES ('86', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 21:23:09', '2017-05-10 21:23:09');
INSERT INTO `auditorias` VALUES ('87', 'Trabajadores', '2', 'edit: Edito un trabajador', '1', '::1', '2017-05-10 21:23:39', '2017-05-10 21:23:39');
INSERT INTO `auditorias` VALUES ('88', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 21:23:40', '2017-05-10 21:23:40');
INSERT INTO `auditorias` VALUES ('89', 'Trabajadores', '2', 'edit: Edito un trabajador', '1', '::1', '2017-05-10 21:24:09', '2017-05-10 21:24:09');
INSERT INTO `auditorias` VALUES ('90', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 21:24:10', '2017-05-10 21:24:10');
INSERT INTO `auditorias` VALUES ('91', 'Trabajadores', '1', 'edit: Edito un trabajador', '1', '::1', '2017-05-10 21:24:20', '2017-05-10 21:24:20');
INSERT INTO `auditorias` VALUES ('92', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 21:24:21', '2017-05-10 21:24:21');
INSERT INTO `auditorias` VALUES ('93', 'Trabajadores', '1', 'edit: Edito un trabajador', '1', '::1', '2017-05-10 21:25:44', '2017-05-10 21:25:44');
INSERT INTO `auditorias` VALUES ('94', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 21:25:44', '2017-05-10 21:25:44');
INSERT INTO `auditorias` VALUES ('95', 'Trabajadores', '3', 'edit: Edito un trabajador', '1', '::1', '2017-05-10 21:26:09', '2017-05-10 21:26:09');
INSERT INTO `auditorias` VALUES ('96', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 21:26:10', '2017-05-10 21:26:10');
INSERT INTO `auditorias` VALUES ('97', 'Trabajadores', '3', 'edit: Edito un trabajador', '1', '::1', '2017-05-10 21:27:13', '2017-05-10 21:27:13');
INSERT INTO `auditorias` VALUES ('98', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 21:27:14', '2017-05-10 21:27:14');
INSERT INTO `auditorias` VALUES ('99', 'Trabajadores', '3', 'edit: Edito un trabajador', '1', '::1', '2017-05-10 21:27:42', '2017-05-10 21:27:42');
INSERT INTO `auditorias` VALUES ('100', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 21:27:42', '2017-05-10 21:27:42');
INSERT INTO `auditorias` VALUES ('101', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 21:27:56', '2017-05-10 21:27:56');
INSERT INTO `auditorias` VALUES ('102', 'Planificaciones', '2', 'edit: Edito una planificación', '1', '::1', '2017-05-10 21:31:06', '2017-05-10 21:31:06');
INSERT INTO `auditorias` VALUES ('103', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 21:51:12', '2017-05-10 21:51:12');
INSERT INTO `auditorias` VALUES ('104', 'Planificaciones', '1', 'edit: Edito una planificación', '1', '::1', '2017-05-10 21:51:20', '2017-05-10 21:51:20');
INSERT INTO `auditorias` VALUES ('105', 'PlanificacionDetalles', '4', 'add: Agrego un detalle a la planificación', '1', '::1', '2017-05-10 22:11:34', '2017-05-10 22:11:34');
INSERT INTO `auditorias` VALUES ('106', 'PlanificacionDetalles', '4', 'delete: Elimino un detalle de la planificación', '1', '::1', '2017-05-10 22:11:42', '2017-05-10 22:11:42');
INSERT INTO `auditorias` VALUES ('107', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 22:12:12', '2017-05-10 22:12:12');
INSERT INTO `auditorias` VALUES ('108', 'Trabajadores', '3', 'edit: Edito un trabajador', '1', '::1', '2017-05-10 22:16:50', '2017-05-10 22:16:50');
INSERT INTO `auditorias` VALUES ('109', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 22:16:50', '2017-05-10 22:16:50');
INSERT INTO `auditorias` VALUES ('110', 'Trabajadores', '3', 'edit: Edito un trabajador', '1', '::1', '2017-05-10 22:17:50', '2017-05-10 22:17:50');
INSERT INTO `auditorias` VALUES ('111', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 22:17:51', '2017-05-10 22:17:51');
INSERT INTO `auditorias` VALUES ('112', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 22:19:33', '2017-05-10 22:19:33');
INSERT INTO `auditorias` VALUES ('113', 'Planificaciones', '2', 'edit: Edito una planificación', '1', '::1', '2017-05-10 22:19:44', '2017-05-10 22:19:44');
INSERT INTO `auditorias` VALUES ('114', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 22:27:19', '2017-05-10 22:27:19');
INSERT INTO `auditorias` VALUES ('115', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 22:33:59', '2017-05-10 22:33:59');
INSERT INTO `auditorias` VALUES ('116', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 22:34:53', '2017-05-10 22:34:53');
INSERT INTO `auditorias` VALUES ('117', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 22:35:21', '2017-05-10 22:35:21');
INSERT INTO `auditorias` VALUES ('118', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 22:36:19', '2017-05-10 22:36:19');
INSERT INTO `auditorias` VALUES ('119', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 22:37:03', '2017-05-10 22:37:03');
INSERT INTO `auditorias` VALUES ('120', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 22:42:12', '2017-05-10 22:42:12');
INSERT INTO `auditorias` VALUES ('121', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 22:42:51', '2017-05-10 22:42:51');
INSERT INTO `auditorias` VALUES ('122', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 22:44:58', '2017-05-10 22:44:58');
INSERT INTO `auditorias` VALUES ('123', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 22:45:12', '2017-05-10 22:45:12');
INSERT INTO `auditorias` VALUES ('124', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-10 22:45:56', '2017-05-10 22:45:56');
INSERT INTO `auditorias` VALUES ('125', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 22:49:17', '2017-05-10 22:49:17');
INSERT INTO `auditorias` VALUES ('126', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 22:50:15', '2017-05-10 22:50:15');
INSERT INTO `auditorias` VALUES ('127', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 22:53:12', '2017-05-10 22:53:12');
INSERT INTO `auditorias` VALUES ('128', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 22:53:48', '2017-05-10 22:53:48');
INSERT INTO `auditorias` VALUES ('129', 'Trabajadores', '0', 'index: Listo a los trabajadores', '1', '::1', '2017-05-10 22:54:46', '2017-05-10 22:54:46');
INSERT INTO `auditorias` VALUES ('130', 'Users', '0', 'login', '1', '::1', '2017-05-15 19:48:10', '2017-05-15 19:48:10');
INSERT INTO `auditorias` VALUES ('131', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 19:48:13', '2017-05-15 19:48:13');
INSERT INTO `auditorias` VALUES ('132', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 19:50:10', '2017-05-15 19:50:10');
INSERT INTO `auditorias` VALUES ('133', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 19:51:28', '2017-05-15 19:51:28');
INSERT INTO `auditorias` VALUES ('134', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 20:13:09', '2017-05-15 20:13:09');
INSERT INTO `auditorias` VALUES ('135', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 20:14:08', '2017-05-15 20:14:08');
INSERT INTO `auditorias` VALUES ('136', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 20:18:09', '2017-05-15 20:18:09');
INSERT INTO `auditorias` VALUES ('137', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 20:18:38', '2017-05-15 20:18:38');
INSERT INTO `auditorias` VALUES ('138', 'TrabajadorCalificaciones', '0', 'index: Listo a las calificaciones de los usuarios', '1', '::1', '2017-05-15 20:35:27', '2017-05-15 20:35:27');
INSERT INTO `auditorias` VALUES ('139', 'TrabajadorCalificaciones', '0', 'index: Listo a las calificaciones de los usuarios', '1', '::1', '2017-05-15 20:36:06', '2017-05-15 20:36:06');
INSERT INTO `auditorias` VALUES ('140', 'TrabajadorCalificaciones', '0', 'index: Listo a las calificaciones de los usuarios', '1', '::1', '2017-05-15 20:38:00', '2017-05-15 20:38:00');
INSERT INTO `auditorias` VALUES ('141', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 20:39:42', '2017-05-15 20:39:42');
INSERT INTO `auditorias` VALUES ('142', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 20:43:02', '2017-05-15 20:43:02');
INSERT INTO `auditorias` VALUES ('143', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 20:43:15', '2017-05-15 20:43:15');
INSERT INTO `auditorias` VALUES ('144', 'TrabajadorCalificaciones', '0', 'index: Listo a las calificaciones de los usuarios', '1', '::1', '2017-05-15 20:43:40', '2017-05-15 20:43:40');
INSERT INTO `auditorias` VALUES ('145', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 20:49:39', '2017-05-15 20:49:39');
INSERT INTO `auditorias` VALUES ('146', 'TrabajadorCalificaciones', '1', 'add: Agrego una calificación a un trabajador', '1', '::1', '2017-05-15 21:45:56', '2017-05-15 21:45:56');
INSERT INTO `auditorias` VALUES ('147', 'TrabajadorCalificaciones', '1', 'edit: Edito una calificación a un trabajador', '1', '::1', '2017-05-15 21:46:30', '2017-05-15 21:46:30');
INSERT INTO `auditorias` VALUES ('148', 'TrabajadorCalificaciones', '0', 'index: Listo a las calificaciones de los usuarios', '1', '::1', '2017-05-15 21:46:31', '2017-05-15 21:46:31');
INSERT INTO `auditorias` VALUES ('149', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 21:46:45', '2017-05-15 21:46:45');
INSERT INTO `auditorias` VALUES ('150', 'TrabajadorCalificaciones', '1', 'edit: Edito una calificación a un trabajador', '1', '::1', '2017-05-15 22:04:31', '2017-05-15 22:04:31');
INSERT INTO `auditorias` VALUES ('151', 'TrabajadorCalificaciones', '2', 'add: Agrego una calificación a un trabajador', '1', '::1', '2017-05-15 22:04:49', '2017-05-15 22:04:49');
INSERT INTO `auditorias` VALUES ('152', 'TrabajadorCalificaciones', '2', 'edit: Edito una calificación a un trabajador', '1', '::1', '2017-05-15 22:05:00', '2017-05-15 22:05:00');
INSERT INTO `auditorias` VALUES ('153', 'TrabajadorCalificaciones', '0', 'index: Listo a las calificaciones de los usuarios', '1', '::1', '2017-05-15 22:08:40', '2017-05-15 22:08:40');
INSERT INTO `auditorias` VALUES ('154', 'TrabajadorCalificaciones', '0', 'index: Listo a las calificaciones de los usuarios', '1', '::1', '2017-05-15 22:08:53', '2017-05-15 22:08:53');
INSERT INTO `auditorias` VALUES ('155', 'TrabajadorCalificaciones', '2', 'delete: Elimino una calificación a un trabajador', '1', '::1', '2017-05-15 22:08:58', '2017-05-15 22:08:58');
INSERT INTO `auditorias` VALUES ('156', 'TrabajadorCalificaciones', '0', 'index: Listo a las calificaciones de los usuarios', '1', '::1', '2017-05-15 22:08:58', '2017-05-15 22:08:58');
INSERT INTO `auditorias` VALUES ('157', 'TrabajadorCalificaciones', '0', 'index: Listo a las calificaciones de los usuarios', '1', '::1', '2017-05-15 22:09:03', '2017-05-15 22:09:03');
INSERT INTO `auditorias` VALUES ('158', 'TrabajadorCalificaciones', '0', 'index: Listo a las calificaciones de los usuarios', '1', '::1', '2017-05-15 22:09:24', '2017-05-15 22:09:24');
INSERT INTO `auditorias` VALUES ('159', 'Planificaciones', '0', 'index: Listo las planificaciones', '1', '::1', '2017-05-15 22:09:35', '2017-05-15 22:09:35');

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
-- Table structure for canchas_trabajadores
-- ----------------------------
DROP TABLE IF EXISTS `canchas_trabajadores`;
CREATE TABLE `canchas_trabajadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cancha_id` int(11) DEFAULT NULL,
  `trabajador_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of canchas_trabajadores
-- ----------------------------
INSERT INTO `canchas_trabajadores` VALUES ('1', '1', '1');
INSERT INTO `canchas_trabajadores` VALUES ('2', '1', '2');
INSERT INTO `canchas_trabajadores` VALUES ('3', '2', '2');
INSERT INTO `canchas_trabajadores` VALUES ('4', '2', '3');
INSERT INTO `canchas_trabajadores` VALUES ('5', '1', '3');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of planificacion_detalles
-- ----------------------------
INSERT INTO `planificacion_detalles` VALUES ('1', '1', '1', '1', '04:00:00', '15', '0', '2017-04-15 00:05:00', '2017-04-15 00:05:00');
INSERT INTO `planificacion_detalles` VALUES ('2', '1', '2', '2', '12:00:00', '30', '0', '2017-04-15 00:23:16', '2017-04-15 00:36:25');
INSERT INTO `planificacion_detalles` VALUES ('3', '2', '1', '1', '04:00:00', '20', '0', '2017-05-03 23:10:11', '2017-05-03 23:10:11');
INSERT INTO `planificacion_detalles` VALUES ('4', '1', '1', '1', '03:05:00', '2', '1', '2017-05-10 22:11:34', '2017-05-10 22:11:42');

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
INSERT INTO `planificaciones` VALUES ('1', 'Evento 1', '1', '2017-04-14', '10:00:00', 'prueba', '1', '0', '2017-04-14 22:30:54', '2017-05-10 21:51:20');
INSERT INTO `planificaciones` VALUES ('2', 'Evento 2', '2', '2017-05-05', '08:00:00', 'Nuevo evento', '1', '0', '2017-05-03 23:09:40', '2017-05-10 22:19:44');

-- ----------------------------
-- Table structure for trabajador_calificaciones
-- ----------------------------
DROP TABLE IF EXISTS `trabajador_calificaciones`;
CREATE TABLE `trabajador_calificaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `planificacion_id` int(11) DEFAULT NULL,
  `trabajador_id` int(11) DEFAULT NULL,
  `calificacion` tinyint(2) DEFAULT NULL,
  `comentarios` text COLLATE utf8_spanish2_ci,
  `eliminado` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of trabajador_calificaciones
-- ----------------------------
INSERT INTO `trabajador_calificaciones` VALUES ('1', '1', '1', '5', 'excelente.', '0', '2017-05-15 21:45:56', '2017-05-15 22:04:30');
INSERT INTO `trabajador_calificaciones` VALUES ('2', '1', '2', '4', 'Muy bien', '0', '2017-05-15 22:04:49', '2017-05-15 22:08:57');

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
INSERT INTO `trabajadores` VALUES ('1', '1', 'Pedro', 'Perez', '1212', '11231', 'pedro@gmail.com', 'por ahi', '1', '0', '2017-04-14 22:59:47', '2017-05-10 21:25:44');
INSERT INTO `trabajadores` VALUES ('2', '2', 'Carlos', 'Ortiz', '121212', '1212313', 'cloa@hotmail.com', 'por ahi', '1', '0', '2017-04-14 23:03:50', '2017-05-10 21:24:09');
INSERT INTO `trabajadores` VALUES ('3', '1', 'Alberto', 'Carrillo', '191919', '9293923', 'alberto2005@gmail.com', 'por ahi', '1', '0', '2017-05-03 23:50:49', '2017-05-10 22:17:50');

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
