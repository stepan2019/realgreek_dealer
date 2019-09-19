<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>dealers_page</id>
    <name>List Dealers Page</name>
    <description>Creates a page where all dealers are listed.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'dealers_page', `name`='List Dealers Page', `description` = 'Creates a page where all dealers are listed.', `enabled` = 1;

DROP TABLE if exists `PREFIXdealers_page_settings`;
CREATE TABLE `PREFIXdealers_page_settings` (
  `all_with_store` tinyint(1) default 1,
  `groups` varchar(20) default null,
  `link_to_navbar` tinyint(1) default 1,
  `link_name` varchar(80),
  `logo_field` varchar(50),
  `name_field` varchar(50) default 'contact_name',
  `details_fields` varchar(200),
  `group_on_categories` tinyint(1) default 0,
  `category_field` varchar(40) default null,
  `categories_on_row` tinyint(1) default 3,
  `search_fields` varchar(200),
  `title` varchar(200),
  `meta_keywords` text,
  `meta_description` text,
  `enable_map_search` tinyint(1) default 0,
  `map_visible` tinyint(1) default 0,
  `search_location_fields` varchar(100)
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXdealers_page_settings` set `all_with_store`=1, `link_name`='Dealers';
    </query>
</module>
