<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>latest_visited</id>
    <name>Latest Visited</name>
    <description>Shows the latest ads seen by the current visitor.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'latest_visited', `name`='Latest Visited', `description` = 'Shows the latest ads seen by the current visitor.', `enabled` = 1;

DROP TABLE if exists `PREFIXlatest_visited`;
CREATE TABLE `PREFIXlatest_visited` (
  `title` varchar(200),
  `no_ads` int(2) default 4,
  `show_on_index` tinyint(1) default 0,
  `show_on_search` tinyint(1) default 1,
  `show_on_details` tinyint(1) default 0
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXlatest_visited` set `title` = 'Latest Visited', `no_ads`=4;
    </query>
</module>
