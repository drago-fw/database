DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `sampleId` int(11) NOT NULL AUTO_INCREMENT,
  `sampleString` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`sampleId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `test` (`sampleId`, `sampleString`) VALUES (1, 'Hello');


DROP TABLE IF EXISTS `test_entity`;
CREATE TABLE `test_entity` (
  `sampleId` int(11) NOT NULL AUTO_INCREMENT,
  `sampleString` varchar(255) CHARACTER SET utf8 NOT NULL,
                        PRIMARY KEY (`sampleId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `test_entity` (`sampleId`, `sampleString`) VALUES (1, 'Hello');
