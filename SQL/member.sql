CREATE TABLE 'member' (
  'id' int(20) NOT NULL auto_increment,
  'userid' varchar(50) NOT NULL,
  'webad' varchar(50) NOT NULL,
  'fbad' varchar(50) NOT NULL,
  'gametitle' varchar(50) NOT NULL,
  'gamename' varchar(50) NOT NULL,
  'time' datetime NOT NULL,
  'category' varchar(50) NOT NULL,
  'ts' varchar(50) NOT NULL,
  'sign' varchar(50) NOT NULL,
  PRIMARY KEY  ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

Insert Into 'member' (userid,webad,fbad,gametitle,gamename,time,category,ts,sign) values ();