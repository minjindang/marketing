CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `userid` varchar(20) collate utf8_unicode_ci NOT NULL,
  `password` varchar(50) NOT NULL,
  `cookieid` varchar(255) NOT NULL,
  `regitster_date` datetime NOT NULL,
  `first_name` char(5) collate utf8_unicode_ci NOT NULL,
  `last_name` char(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO user (id,userid,password,cookieid,regitster_date,first_name,last_name) VALUES (1, 'admin', 'admin','', '2014-12-30 00:00:00', 'willy', 'hu');
INSERT INTO user (id,userid,password,cookieid,regitster_date,first_name,last_name) VALUES (2, 'wiily', 'willy','', '2015-03-12 00:00:00', 'willy', 'hu');


