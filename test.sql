/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : localhost:3306
 Source Schema         : test

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : 65001

 Date: 19/06/2018 22:52:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Erik', 'Tecse', 'eriktecse@gmail.com');
INSERT INTO `users` VALUES (2, 'Paloma', 'Fiuza', 'paloma@gmail.com');
INSERT INTO `users` VALUES (3, 'Mario', 'Irivarren', 'mario@gmail.com');
INSERT INTO `users` VALUES (4, 'Rosangela', 'Espinoza', 'rose@gmail.com');
INSERT INTO `users` VALUES (5, 'Nicola', 'Porcella', 'nicola@gmail.com');
INSERT INTO `users` VALUES (6, 'Malena', 'Bravo', 'malena@gmail.com');
INSERT INTO `users` VALUES (7, 'Gabriel', 'Cabrera', 'gabriel@gmail.com');

SET FOREIGN_KEY_CHECKS = 1;
