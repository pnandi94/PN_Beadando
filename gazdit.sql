CREATE DATABASE `gazdit`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `gazdit`;

CREATE TABLE `felhasznalok` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `csaladi_nev` varchar(45) NOT NULL default '',
  `uto_nev` varchar(45) NOT NULL default '',
  `bejelentkezes` varchar(12) NOT NULL default '',
  `jelszo` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `felhasznalok` (`id`,`csaladi_nev`,`uto_nev`,`bejelentkezes`,`jelszo`) VALUES 
 (1,'Családi_1','Utónév_1','Login1',sha1('login1')),
 (2,'Kiss','Kálmán','kissk',sha1('kissk1')),
 (3,'Kovács','Krisztina','kovacsk',sha1('kovacsk1')),
 (4,'Nagy','Norbert','nagyn',sha1('nagyn1')),
 (5,'Szabó','Szilvia','szabosz',sha1('szabosz1'));
