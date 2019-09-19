<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>price_extra</id>
    <name>Price extra configuration</name>
    <description>Extra price field configuration module which allows you to enable Negotiable checkbox, enable Free word instead of 0 price value, allow alternate tags like Please Contact or Swap/Trade. You can make different such configurations for different fieldsets.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'price_extra', `name` = 'Price extra configuration', `description` = 'Extra price field configuration module which allows you to enable Negotiable checkbox, enable Free word instead of 0 price value, allow alternate tags like Please Contact or Swap/Trade. You can make different such configurations for different fieldsets.', `enabled` = 1;

DROP TABLE if exists `PREFIXprice_extra_settings`;
CREATE TABLE `PREFIXprice_extra_settings` (
  `id` int(2) NOT NULL auto_increment,
  `fieldset` varchar(200),
  `use_negotiable` tinyint(1) default 0,
  `use_free` tinyint(1) default 0,
  `use_tags` tinyint(1) default 0,
  `use_extra_option1` tinyint(1) default 0,
  `use_extra_option2` tinyint(1) default 0,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXprice_extra_settings` set `id` = 1, `fieldset` = 0, `use_negotiable` = 1, `use_free`=1, `use_tags`=1;

DROP TABLE if exists `PREFIXprice_extra_settings_lang`;
CREATE TABLE `PREFIXprice_extra_settings_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) default 'eng',
  `negotiable` varchar(40),
  `free` varchar(40),
  `tags` text,
  `extra_option1` varchar(40) default null,
  `extra_option2` varchar(40) default null
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXprice_extra_settings_lang` set `id` = 1, `lang_id`= '##LANG##', `negotiable` = 'Negotiable', `free`='Free', `tags`='Please Contact|Swap/Trade';

ALTER TABLE `PREFIXads` add `negotiable` tinyint(1) default 0;
ALTER TABLE `PREFIXads` add `price_tag` varchar(40);
ALTER TABLE `PREFIXads` add `extra_option1` tinyint(1) default 0;
ALTER TABLE `PREFIXads` add `extra_option2` tinyint(1) default 0;

    </query>
</module>
