/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50125
 Source Host           : localhost
 Source Database       : sdny_inventory

 Target Server Type    : MySQL
 Target Server Version : 50125
 File Encoding         : iso-8859-1

 Date: 02/03/2011 14:12:01 PM
*/

SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `inventory`
-- ----------------------------
DROP TABLE IF EXISTS `inventory`;
CREATE TABLE `inventory` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `item_type` int(1) NOT NULL,
  `item_serial` text NOT NULL,
  `manufacture` int(1) NOT NULL,
  `item_location` text NOT NULL COMMENT 'Example: 500p/15c, wp/620, foley/2600',
  `purchase_order` text NOT NULL,
  `purchase_order_date` date NOT NULL,
  `purchase_cost` decimal(12,2) NOT NULL,
  `last_reconciled` date NOT NULL,
  `disposal_num` text NOT NULL COMMENT 'Date Last Seen by IT/Staff Member',
  `notes` text NOT NULL,
  `entered` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `entered_by` text NOT NULL,
  `last_update_by` text NOT NULL,
  `deleted` char(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`(50))
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `inventory_users`
-- ----------------------------
DROP TABLE IF EXISTS `inventory_users`;
CREATE TABLE `inventory_users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) NOT NULL DEFAULT '',
  `last_name` varchar(20) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `passwd` varchar(15) NOT NULL DEFAULT '',
  `code` char(3) NOT NULL DEFAULT '',
  `active` char(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ucode` (`code`),
  KEY `active` (`active`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `item_type`
-- ----------------------------
DROP TABLE IF EXISTS `item_type`;
CREATE TABLE `item_type` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `location`
-- ----------------------------
DROP TABLE IF EXISTS `location`;
CREATE TABLE `location` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `location` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `location` (`location`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `manufacture`
-- ----------------------------
DROP TABLE IF EXISTS `manufacture`;
CREATE TABLE `manufacture` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `manufacture` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `manufacture` (`manufacture`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
--  View structure for `inv_manuf_view`
-- ----------------------------
DROP VIEW IF EXISTS `inv_manuf_view`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `inv_manuf_view` AS select `manufacture`.`id` AS `id`,`manufacture`.`manufacture` AS `manufacture` from `manufacture` order by `manufacture`.`manufacture`;

-- ----------------------------
--  View structure for `inv_type_view`
-- ----------------------------
DROP VIEW IF EXISTS `inv_type_view`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `inv_type_view` AS select `item_type`.`id` AS `id`,`item_type`.`type` AS `type` from `item_type` order by `item_type`.`type`;

-- ----------------------------
--  View structure for `inventory_view`
-- ----------------------------
DROP VIEW IF EXISTS `inventory_view`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `inventory_view` AS select `inventory`.`id` AS `id`,`inventory`.`name` AS `name`,`item_type`.`type` AS `type`,`inventory`.`item_serial` AS `item_serial`,`manufacture`.`manufacture` AS `manufacture`,`location`.`location` AS `location`,`inventory`.`purchase_order` AS `purchase_order`,`inventory`.`purchase_order_date` AS `purchase_order_date`,`inventory`.`purchase_cost` AS `purchase_cost`,`inventory`.`last_reconciled` AS `last_reconciled`,`inventory`.`disposal_num` AS `disposal_num`,`inventory`.`notes` AS `notes`,`inventory`.`entered` AS `entered`,`inventory`.`last_update` AS `last_update`,`inventory`.`entered_by` AS `entered_by`,concat_ws(' ',`inventory_users`.`first_name`,`inventory_users`.`last_name`) AS `last_update_by`,`inventory`.`deleted` AS `deleted` from ((((`inventory` join `item_type` on((`inventory`.`item_type` = `item_type`.`id`))) join `manufacture` on((`inventory`.`manufacture` = `manufacture`.`id`))) join `location` on((`inventory`.`item_location` = `location`.`id`))) join `inventory_users` on((`inventory`.`last_update_by` = `inventory_users`.`username`)));

