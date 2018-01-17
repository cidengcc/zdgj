/*
 Navicat Premium Data Transfer

 Source Server         : 左
 Source Server Type    : MySQL
 Source Server Version : 50556
 Source Host           : 47.96.21.194:3306
 Source Schema         : zd

 Target Server Type    : MySQL
 Target Server Version : 50556
 File Encoding         : 65001

 Date: 11/01/2018 16:49:23
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for about
-- ----------------------------
DROP TABLE IF EXISTS `about`;
CREATE TABLE `about`  (
  `aboutID` int(11) NOT NULL AUTO_INCREMENT COMMENT '关于我们表  1 公司名称 2公司地址 3 公司简介 4招人信息',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `conten` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '内容',
  `url` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '图片',
  PRIMARY KEY (`aboutID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of about
-- ----------------------------
INSERT INTO `about` VALUES (1, '公司名称', '臻邸国际', '');
INSERT INTO `about` VALUES (2, '公司地址', '上海市', NULL);
INSERT INTO `about` VALUES (3, '公司简介', '建筑设计装饰公司', NULL);
INSERT INTO `about` VALUES (4, '招人信息', '人才招聘信息人才招聘信息人才招聘信息人才招聘信息人才招聘信息人才招聘信息人才招聘信息人才招聘信息人才招聘信息人才招聘信息人才招聘信息人才招聘信息人才招聘信息', NULL);

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `adminID` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `user_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '用户名',
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT 'email',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '密码',
  `add_time` int(11) NOT NULL DEFAULT 0 COMMENT '添加时间',
  PRIMARY KEY (`adminID`) USING BTREE,
  INDEX `user_name`(`user_name`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', '904725327qq.com', '123456', 123123);

-- ----------------------------
-- Table structure for article_img
-- ----------------------------
DROP TABLE IF EXISTS `article_img`;
CREATE TABLE `article_img`  (
  `article_imgID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `articlesID` int(11) NOT NULL COMMENT '文章ID',
  `url` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '图片地址',
  `deleting` int(2) DEFAULT NULL COMMENT '1正常 2删除',
  `time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`article_imgID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of article_img
-- ----------------------------
INSERT INTO `article_img` VALUES (1, 1, 'https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/s%3D220/sign=561fa21dc93d70cf48faad0fc8dcd1ba/d043ad4bd11373f0ab239fbba40f4bfbfbed04f1.jpg', 1, 11111);

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles`  (
  `articlesID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '标题',
  `type` int(2) DEFAULT NULL COMMENT '分类 1商业综合体 2酒店 3办公楼 4别墅豪宅 5公寓 6软装设计 7娱乐会所 8其他',
  `area` float(20, 2) DEFAULT NULL COMMENT '面积',
  `designer` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '设计师',
  `team` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '团队',
  `administer` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '管理公司',
  `content` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '内容',
  `orderby` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `deleting` int(1) DEFAULT NULL COMMENT '1正常 2删除',
  `article_imgID` int(11) DEFAULT NULL COMMENT '图片ID',
  PRIMARY KEY (`articlesID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES (1, '商业综合体', 1, 100.00, '任建军', '臻邸国际团队', '臻邸国际团队', '工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍', '2', 1514907975, 1, 1);
INSERT INTO `articles` VALUES (2, '商业综合体', 2, 100.00, '任建军', '臻邸国际团队', '臻邸国际团队', '工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍', '3', 1514907975, 1, 1);
INSERT INTO `articles` VALUES (3, '商业综合体', 3, 100.00, '任建军', '臻邸国际团队', '臻邸国际团队', '工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍', '4', 1514907975, 1, 1);
INSERT INTO `articles` VALUES (4, '商业综合体', 4, 100.00, '任建军', '臻邸国际团队', '臻邸国际团队', '工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍', '5', 1514907975, 1, 1);
INSERT INTO `articles` VALUES (5, '商业综合体', 5, 100.00, '任建军', '臻邸国际团队', '臻邸国际团队', '工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍', '6', 1514907975, 1, 1);
INSERT INTO `articles` VALUES (6, '商业综合体', 6, 100.00, '任建军', '臻邸国际团队', '臻邸国际团队', '工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍', '7', 1514907975, 1, 1);
INSERT INTO `articles` VALUES (7, '商业综合体', 7, 100.00, '任建军', '臻邸国际团队', '臻邸国际团队', '工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍', '8', 1514907975, 1, 1);
INSERT INTO `articles` VALUES (8, '商业综合体', 1, 100.00, '任建军', '臻邸国际团队', '臻邸国际团队', '工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍', '9', 1514907975, 1, 1);
INSERT INTO `articles` VALUES (9, '商业综合体', 2, 100.00, '任建军', '臻邸国际团队', '臻邸国际团队', '工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍', '09', 1514907975, 1, 1);
INSERT INTO `articles` VALUES (10, '商业综合体', 3, 100.00, '任建军', '臻邸国际团队', '臻邸国际团队', '工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍', '2', 1514907975, 1, 1);

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`  (
  `contactID` int(11) NOT NULL AUTO_INCREMENT COMMENT '联系我们表  1 手机号 2座机号 3qq 4qq群 5微信 6微信群 7微博',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `conten` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '内容',
  `url` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '二维码',
  PRIMARY KEY (`contactID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES (1, '手机号', '13385290909', NULL);
INSERT INTO `contact` VALUES (2, '座机号', '4775229', NULL);
INSERT INTO `contact` VALUES (3, 'qq', '904725327', NULL);
INSERT INTO `contact` VALUES (4, 'qq群', NULL, NULL);
INSERT INTO `contact` VALUES (5, '微信', '13385290909', NULL);
INSERT INTO `contact` VALUES (6, '微信群', NULL, NULL);
INSERT INTO `contact` VALUES (7, '微博', NULL, NULL);
INSERT INTO `contact` VALUES (8, '邮箱', '904725327@qq.com', NULL);

-- ----------------------------
-- Table structure for img
-- ----------------------------
DROP TABLE IF EXISTS `img`;
CREATE TABLE `img`  (
  `imgID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `img_type` int(1) DEFAULT NULL COMMENT '类型 1轮播图 2其他',
  `url` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '地址',
  `orderby` int(10) DEFAULT NULL COMMENT '排序',
  `deleting` int(1) UNSIGNED DEFAULT 1 COMMENT '1正常 2删除',
  `time` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`imgID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of img
-- ----------------------------
INSERT INTO `img` VALUES (1, 1, '/static/index/images/1.jpg', 9, 1, NULL);
INSERT INTO `img` VALUES (2, 1, '/static/index/images/2.jpg', 2, 1, NULL);
INSERT INTO `img` VALUES (3, 1, '/static/index/images/3.jpg', 3, 1, NULL);

-- ----------------------------
-- Table structure for new_img
-- ----------------------------
DROP TABLE IF EXISTS `new_img`;
CREATE TABLE `new_img`  (
  `new_imgID` int(11) NOT NULL AUTO_INCREMENT COMMENT '新闻图片表',
  `newID` int(11) DEFAULT NULL,
  `order` int(2) DEFAULT NULL COMMENT '排序',
  `url` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '路径',
  PRIMARY KEY (`new_imgID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `newID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '新闻表 ',
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '标题',
  `conten` varchar(3000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '内容',
  `time` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`newID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team`  (
  `teamID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '名称',
  `position` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '职位',
  `word_time` int(2) DEFAULT NULL COMMENT '工作年限',
  `design` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '设计理念',
  `style` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '风格',
  `introduce` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '介绍',
  `deleting` int(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1正常 2删除',
  `time` int(11) UNSIGNED DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`teamID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
