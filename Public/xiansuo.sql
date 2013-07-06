-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 07 月 06 日 14:50
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `xiansuo`
--

-- --------------------------------------------------------

--
-- 表的结构 `sx_catagory`
--

CREATE TABLE IF NOT EXISTS `sx_catagory` (
  `catagory_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`catagory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sx_media`
--

CREATE TABLE IF NOT EXISTS `sx_media` (
  `media_id` int(11) NOT NULL AUTO_INCREMENT,
  `media_name` varchar(200) DEFAULT NULL,
  `media_email` varchar(100) DEFAULT NULL,
  `media_desc` text,
  `media_phone` varchar(50) DEFAULT NULL,
  `media_weibo` varchar(100) DEFAULT NULL,
  `media_weixin` varchar(100) DEFAULT NULL,
  `media_catagory` int(11) DEFAULT '0' COMMENT '1央媒 2 地方 3 自媒体',
  `thumb` varchar(45) DEFAULT '/public/img/default.png',
  PRIMARY KEY (`media_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `sx_media`
--

INSERT INTO `sx_media` (`media_id`, `media_name`, `media_email`, `media_desc`, `media_phone`, `media_weibo`, `media_weixin`, `media_catagory`, `thumb`) VALUES
(1, 'cctv1', 'cctv@cctv.com', NULL, NULL, NULL, NULL, 1, '/public/img/default.png'),
(2, 'cctv2', 'cctv2@cctv.com', NULL, NULL, NULL, NULL, 1, '/public/img/default.png'),
(3, '新安晚报', 'xinan@xinan.com', NULL, NULL, NULL, NULL, 2, '/public/img/default.png');

-- --------------------------------------------------------

--
-- 表的结构 `sx_news`
--

CREATE TABLE IF NOT EXISTS `sx_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '''''' COMMENT 'news_title',
  `contents` text NOT NULL,
  `catagory` varchar(20) NOT NULL DEFAULT '''''',
  `user_id` int(11) DEFAULT NULL,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `sx_news`
--

INSERT INTO `sx_news` (`news_id`, `title`, `contents`, `catagory`, `user_id`, `ctime`) VALUES
(1, '你好', '<p>我很好<img src="/Public/ueditor/php/upload/20130706/13731154727842.jpg" title="Frame.jpg"/></p>', '财经', 3, '2013-07-06 12:58:20'),
(2, '你好', '<p>我很好<img src="/Public/ueditor/php/upload/20130706/13731154727842.jpg" title="Frame.jpg"/></p>', '财经', 4, '2013-07-06 12:59:24');

-- --------------------------------------------------------

--
-- 表的结构 `sx_newstomedia`
--

CREATE TABLE IF NOT EXISTS `sx_newstomedia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='新闻发送给了哪些媒体' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `sx_newstomedia`
--

INSERT INTO `sx_newstomedia` (`id`, `news_id`, `media_id`) VALUES
(1, 2, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- 表的结构 `sx_user`
--

CREATE TABLE IF NOT EXISTS `sx_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `sx_user`
--

INSERT INTO `sx_user` (`user_id`, `user_name`, `telephone`, `email`, `address`, `ctime`) VALUES
(1, '123', '232', '', '23', '2013-07-06 12:49:18'),
(2, '123', '232', '', '23', '2013-07-06 12:50:22'),
(3, '123df', '232', '', '23dff11', '2013-07-06 12:58:20'),
(4, '123df', '232', '', '23dff11', '2013-07-06 12:59:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
