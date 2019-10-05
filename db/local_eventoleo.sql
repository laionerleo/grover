/*
 Navicat Premium Data Transfer

 Source Server         : wamp
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : local_evento

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 05/10/2019 19:17:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for sis_detalle
-- ----------------------------
DROP TABLE IF EXISTS `sis_detalle`;
CREATE TABLE `sis_detalle`  (
  `det_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(255) NULL DEFAULT NULL,
  `det_cantidad` int(100) NULL DEFAULT NULL,
  `ped_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`det_id`) USING BTREE,
  INDEX `fro ped`(`pro_id`) USING BTREE,
  INDEX `fro_ped`(`ped_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for sis_detalle_pedido
-- ----------------------------
DROP TABLE IF EXISTS `sis_detalle_pedido`;
CREATE TABLE `sis_detalle_pedido`  (
  `detped_id` int(11) NOT NULL AUTO_INCREMENT,
  `ped_id` int(11) NULL DEFAULT NULL,
  `det_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`detped_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for sis_entrega
-- ----------------------------
DROP TABLE IF EXISTS `sis_entrega`;
CREATE TABLE `sis_entrega`  (
  `ent_id` int(11) NOT NULL AUTO_INCREMENT,
  `ent_descripcion` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ent_fecha` date NULL DEFAULT NULL,
  `ent_status` int(1) NULL DEFAULT NULL,
  `ped_id` int(11) NULL DEFAULT NULL,
  `pro_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`ent_id`) USING BTREE,
  INDEX `entr_ped`(`ped_id`) USING BTREE,
  INDEX `entr_pro`(`pro_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sis_pago
-- ----------------------------
DROP TABLE IF EXISTS `sis_pago`;
CREATE TABLE `sis_pago`  (
  `pag_id` int(11) NOT NULL AUTO_INCREMENT,
  `pag_monto` float(10, 2) NULL DEFAULT NULL,
  `pag_detalle` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pag_status` int(11) NULL DEFAULT NULL,
  `pag_fecha` date NULL DEFAULT NULL,
  `ped_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`pag_id`) USING BTREE,
  INDEX `pag_ped`(`ped_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sis_pedido
-- ----------------------------
DROP TABLE IF EXISTS `sis_pedido`;
CREATE TABLE `sis_pedido`  (
  `ped_id` int(11) NOT NULL,
  `ped_descripcion` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ped_fecha` date NULL DEFAULT NULL,
  `ped_latitud` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ped_longitud` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ped_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sis_pedido_usuario
-- ----------------------------
DROP TABLE IF EXISTS `sis_pedido_usuario`;
CREATE TABLE `sis_pedido_usuario`  (
  `pedusu_id` int(11) NOT NULL AUTO_INCREMENT,
  `ped_id` int(11) NULL DEFAULT NULL,
  `usu_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`pedusu_id`) USING BTREE,
  INDEX `for_ped`(`ped_id`) USING BTREE,
  INDEX `for_usu`(`usu_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for sis_producto
-- ----------------------------
DROP TABLE IF EXISTS `sis_producto`;
CREATE TABLE `sis_producto`  (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_nombre` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pro_tipo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pro_cantidad` int(100) NULL DEFAULT NULL,
  `pro_status` int(1) NULL DEFAULT NULL,
  `pro_descripcion` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pro_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sis_reclamo
-- ----------------------------
DROP TABLE IF EXISTS `sis_reclamo`;
CREATE TABLE `sis_reclamo`  (
  `recl_id` int(11) NOT NULL AUTO_INCREMENT,
  `recl_descripcion` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `recl_fecha` date NULL DEFAULT NULL,
  `recl_status` int(1) NULL DEFAULT NULL,
  `ped_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`recl_id`) USING BTREE,
  INDEX `recl_pedido`(`ped_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sis_usuario
-- ----------------------------
DROP TABLE IF EXISTS `sis_usuario`;
CREATE TABLE `sis_usuario`  (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nombre` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `usu_apellido` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `usu_correo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `usu_contraseña` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `usu_tipo` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `usu_telefono` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `usu_status` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`usu_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
