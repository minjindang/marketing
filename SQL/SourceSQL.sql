CREATE TABLE 'sourceclick' (
  'id' int(20) NOT NULL auto_increment,
  'appid' varchar(50) NOT NULL,
  'adid' varchar(50) NOT NULL,
  'sessionid' varchar(50) NOT NULL,
  'macaddress' varchar(50) NOT NULL,
  'url' varchar(50) NOT NULL,
  'ip' varchar(50) NOT NULL,
  'time' datetime NOT NULL,
  'ts' varchar(50) NOT NULL,
  'sign' varchar(50) NOT NULL,
  PRIMARY KEY  ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO 'sourceclick' (appid,adid,sessionid,macaddress,url,ip,time,ts,sign) values ();