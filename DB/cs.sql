/*
Navicat MySQL Data Transfer

Source Server         : builds-demo
Source Server Version : 50141
Source Host           : builds-demo.bu.edu:3306
Source Database       : cs

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2010-10-22 21:09:29
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `developers`
-- ----------------------------
DROP TABLE IF EXISTS `developers`;
CREATE TABLE `developers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of developers
-- ----------------------------
INSERT INTO `developers` VALUES ('1', 'None', null);
INSERT INTO `developers` VALUES ('2', 'Daniel Kempf', 'dkempf@bu.edu');
INSERT INTO `developers` VALUES ('3', 'John-Nicholas Furst', 'jnfurst@bu.edu');
INSERT INTO `developers` VALUES ('5', 'Chris Chapman', 'chrischapman900@gmail.com');
INSERT INTO `developers` VALUES ('6', 'Paul', 'paullu@bu.edu');

-- ----------------------------
-- Table structure for `features`
-- ----------------------------
DROP TABLE IF EXISTS `features`;
CREATE TABLE `features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of features
-- ----------------------------
INSERT INTO `features` VALUES ('1', 'None', null, null);
INSERT INTO `features` VALUES ('4', 'Project', 'Test 1 ', 'test');
INSERT INTO `features` VALUES ('7', 'test', 'here', 'af');

-- ----------------------------
-- Table structure for `milestones`
-- ----------------------------
DROP TABLE IF EXISTS `milestones`;
CREATE TABLE `milestones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of milestones
-- ----------------------------
INSERT INTO `milestones` VALUES ('1', 'None', null);
INSERT INTO `milestones` VALUES ('2', 'Core Functionality', 'Today');
INSERT INTO `milestones` VALUES ('4', 'Halfway', '10/20/10');

-- ----------------------------
-- Table structure for `tasks`
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `developer` int(11) DEFAULT NULL,
  `feature` int(11) DEFAULT NULL,
  `milestone` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `eet` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tasks
-- ----------------------------
INSERT INTO `tasks` VALUES ('3', 'Test 1 ', '2', '4', '4', 'Test 1 ', 'Details', 'Day', 'IN PROGRESS');
INSERT INTO `tasks` VALUES ('2', 'old', '3', '4', '4', 'old desc', 'old details', 'today', 'PENDING');
INSERT INTO `tasks` VALUES ('7', 'new', '1', '1', '1', 'desc', 'details', 'lots', 'IN PROGRESS');
INSERT INTO `tasks` VALUES ('6', 'task', '2', '7', '2', 'new descript', 'new details', 'tomoorow', 'PENDING');
INSERT INTO `tasks` VALUES ('8', 'stuff', '2', '4', '4', 'choose', 'stuff', 'nw', 'COMPLETED');
INSERT INTO `tasks` VALUES ('9', 'Screenshot Test', '5', '7', '4', '', '', '1hr', 'PENDING');
