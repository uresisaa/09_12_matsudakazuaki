-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2019 年 10 月 24 日 11:06
-- サーバのバージョン： 10.4.6-MariaDB
-- PHP のバージョン: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacfd04_db12`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comment`, `indate`) VALUES
(13, 'マツダ', 'https://www.wanichan.com/web/resources/tips/popup.htm', 'jojojoj', '2019-10-13 13:54:39'),
(14, 'ehonn', 'https://www.fukuinkan.co.jp/book/?id=62', '', '2019-10-20 13:56:56'),
(15, '松田一晃', 'https://www.fukuinkan.co.jp/book/?id=62', 'ccs', '2019-10-20 15:04:43'),
(16, 'マツダ', 'aa', 'aa', '2019-10-22 17:49:45');

-- --------------------------------------------------------

--
-- テーブルの構造 `php02_table`
--

CREATE TABLE `php02_table` (
  `id` int(12) NOT NULL,
  `task` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `comment` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `php02_table`
--

INSERT INTO `php02_table` (`id`, `task`, `deadline`, `comment`, `indate`) VALUES
(2, 'ご飯', '2019-10-06', 'qqqqqqqqq', '2019-10-05 15:53:36'),
(3, '仕事', '2019-10-09', 'zxxxx', '2019-10-05 15:55:29'),
(4, 'Gsアカデミー', '2019-10-12', 'LT発表', '2019-10-05 15:56:25'),
(5, 'デート', '2019-10-06', '博多駅', '2019-10-05 15:56:57'),
(6, '買い物', '2019-10-07', 'ルミエール', '2019-10-05 15:57:39'),
(7, 'スライド制作', '2019-10-08', 'LT発表用', '2019-10-05 15:58:07'),
(8, '飲み会', '2019-10-05', 'Gsメンバー', '2019-10-05 15:58:34'),
(9, '納品', '2019-10-10', '得意先', '2019-10-05 15:58:59'),
(10, 'ラスト', '2019-10-12', '終わり', '2019-10-05 15:59:19'),
(11, 'goagjor', '2019-10-04', 'k', '2019-10-05 16:54:32'),
(12, 'goagjor', '2019-10-18', 'a', '2019-10-05 16:54:41'),
(13, 'aiueo', '2019-10-03', 'akl', '2019-10-05 16:55:26'),
(14, 'aiueo', '2019-10-18', 'aa', '2019-10-05 17:22:28'),
(15, '課題', '2019-10-16', 'aaa', '2019-10-05 17:23:53'),
(16, '課題', '2019-10-18', 'aaa', '2019-10-05 17:26:38'),
(17, 'aiueo', '2019-10-08', ',l,l', '2019-10-05 17:28:56'),
(18, 'aiueo', '2019-10-10', 'aa', '2019-10-12 14:50:49'),
(19, 'aiueo', '2019-10-17', 'ffwef', '2019-10-12 14:50:58'),
(20, '課題', '2019-10-20', 'gwgw', '2019-10-12 14:51:48'),
(21, '課題', '2019-10-12', 'aaaaaaaaa', '2019-10-12 14:52:14'),
(22, 'kakikukeo', '2019-10-12', 'aaaaaaaaaaaaaaaaaaaaaaa', '2019-10-12 16:04:59'),
(23, 'aaa', '2019-10-25', 'aaa', '2019-10-20 13:31:19');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(9, 'matsuda', 'a', 'a', 1, 0),
(11, 'suzuki', 'b', 'b', 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `user_table2`
--

CREATE TABLE `user_table2` (
  `id` int(12) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(20) NOT NULL,
  `type` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact` int(1) NOT NULL,
  `massage` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `php02_table`
--
ALTER TABLE `php02_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_table2`
--
ALTER TABLE `user_table2`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- テーブルのAUTO_INCREMENT `php02_table`
--
ALTER TABLE `php02_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- テーブルのAUTO_INCREMENT `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- テーブルのAUTO_INCREMENT `user_table2`
--
ALTER TABLE `user_table2`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
