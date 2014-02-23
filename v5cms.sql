/*
Navicat MySQL Data Transfer

Source Server         : hd_stary
Source Server Version : 50536
Source Host           : localhost:3306
Source Database       : v5cms

Target Server Type    : MYSQL
Target Server Version : 50536
File Encoding         : 65001

Date: 2014-02-23 12:21:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for v5_admin
-- ----------------------------
DROP TABLE IF EXISTS `v5_admin`;
CREATE TABLE `v5_admin` (
  `aid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` char(30) DEFAULT NULL COMMENT '管理员帐号',
  `password` char(32) DEFAULT NULL COMMENT '管理员密码',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v5_admin
-- ----------------------------
INSERT INTO `v5_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for v5_article
-- ----------------------------
DROP TABLE IF EXISTS `v5_article`;
CREATE TABLE `v5_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `catid` smallint(5) unsigned DEFAULT NULL COMMENT '文章搜索栏目',
  `keywords` varchar(80) DEFAULT NULL COMMENT '关键字',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `content` text COMMENT '文章内容',
  `click` int(10) unsigned DEFAULT NULL COMMENT '查看次数',
  `thumb` varchar(255) DEFAULT NULL COMMENT '缩略图',
  `admin_id` int(10) unsigned DEFAULT NULL COMMENT '发布者',
  `source` char(60) DEFAULT NULL COMMENT '来源',
  `author` char(30) DEFAULT NULL COMMENT '作者',
  `addtime` int(10) DEFAULT NULL COMMENT '添加时间',
  `updatatime` int(10) DEFAULT NULL COMMENT '更新时间',
  `title` char(100) DEFAULT NULL COMMENT '标题',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v5_article
-- ----------------------------

-- ----------------------------
-- Table structure for v5_category
-- ----------------------------
DROP TABLE IF EXISTS `v5_category`;
CREATE TABLE `v5_category` (
  `cid` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `cname` char(30) DEFAULT NULL COMMENT '栏目名称',
  `pid` smallint(6) DEFAULT NULL COMMENT '父级id',
  `keywords` varchar(80) DEFAULT NULL COMMENT '关键字',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v5_category
-- ----------------------------
