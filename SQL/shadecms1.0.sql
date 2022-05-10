DROP TABLE IF EXISTS `shade_news`;
CREATE TABLE `shade_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT '0',
  `shortstory` text NOT NULL,
  `longstory` text NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT 'ShadeCMS',
  `date` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE `shade_badgeshop` (
  `id` int(255) NOT NULL,
  `badge_code` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `shade_reports` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `reporter_id` int(255) NOT NULL DEFAULT '0',
  `reporter_name` varchar(255) NOT NULL DEFAULT '0',
  `report_context` varchar(255) NOT NULL,
  `reported_id` int(255) NOT NULL DEFAULT '0',
  `reported_name` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

ALTER TABLE `shade_badgeshop`
  ADD PRIMARY KEY (`id`);
COMMIT;

ALTER TABLE users
ADD account_down int(11) DEFAULT '0'