/*
Navicat MySQL Data Transfer

Source Server         : 10.53.4.89
Source Server Version : 50505
Source Host           : 10.53.4.89:3306
Source Database       : db_vbe

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-08-31 12:55:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_documents`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_documents`;
CREATE TABLE `doc_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `coach_type` varchar(20) DEFAULT NULL,
  `version` varchar(25) DEFAULT NULL,
  `doc_type` varchar(40) DEFAULT NULL,
  `category` varchar(150) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `long_descn` longtext,
  `download` longtext,
  `display_flag` varchar(3) DEFAULT '',
  `display` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_documents
-- ----------------------------
INSERT INTO `tbl_documents` VALUES ('1', '2023-07-01', 'Electrical', 'Sleeper', '1', 'Manuals', 'Power Couplers', 'BRAKE_1', null, 'BRAKE_1.pdf', 'Yes', '1');
INSERT INTO `tbl_documents` VALUES ('2', '2023-07-02', 'Electrical', 'Chaircar', '1', 'Manuals', 'LED Lights', 'BRAKE_1', null, 'BRAKE_2.pdf', 'Yes', '1');
INSERT INTO `tbl_documents` VALUES ('3', '2023-07-03', 'Electrical', 'Sleeper', '1', 'Manuals', 'Transformer', 'Coupler_1', null, 'couple_1.pdf', 'Yes', '1');
INSERT INTO `tbl_documents` VALUES ('4', '2023-07-04', 'Mechanical', 'Chaircar', '2', 'Technical Documents', 'Car Body', 'Car Body ', null, 'gangway_1.pdf', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('5', '2023-07-05', 'Mechanical', 'Sleeper', '1', 'Manuals', 'Car Body', 'Gangway_2', null, 'gangway_2.pdf', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('6', '2023-07-06', 'Mechanical', 'Chaircar', '1', 'Manuals', 'Toilets', 'Trainset_1', null, 'trainset_1.pdf', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('7', '2023-07-07', 'Mechanical', 'Sleeper', '2', 'Specifications', 'Under Frame', 'Trainset Bogie_1', null, 'trainsetbogie_1.pdf', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('8', '2023-07-08', 'Mechanical', 'Chaircar', '1', 'Specifications', 'IC Doors', 'Door_1', null, 'Door_1.pdf', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('9', '2023-07-09', 'Mechanical', 'Sleeper', '1', 'Drawings', 'Bogies', 'HVAC', null, 'hvac.rar', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('10', '2023-07-10', 'Electrical', 'Chaircar', '1', 'PPTs', 'Traction Gear Box', 'Traction Gear Box', null, 'icf.ppt', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('11', '2023-07-12', 'Electrical', 'Sleeper', '1', 'PPTs', 'Traction Gear Box', 'ICF_2', null, 'icf2.pdf', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('12', '2023-07-13', 'Electrical', 'Chaircar', '1', 'Training Videos', 'Traction Motor', 'ICF_VIDEO', null, 'icfvideo_1.mp4', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('13', '2023-07-14', 'Mechanical', 'Sleeper', '1', 'Training Videos', 'Brakes', 'MECH_VIDEO', null, 'mechvideo.mp4', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('14', '2023-07-15', 'Mechanical', 'Chaircar', '1', 'Drawings', 'Seats', 'brakedrg', null, 'brakedrg_1.rar', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('15', '2023-07-17', 'Electrical', 'Sleeper', '1', 'Drawings', 'PAPIS', 'elec_coupler', null, 'elec_coupler_1.rar', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('16', '2023-08-03', 'Mechanical', 'Sleeper', '', 'Drawings', 'Car Body', 'driver cab sound insulation', 'drawing for driver cab sound insulation', '[{\"name\":\"files\\/893-9-0-001_a50w66l3.pdf\",\"usrName\":\"893-9-0-001.pdf\",\"size\":213499,\"type\":\"application\\/pdf\",\"searchStr\":\"893-9-0-001.pdf,!:sStrEnd\"}]', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('19', '2023-07-16', 'Electrical', 'Sleeper','1', 'Drawings', 'PAPIS', 'Coupler3', null, '[{\"name\":\"files\\/card1_7fuogiaj.pdf\",\"usrName\":\"card1.pdf\",\"size\":16125,\"type\":\"application\\/pdf\",\"searchStr\":\"card1.pdf,!:sStrEnd\"}]', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('20', '2023-07-16', 'Electrical', 'Chaircar','2', 'Technical Documents', 'IV Couplers', 'Coupler4', null, '[{\"name\":\"files\\/card1_m4pkvlm4.pdf\",\"usrName\":\"card1.pdf\",\"size\":16125,\"type\":\"application\\/pdf\",\"searchStr\":\"card1.pdf,!:sStrEnd\"}]', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('21', '2023-07-20', 'Electrical', 'Sleeper', '2', 'Drawings', 'IV Couplers', 'Coupler5', '[{\"name\":\"files\\/DocScanner 18 Jul 2023 10-35 am_9dwbbajl.pdf\",\"usrName\":\"DocScanner 18 Jul 2023 10-35 am.pdf\",\"size\":637903,\"type\":\"application\\/pdf\",\"searchStr\":\"DocScanner 18 Jul 2023 10-35 am.pdf,!:sStrEnd\"}]', '[{\"name\":\"files\\/DocScanner 18 Jul 2023 10-35 am_9dwbbajl.pdf\",\"usrName\":\"DocScanner 18 Jul 2023 10-35 am.pdf\",\"size\":637903,\"type\":\"application\\/pdf\",\"searchStr\":\"DocScanner 18 Jul 2023 10-35 am.pdf,!:sStrEnd\"}]', 'Yes', null);
INSERT INTO `tbl_documents` VALUES ('22', '2023-08-01', 'Mechanical', 'Chaircar', '1', 'Drawings', 'Coupler', 'new', '', '[{\"name\":\"files\\/CircularforAbove2400GRemployees20232024_xinopprp.pdf\",\"usrName\":\"CircularforAbove2400GRemployees20232024.pdf\",\"size\":1568957,\"type\":\"application\\/pdf\",\"searchStr\":\"CircularforAbove2400GRemployees20232024.pdf,!CircularforAbove2400GRemployees20232024 (1).pdf,!:sStrEnd\"},{\"name\":\"files\\/CircularforAbove2400GRemployees20232024 (1)_cshpnqcd.pdf\",\"usrName\":\"CircularforAbove2400GRemployees20232024 (1).pdf\",\"size\":1568957,\"type\":\"application\\/pdf\"}]', 'Yes', null);