DROP TABLE IF EXISTS `table`;
CREATE TABLE `table` (
  `sampleId` int(11) NOT NULL AUTO_INCREMENT,
  `sampleString` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`sampleId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `table` (`sampleId`, `sampleString`) VALUES
(1,	'Hello');