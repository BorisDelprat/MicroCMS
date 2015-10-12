/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : minichat

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-10-12 13:12:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for minichat
-- ----------------------------
DROP TABLE IF EXISTS `minichat`;
CREATE TABLE `minichat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `datem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of minichat
-- ----------------------------
INSERT INTO `minichat` VALUES ('2', 'Boris', 'tgrete', '12 October 2015, 13:11:48');
INSERT INTO `minichat` VALUES ('3', 'Boris', 'test', '12 October 2015, 13:11:52');
INSERT INTO `minichat` VALUES ('4', 'Boris', 'bonjour', '12 October 2015, 13:12:10');
