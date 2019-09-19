<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>spam_prevention</id>
    <name>Spam prevention</name>
    <description>Checks email and IP addresses against a spammers list from stopforumspam.com.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'spam_prevention', `name`='Spam Prevention', `description` = 'Checks email and IP addresses against a spammers list from stopforumspam.com.', `enabled` = 1;

DROP TABLE if exists `PREFIXspam_prevention`;
CREATE TABLE `PREFIXspam_prevention` (
  `check_registration` int(1) default 1,  
  `check_contact_forms` int(1) default 1,
  `check_comments` int(1) default 1,
  `check_reviews` int(1) default 1,
  `use_sfs` tinyint(1) default 1,
  `use_abip` tinyint(1) default 0,
  `abip_api_key` varchar(100) default null,
  `abip_block_limit` int(3) default 50,
  `sfs_block_tor_ips` int(1) default 1,
  `sfs_block_networks` int(1) default 0,
  `sfs_block_limit` int(3) default 50,
  `block_for` int(4) default 1,
  `add_waiting_time` tinyint(1) default 0,
  `waiting_time` int(2) default 10,
  `waiting_groups` varchar(30) default '0'
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXspam_prevention` set `check_registration` = '1', `check_contact_forms`=1;

DROP TABLE if exists `PREFIXspam_log`;
CREATE TABLE `PREFIXspam_prevention_log` (
  `id` int(10) NOT NULL auto_increment,
  `date` datetime,
  `email` varchar(150),
  `ip` varchar(15),
  `confidence_sfs` float,
  `confidence_abip` float,
  `type` varchar(10) default 'register',
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=MyISAM CHARSET=##CHARSET##;


    </query>
</module>
