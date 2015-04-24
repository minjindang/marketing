CREATE TABLE 'register' (
  'id' int(20) NOT NULL auto_increment,
  'userid' varchar(50) NOT NULL,
  'category' varchar(50) NOT NULL,
  'time' datetime NOT NULL,
  'gamesn' varchar(50) NOT NULL,
  'serversn' varchar(50) NOT NULL,
  'ts' varchar(50) NOT NULL,
  'sign' varchar(50) NOT NULL,
  PRIMARY KEY  ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

Insert Into 'register' (userid,category,time,gamesn,serversn,ts,sign) values ();