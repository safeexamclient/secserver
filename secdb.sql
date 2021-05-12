# MySQL-Front 5.1  (Build 4.2)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;


# Host: localhost    Database: secdb
# ------------------------------------------------------
# Server version 5.5.5-10.1.19-MariaDB

#
# Source for table tbl_exam
#

DROP TABLE IF EXISTS `tbl_exam`;
CREATE TABLE `tbl_exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '考试ID',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `exam_name` varchar(200) NOT NULL DEFAULT '' COMMENT '考试名称',
  `exam_url` varchar(200) NOT NULL DEFAULT '' COMMENT '考试网址',
  `exam_lock` tinyint(1) DEFAULT '1' COMMENT '全屏锁定',
  `exam_lock_on_key` varchar(200) DEFAULT '' COMMENT '锁屏开启特征字符',
  `exam_lock_off_key` varchar(200) DEFAULT '' COMMENT '锁屏开启特征字符',
  `exam_lock_password` varchar(20) DEFAULT '' COMMENT '锁定退出密码',
  `exam_ui_top` tinyint(1) DEFAULT '1' COMMENT '显示顶部考试名称',
  `exam_ui_bottom` tinyint(1) DEFAULT '1' COMMENT '显示底部',
  `exam_shield_multidisplay` tinyint(1) DEFAULT '0' COMMENT '屏蔽多显示器',
  `exam_shield_projector` tinyint(1) DEFAULT '0' COMMENT '屏蔽投影仪',
  `exam_shield_qq` tinyint(1) DEFAULT '0' COMMENT '屏蔽 QQ远程协助',
  `exam_shield_teamviewer` tinyint(1) DEFAULT '0' COMMENT '屏蔽TeamViewer',
  `exam_shield_vmware` tinyint(1) DEFAULT '0' COMMENT '屏蔽VMWare',
  `exam_shield_visualbox` tinyint(1) DEFAULT '0' COMMENT '屏蔽VisualBox',
  `exam_memo` varchar(200) DEFAULT '' COMMENT '备注',
  `create_time` varchar(20) DEFAULT '' COMMENT '创建时间',
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB AUTO_INCREMENT=100129 DEFAULT CHARSET=utf8 COMMENT='考试表';

#
# Source for table tbl_user
#

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `user_logname` varchar(20) NOT NULL DEFAULT '' COMMENT '登录账号',
  `user_password` varchar(32) NOT NULL DEFAULT '' COMMENT '登录密码',
  `user_name` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名称',
  `user_mobile` varchar(11) NOT NULL DEFAULT '' COMMENT '用户手机',
  `user_email` varchar(50) DEFAULT '' COMMENT '用户邮箱',
  `create_time` varchar(20) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1041 DEFAULT CHARSET=utf8 COMMENT='用户表';

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
