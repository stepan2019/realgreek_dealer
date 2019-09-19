-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 18 sep 2019 om 21:17
-- Serverversie: 10.1.41-MariaDB
-- PHP-versie: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realgeekn_huis`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_2co_return`
--

CREATE TABLE `class_2co_return` (
  `id` int(10) NOT NULL,
  `x_login` varchar(16) DEFAULT NULL,
  `key` varchar(50) DEFAULT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `x_amount` varchar(50) DEFAULT NULL,
  `X_Email` varchar(50) DEFAULT NULL,
  `X_Address` varchar(50) DEFAULT NULL,
  `X_City` varchar(50) DEFAULT NULL,
  `X_State` varchar(50) DEFAULT NULL,
  `X_Country` varchar(50) DEFAULT NULL,
  `X_ZIP` varchar(30) DEFAULT NULL,
  `x_invoice_num` varchar(255) DEFAULT '0',
  `order_number` varchar(30) DEFAULT NULL,
  `merchant_order_id` varchar(50) DEFAULT NULL,
  `ip_country` varchar(50) DEFAULT NULL,
  `lang` varchar(20) DEFAULT NULL,
  `cart_id` varchar(50) DEFAULT NULL,
  `demo` varchar(1) DEFAULT NULL,
  `pay_method` varchar(10) DEFAULT NULL,
  `credit_card_processed` char(1) DEFAULT 'Y',
  `card_holder_name` varchar(100) DEFAULT NULL,
  `merchant_product_id` int(10) DEFAULT NULL,
  `entirepost` text,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_2co_settings`
--

CREATE TABLE `class_2co_settings` (
  `to_checkout_sid` varchar(20) DEFAULT NULL,
  `to_checkout_secret` varchar(16) DEFAULT NULL,
  `to_checkout_demo` int(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_actions`
--

CREATE TABLE `class_actions` (
  `id` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `object_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `invoice` int(10) DEFAULT NULL,
  `pending` tinyint(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `extra` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ac_settings`
--

CREATE TABLE `class_ac_settings` (
  `categories_list` text,
  `cookie_availability` int(3) DEFAULT '30',
  `disclaimer_eng` text,
  `disclaimer_dutch` text,
  `disclaimer_arabic` text,
  `disclaimer_Ku` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_address_components`
--

CREATE TABLE `class_address_components` (
  `component` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'long_name',
  `field` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ads`
--

CREATE TABLE `class_ads` (
  `id` int(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(3) NOT NULL,
  `package_id` int(2) NOT NULL,
  `usr_pkg` int(10) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `date_expires` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(150) DEFAULT NULL,
  `description` text,
  `price` double DEFAULT '-1',
  `currency` varchar(10) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `region` varchar(64) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `meta_description` varchar(256) DEFAULT NULL,
  `meta_keywords` varchar(256) DEFAULT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT '0',
  `rented` tinyint(1) NOT NULL DEFAULT '0',
  `viewed` int(10) NOT NULL DEFAULT '0',
  `user_approved` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `pending` tinyint(1) NOT NULL DEFAULT '0',
  `featured` int(3) DEFAULT '0',
  `highlited` tinyint(1) NOT NULL DEFAULT '0',
  `priority` int(1) NOT NULL DEFAULT '0',
  `video` text,
  `rating` double(4,2) NOT NULL DEFAULT '0.00',
  `language` varchar(30) NOT NULL DEFAULT 'eng',
  `unique_id` varchar(30) DEFAULT NULL,
  `auction` int(1) DEFAULT '0',
  `property_type` varchar(64) DEFAULT NULL,
  `bedrooms` int(2) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `year_built` int(4) DEFAULT NULL,
  `amenities` text,
  `community_amenities` text,
  `no_ratings` int(5) DEFAULT '0',
  `_` varchar(128) DEFAULT NULL,
  `location_on_map` varchar(64) DEFAULT NULL,
  `conditie` varchar(128) DEFAULT NULL,
  `unit_price` float DEFAULT '-1',
  `negotiable` tinyint(1) DEFAULT '0',
  `price_tag` varchar(40) DEFAULT NULL,
  `_2` text,
  `_3` varchar(100) DEFAULT NULL,
  `_4` varchar(255) DEFAULT NULL,
  `ipggk` varchar(128) DEFAULT NULL,
  `_1` varchar(128) DEFAULT NULL,
  `outdoor_amenities` text,
  `energy_efficient` varchar(128) DEFAULT NULL,
  `unfinished` varchar(128) DEFAULT NULL,
  `ownership` varchar(128) DEFAULT NULL,
  `frames_type` varchar(128) DEFAULT NULL,
  `distance_to_sea` varchar(255) DEFAULT NULL,
  `renovation_year` varchar(255) DEFAULT NULL,
  `pool` varchar(128) DEFAULT NULL,
  `floor` varchar(128) DEFAULT NULL,
  `parcel_length_and_width` text,
  `size_of_balconies` varchar(255) DEFAULT NULL,
  `distance_from_airport` varchar(255) DEFAULT NULL,
  `available_from` varchar(128) DEFAULT NULL,
  `ability_to_build` varchar(255) DEFAULT NULL,
  `shared_expenses` varchar(128) DEFAULT NULL,
  `listing_code` varchar(255) DEFAULT NULL,
  `levels` varchar(128) DEFAULT NULL,
  `asking_price` varchar(128) DEFAULT NULL,
  `kitchens` varchar(128) DEFAULT NULL,
  `living_rooms` varchar(128) DEFAULT NULL,
  `sea` varchar(128) DEFAULT NULL,
  `file_attachment` varchar(128) DEFAULT NULL,
  `wc` varchar(128) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `extra_option1` tinyint(1) DEFAULT '0',
  `extra_option2` tinyint(1) DEFAULT '0',
  `urgent` tinyint(1) DEFAULT '0',
  `site_url` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ads_extension`
--

CREATE TABLE `class_ads_extension` (
  `id` int(10) NOT NULL,
  `mgm_email` varchar(60) NOT NULL,
  `mgm_name` varchar(60) DEFAULT NULL,
  `activation` varchar(60) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ads_pictures`
--

CREATE TABLE `class_ads_pictures` (
  `id` int(10) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `picture` varchar(128) NOT NULL,
  `folder` varchar(20) DEFAULT NULL,
  `order_no` int(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ads_settings`
--

CREATE TABLE `class_ads_settings` (
  `thmb_width` int(4) DEFAULT '120',
  `thmb_height` int(4) DEFAULT '80',
  `big_thmb_width` int(4) DEFAULT '510',
  `big_thmb_height` int(4) DEFAULT '340',
  `nopic` varchar(128) DEFAULT NULL,
  `big_nopic` varchar(128) DEFAULT NULL,
  `pic_max_size` int(5) DEFAULT '1500',
  `pic_max_width` int(5) DEFAULT '2000',
  `pic_max_height` int(5) DEFAULT '1600',
  `resize_image` tinyint(1) DEFAULT '0',
  `resize_width` int(5) DEFAULT '800',
  `resize_height` int(5) DEFAULT '600',
  `watermark` varchar(60) DEFAULT NULL,
  `watermark_position` varchar(4) DEFAULT 'br',
  `watermark_transparency` int(3) DEFAULT '50',
  `days_recent` int(5) DEFAULT '0',
  `badwords_check` tinyint(1) DEFAULT '1',
  `badwords_check_type` tinyint(1) DEFAULT '1',
  `enable_price` tinyint(1) DEFAULT NULL,
  `enable_stock` tinyint(1) DEFAULT '1',
  `enable_sold` tinyint(1) DEFAULT '1',
  `enable_rented` tinyint(1) DEFAULT '0',
  `sold_image` varchar(60) DEFAULT NULL,
  `rented_image` varchar(60) DEFAULT NULL,
  `hide_contact_when_sold` tinyint(1) DEFAULT '0',
  `hide_contact_when_rented` tinyint(1) DEFAULT '0',
  `description_editor` tinyint(1) DEFAULT '0',
  `no_featured` int(2) DEFAULT '2',
  `no_featured_on_row` int(2) DEFAULT '1',
  `enable_latest` tinyint(1) DEFAULT '1',
  `no_latest` int(2) DEFAULT '3',
  `no_latest_on_row` int(2) DEFAULT '3',
  `show_more_link` tinyint(1) DEFAULT '1',
  `enable_featured` tinyint(1) DEFAULT '1',
  `enable_highlited` tinyint(1) DEFAULT '1',
  `enable_priorities` tinyint(1) DEFAULT '1',
  `random_priorities` tinyint(1) DEFAULT '0',
  `enable_video` tinyint(1) DEFAULT '1',
  `highlited_color` varchar(7) DEFAULT NULL,
  `highlited_expires` int(4) DEFAULT '0',
  `priorities_expires` int(4) DEFAULT '0',
  `video_expires` int(4) DEFAULT '0',
  `highlited_price` double DEFAULT '0',
  `video_price` double DEFAULT '0',
  `store_availability` int(4) DEFAULT '30',
  `store_price` double DEFAULT '0',
  `dealer_subdomain` tinyint(1) DEFAULT '0',
  `resize_store_image` tinyint(1) DEFAULT '0',
  `resize_store_width` int(5) DEFAULT '200',
  `resize_store_height` int(5) DEFAULT '100',
  `add_meta_with_listings` tinyint(1) DEFAULT '1',
  `allowed_html` varchar(250) DEFAULT NULL,
  `search_in_fields` varchar(250) DEFAULT NULL,
  `location_fields` varchar(250) DEFAULT NULL,
  `translate_title_description` tinyint(1) DEFAULT '0',
  `show_ad_date_for_everybody` tinyint(1) DEFAULT '1',
  `alerts_enabled` tinyint(1) DEFAULT '1',
  `alerts_ask_adv_key` tinyint(1) DEFAULT '0',
  `alerts_days_delete` int(4) DEFAULT '30',
  `alerts_require_login` tinyint(1) DEFAULT '0',
  `alerts_activation` tinyint(1) DEFAULT '2',
  `saved_searches_enabled` tinyint(1) DEFAULT '1',
  `enable_map_search` tinyint(1) DEFAULT '0',
  `map_visible` tinyint(1) DEFAULT '0',
  `default_search_view` tinyint(1) DEFAULT '0',
  `search_location_fields` varchar(250) DEFAULT NULL,
  `search_type` varchar(10) NOT NULL DEFAULT 'any',
  `hide_contact_when_not_logged` tinyint(1) NOT NULL DEFAULT '0',
  `featured_autoscroll` tinyint(1) DEFAULT '1',
  `date_time_ago_format` tinyint(1) DEFAULT '0',
  `date_time_ago_days` int(3) DEFAULT '7',
  `pending_edited` tinyint(1) DEFAULT '0',
  `enable_auctions` tinyint(1) DEFAULT '0',
  `notify_when_new_bid` tinyint(1) DEFAULT '1',
  `prioritize_featured` tinyint(1) DEFAULT '0',
  `search_by_account_type` tinyint(1) DEFAULT '0',
  `med_thmb_width` int(4) DEFAULT '300',
  `med_thmb_height` int(4) DEFAULT '300',
  `med_nopic` varchar(128) DEFAULT 'mednoimage.jpg',
  `prof_groups` varchar(20) DEFAULT '0',
  `enable_distance_search` tinyint(1) DEFAULT '0',
  `ds_measuring_unit` varchar(5) DEFAULT 'Km',
  `ds_distances_list` varchar(100) DEFAULT '2|5|10|15|30|50|75|100',
  `enable_location_autosuggest` tinyint(1) DEFAULT '0',
  `limit_location_autosuggest` varchar(50) DEFAULT NULL,
  `gm_api_lang` varchar(2) DEFAULT NULL,
  `count_refine_results` int(1) DEFAULT '0',
  `enable_urgent` tinyint(1) DEFAULT '0',
  `enable_url` tinyint(1) DEFAULT '0',
  `urgent_expires` int(4) DEFAULT '0',
  `url_expires` int(4) DEFAULT '0',
  `urgent_price` double DEFAULT '1',
  `url_price` double DEFAULT '3',
  `featured_example` varchar(100) DEFAULT NULL,
  `highlited_example` varchar(100) DEFAULT NULL,
  `priorities_example` varchar(100) DEFAULT NULL,
  `video_example` varchar(100) DEFAULT NULL,
  `urgent_example` varchar(100) DEFAULT NULL,
  `url_example` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ads_settings_lang`
--

CREATE TABLE `class_ads_settings_lang` (
  `lang_id` varchar(20) DEFAULT 'eng',
  `featured_description` varchar(255) DEFAULT NULL,
  `highlited_description` varchar(255) DEFAULT NULL,
  `priorities_description` varchar(255) DEFAULT NULL,
  `video_description` varchar(255) DEFAULT NULL,
  `urgent_description` varchar(255) DEFAULT NULL,
  `url_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_affiliates`
--

CREATE TABLE `class_affiliates` (
  `id` int(10) NOT NULL,
  `affiliate_id` varchar(8) NOT NULL,
  `affiliate_paypal_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_affiliates_payments`
--

CREATE TABLE `class_affiliates_payments` (
  `id` int(3) NOT NULL,
  `affiliate_id` varchar(8) NOT NULL,
  `amount` float DEFAULT NULL,
  `date` datetime NOT NULL,
  `processor` varchar(40) DEFAULT 'paypal',
  `paid_to` varchar(200) DEFAULT NULL,
  `completed` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_affiliates_revenue`
--

CREATE TABLE `class_affiliates_revenue` (
  `id` int(10) NOT NULL,
  `affiliate_id` varchar(8) NOT NULL,
  `amount` float DEFAULT NULL,
  `date` datetime NOT NULL,
  `order_id` int(20) NOT NULL,
  `paid` int(1) DEFAULT '0',
  `released` int(1) DEFAULT '0',
  `payment_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_altiria`
--

CREATE TABLE `class_altiria` (
  `replacePOSTsms` varchar(50) DEFAULT NULL,
  `domainId` varchar(50) DEFAULT NULL,
  `altiria_login` varchar(50) DEFAULT NULL,
  `altiria_passwd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_altiria_log`
--

CREATE TABLE `class_altiria_log` (
  `object_id` int(8) DEFAULT NULL,
  `type` varchar(8) DEFAULT NULL,
  `success` int(1) DEFAULT '1',
  `error_message` varchar(200) DEFAULT NULL,
  `details` text,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_appearance`
--

CREATE TABLE `class_appearance` (
  `template` varchar(50) DEFAULT 'default',
  `template_colorscheme` varchar(50) DEFAULT NULL,
  `admin_template` varchar(50) DEFAULT 'default',
  `admin_language` varchar(20) DEFAULT 'eng',
  `show_header` tinyint(1) DEFAULT '1',
  `header_pic` varchar(128) DEFAULT NULL,
  `header_pic_link` varchar(128) DEFAULT NULL,
  `show_footer` tinyint(1) DEFAULT '0',
  `footer_pic` varchar(128) DEFAULT NULL,
  `footer_pic_link` varchar(128) DEFAULT NULL,
  `show_footer_categ` tinyint(1) DEFAULT '1',
  `outer_table` int(4) DEFAULT NULL,
  `max_cat_per_row` tinyint(1) DEFAULT '3',
  `categ_count_ads` tinyint(1) DEFAULT '1',
  `ads_per_page` int(2) DEFAULT '5',
  `first_page_type` int(2) DEFAULT '1',
  `timezone` varchar(50) DEFAULT 'GMT',
  `time_offset` int(5) DEFAULT '0',
  `small_header_pic` varchar(128) DEFAULT NULL,
  `maintenance_mode` int(1) DEFAULT '0',
  `maintenance_ips` text,
  `enable_impressions_count` tinyint(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_appearance_lang`
--

CREATE TABLE `class_appearance_lang` (
  `lang_id` varchar(20) DEFAULT 'eng',
  `footer_text` varchar(255) DEFAULT '',
  `charset` varchar(50) DEFAULT 'UTF-8',
  `default_currency` varchar(10) DEFAULT '$',
  `currency_pos` tinyint(1) DEFAULT '0',
  `date_format` varchar(30) DEFAULT NULL,
  `date_format_long` varchar(30) DEFAULT NULL,
  `number_format_decimals` int(2) DEFAULT '2',
  `number_format_point` varchar(5) DEFAULT '.',
  `number_format_separator` varchar(5) DEFAULT ',',
  `price_format_decimals` int(2) DEFAULT '0',
  `price_format_point` varchar(5) DEFAULT '.',
  `price_format_separator` varchar(5) DEFAULT ','
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_areasearch_settings`
--

CREATE TABLE `class_areasearch_settings` (
  `area_list` text,
  `um` varchar(20) DEFAULT 'Km'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ar_settings`
--

CREATE TABLE `class_ar_settings` (
  `days` int(2) DEFAULT '2',
  `plans` varchar(200) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_auctions`
--

CREATE TABLE `class_auctions` (
  `id` int(10) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `starting_price` double NOT NULL,
  `unit_starting_price` double DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `max_bid` double NOT NULL,
  `date` datetime NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_authorize_return`
--

CREATE TABLE `class_authorize_return` (
  `id` int(10) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `x_response_code` int(3) DEFAULT NULL,
  `x_response_subcode` int(3) DEFAULT NULL,
  `x_response_reason_code` int(3) DEFAULT NULL,
  `x_response_reason_text` text,
  `x_auth_code` varchar(6) DEFAULT NULL,
  `x_avs_code` char(1) DEFAULT NULL,
  `x_trans_id` varchar(40) DEFAULT NULL,
  `x_invoice_num` int(5) DEFAULT NULL,
  `x_description` varchar(100) DEFAULT NULL,
  `x_amount` float DEFAULT NULL,
  `x_method` varchar(10) DEFAULT NULL,
  `x_type` varchar(20) DEFAULT NULL,
  `x_cust_id` varchar(20) DEFAULT NULL,
  `x_first_name` varchar(50) DEFAULT NULL,
  `x_last_name` varchar(50) DEFAULT NULL,
  `x_company` varchar(60) DEFAULT NULL,
  `x_address` varchar(60) DEFAULT NULL,
  `x_city` varchar(40) DEFAULT NULL,
  `x_state` varchar(50) DEFAULT NULL,
  `x_zip` varchar(20) DEFAULT NULL,
  `x_country` varchar(60) DEFAULT NULL,
  `x_phone` varchar(25) DEFAULT NULL,
  `x_fax` varchar(25) DEFAULT NULL,
  `x_email` varchar(255) DEFAULT NULL,
  `x_ship_to_first_name` varchar(50) DEFAULT NULL,
  `x_ship_to_last_name` varchar(50) DEFAULT NULL,
  `x_ship_to_company` varchar(50) DEFAULT NULL,
  `x_ship_to_address` varchar(60) DEFAULT NULL,
  `x_ship_to_city` varchar(40) DEFAULT NULL,
  `x_ship_to_state` varchar(50) DEFAULT NULL,
  `x_ship_to_zip` varchar(20) DEFAULT NULL,
  `x_ship_to_country` varchar(60) DEFAULT NULL,
  `x_tax` float DEFAULT NULL,
  `x_duty` float DEFAULT NULL,
  `x_freight` float DEFAULT NULL,
  `x_tax_exempt` varchar(10) DEFAULT NULL,
  `x_po_num` varchar(25) DEFAULT NULL,
  `x_MD5_Hash` varchar(50) DEFAULT NULL,
  `x_cvv2_resp_code` varchar(2) DEFAULT NULL,
  `x_cavv_response` varchar(2) DEFAULT NULL,
  `x_test_request` varchar(20) DEFAULT NULL,
  `entirepost` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_authorize_settings`
--

CREATE TABLE `class_authorize_settings` (
  `authorize_login` varchar(20) DEFAULT NULL,
  `authorize_tkey` varchar(30) DEFAULT NULL,
  `authorize_secret` varchar(30) DEFAULT NULL,
  `authorize_pay_title` varchar(128) DEFAULT NULL,
  `authorize_demo` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_badwords`
--

CREATE TABLE `class_badwords` (
  `word` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_banners`
--

CREATE TABLE `class_banners` (
  `id` int(3) NOT NULL,
  `filename` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `code` text,
  `position` varchar(30) DEFAULT NULL,
  `sections` varchar(250) DEFAULT NULL,
  `link` varchar(128) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `max_impressions` int(11) NOT NULL DEFAULT '0',
  `max_clicks` int(11) NOT NULL DEFAULT '0',
  `impressions` int(11) NOT NULL DEFAULT '0',
  `clicks` int(11) NOT NULL DEFAULT '0',
  `categories` varchar(250) DEFAULT NULL,
  `open_new` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_banners_positions`
--

CREATE TABLE `class_banners_positions` (
  `id` int(2) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `specific_section` tinyint(1) DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `no_banners` int(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_bids`
--

CREATE TABLE `class_bids` (
  `id` int(10) NOT NULL,
  `aid` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `bid` double NOT NULL,
  `unit_bid` double DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `date` datetime NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_blocked_emails`
--

CREATE TABLE `class_blocked_emails` (
  `id` int(8) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_blocked_ips`
--

CREATE TABLE `class_blocked_ips` (
  `id` int(8) NOT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1',
  `date_expires` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `blocked_for` int(2) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_blocked_phones`
--

CREATE TABLE `class_blocked_phones` (
  `id` int(8) NOT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_browse_location`
--

CREATE TABLE `class_browse_location` (
  `title_eng` varchar(100) DEFAULT NULL,
  `no_rows` int(2) DEFAULT '3',
  `type` varchar(10) DEFAULT 'double',
  `field_id` int(4) DEFAULT NULL,
  `title_dutch` varchar(100) DEFAULT NULL,
  `title_arabic` varchar(100) DEFAULT NULL,
  `title_kurdish` varchar(100) DEFAULT NULL,
  `title_german` varchar(100) DEFAULT NULL,
  `title_ru` varchar(100) DEFAULT NULL,
  `title_greek` varchar(100) DEFAULT NULL,
  `title_tr` varchar(100) DEFAULT NULL,
  `title_ch` varchar(100) DEFAULT NULL,
  `title_french` varchar(100) DEFAULT NULL,
  `title_italian` varchar(100) DEFAULT NULL,
  `title_danish` varchar(100) DEFAULT NULL,
  `title_nor` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_browse_make`
--

CREATE TABLE `class_browse_make` (
  `title_eng` varchar(100) DEFAULT NULL,
  `no_rows` int(2) DEFAULT '3',
  `type` varchar(10) DEFAULT 'double',
  `field_id` int(4) DEFAULT NULL,
  `title_dutch` varchar(100) DEFAULT NULL,
  `title_arabic` varchar(100) DEFAULT NULL,
  `title_kurdish` varchar(100) DEFAULT NULL,
  `title_tr` varchar(100) DEFAULT NULL,
  `title_greek` varchar(100) DEFAULT NULL,
  `title_ru` varchar(100) DEFAULT NULL,
  `title_german` varchar(100) DEFAULT NULL,
  `title_nor` varchar(100) DEFAULT NULL,
  `title_french` varchar(100) DEFAULT NULL,
  `title_italian` varchar(100) DEFAULT NULL,
  `title_danish` varchar(100) DEFAULT NULL,
  `title_ch` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_bulksms`
--

CREATE TABLE `class_bulksms` (
  `bulksms_username` varchar(50) DEFAULT NULL,
  `bulksms_password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_bulksms_log`
--

CREATE TABLE `class_bulksms_log` (
  `object_id` int(8) DEFAULT NULL,
  `type` varchar(8) DEFAULT NULL,
  `success` tinyint(1) DEFAULT '0',
  `api_batch_id` varchar(50) DEFAULT NULL,
  `api_message` varchar(50) DEFAULT NULL,
  `api_status_code` varchar(20) DEFAULT NULL,
  `http_status_code` varchar(4) DEFAULT NULL,
  `details` text,
  `transient_error` varchar(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_categories`
--

CREATE TABLE `class_categories` (
  `id` int(3) NOT NULL,
  `picture` varchar(64) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `fieldset` int(2) DEFAULT NULL,
  `order_no` int(5) DEFAULT NULL,
  `groups` varchar(250) NOT NULL DEFAULT '0',
  `ads` int(10) NOT NULL DEFAULT '0',
  `level` int(1) NOT NULL DEFAULT '1',
  `active` tinyint(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_categories_lang`
--

CREATE TABLE `class_categories_lang` (
  `id` int(4) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(128) DEFAULT NULL,
  `description` text,
  `page_title` varchar(250) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_categories_no_ads`
--

CREATE TABLE `class_categories_no_ads` (
  `category_id` int(4) NOT NULL,
  `field` varchar(40) NOT NULL,
  `val` varchar(64) NOT NULL,
  `no` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_chat`
--

CREATE TABLE `class_chat` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `from` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `from_contact_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `to` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `to_contact_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `del` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_chat_guest_users`
--

CREATE TABLE `class_chat_guest_users` (
  `id` int(11) NOT NULL DEFAULT '0',
  `contact_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_cinetpay_return`
--

CREATE TABLE `class_cinetpay_return` (
  `id` bigint(20) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `entirepost` text,
  `signature` varchar(50) DEFAULT NULL,
  `cpm_amount` double DEFAULT NULL,
  `cpm_currency` varchar(3) DEFAULT NULL,
  `cpm_payid` varchar(40) DEFAULT NULL,
  `cpm_version` varchar(10) DEFAULT NULL,
  `cpm_payment_date` varchar(40) DEFAULT NULL,
  `cpm_payment_time` varchar(40) DEFAULT NULL,
  `cpm_error_message` varchar(20) DEFAULT NULL,
  `payment_method` varchar(20) DEFAULT NULL,
  `cpm_cel_phone_num` varchar(30) DEFAULT NULL,
  `cpm_cell_phone_prefixe` varchar(10) DEFAULT NULL,
  `cpm_ipn_ack` varchar(3) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL,
  `cpm_result` varchar(10) DEFAULT NULL,
  `cpm_trans_status` varchar(20) DEFAULT NULL,
  `cpm_designation` varchar(30) DEFAULT NULL,
  `buyer_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_cinetpay_settings`
--

CREATE TABLE `class_cinetpay_settings` (
  `cinetpay_siteId` varchar(128) DEFAULT NULL,
  `cinetpay_apikey` varchar(50) DEFAULT NULL,
  `cinetpay_currency` varchar(3) DEFAULT NULL,
  `cinetpay_description` varchar(200) DEFAULT NULL,
  `cinetpay_test` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_clickatell`
--

CREATE TABLE `class_clickatell` (
  `clickatell_username` varchar(50) DEFAULT NULL,
  `clickatell_password` varchar(50) DEFAULT NULL,
  `clickatell_api_id` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_clickatell_log`
--

CREATE TABLE `class_clickatell_log` (
  `object_id` int(8) DEFAULT NULL,
  `type` varchar(8) DEFAULT NULL,
  `success` tinyint(1) DEFAULT '0',
  `message_id` varchar(30) DEFAULT NULL,
  `error_code` varchar(10) DEFAULT NULL,
  `error_string` varchar(200) DEFAULT NULL,
  `details` text,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_comments`
--

CREATE TABLE `class_comments` (
  `id` int(10) NOT NULL,
  `listing_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `content` text,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_comments_settings`
--

CREATE TABLE `class_comments_settings` (
  `require_login` tinyint(1) DEFAULT '0',
  `admin_verification` tinyint(1) DEFAULT '2',
  `comments_on_page` int(2) DEFAULT '20',
  `badwords_check` tinyint(1) DEFAULT '1',
  `html_editor` tinyint(1) DEFAULT '1',
  `allowed_html` varchar(250) DEFAULT NULL,
  `logo_field` varchar(50) DEFAULT NULL,
  `use_email` tinyint(1) DEFAULT '2',
  `use_website` tinyint(1) DEFAULT '0',
  `captcha` tinyint(1) DEFAULT '0',
  `terms_eng` text,
  `terms_dutch` text,
  `terms_arabic` text,
  `terms_kurdish` text,
  `terms_tr` text,
  `terms_greek` text,
  `terms_ru` text,
  `terms_german` text,
  `terms_nor` text,
  `terms_ch` text,
  `terms_french` text,
  `terms_italian` text,
  `terms_danish` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_connect_settings`
--

CREATE TABLE `class_connect_settings` (
  `enable_facebook_login` tinyint(1) DEFAULT '1',
  `enable_google_login` tinyint(1) DEFAULT '1',
  `enable_openid_login` tinyint(1) DEFAULT '1',
  `facebook_app_id` varchar(100) DEFAULT NULL,
  `contact_field` varchar(100) DEFAULT NULL,
  `group_id` int(2) DEFAULT '1',
  `google_client_id` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_countries`
--

CREATE TABLE `class_countries` (
  `id` int(2) NOT NULL,
  `name` varchar(128) DEFAULT '',
  `lang_id` varchar(20) DEFAULT 'eng',
  `set_id` int(3) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_coupons`
--

CREATE TABLE `class_coupons` (
  `id` int(2) NOT NULL,
  `code` varchar(40) DEFAULT '',
  `type` varchar(20) DEFAULT 'fixed',
  `discount` double DEFAULT NULL,
  `ads` tinyint(1) DEFAULT '1',
  `store` tinyint(1) DEFAULT '1',
  `groups` varchar(30) DEFAULT '0',
  `allow` int(3) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_credits_packages`
--

CREATE TABLE `class_credits_packages` (
  `id` int(2) NOT NULL,
  `no_credits` double NOT NULL,
  `price` double DEFAULT NULL,
  `groups` varchar(250) DEFAULT '0',
  `order_no` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_credits_packages_lang`
--

CREATE TABLE `class_credits_packages_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_credits_return`
--

CREATE TABLE `class_credits_return` (
  `id` int(10) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_credits_settings`
--

CREATE TABLE `class_credits_settings` (
  `unit` double DEFAULT NULL,
  `groups` varchar(250) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_currencies`
--

CREATE TABLE `class_currencies` (
  `id` int(2) NOT NULL,
  `currency` varchar(16) DEFAULT NULL,
  `order_no` int(4) DEFAULT '1000'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_custom_pages`
--

CREATE TABLE `class_custom_pages` (
  `id` int(3) NOT NULL,
  `code` varchar(30) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1',
  `hreflink` varchar(200) DEFAULT NULL,
  `navlink` tinyint(1) DEFAULT '1',
  `blank` tinyint(1) DEFAULT '0',
  `parent_id` int(11) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `read_only` tinyint(1) DEFAULT '0',
  `order_no` int(5) DEFAULT NULL,
  `groups` varchar(250) NOT NULL DEFAULT '0',
  `noindex` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_custom_pages_lang`
--

CREATE TABLE `class_custom_pages_lang` (
  `id` int(3) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `title` varchar(128) DEFAULT NULL,
  `content` text,
  `meta_description` text,
  `meta_keywords` text,
  `page_title` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_db_backup`
--

CREATE TABLE `class_db_backup` (
  `enabled` tinyint(1) DEFAULT '0',
  `backup_compress` varchar(10) DEFAULT '0',
  `backup_freq` varchar(30) DEFAULT NULL,
  `keep` int(2) DEFAULT NULL,
  `generated_last` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_dealers_page_settings`
--

CREATE TABLE `class_dealers_page_settings` (
  `all_with_store` tinyint(1) DEFAULT '1',
  `groups` varchar(20) DEFAULT NULL,
  `link_to_navbar` tinyint(1) DEFAULT '1',
  `link_name_eng` varchar(80) DEFAULT NULL,
  `logo_field` varchar(50) DEFAULT NULL,
  `name_field` varchar(50) DEFAULT 'contact_name',
  `details_fields` varchar(200) DEFAULT NULL,
  `group_on_categories` tinyint(1) DEFAULT '0',
  `category_field` varchar(40) DEFAULT NULL,
  `categories_on_row` tinyint(1) DEFAULT '3',
  `search_fields` varchar(200) DEFAULT NULL,
  `link_name_dutch` varchar(80) DEFAULT NULL,
  `link_name_arabic` varchar(80) DEFAULT NULL,
  `link_name_kurdish` varchar(80) DEFAULT NULL,
  `title_eng` varchar(200) DEFAULT NULL,
  `meta_keywords_eng` text,
  `meta_description_eng` text,
  `title_dutch` varchar(200) DEFAULT NULL,
  `meta_keywords_dutch` text,
  `meta_description_dutch` text,
  `title_arabic` varchar(200) DEFAULT NULL,
  `meta_keywords_arabic` text,
  `meta_description_arabic` text,
  `title_kurdish` varchar(200) DEFAULT NULL,
  `meta_keywords_kurdish` text,
  `meta_description_kurdish` text,
  `link_name_tr` varchar(80) DEFAULT NULL,
  `title_tr` varchar(200) DEFAULT NULL,
  `meta_keywords_tr` text,
  `meta_description_tr` text,
  `link_name_greek` varchar(80) DEFAULT NULL,
  `title_greek` varchar(200) DEFAULT NULL,
  `meta_keywords_greek` text,
  `meta_description_greek` text,
  `link_name_ru` varchar(80) DEFAULT NULL,
  `title_ru` varchar(200) DEFAULT NULL,
  `meta_keywords_ru` text,
  `meta_description_ru` text,
  `link_name_german` varchar(80) DEFAULT NULL,
  `title_german` varchar(200) DEFAULT NULL,
  `meta_keywords_german` text,
  `meta_description_german` text,
  `link_name_nor` varchar(80) DEFAULT NULL,
  `title_nor` varchar(200) DEFAULT NULL,
  `meta_keywords_nor` text,
  `meta_description_nor` text,
  `enable_map_search` tinyint(1) DEFAULT '0',
  `map_visible` tinyint(1) DEFAULT '0',
  `search_location_fields` varchar(100) DEFAULT NULL,
  `link_name_ch` varchar(80) DEFAULT NULL,
  `title_ch` varchar(200) DEFAULT NULL,
  `meta_keywords_ch` text,
  `meta_description_ch` text,
  `link_name_french` varchar(80) DEFAULT NULL,
  `title_french` varchar(200) DEFAULT NULL,
  `meta_keywords_french` text,
  `meta_description_french` text,
  `link_name_italian` varchar(80) DEFAULT NULL,
  `title_italian` varchar(200) DEFAULT NULL,
  `meta_keywords_italian` text,
  `meta_description_italian` text,
  `link_name_danish` varchar(80) DEFAULT NULL,
  `title_danish` varchar(200) DEFAULT NULL,
  `meta_keywords_danish` text,
  `meta_description_danish` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_default_images`
--

CREATE TABLE `class_default_images` (
  `category_id` int(3) NOT NULL,
  `thmb` varchar(50) NOT NULL,
  `big_thmb` varchar(50) NOT NULL,
  `thmb_mobile` varchar(50) NOT NULL,
  `big_thmb_mobile` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_depending_fields`
--

CREATE TABLE `class_depending_fields` (
  `id` int(2) NOT NULL,
  `no` int(1) DEFAULT '2',
  `caption1` varchar(64) DEFAULT NULL,
  `caption2` varchar(64) DEFAULT NULL,
  `caption3` varchar(64) DEFAULT NULL,
  `caption4` varchar(64) DEFAULT NULL,
  `caption5` varchar(32) DEFAULT NULL,
  `table1` varchar(64) DEFAULT NULL,
  `table2` varchar(64) DEFAULT NULL,
  `table3` varchar(64) DEFAULT NULL,
  `table4` varchar(64) DEFAULT NULL,
  `table5` varchar(32) DEFAULT NULL,
  `required1` tinyint(1) DEFAULT NULL,
  `required2` tinyint(1) DEFAULT NULL,
  `required3` tinyint(1) DEFAULT NULL,
  `required4` tinyint(1) DEFAULT NULL,
  `required5` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_depending_fields_lang`
--

CREATE TABLE `class_depending_fields_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name1` varchar(64) DEFAULT NULL,
  `name2` varchar(64) DEFAULT NULL,
  `name3` varchar(64) DEFAULT NULL,
  `name4` varchar(64) DEFAULT NULL,
  `name5` varchar(32) DEFAULT NULL,
  `top_str1` varchar(64) DEFAULT NULL,
  `top_str2` varchar(64) DEFAULT NULL,
  `top_str3` varchar(64) DEFAULT NULL,
  `top_str4` varchar(64) DEFAULT NULL,
  `top_str5` varchar(32) DEFAULT NULL,
  `error_message1` text,
  `error_message2` text,
  `error_message3` text,
  `error_message4` text,
  `error_message5` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_discounts`
--

CREATE TABLE `class_discounts` (
  `object_id` int(2) NOT NULL,
  `type` varchar(10) DEFAULT 'ad',
  `code` varchar(40) DEFAULT '',
  `user_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_email_alerts`
--

CREATE TABLE `class_email_alerts` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `search` text,
  `frequency` varchar(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_check` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `key` varchar(200) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_epay_return`
--

CREATE TABLE `class_epay_return` (
  `id` int(10) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `tid` int(20) DEFAULT NULL,
  `orderid` varchar(50) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `cur` int(3) DEFAULT NULL,
  `eKey` varchar(50) DEFAULT NULL,
  `fraud` int(1) DEFAULT NULL,
  `transfee` int(10) DEFAULT NULL,
  `HTTP_COOKIE` varchar(50) DEFAULT NULL,
  `subscriptionid` int(30) DEFAULT NULL,
  `cardid` int(50) DEFAULT NULL,
  `entirepost` text,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_epay_settings`
--

CREATE TABLE `class_epay_settings` (
  `epay_merchantnumber` int(20) DEFAULT NULL,
  `epay_language` int(2) DEFAULT '1',
  `epay_currency` int(4) DEFAULT '208',
  `epay_md5key` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ev_settings`
--

CREATE TABLE `class_ev_settings` (
  `no` int(2) DEFAULT '10'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_experttexting`
--

CREATE TABLE `class_experttexting` (
  `experttexting_username` varchar(50) DEFAULT NULL,
  `experttexting_password` varchar(50) DEFAULT NULL,
  `experttexting_api_key` varchar(30) DEFAULT NULL,
  `experttexting_from` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_experttexting_log`
--

CREATE TABLE `class_experttexting_log` (
  `success` int(1) DEFAULT '1',
  `status` int(1) DEFAULT '0',
  `message_id` varchar(30) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `error_message` varchar(200) DEFAULT NULL,
  `details` text,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_failed_attempts`
--

CREATE TABLE `class_failed_attempts` (
  `is_admin` tinyint(1) DEFAULT '0',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_favourites`
--

CREATE TABLE `class_favourites` (
  `ad_id` int(10) NOT NULL,
  `user_id` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_featured_plans`
--

CREATE TABLE `class_featured_plans` (
  `id` int(2) NOT NULL,
  `amount` float DEFAULT '0',
  `no_days` int(4) DEFAULT '0',
  `order_no` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_fields`
--

CREATE TABLE `class_fields` (
  `id` int(3) NOT NULL,
  `fieldset` varchar(200) DEFAULT NULL,
  `caption` varchar(200) DEFAULT NULL,
  `type` varchar(20) DEFAULT 'textbox',
  `order_no` int(2) DEFAULT NULL,
  `is_numeric` tinyint(1) DEFAULT '0',
  `validation_type` varchar(100) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `min` int(10) DEFAULT NULL,
  `max` int(10) DEFAULT NULL,
  `required` tinyint(1) DEFAULT '0',
  `editable` tinyint(1) DEFAULT '1',
  `advanced_search` tinyint(1) DEFAULT NULL,
  `quick_search` tinyint(1) DEFAULT NULL,
  `search_type` tinyint(1) DEFAULT '1',
  `max_uploaded_size` double DEFAULT NULL,
  `extensions` varchar(100) DEFAULT NULL,
  `image_resize` varchar(20) DEFAULT NULL,
  `dep_id` int(4) DEFAULT NULL,
  `other_val` tinyint(1) DEFAULT '0',
  `read_only` tinyint(1) DEFAULT '0',
  `unique` tinyint(1) DEFAULT '0',
  `ext1` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `all_val` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_fieldsets`
--

CREATE TABLE `class_fieldsets` (
  `id` int(2) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_fields_lang`
--

CREATE TABLE `class_fields_lang` (
  `id` int(3) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(64) DEFAULT NULL,
  `top_str` varchar(64) DEFAULT NULL,
  `error_message` text,
  `error_message2` text NOT NULL,
  `info_message` text,
  `default_val` text,
  `prefix` varchar(64) DEFAULT NULL,
  `postfix` varchar(64) DEFAULT NULL,
  `elements` text,
  `search_elements` text,
  `date_format` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_fortumo_products`
--

CREATE TABLE `class_fortumo_products` (
  `id` int(2) NOT NULL,
  `price` float NOT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `short_code` char(10) DEFAULT NULL,
  `secret` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_fortumo_return`
--

CREATE TABLE `class_fortumo_return` (
  `id` int(10) NOT NULL,
  `ukey` varchar(20) DEFAULT '0',
  `message` varchar(100) DEFAULT NULL,
  `sender` varchar(50) DEFAULT NULL,
  `country` varchar(2) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `service_id` varchar(100) DEFAULT NULL,
  `message_id` varchar(50) DEFAULT NULL,
  `keyword` varchar(50) DEFAULT NULL,
  `shortcode` int(10) DEFAULT NULL,
  `operator` varchar(40) DEFAULT NULL,
  `billing_type` varchar(2) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `test` varchar(5) DEFAULT NULL,
  `sig` varchar(50) DEFAULT NULL,
  `entirepost` text,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_fortumo_settings`
--

CREATE TABLE `class_fortumo_settings` (
  `currency` varchar(3) DEFAULT NULL,
  `test` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_highlited_ads`
--

CREATE TABLE `class_highlited_ads` (
  `title_kurdish` varchar(100) DEFAULT NULL,
  `no_ads` int(2) DEFAULT '4',
  `title_eng` varchar(100) DEFAULT NULL,
  `title_dutch` varchar(100) DEFAULT NULL,
  `title_arabic` varchar(100) DEFAULT NULL,
  `title_tr` varchar(100) DEFAULT NULL,
  `title_greek` varchar(100) DEFAULT NULL,
  `title_ru` varchar(100) DEFAULT NULL,
  `title_german` varchar(100) DEFAULT NULL,
  `title_nor` varchar(100) DEFAULT NULL,
  `title_ch` varchar(100) DEFAULT NULL,
  `title_french` varchar(100) DEFAULT NULL,
  `title_italian` varchar(100) DEFAULT NULL,
  `title_danish` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_hipay_return`
--

CREATE TABLE `class_hipay_return` (
  `id` int(10) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `entirepost` text,
  `operation` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `time` varchar(130) DEFAULT NULL,
  `transid` varchar(130) DEFAULT NULL,
  `amount` varchar(130) DEFAULT NULL,
  `currency` varchar(130) DEFAULT NULL,
  `idformerchant` varchar(130) DEFAULT NULL,
  `merchantdatas` varchar(130) DEFAULT NULL,
  `emailClient` varchar(130) DEFAULT NULL,
  `subscriptionId` varchar(130) DEFAULT NULL,
  `refProduct` varchar(130) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_hipay_settings`
--

CREATE TABLE `class_hipay_settings` (
  `member_account` varchar(128) DEFAULT NULL,
  `merchant_password` varchar(100) DEFAULT NULL,
  `website_id` varchar(10) DEFAULT NULL,
  `locale` varchar(20) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `notification_email` varchar(100) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_icepay_ipn`
--

CREATE TABLE `class_icepay_ipn` (
  `id` int(10) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Status` varchar(10) DEFAULT NULL,
  `StatusCode` varchar(100) DEFAULT NULL,
  `Merchant` int(10) DEFAULT NULL,
  `OrderID` varchar(10) DEFAULT NULL,
  `PaymentID` int(10) DEFAULT NULL,
  `Reference` varchar(50) DEFAULT NULL,
  `TransactionID` varchar(50) DEFAULT NULL,
  `ConsumerName` varchar(100) DEFAULT NULL,
  `ConsumerAccountNumber` varchar(100) DEFAULT NULL,
  `ConsumerAddress` varchar(100) DEFAULT NULL,
  `ConsumerHouseNumber` varchar(10) DEFAULT NULL,
  `ConsumerPostCode` varchar(50) DEFAULT NULL,
  `ConsumerCity` varchar(100) DEFAULT NULL,
  `ConsumerCountry` varchar(100) DEFAULT NULL,
  `ConsumerEmail` varchar(200) DEFAULT NULL,
  `ConsumerPhoneNumber` varchar(50) DEFAULT NULL,
  `ConsumerIPAddress` varchar(50) DEFAULT NULL,
  `Amount` int(20) DEFAULT NULL,
  `Currency` varchar(3) DEFAULT NULL,
  `Duration` int(10) DEFAULT NULL,
  `Checksum` varchar(40) DEFAULT NULL,
  `PaymentMethod` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_icepay_settings`
--

CREATE TABLE `class_icepay_settings` (
  `merchantID` int(10) DEFAULT NULL,
  `secretCode` varchar(50) DEFAULT NULL,
  `ic_language` varchar(3) DEFAULT NULL,
  `ic_country` varchar(3) DEFAULT NULL,
  `ic_currency` varchar(3) DEFAULT NULL,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ie_settings`
--

CREATE TABLE `class_ie_settings` (
  `bulk_type` varchar(20) DEFAULT NULL,
  `bulk_template` int(2) DEFAULT NULL,
  `bulk_plan` int(2) DEFAULT NULL,
  `csv_column_separator` varchar(10) DEFAULT NULL,
  `csv_field_separator` varchar(10) DEFAULT NULL,
  `custom_page_id` int(2) DEFAULT '3'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ie_templates`
--

CREATE TABLE `class_ie_templates` (
  `id` int(2) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `type` varchar(10) DEFAULT 'ad',
  `purpose` varchar(10) DEFAULT 'import'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ie_templates_fields`
--

CREATE TABLE `class_ie_templates_fields` (
  `id` int(3) NOT NULL,
  `template_id` int(2) DEFAULT NULL,
  `field` varchar(50) DEFAULT NULL,
  `alias` varchar(40) DEFAULT NULL,
  `cdata` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_info`
--

CREATE TABLE `class_info` (
  `lang_id` varchar(20) DEFAULT 'eng',
  `code` varchar(50) NOT NULL,
  `content` text,
  `info` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_instamojo_return`
--

CREATE TABLE `class_instamojo_return` (
  `id` bigint(20) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `entirepost` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_instamojo_settings`
--

CREATE TABLE `class_instamojo_settings` (
  `instamojo_api_key` varchar(50) DEFAULT NULL,
  `instamojo_auth_token` varchar(50) DEFAULT NULL,
  `instamojo_salt` varchar(50) DEFAULT NULL,
  `instamojo_test` int(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_invoices`
--

CREATE TABLE `class_invoices` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `processor` varchar(40) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `payment_action` int(20) NOT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `tax` float DEFAULT '0',
  `seller_details` text,
  `invoice_logo` varchar(100) DEFAULT NULL,
  `user_details` varchar(150) DEFAULT NULL,
  `custom_text` text,
  `payment_details` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_invoice_settings`
--

CREATE TABLE `class_invoice_settings` (
  `enable_invoices` tinyint(1) DEFAULT '0',
  `seller_details` text,
  `invoice_logo` varchar(100) DEFAULT NULL,
  `user_fields` varchar(150) DEFAULT NULL,
  `custom_text` text,
  `filename` varchar(20) DEFAULT 'invoice',
  `show_vat` tinyint(1) DEFAULT '0',
  `vat_percent` int(3) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_klarna_return`
--

CREATE TABLE `class_klarna_return` (
  `id` bigint(20) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `entirepost` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_klarna_settings`
--

CREATE TABLE `class_klarna_settings` (
  `merchant_id` varchar(20) DEFAULT NULL,
  `sharedSecret` varchar(50) DEFAULT NULL,
  `test` varchar(50) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `country` varchar(10) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `terms_uri` varchar(200) DEFAULT NULL,
  `payment_desc` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_languages`
--

CREATE TABLE `class_languages` (
  `id` varchar(20) NOT NULL,
  `code` varchar(2) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `characters_map` varchar(50) DEFAULT NULL,
  `default` tinyint(1) DEFAULT '0',
  `enabled` tinyint(1) DEFAULT '1',
  `order_no` int(2) DEFAULT '1',
  `direction` varchar(3) NOT NULL DEFAULT 'ltr'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_latest_auctions`
--

CREATE TABLE `class_latest_auctions` (
  `title_kurdish` varchar(100) DEFAULT NULL,
  `no_ads` int(2) DEFAULT '4',
  `title_eng` varchar(100) DEFAULT NULL,
  `title_dutch` varchar(100) DEFAULT NULL,
  `title_arabic` varchar(100) DEFAULT NULL,
  `title_tr` varchar(100) DEFAULT NULL,
  `title_greek` varchar(100) DEFAULT NULL,
  `title_ru` varchar(100) DEFAULT NULL,
  `title_german` varchar(100) DEFAULT NULL,
  `title_nor` varchar(100) DEFAULT NULL,
  `title_ch` varchar(100) DEFAULT NULL,
  `title_french` varchar(100) DEFAULT NULL,
  `title_italian` varchar(100) DEFAULT NULL,
  `title_danish` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_latest_visited`
--

CREATE TABLE `class_latest_visited` (
  `title_eng` varchar(100) DEFAULT NULL,
  `no_ads` int(2) DEFAULT '4',
  `show_on_search` tinyint(1) DEFAULT '1',
  `show_on_details` tinyint(1) DEFAULT '0',
  `title_german` varchar(100) DEFAULT NULL,
  `title_ru` varchar(100) DEFAULT NULL,
  `title_arabic` varchar(100) DEFAULT NULL,
  `title_tr` varchar(100) DEFAULT NULL,
  `title_greek` varchar(100) DEFAULT NULL,
  `title_ch` varchar(100) DEFAULT NULL,
  `title_french` varchar(100) DEFAULT NULL,
  `title_italian` varchar(100) DEFAULT NULL,
  `title_dutch` varchar(100) DEFAULT NULL,
  `title_danish` varchar(100) DEFAULT NULL,
  `title_nor` varchar(100) DEFAULT NULL,
  `title_kurdish` varchar(100) DEFAULT NULL,
  `show_on_index` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_loancalc_settings`
--

CREATE TABLE `class_loancalc_settings` (
  `title_kurdish` varchar(100) DEFAULT NULL,
  `use_trade_in` tinyint(1) DEFAULT '1',
  `default_down` double DEFAULT '0',
  `default_ir` double DEFAULT '0',
  `default_term` double DEFAULT '0',
  `default_tax` double DEFAULT '0',
  `description_kurdish` text,
  `currency` varchar(10) DEFAULT '$',
  `title_eng` varchar(100) DEFAULT NULL,
  `description_eng` text,
  `title_dutch` varchar(100) DEFAULT NULL,
  `description_dutch` text,
  `title_arabic` varchar(100) DEFAULT NULL,
  `description_arabic` text,
  `title_ru` varchar(100) DEFAULT NULL,
  `description_ru` text,
  `title_greek` varchar(100) DEFAULT NULL,
  `description_greek` text,
  `title_german` varchar(100) DEFAULT NULL,
  `description_german` text,
  `title_nor` varchar(100) DEFAULT NULL,
  `description_nor` text,
  `title_tr` varchar(100) DEFAULT NULL,
  `description_tr` text,
  `title_ch` varchar(100) DEFAULT NULL,
  `description_ch` text,
  `categories_list` text,
  `title_french` varchar(100) DEFAULT NULL,
  `description_french` text,
  `title_italian` varchar(100) DEFAULT NULL,
  `description_italian` text,
  `title_danish` varchar(100) DEFAULT NULL,
  `description_danish` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_location_no_ads`
--

CREATE TABLE `class_location_no_ads` (
  `field` varchar(64) NOT NULL,
  `val` varchar(64) NOT NULL,
  `no` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_login_history`
--

CREATE TABLE `class_login_history` (
  `id` int(10) NOT NULL,
  `auth_name` varchar(60) DEFAULT NULL,
  `date_login` datetime DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `succeeded` tinyint(1) DEFAULT '0',
  `blocked` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_mailchimp`
--

CREATE TABLE `class_mailchimp` (
  `api_key` varchar(50) DEFAULT NULL,
  `list_id` varchar(20) DEFAULT NULL,
  `subscribe_on_register` tinyint(1) DEFAULT '1',
  `subscribe_on_contact` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_mails`
--

CREATE TABLE `class_mails` (
  `lang_id` varchar(20) DEFAULT 'eng',
  `code` varchar(50) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` text,
  `info` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_mails_settings`
--

CREATE TABLE `class_mails_settings` (
  `html_mails` tinyint(1) DEFAULT '1',
  `use_smtp_auth` tinyint(1) DEFAULT '0',
  `smtp_server` varchar(40) DEFAULT NULL,
  `port` int(5) DEFAULT NULL,
  `username` varchar(70) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `bcc_to` varchar(70) DEFAULT NULL,
  `send_using_admin_email` tinyint(1) DEFAULT '1',
  `encryption` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_manual_return`
--

CREATE TABLE `class_manual_return` (
  `id` int(10) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_mb_return`
--

CREATE TABLE `class_mb_return` (
  `id` int(10) NOT NULL,
  `pay_to_email` varchar(128) DEFAULT NULL,
  `pay_from_email` varchar(128) DEFAULT NULL,
  `merchant_id` varchar(100) DEFAULT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `transaction_id` varchar(50) DEFAULT NULL,
  `mb_transaction_id` varchar(50) DEFAULT NULL,
  `mb_amount` varchar(30) DEFAULT NULL,
  `mb_currency` varchar(10) DEFAULT NULL,
  `status` varchar(3) DEFAULT NULL,
  `md5sig` varchar(128) DEFAULT NULL,
  `amount` varchar(30) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `failed_reason_code` varchar(10) DEFAULT NULL,
  `sha2sig` varchar(100) DEFAULT NULL,
  `neteller_id` varchar(100) DEFAULT NULL,
  `merchant_fields` varchar(100) DEFAULT NULL,
  `entirepost` text,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_mb_settings`
--

CREATE TABLE `class_mb_settings` (
  `mb_email` varchar(128) DEFAULT NULL,
  `mb_secret` varchar(10) DEFAULT NULL,
  `mb_currency` char(3) DEFAULT NULL,
  `mb_language` char(3) DEFAULT NULL,
  `mb_pay_title` varchar(128) DEFAULT NULL,
  `mb_demo` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_messages`
--

CREATE TABLE `class_messages` (
  `id` int(10) NOT NULL,
  `from` int(10) DEFAULT NULL,
  `from_email` varchar(50) DEFAULT NULL,
  `from_phone` varchar(20) DEFAULT NULL,
  `to` int(10) DEFAULT NULL,
  `to_email` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(15) DEFAULT NULL,
  `ad_id` int(10) DEFAULT NULL,
  `message` text,
  `report` tinyint(1) DEFAULT '0',
  `reply_to` int(10) DEFAULT '0',
  `starting` int(10) DEFAULT '0',
  `pending` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_meta_extension`
--

CREATE TABLE `class_meta_extension` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text,
  `search_terms` text,
  `search_terms_ext` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_mobile_hsi`
--

CREATE TABLE `class_mobile_hsi` (
  `icon60` varchar(50) DEFAULT NULL,
  `icon76` varchar(50) DEFAULT NULL,
  `icon120` varchar(50) DEFAULT NULL,
  `icon152` varchar(50) DEFAULT NULL,
  `icon180` varchar(50) DEFAULT NULL,
  `icon128` varchar(50) DEFAULT NULL,
  `icon192` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_mobile_settings`
--

CREATE TABLE `class_mobile_settings` (
  `enable_mobile_templates` tinyint(1) DEFAULT '1',
  `mobile_template` varchar(40) DEFAULT NULL,
  `enable_mobile_subdomain` tinyint(1) DEFAULT '0',
  `mobile_thmb_width` int(4) DEFAULT '65',
  `mobile_thmb_height` int(4) DEFAULT '50',
  `mobile_big_thmb_width` int(4) DEFAULT '250',
  `mobile_big_thmb_height` int(4) DEFAULT '220',
  `mobile_nopic` varchar(128) DEFAULT NULL,
  `mobile_big_nopic` varchar(128) DEFAULT NULL,
  `mobile_show_header` tinyint(1) DEFAULT '1',
  `mobile_header_pic` varchar(128) DEFAULT NULL,
  `mobile_header_pic_link` varchar(128) DEFAULT NULL,
  `mobile_ads_per_page` int(2) DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_mobilpay_products`
--

CREATE TABLE `class_mobilpay_products` (
  `id` int(2) NOT NULL,
  `price` float NOT NULL,
  `service` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_mobilpay_return`
--

CREATE TABLE `class_mobilpay_return` (
  `id` bigint(20) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `entirepost` text,
  `purchase` varchar(50) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  `timestamp` varchar(30) DEFAULT NULL,
  `error` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_mobilpay_settings`
--

CREATE TABLE `class_mobilpay_settings` (
  `mobilpay_signature` varchar(30) DEFAULT NULL,
  `mobilpay_certificate` varchar(100) DEFAULT NULL,
  `mobilpay_private_key` varchar(100) DEFAULT NULL,
  `mobilpay_test` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_modules`
--

CREATE TABLE `class_modules` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `enabled` tinyint(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_multicurrency`
--

CREATE TABLE `class_multicurrency` (
  `id` int(2) NOT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `default` tinyint(1) DEFAULT '0',
  `ratio` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_news`
--

CREATE TABLE `class_news` (
  `id` int(20) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `title` varchar(200) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `summary` text,
  `content` text,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(1) DEFAULT '1',
  `order_no` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_news_settings`
--

CREATE TABLE `class_news_settings` (
  `news_on_first_page` int(2) DEFAULT '2',
  `news_on_each_page` int(2) DEFAULT '4',
  `title_eng` varchar(100) DEFAULT NULL,
  `title_dutch` varchar(100) DEFAULT NULL,
  `title_arabic` varchar(100) DEFAULT NULL,
  `title_kurdish` varchar(100) DEFAULT NULL,
  `title_tr` varchar(100) DEFAULT NULL,
  `title_greek` varchar(100) DEFAULT NULL,
  `title_ru` varchar(100) DEFAULT NULL,
  `title_german` varchar(100) DEFAULT NULL,
  `title_nor` varchar(100) DEFAULT NULL,
  `title_ch` varchar(100) DEFAULT NULL,
  `title_french` varchar(100) DEFAULT NULL,
  `title_italian` varchar(100) DEFAULT NULL,
  `title_danish` varchar(100) DEFAULT NULL,
  `page_title` varchar(200) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text,
  `page_title_arabic` varchar(200) DEFAULT NULL,
  `meta_keywords_arabic` text,
  `meta_description_arabic` text,
  `page_title_ch` varchar(200) DEFAULT NULL,
  `meta_keywords_ch` text,
  `meta_description_ch` text,
  `page_title_danish` varchar(200) DEFAULT NULL,
  `meta_keywords_danish` text,
  `meta_description_danish` text,
  `page_title_dutch` varchar(200) DEFAULT NULL,
  `meta_keywords_dutch` text,
  `meta_description_dutch` text,
  `page_title_eng` varchar(200) DEFAULT NULL,
  `meta_keywords_eng` text,
  `meta_description_eng` text,
  `page_title_french` varchar(200) DEFAULT NULL,
  `meta_keywords_french` text,
  `meta_description_french` text,
  `page_title_german` varchar(200) DEFAULT NULL,
  `meta_keywords_german` text,
  `meta_description_german` text,
  `page_title_greek` varchar(200) DEFAULT NULL,
  `meta_keywords_greek` text,
  `meta_description_greek` text,
  `page_title_italian` varchar(200) DEFAULT NULL,
  `meta_keywords_italian` text,
  `meta_description_italian` text,
  `page_title_kurdish` varchar(200) DEFAULT NULL,
  `meta_keywords_kurdish` text,
  `meta_description_kurdish` text,
  `page_title_ru` varchar(200) DEFAULT NULL,
  `meta_keywords_ru` text,
  `meta_description_ru` text,
  `page_title_nor` varchar(200) DEFAULT NULL,
  `meta_keywords_nor` text,
  `meta_description_nor` text,
  `page_title_tr` varchar(200) DEFAULT NULL,
  `meta_keywords_tr` text,
  `meta_description_tr` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_new_alerts`
--

CREATE TABLE `class_new_alerts` (
  `id` int(10) NOT NULL,
  `alert_id` int(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `listings` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_online_users`
--

CREATE TABLE `class_online_users` (
  `id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `login_date` datetime NOT NULL,
  `last_activity` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_options`
--

CREATE TABLE `class_options` (
  `object_id` int(2) NOT NULL,
  `option` varchar(20) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_expires` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_packages`
--

CREATE TABLE `class_packages` (
  `id` int(2) NOT NULL,
  `type` varchar(10) DEFAULT 'ad',
  `amount` float DEFAULT '0',
  `no_words` int(5) DEFAULT '0',
  `no_days` int(4) DEFAULT '0',
  `no_pictures` int(2) DEFAULT NULL,
  `no_ads` int(3) DEFAULT '1',
  `subscription_time` int(5) DEFAULT '0',
  `groups` varchar(250) DEFAULT '0',
  `categories` text,
  `order_no` int(5) DEFAULT NULL,
  `featured` tinyint(1) DEFAULT '0',
  `highlited` tinyint(1) DEFAULT '0',
  `priority` int(4) DEFAULT '0',
  `video` tinyint(1) DEFAULT '0',
  `allow` int(2) DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `photo_mandatory` tinyint(1) DEFAULT '0',
  `urgent` tinyint(1) DEFAULT '0',
  `url` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_packages_lang`
--

CREATE TABLE `class_packages_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(128) DEFAULT '',
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_pagseguro_return`
--

CREATE TABLE `class_pagseguro_return` (
  `id` int(10) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `code` varchar(100) DEFAULT NULL,
  `reference` varchar(30) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `grossAmount` double DEFAULT NULL,
  `netAmount` double DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `areaCode` varchar(3) DEFAULT NULL,
  `number` varchar(30) DEFAULT NULL,
  `entirepost` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_pagseguro_settings`
--

CREATE TABLE `class_pagseguro_settings` (
  `pagseguro_email` varchar(50) DEFAULT NULL,
  `pagseguro_token` varchar(50) DEFAULT NULL,
  `pagseguro_currency` varchar(3) DEFAULT NULL,
  `pagseguro_item_name` varchar(40) DEFAULT NULL,
  `pagseguro_item_description` text,
  `pagseguro_test` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_password_recovery`
--

CREATE TABLE `class_password_recovery` (
  `user_id` int(20) DEFAULT NULL,
  `activation` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `date` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_payfast_return`
--

CREATE TABLE `class_payfast_return` (
  `id` int(10) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `m_payment_id` varchar(100) DEFAULT NULL,
  `pf_payment_id` varchar(100) DEFAULT NULL,
  `payment_status` varchar(20) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `item_description` varchar(250) DEFAULT NULL,
  `amount_gross` varchar(20) DEFAULT NULL,
  `amount_fee` varchar(20) DEFAULT NULL,
  `amount_net` varchar(20) DEFAULT NULL,
  `name_first` varchar(50) DEFAULT NULL,
  `name_last` varchar(50) DEFAULT NULL,
  `email_address` varchar(60) DEFAULT NULL,
  `merchant_id` varchar(60) DEFAULT NULL,
  `entirepost` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_payfast_settings`
--

CREATE TABLE `class_payfast_settings` (
  `merchant_id` varchar(20) DEFAULT NULL,
  `merchant_key` varchar(50) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `demo` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_payment_actions`
--

CREATE TABLE `class_payment_actions` (
  `id` int(20) NOT NULL,
  `user_id` int(10) DEFAULT '0',
  `processor` varchar(30) DEFAULT NULL,
  `ukey` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `action` text,
  `post` text,
  `completed` tinyint(1) DEFAULT '0',
  `date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `subscr_signup` tinyint(1) DEFAULT '0',
  `subscr_payment` tinyint(1) DEFAULT '0',
  `subscr_id` varchar(40) DEFAULT NULL,
  `tax` float DEFAULT '0',
  `affiliate_id` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_payment_processors`
--

CREATE TABLE `class_payment_processors` (
  `processor_name` varchar(50) DEFAULT NULL,
  `processor_title` varchar(100) DEFAULT NULL,
  `processor_code` varchar(20) DEFAULT NULL,
  `processor_table` varchar(30) DEFAULT NULL,
  `processor_class` varchar(30) DEFAULT NULL,
  `processor_ret_table` varchar(30) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT '1',
  `manual` tinyint(1) DEFAULT '1',
  `free` tinyint(1) DEFAULT '0',
  `pending` tinyint(1) DEFAULT '0',
  `recurring` tinyint(1) DEFAULT '-1',
  `percent_tax` float DEFAULT '0',
  `fixed_tax` float DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_paypal_ipn`
--

CREATE TABLE `class_paypal_ipn` (
  `id` int(10) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `item_name` varchar(130) DEFAULT NULL,
  `receiver_email` varchar(125) DEFAULT NULL,
  `item_number` varchar(130) DEFAULT '0',
  `quantity` smallint(6) DEFAULT '0',
  `invoice` varchar(25) DEFAULT '0',
  `custom` varchar(60) DEFAULT NULL,
  `payment_status` set('Completed','Pending','Failed','Denied') DEFAULT 'Failed',
  `pending_reason` set('echeck','intl','verify','address','upgrade','unilateral','other') DEFAULT 'other',
  `payment_gross` float DEFAULT '0',
  `payment_fee` float DEFAULT '0',
  `payment_type` set('echeck','instant') DEFAULT 'instant',
  `payment_date` varchar(50) DEFAULT '0',
  `txn_id` varchar(20) DEFAULT '0',
  `payer_email` varchar(125) DEFAULT NULL,
  `payer_status` set('verified','unverified','intl_verified') DEFAULT 'unverified',
  `txn_type` set('web_accept','cart','send_money','subscr_signup','subscr_cancel','subscr_failed','subscr_payment','subscr_eot') DEFAULT 'subscr_payment',
  `first_name` varchar(35) DEFAULT NULL,
  `last_name` varchar(60) DEFAULT NULL,
  `address_city` varchar(60) DEFAULT NULL,
  `address_street` varchar(60) DEFAULT NULL,
  `address_state` varchar(60) DEFAULT NULL,
  `address_zip` varchar(15) DEFAULT NULL,
  `address_country` varchar(60) DEFAULT NULL,
  `address_status` set('confirmed','unconfirmed') DEFAULT 'unconfirmed',
  `subscr_date` varchar(50) DEFAULT '0',
  `period1` varchar(20) DEFAULT 'UNK',
  `period2` varchar(20) DEFAULT 'UNK',
  `period3` varchar(20) DEFAULT 'UNK',
  `amount1` float DEFAULT '0',
  `amount2` float DEFAULT '0',
  `amount3` float DEFAULT '0',
  `recurring` tinyint(4) DEFAULT '1',
  `reattempt` tinyint(4) DEFAULT '0',
  `retry_at` varchar(50) DEFAULT NULL,
  `recur_times` smallint(6) DEFAULT '0',
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `subscr_id` varchar(20) DEFAULT NULL,
  `entirepost` text,
  `paypal_verified` set('VERIFIED','INVALID') DEFAULT 'INVALID',
  `verify_sign` varchar(125) DEFAULT NULL,
  `mc_currency` varchar(20) DEFAULT 'USD',
  `mc_gross` float DEFAULT '0',
  `mc_amount1` float NOT NULL DEFAULT '0',
  `mc_amount2` float NOT NULL DEFAULT '0',
  `mc_amount3` float NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_paypal_settings`
--

CREATE TABLE `class_paypal_settings` (
  `paypal_email` varchar(128) DEFAULT NULL,
  `paypal_currency` char(3) DEFAULT NULL,
  `paypal_pay_title` char(50) DEFAULT NULL,
  `paypal_demo` tinyint(1) DEFAULT '0',
  `paypal_lc` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_paytpv_return`
--

CREATE TABLE `class_paytpv_return` (
  `id` int(10) NOT NULL,
  `ukey` varchar(20) DEFAULT '0',
  `i` varchar(20) DEFAULT NULL,
  `r` varchar(50) DEFAULT NULL,
  `ret` varchar(50) DEFAULT NULL,
  `deserror` varchar(100) DEFAULT NULL,
  `TransactionType` int(3) DEFAULT NULL,
  `TransactionName` varchar(50) DEFAULT NULL,
  `CardCountry` varchar(50) DEFAULT NULL,
  `BankDateTime` datetime DEFAULT NULL,
  `Signature` varchar(50) DEFAULT NULL,
  `Order` varchar(50) DEFAULT NULL,
  `Response` varchar(50) DEFAULT NULL,
  `ErrorID` int(3) DEFAULT NULL,
  `ErrorDescription` int(100) DEFAULT NULL,
  `AuthCode` varchar(50) DEFAULT NULL,
  `Currency` varchar(3) DEFAULT NULL,
  `Amount` int(10) DEFAULT NULL,
  `AmountEur` int(10) DEFAULT NULL,
  `Language` varchar(50) DEFAULT NULL,
  `AccountCode` varchar(50) DEFAULT NULL,
  `TpvID` int(5) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_paytpv_settings`
--

CREATE TABLE `class_paytpv_settings` (
  `paytpv_account` varchar(300) DEFAULT NULL,
  `paytpv_usercode` varchar(30) DEFAULT NULL,
  `paytpv_terminal` int(4) DEFAULT NULL,
  `paytpv_currency` varchar(3) DEFAULT NULL,
  `paytpv_password` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_payu_return`
--

CREATE TABLE `class_payu_return` (
  `id` bigint(20) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `entirepost` text,
  `merchant_id` varchar(12) DEFAULT NULL,
  `state_pol` varchar(32) DEFAULT NULL,
  `risk` float DEFAULT NULL,
  `response_code_pol` varchar(255) DEFAULT NULL,
  `reference_sale` varchar(255) DEFAULT NULL,
  `reference_pol` varchar(255) DEFAULT NULL,
  `sign` varchar(255) DEFAULT NULL,
  `extra1` varchar(255) DEFAULT NULL,
  `extra2` varchar(255) DEFAULT NULL,
  `payment_method` int(3) DEFAULT NULL,
  `payment_method_type` int(3) DEFAULT NULL,
  `installments_number` int(3) DEFAULT NULL,
  `value` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `additional_value` float DEFAULT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `currency` varchar(3) DEFAULT NULL,
  `email_buyer` varchar(255) DEFAULT NULL,
  `cus` varchar(64) DEFAULT NULL,
  `pse_bank` varchar(255) DEFAULT NULL,
  `test` tinyint(1) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `office_phone` varchar(20) DEFAULT NULL,
  `administrative_fee` float DEFAULT NULL,
  `administrative_fee_base` float DEFAULT NULL,
  `administrative_fee_tax` float DEFAULT NULL,
  `airline_code` varchar(4) DEFAULT NULL,
  `attempts` int(3) DEFAULT NULL,
  `authorization_code` varchar(12) DEFAULT NULL,
  `bank_id` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_country` varchar(2) DEFAULT NULL,
  `commision_pol` float DEFAULT NULL,
  `commision_pol_currency` varchar(3) DEFAULT NULL,
  `customer_number` varchar(10) DEFAULT NULL,
  `error_code_bank` varchar(255) DEFAULT NULL,
  `error_message_bank` varchar(255) DEFAULT NULL,
  `exchange_rate` float DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL,
  `nickname_buyer` varchar(150) DEFAULT NULL,
  `nickname_seller` varchar(150) DEFAULT NULL,
  `payment_method_id` int(10) DEFAULT NULL,
  `payment_request_state` varchar(32) DEFAULT NULL,
  `pseReference1` varchar(255) DEFAULT NULL,
  `pseReference2` varchar(255) DEFAULT NULL,
  `pseReference3` varchar(255) DEFAULT NULL,
  `response_message_pol` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(50) DEFAULT NULL,
  `shipping_country` varchar(2) DEFAULT NULL,
  `transaction_bank_id` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(36) DEFAULT NULL,
  `payment_method_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_payu_settings`
--

CREATE TABLE `class_payu_settings` (
  `payu_merchantId` varchar(128) DEFAULT NULL,
  `payu_accountId` varchar(100) DEFAULT NULL,
  `payu_apikey` varchar(50) DEFAULT NULL,
  `payu_description` text,
  `payu_currency` varchar(3) DEFAULT NULL,
  `payu_test` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_pending_edited`
--

CREATE TABLE `class_pending_edited` (
  `ad_id` int(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited` text,
  `pictures_edited` text,
  `notification_sent` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_periodic`
--

CREATE TABLE `class_periodic` (
  `type` varchar(30) DEFAULT NULL,
  `val` int(10) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_popular_ads`
--

CREATE TABLE `class_popular_ads` (
  `title_eng` varchar(100) DEFAULT NULL,
  `no_ads` int(2) DEFAULT '4',
  `title_dutch` varchar(100) DEFAULT NULL,
  `title_arabic` varchar(100) DEFAULT NULL,
  `title_kurdish` varchar(100) DEFAULT NULL,
  `title_tr` varchar(100) DEFAULT NULL,
  `title_greek` varchar(100) DEFAULT NULL,
  `title_ru` varchar(100) DEFAULT NULL,
  `title_german` varchar(100) DEFAULT NULL,
  `title_nor` varchar(100) DEFAULT NULL,
  `title_ch` varchar(100) DEFAULT NULL,
  `title_french` varchar(100) DEFAULT NULL,
  `title_italian` varchar(100) DEFAULT NULL,
  `title_danish` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_price_drop_alert`
--

CREATE TABLE `class_price_drop_alert` (
  `id` int(10) NOT NULL,
  `key` varchar(200) DEFAULT NULL,
  `user_id` int(7) DEFAULT '0',
  `email` varchar(40) DEFAULT NULL,
  `ad_id` int(7) NOT NULL,
  `init_price` double DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_price_extra_settings`
--

CREATE TABLE `class_price_extra_settings` (
  `id` int(2) NOT NULL,
  `fieldset` varchar(200) DEFAULT NULL,
  `use_negotiable` tinyint(1) DEFAULT '0',
  `use_free` tinyint(1) DEFAULT '0',
  `use_tags` tinyint(1) DEFAULT '0',
  `use_extra_option1` tinyint(1) DEFAULT '0',
  `use_extra_option2` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_price_extra_settings_lang`
--

CREATE TABLE `class_price_extra_settings_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `negotiable` varchar(40) DEFAULT NULL,
  `free` varchar(40) DEFAULT NULL,
  `tags` text,
  `extra_option1` varchar(40) DEFAULT NULL,
  `extra_option2` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_priorities`
--

CREATE TABLE `class_priorities` (
  `id` int(4) NOT NULL,
  `price` double DEFAULT NULL,
  `order_no` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_priorities_lang`
--

CREATE TABLE `class_priorities_lang` (
  `id` int(4) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ratings`
--

CREATE TABLE `class_ratings` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT '0000-00-00 00:00:00',
  `ad_id` int(5) DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `content` text,
  `poster_id` int(10) DEFAULT NULL,
  `active` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_ratings_settings`
--

CREATE TABLE `class_ratings_settings` (
  `allow` tinyint(1) DEFAULT '1',
  `require_login` tinyint(1) DEFAULT '0',
  `rate_listings` tinyint(1) DEFAULT '0',
  `rate_users` tinyint(1) DEFAULT '1',
  `enable_reviews` tinyint(1) DEFAULT '1',
  `groups` varchar(30) DEFAULT '0',
  `cannot_rate_oneself` tinyint(1) DEFAULT '1',
  `admin_verification` tinyint(1) DEFAULT '0',
  `badwords_check` tinyint(1) DEFAULT '1',
  `html_editor` tinyint(1) DEFAULT '1',
  `allowed_html` varchar(250) DEFAULT NULL,
  `logo_field` varchar(50) DEFAULT NULL,
  `use_title` tinyint(1) DEFAULT '1',
  `use_email` tinyint(1) DEFAULT '2',
  `use_website` tinyint(1) DEFAULT '0',
  `captcha` tinyint(1) DEFAULT '0',
  `terms_eng` text,
  `ar_enable_reviews` tinyint(1) DEFAULT '1',
  `ar_admin_verification` tinyint(1) DEFAULT '0',
  `ar_badwords_check` tinyint(1) DEFAULT '1',
  `ar_html_editor` tinyint(1) DEFAULT '1',
  `ar_allowed_html` varchar(250) DEFAULT NULL,
  `ar_logo_field` varchar(50) DEFAULT NULL,
  `ar_use_title` tinyint(1) DEFAULT '1',
  `ar_use_email` tinyint(1) DEFAULT '2',
  `ar_use_website` tinyint(1) DEFAULT '0',
  `ar_captcha` tinyint(1) DEFAULT '0',
  `ar_terms_eng` text,
  `no_on_page` int(2) DEFAULT '10',
  `ar_no_on_page` int(2) DEFAULT '10',
  `terms_dutch` text,
  `ar_terms_dutch` text,
  `terms_arabic` text,
  `ar_terms_arabic` text,
  `terms_Ku` text,
  `ar_terms_Ku` text,
  `terms_kurdish` text,
  `ar_terms_kurdish` text,
  `terms_german` text,
  `ar_terms_german` text,
  `terms_ru` text,
  `ar_terms_ru` text,
  `terms_greek` text,
  `ar_terms_greek` text,
  `terms_tr` text,
  `ar_terms_tr` text,
  `terms_ch` text,
  `ar_terms_ch` text,
  `terms_french` text,
  `ar_terms_french` text,
  `terms_italian` text,
  `ar_terms_italian` text,
  `terms_danish` text,
  `ar_terms_danish` text,
  `terms_nor` text,
  `ar_terms_nor` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_regions`
--

CREATE TABLE `class_regions` (
  `id` int(2) NOT NULL,
  `name` varchar(128) DEFAULT '',
  `lang_id` varchar(20) DEFAULT 'eng',
  `dep` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_robokassa_return`
--

CREATE TABLE `class_robokassa_return` (
  `id` int(10) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `OutSum` varchar(100) DEFAULT NULL,
  `InvId` varchar(100) DEFAULT NULL,
  `SignatureValue` varchar(100) DEFAULT NULL,
  `entirepost` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_robokassa_settings`
--

CREATE TABLE `class_robokassa_settings` (
  `login` varchar(20) DEFAULT NULL,
  `password1` varchar(50) DEFAULT NULL,
  `password2` varchar(50) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `encoding` varchar(10) DEFAULT NULL,
  `payment_desc` text,
  `test` int(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_rss`
--

CREATE TABLE `class_rss` (
  `id` int(2) NOT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `language` varchar(20) DEFAULT NULL,
  `feedburner` varchar(250) DEFAULT NULL,
  `parameters` varchar(255) DEFAULT NULL,
  `no_items` int(2) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1',
  `show_fields` text,
  `logo_field` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_rss_lang`
--

CREATE TABLE `class_rss_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `short_title` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_rules`
--

CREATE TABLE `class_rules` (
  `id` int(3) NOT NULL,
  `type` varchar(20) NOT NULL,
  `category` text,
  `field` varchar(30) DEFAULT NULL,
  `selected_values` text,
  `second_field` varchar(30) DEFAULT NULL,
  `allowed_values` text,
  `required_field` varchar(30) DEFAULT NULL,
  `required_group` int(2) DEFAULT NULL,
  `error_message` varchar(250) DEFAULT NULL,
  `order_no` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_saved_searches`
--

CREATE TABLE `class_saved_searches` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `search` text,
  `browser` varchar(200) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_scheduled_imports`
--

CREATE TABLE `class_scheduled_imports` (
  `id` int(2) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(3) DEFAULT NULL,
  `access_type` varchar(10) DEFAULT 'url',
  `template` int(3) DEFAULT NULL,
  `category_id` int(5) DEFAULT '0',
  `package_id` int(2) DEFAULT '0',
  `url` varchar(250) DEFAULT NULL,
  `ftp_server` varchar(250) DEFAULT NULL,
  `ftp_login` varchar(100) DEFAULT NULL,
  `ftp_password` varchar(50) DEFAULT NULL,
  `ftp_filename` varchar(100) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `use_id_as_unique_field` int(1) DEFAULT '0',
  `delete_inexisting` tinyint(1) DEFAULT '0',
  `only_download_inexisting` int(1) DEFAULT '0',
  `key` varchar(30) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_searches`
--

CREATE TABLE `class_searches` (
  `id` int(10) NOT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `long` varchar(20) DEFAULT NULL,
  `location_fields` varchar(200) DEFAULT NULL,
  `search_url` text,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_security_settings`
--

CREATE TABLE `class_security_settings` (
  `block_admin_attempts` tinyint(1) DEFAULT '0',
  `allowed_admin_attempts` int(2) DEFAULT '3',
  `block_admin_attempts_for` int(4) DEFAULT '1',
  `block_user_attempts` tinyint(1) DEFAULT '0',
  `allowed_user_attempts` int(1) DEFAULT '5',
  `block_user_attempts_for` int(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_seo_pages`
--

CREATE TABLE `class_seo_pages` (
  `lang_id` varchar(20) DEFAULT 'eng',
  `page` varchar(30) NOT NULL,
  `page_description` varchar(70) DEFAULT NULL,
  `title` text,
  `meta_description` text,
  `meta_keywords` text,
  `noindex` tinyint(1) DEFAULT '0',
  `order_no` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_seo_settings`
--

CREATE TABLE `class_seo_settings` (
  `enable_mod_rewrite` tinyint(1) DEFAULT '0',
  `analytics_code` text,
  `sef_legacy_mode` tinyint(1) DEFAULT '1',
  `sef_links` text,
  `maximum_slug_width` int(3) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_seo_settings_lang`
--

CREATE TABLE `class_seo_settings_lang` (
  `lang_id` varchar(20) CHARACTER SET utf8 DEFAULT 'eng',
  `title` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8,
  `meta_keywords` text CHARACTER SET utf8,
  `ad_title_format` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '%title',
  `ad_meta_keywords` text CHARACTER SET utf8,
  `ad_meta_description` text CHARACTER SET utf8,
  `search_title_format` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '%city %category_name',
  `search_meta_keywords` text CHARACTER SET utf8,
  `search_meta_description` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_settings`
--

CREATE TABLE `class_settings` (
  `admin_username` varchar(50) DEFAULT NULL,
  `admin_password` varchar(50) DEFAULT NULL,
  `admin_email` varchar(128) DEFAULT NULL,
  `contact_email` varchar(128) DEFAULT NULL,
  `users_delete_ads` tinyint(1) DEFAULT '0',
  `users_feature_ads` tinyint(1) DEFAULT '1',
  `register_captcha` tinyint(1) DEFAULT '1',
  `contact_captcha` tinyint(1) DEFAULT '1',
  `login_captcha` tinyint(1) DEFAULT '0',
  `delete_login_older_than` int(4) DEFAULT NULL,
  `google_maps_default_long` double DEFAULT NULL,
  `google_maps_default_lat` double DEFAULT NULL,
  `google_maps_default_height` int(2) DEFAULT '4',
  `cron_simulator` tinyint(1) DEFAULT '1',
  `session_expires` int(8) DEFAULT '1440',
  `delete_expired` tinyint(1) DEFAULT '0',
  `days_del_expired` int(4) DEFAULT '30',
  `days_notify` int(1) DEFAULT '3',
  `send_mail_to_admin_when_pending` tinyint(1) DEFAULT '1',
  `send_mail_to_admin_when_new_ad` tinyint(1) DEFAULT '1',
  `send_mail_to_admin_when_registeres` tinyint(1) DEFAULT '1',
  `send_mail_to_user_when_posting_ads` tinyint(1) DEFAULT '1',
  `send_mail_to_user_when_expired` tinyint(1) DEFAULT '1',
  `send_mail_to_user_before_expires` tinyint(1) DEFAULT '1',
  `nologin_enabled` tinyint(1) DEFAULT '0',
  `nologin_pending_listing` tinyint(1) DEFAULT '0',
  `nologin_allow_edit` tinyint(1) DEFAULT '1',
  `nologin_allow_delete` tinyint(1) DEFAULT '1',
  `nologin_extra_options` tinyint(1) DEFAULT '1',
  `nologin_image_verification` tinyint(1) DEFAULT '0',
  `internal_messaging` tinyint(1) DEFAULT '1',
  `enable_locations` tinyint(1) DEFAULT '0',
  `location_fields` varchar(100) DEFAULT NULL,
  `enable_subdomains` tinyint(1) DEFAULT '0',
  `subdomain_field` varchar(40) DEFAULT NULL,
  `enable_recaptcha` tinyint(1) DEFAULT '0',
  `recaptcha_public_key` varchar(50) DEFAULT NULL,
  `recaptcha_private_key` varchar(50) DEFAULT NULL,
  `contact_messages_pending` tinyint(1) DEFAULT '0',
  `users_can_ask_account_removal` tinyint(1) DEFAULT '0',
  `time_offset` int(5) DEFAULT '0',
  `enable_username` tinyint(1) DEFAULT '1',
  `contact_name_field` varchar(32) DEFAULT 'contact_name',
  `enable_affiliates` tinyint(1) DEFAULT '0',
  `affiliates_auto_register` tinyint(1) DEFAULT '1',
  `affiliates_activate_account` tinyint(1) DEFAULT '1',
  `affiliates_admin_verification` tinyint(1) DEFAULT '0',
  `google_maps_api_key` varchar(50) DEFAULT NULL,
  `nologin_activate_via_email` tinyint(1) DEFAULT '0',
  `nologin_activate_via_sms` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_settings_lang`
--

CREATE TABLE `class_settings_lang` (
  `lang_id` varchar(20) DEFAULT 'eng',
  `admin_name` varchar(128) DEFAULT NULL,
  `site_name` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_similar_ads`
--

CREATE TABLE `class_similar_ads` (
  `title_eng` varchar(100) DEFAULT NULL,
  `no_ads` int(2) DEFAULT '4',
  `no_ads_on_row` int(2) DEFAULT '4',
  `match_category` tinyint(1) DEFAULT '1',
  `match_fields` varchar(100) DEFAULT NULL,
  `title_dutch` varchar(100) DEFAULT NULL,
  `title_arabic` varchar(100) DEFAULT NULL,
  `title_kurdish` varchar(100) DEFAULT NULL,
  `title_tr` varchar(100) DEFAULT NULL,
  `title_greek` varchar(100) DEFAULT NULL,
  `title_ru` varchar(100) DEFAULT NULL,
  `title_german` varchar(100) DEFAULT NULL,
  `title_nor` varchar(100) DEFAULT NULL,
  `title_ch` varchar(100) DEFAULT NULL,
  `title_french` varchar(100) DEFAULT NULL,
  `title_italian` varchar(100) DEFAULT NULL,
  `title_danish` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_sitemap`
--

CREATE TABLE `class_sitemap` (
  `enabled` tinyint(1) DEFAULT NULL,
  `write_categories` tinyint(1) DEFAULT '1',
  `write_listings` tinyint(1) DEFAULT '1',
  `write_custom_pages` tinyint(1) DEFAULT '1',
  `priority` double(4,2) DEFAULT NULL,
  `changefreq` varchar(20) DEFAULT NULL,
  `categories_priority` double(4,2) DEFAULT NULL,
  `categories_changefreq` varchar(20) DEFAULT NULL,
  `listings_priority` double(4,2) DEFAULT NULL,
  `listings_changefreq` varchar(20) DEFAULT NULL,
  `listings_no` int(10) DEFAULT NULL,
  `cp_priority` double(4,2) DEFAULT NULL,
  `cp_changefreq` varchar(20) DEFAULT NULL,
  `auto_write_freq` varchar(20) DEFAULT NULL,
  `generated_last` datetime DEFAULT NULL,
  `extra_entries` longblob
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_slugs`
--

CREATE TABLE `class_slugs` (
  `id` int(10) NOT NULL,
  `object_id` int(10) NOT NULL,
  `type` varchar(20) DEFAULT 'listing',
  `slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_sms_gateways`
--

CREATE TABLE `class_sms_gateways` (
  `gateway_name` varchar(50) DEFAULT NULL,
  `gateway_title` varchar(50) DEFAULT NULL,
  `gateway_code` varchar(20) DEFAULT NULL,
  `gateway_table` varchar(30) DEFAULT NULL,
  `gateway_class` varchar(30) DEFAULT NULL,
  `gateway_ret_table` varchar(30) DEFAULT NULL,
  `default` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_social_networks_settings`
--

CREATE TABLE `class_social_networks_settings` (
  `facebook_page_link` varchar(200) DEFAULT NULL,
  `twitter_account` varchar(50) DEFAULT NULL,
  `enable_fb_like_button` tinyint(1) DEFAULT '1',
  `enable_tweet_button` tinyint(1) DEFAULT '1',
  `enable_gplus_button` tinyint(1) DEFAULT '1',
  `enable_fb_page_plugin` tinyint(1) DEFAULT '0',
  `enable_fb_comments` tinyint(1) DEFAULT '0',
  `fb_lb_layout` varchar(15) DEFAULT 'button_count',
  `fb_lb_show_faces` tinyint(1) DEFAULT '0',
  `fb_lb_width` int(3) DEFAULT '300',
  `fb_lb_action` varchar(15) DEFAULT 'like',
  `fb_lb_color` varchar(10) DEFAULT 'light',
  `fb_lb_locale` varchar(10) DEFAULT 'en_US',
  `fb_comments_posts` int(2) DEFAULT '5',
  `fb_comments_color` varchar(10) DEFAULT 'light',
  `fb_pp_tabs` varchar(100) DEFAULT 'timeline',
  `fb_pp_width` int(3) DEFAULT '380',
  `fb_pp_height` int(3) DEFAULT '500',
  `fb_pp_hide_cover` tinyint(1) DEFAULT '0',
  `fb_pp_show_facepile` tinyint(1) DEFAULT '1',
  `fb_pp_hide_cta` tinyint(1) DEFAULT '0',
  `fb_pp_small_header` tinyint(1) DEFAULT '0',
  `tw_data_count` varchar(15) DEFAULT 'none',
  `tw_data_text` varchar(200) DEFAULT NULL,
  `tweet_ads` tinyint(1) DEFAULT '0',
  `tw_consumer_key` varchar(30) DEFAULT NULL,
  `tw_consumer_secret` varchar(50) DEFAULT NULL,
  `tw_access_token` varchar(50) DEFAULT NULL,
  `tw_access_token_secret` varchar(50) DEFAULT NULL,
  `gplus_size` varchar(30) DEFAULT 'medium',
  `gplus_language` varchar(10) DEFAULT 'en-US',
  `fb_appid` varchar(100) DEFAULT NULL,
  `fb_pageid` varchar(100) DEFAULT NULL,
  `fb_post_ads` tinyint(1) DEFAULT '0',
  `fb_secret` varchar(100) DEFAULT NULL,
  `fb_access_token` text,
  `fb_access_token_expires` datetime DEFAULT NULL,
  `fb_page_access_token` text,
  `gplus_page_link` varchar(200) DEFAULT NULL,
  `enable_fb_share_button` tinyint(1) DEFAULT '0',
  `fb_sb_layout` varchar(15) DEFAULT 'button_count',
  `youtube_link` varchar(200) DEFAULT NULL,
  `pinterest_link` varchar(200) DEFAULT NULL,
  `instagram_link` varchar(200) DEFAULT NULL,
  `linkedin_link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_spam_prevention`
--

CREATE TABLE `class_spam_prevention` (
  `check_registration` int(1) DEFAULT '1',
  `check_contact_forms` int(1) DEFAULT '1',
  `check_comments` int(1) DEFAULT '1',
  `check_reviews` int(1) DEFAULT '1',
  `sfs_block_tor_ips` int(1) DEFAULT '1',
  `sfs_block_networks` int(1) DEFAULT '1',
  `sfs_block_limit` int(3) DEFAULT '50',
  `block_for` int(4) DEFAULT '1',
  `add_waiting_time` tinyint(1) DEFAULT '0',
  `waiting_time` int(2) DEFAULT '10',
  `waiting_groups` varchar(30) DEFAULT '0',
  `use_sfs` tinyint(1) DEFAULT '1',
  `use_abip` tinyint(1) DEFAULT '0',
  `abip_api_key` varchar(100) DEFAULT NULL,
  `abip_block_limit` int(3) DEFAULT '50'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_spam_prevention_log`
--

CREATE TABLE `class_spam_prevention_log` (
  `id` int(10) NOT NULL,
  `date` datetime DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `confidence_sfs` float DEFAULT NULL,
  `type` varchar(10) DEFAULT 'register',
  `confidence_abip` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_stripe_return`
--

CREATE TABLE `class_stripe_return` (
  `id` bigint(20) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `charge_id` varchar(100) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `customer` varchar(40) DEFAULT NULL,
  `livemode` varchar(5) DEFAULT NULL,
  `paid` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_stripe_settings`
--

CREATE TABLE `class_stripe_settings` (
  `secret_key` varchar(100) DEFAULT NULL,
  `publishable_key` varchar(100) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_suspend_user`
--

CREATE TABLE `class_suspend_user` (
  `days` int(3) DEFAULT '3'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_tag_cloud`
--

CREATE TABLE `class_tag_cloud` (
  `title_eng` varchar(100) DEFAULT NULL,
  `no_tags` int(3) DEFAULT '50',
  `split_tags` tinyint(1) DEFAULT '1',
  `period` int(3) DEFAULT '30',
  `min_letters` int(3) DEFAULT '3',
  `exclude` text,
  `title_dutch` varchar(100) DEFAULT NULL,
  `title_arabic` varchar(100) DEFAULT NULL,
  `title_kurdish` varchar(100) DEFAULT NULL,
  `title_tr` varchar(100) DEFAULT NULL,
  `title_greek` varchar(100) DEFAULT NULL,
  `title_ru` varchar(100) DEFAULT NULL,
  `title_german` varchar(100) DEFAULT NULL,
  `title_nor` varchar(100) DEFAULT NULL,
  `title_ch` varchar(100) DEFAULT NULL,
  `title_french` varchar(100) DEFAULT NULL,
  `title_italian` varchar(100) DEFAULT NULL,
  `title_danish` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_tag_cloud_searches`
--

CREATE TABLE `class_tag_cloud_searches` (
  `id` int(10) NOT NULL,
  `word` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `no` int(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_temp_import`
--

CREATE TABLE `class_temp_import` (
  `id` int(10) NOT NULL,
  `succeeded` int(5) DEFAULT '0',
  `failed` int(5) DEFAULT '0',
  `json` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_tpl_colorschemes`
--

CREATE TABLE `class_tpl_colorschemes` (
  `tpl` varchar(30) DEFAULT NULL,
  `colorscheme` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_users`
--

CREATE TABLE `class_users` (
  `id` int(10) NOT NULL,
  `group` int(3) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact_name` varchar(100) DEFAULT NULL,
  `registration_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(15) DEFAULT NULL,
  `activation` varchar(100) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `store` tinyint(1) NOT NULL DEFAULT '0',
  `store_banner` varchar(100) DEFAULT NULL,
  `bulk_uploads` tinyint(1) NOT NULL DEFAULT '0',
  `rating` double(4,2) NOT NULL DEFAULT '0.00',
  `language` varchar(30) DEFAULT 'eng',
  `auth_provider` varchar(30) DEFAULT NULL,
  `identity` varchar(200) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `company` varchar(30) DEFAULT NULL,
  `webpage` varchar(100) DEFAULT NULL,
  `no_credits` double DEFAULT '0',
  `moderator` tinyint(1) DEFAULT '0',
  `sections` text,
  `affiliate` tinyint(1) DEFAULT '0',
  `no_ratings` int(5) DEFAULT '0',
  `location_on_map` varchar(64) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `business_address` varchar(255) DEFAULT NULL,
  `user_info` text,
  `agens_picture` varchar(128) DEFAULT NULL,
  `mobile_phone` varchar(255) DEFAULT NULL,
  `agency_name` varchar(255) DEFAULT NULL,
  `dealer_subdomain` varchar(30) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `suspended` tinyint(1) DEFAULT '0',
  `date_unsuspend` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_users_packages`
--

CREATE TABLE `class_users_packages` (
  `id` int(10) NOT NULL,
  `user_id` int(5) DEFAULT NULL,
  `package_id` int(2) NOT NULL,
  `date_start` datetime DEFAULT '0000-00-00 00:00:00',
  `date_end` datetime DEFAULT '0000-00-00 00:00:00',
  `date_renew` datetime DEFAULT '0000-00-00 00:00:00',
  `ads_left` int(3) NOT NULL DEFAULT '0',
  `user_approved` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `pending` tinyint(1) NOT NULL DEFAULT '0',
  `subscr_id` varchar(30) DEFAULT NULL,
  `recurring` tinyint(1) NOT NULL DEFAULT '0',
  `fixed` tinyint(1) NOT NULL DEFAULT '0',
  `allow` int(2) NOT NULL DEFAULT '0',
  `ip` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_user_fields`
--

CREATE TABLE `class_user_fields` (
  `id` int(3) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'textbox',
  `order_no` int(2) DEFAULT NULL,
  `is_numeric` tinyint(1) NOT NULL DEFAULT '0',
  `validation_type` varchar(100) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `min` int(10) DEFAULT NULL,
  `max` int(10) DEFAULT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `editable` tinyint(1) NOT NULL DEFAULT '1',
  `max_uploaded_size` int(6) DEFAULT NULL,
  `extensions` varchar(100) DEFAULT NULL,
  `image_resize` varchar(20) DEFAULT NULL,
  `groups` varchar(100) DEFAULT NULL,
  `dep_id` int(4) DEFAULT NULL,
  `other_val` tinyint(1) DEFAULT '0',
  `read_only` tinyint(1) DEFAULT '0',
  `unique` tinyint(1) DEFAULT '0',
  `ext1` tinyint(1) DEFAULT '0',
  `public` tinyint(1) NOT NULL DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `all_val` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_user_fields_lang`
--

CREATE TABLE `class_user_fields_lang` (
  `id` int(3) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(64) NOT NULL,
  `top_str` varchar(64) DEFAULT NULL,
  `error_message` text,
  `error_message2` text,
  `info_message` text,
  `default_val` text,
  `prefix` varchar(64) DEFAULT NULL,
  `postfix` varchar(64) DEFAULT NULL,
  `elements` text,
  `date_format` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_user_groups`
--

CREATE TABLE `class_user_groups` (
  `id` int(2) NOT NULL,
  `auto_register` tinyint(1) DEFAULT '1',
  `admin_verification` tinyint(1) DEFAULT '0',
  `store` tinyint(1) DEFAULT '0',
  `bulk_uploads` tinyint(1) DEFAULT '0',
  `listing_pending` tinyint(1) DEFAULT '0',
  `package_pending` tinyint(1) DEFAULT '0',
  `order_no` int(2) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `affiliates` tinyint(1) DEFAULT '0',
  `default_credits` int(4) DEFAULT '0',
  `activate_via_email` tinyint(1) DEFAULT '0',
  `activate_via_sms` tinyint(1) DEFAULT '0',
  `post_ads` tinyint(1) DEFAULT '1',
  `affiliates_cookie_availability` int(4) DEFAULT '0',
  `affiliates_percentage` int(3) DEFAULT '0',
  `affiliates_payment_cycle` int(4) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_user_groups_lang`
--

CREATE TABLE `class_user_groups_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(64) DEFAULT NULL,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_user_keys`
--

CREATE TABLE `class_user_keys` (
  `user_id` int(10) DEFAULT NULL,
  `activation` varchar(100) DEFAULT NULL,
  `date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `type` int(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_user_ratings`
--

CREATE TABLE `class_user_ratings` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT '0000-00-00 00:00:00',
  `user_id` int(5) DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `content` text,
  `ip` varchar(20) DEFAULT NULL,
  `poster_id` int(10) DEFAULT NULL,
  `active` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_version`
--

CREATE TABLE `class_version` (
  `ver` int(2) NOT NULL DEFAULT '8',
  `subver` int(3) NOT NULL DEFAULT '0',
  `last_update` date DEFAULT NULL,
  `last_check` date DEFAULT NULL,
  `last_checked_version` varchar(100) DEFAULT NULL,
  `last_checked_bugfix` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_video_ads`
--

CREATE TABLE `class_video_ads` (
  `title_eng` varchar(100) DEFAULT NULL,
  `no_ads` int(2) DEFAULT '10',
  `title_arabic` varchar(100) DEFAULT NULL,
  `title_ch` varchar(100) DEFAULT NULL,
  `title_danish` varchar(100) DEFAULT NULL,
  `title_dutch` varchar(100) DEFAULT NULL,
  `title_french` varchar(100) DEFAULT NULL,
  `title_german` varchar(100) DEFAULT NULL,
  `title_greek` varchar(100) DEFAULT NULL,
  `title_italian` varchar(100) DEFAULT NULL,
  `title_kurdish` varchar(100) DEFAULT NULL,
  `title_ru` varchar(100) DEFAULT NULL,
  `title_nor` varchar(100) DEFAULT NULL,
  `title_tr` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_webxpay_return`
--

CREATE TABLE `class_webxpay_return` (
  `id` bigint(20) NOT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `order_id` varchar(50) DEFAULT NULL,
  `order_refference_number` varchar(50) DEFAULT NULL,
  `date_time_transaction` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `payment_gateway_used` varchar(30) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `entirepost` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_webxpay_settings`
--

CREATE TABLE `class_webxpay_settings` (
  `public_key` text,
  `secret_key` varchar(50) DEFAULT NULL,
  `currency` varchar(3) DEFAULT 'LKR',
  `phone_field` varchar(20) DEFAULT 'phone',
  `nologin_phone_field` varchar(20) DEFAULT 'mgm_phone'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_whitelist_emails`
--

CREATE TABLE `class_whitelist_emails` (
  `id` int(3) NOT NULL,
  `info` varchar(200) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_whitelist_ips`
--

CREATE TABLE `class_whitelist_ips` (
  `id` int(3) NOT NULL,
  `info` varchar(200) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_whitelist_phones`
--

CREATE TABLE `class_whitelist_phones` (
  `id` int(3) NOT NULL,
  `info` varchar(200) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class_zipcodes`
--

CREATE TABLE `class_zipcodes` (
  `zipcode` varchar(20) NOT NULL,
  `country` varchar(40) DEFAULT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `lon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class__3`
--

CREATE TABLE `class__3` (
  `id` int(5) NOT NULL,
  `dep` int(2) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `lang_id` varchar(20) DEFAULT 'eng'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `class_2co_return`
--
ALTER TABLE `class_2co_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_actions`
--
ALTER TABLE `class_actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_object` (`object_id`),
  ADD KEY `idx_user` (`user_id`),
  ADD KEY `idx_invoice` (`invoice`),
  ADD KEY `idx_type` (`type`),
  ADD KEY `idx_date` (`date`),
  ADD KEY `idx_pending` (`pending`);

--
-- Indexen voor tabel `class_ads`
--
ALTER TABLE `class_ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user` (`user_id`),
  ADD KEY `idx_category` (`category_id`),
  ADD KEY `idx_package` (`package_id`),
  ADD KEY `idx_region_id` (`region`),
  ADD KEY `idx_country_id` (`country`),
  ADD KEY `idx_location` (`city`),
  ADD KEY `idx_price` (`price`),
  ADD KEY `idx_title` (`title`),
  ADD KEY `idx_viewed` (`viewed`),
  ADD KEY `date_added` (`date_added`),
  ADD KEY `date_expires` (`date_expires`),
  ADD KEY `idx_featured` (`featured`),
  ADD KEY `idx_active` (`active`),
  ADD KEY `idx_pending` (`pending`),
  ADD KEY `idx_highlited` (`highlited`),
  ADD KEY `idx_priority` (`priority`),
  ADD KEY `idx_sold` (`sold`),
  ADD KEY `idx_rented` (`rented`),
  ADD KEY `usr_pkg` (`usr_pkg`),
  ADD KEY `priority_2` (`priority`,`date_added`),
  ADD KEY `active_2` (`active`,`date_added`),
  ADD KEY `active_3` (`active`,`priority`),
  ADD KEY `active_4` (`active`,`priority`,`date_added`),
  ADD KEY `user_approved` (`user_approved`),
  ADD KEY `app` (`active`,`priority`,`price`),
  ADD KEY `priority_3` (`priority`,`price`),
  ADD KEY `priority_4` (`priority`,`title`),
  ADD KEY `lat` (`lat`),
  ADD KEY `lng` (`lng`);

--
-- Indexen voor tabel `class_ads_extension`
--
ALTER TABLE `class_ads_extension`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_activation` (`activation`),
  ADD KEY `idx_ip` (`ip`),
  ADD KEY `idx_mgm_email` (`mgm_email`);

--
-- Indexen voor tabel `class_ads_pictures`
--
ALTER TABLE `class_ads_pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_ad` (`ad_id`),
  ADD KEY `idx_order` (`order_no`);

--
-- Indexen voor tabel `class_affiliates`
--
ALTER TABLE `class_affiliates`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_affiliates_payments`
--
ALTER TABLE `class_affiliates_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_affiliate_id` (`affiliate_id`),
  ADD KEY `idx_date` (`date`),
  ADD KEY `idx_released` (`completed`);

--
-- Indexen voor tabel `class_affiliates_revenue`
--
ALTER TABLE `class_affiliates_revenue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_affiliate_id` (`affiliate_id`),
  ADD KEY `idx_date` (`date`),
  ADD KEY `idx_paid` (`paid`),
  ADD KEY `idx_released` (`released`);

--
-- Indexen voor tabel `class_auctions`
--
ALTER TABLE `class_auctions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_id` (`ad_id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_authorize_return`
--
ALTER TABLE `class_authorize_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_banners`
--
ALTER TABLE `class_banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_position` (`position`),
  ADD KEY `idx_date_start` (`date_start`),
  ADD KEY `idx_date_end` (`date_end`),
  ADD KEY `idx_max_impressions` (`max_impressions`),
  ADD KEY `idx_max_clicks` (`max_clicks`),
  ADD KEY `idx_impressions` (`impressions`),
  ADD KEY `idx_clicks` (`clicks`);

--
-- Indexen voor tabel `class_banners_positions`
--
ALTER TABLE `class_banners_positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_name` (`name`),
  ADD KEY `idx_active` (`active`);

--
-- Indexen voor tabel `class_bids`
--
ALTER TABLE `class_bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_blocked_emails`
--
ALTER TABLE `class_blocked_emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_email` (`email`);

--
-- Indexen voor tabel `class_blocked_ips`
--
ALTER TABLE `class_blocked_ips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_ip` (`ip`);

--
-- Indexen voor tabel `class_blocked_phones`
--
ALTER TABLE `class_blocked_phones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_phone` (`phone`);

--
-- Indexen voor tabel `class_categories`
--
ALTER TABLE `class_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_order` (`order_no`),
  ADD KEY `idx_parent` (`parent_id`),
  ADD KEY `idx_fieldset` (`fieldset`);

--
-- Indexen voor tabel `class_categories_lang`
--
ALTER TABLE `class_categories_lang`
  ADD KEY `idx_id` (`id`),
  ADD KEY `idx_name` (`name`),
  ADD KEY `idx_lang` (`lang_id`);

--
-- Indexen voor tabel `class_cinetpay_return`
--
ALTER TABLE `class_cinetpay_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_comments`
--
ALTER TABLE `class_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `active` (`active`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `listing_id` (`listing_id`);

--
-- Indexen voor tabel `class_countries`
--
ALTER TABLE `class_countries`
  ADD KEY `id` (`id`),
  ADD KEY `idx_name` (`name`),
  ADD KEY `idx_lang` (`lang_id`),
  ADD KEY `idx_set_id` (`set_id`);

--
-- Indexen voor tabel `class_coupons`
--
ALTER TABLE `class_coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_credits_packages`
--
ALTER TABLE `class_credits_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_credits_return`
--
ALTER TABLE `class_credits_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_currencies`
--
ALTER TABLE `class_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_custom_pages`
--
ALTER TABLE `class_custom_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_active` (`active`),
  ADD KEY `idx_type` (`type`),
  ADD KEY `idx_order_no` (`order_no`);

--
-- Indexen voor tabel `class_custom_pages_lang`
--
ALTER TABLE `class_custom_pages_lang`
  ADD KEY `idx_id` (`id`),
  ADD KEY `idx_lang_id` (`lang_id`);

--
-- Indexen voor tabel `class_depending_fields`
--
ALTER TABLE `class_depending_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_depending_fields_lang`
--
ALTER TABLE `class_depending_fields_lang`
  ADD KEY `idx_lang` (`lang_id`),
  ADD KEY `idx_id` (`id`);

--
-- Indexen voor tabel `class_discounts`
--
ALTER TABLE `class_discounts`
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_code` (`code`),
  ADD KEY `idx_type` (`type`),
  ADD KEY `idx_object_id` (`object_id`);

--
-- Indexen voor tabel `class_email_alerts`
--
ALTER TABLE `class_email_alerts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `idx_last_check` (`last_check`),
  ADD KEY `idx_active` (`active`),
  ADD KEY `ip` (`ip`),
  ADD KEY `frequency` (`frequency`),
  ADD KEY `date_2` (`date`,`frequency`),
  ADD KEY `active_2` (`active`,`date`);

--
-- Indexen voor tabel `class_epay_return`
--
ALTER TABLE `class_epay_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_favourites`
--
ALTER TABLE `class_favourites`
  ADD KEY `idx_ad_id` (`ad_id`),
  ADD KEY `idx_user_id` (`user_id`);

--
-- Indexen voor tabel `class_featured_plans`
--
ALTER TABLE `class_featured_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_fields`
--
ALTER TABLE `class_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_active` (`active`);

--
-- Indexen voor tabel `class_fieldsets`
--
ALTER TABLE `class_fieldsets`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_fields_lang`
--
ALTER TABLE `class_fields_lang`
  ADD KEY `idx_name` (`name`),
  ADD KEY `idx_lang` (`lang_id`),
  ADD KEY `idx_id` (`id`);

--
-- Indexen voor tabel `class_fortumo_products`
--
ALTER TABLE `class_fortumo_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_fortumo_return`
--
ALTER TABLE `class_fortumo_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_hipay_return`
--
ALTER TABLE `class_hipay_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_icepay_ipn`
--
ALTER TABLE `class_icepay_ipn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_ie_templates`
--
ALTER TABLE `class_ie_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_ie_templates_fields`
--
ALTER TABLE `class_ie_templates_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_instamojo_return`
--
ALTER TABLE `class_instamojo_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `ukey` (`ukey`);

--
-- Indexen voor tabel `class_invoices`
--
ALTER TABLE `class_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_klarna_return`
--
ALTER TABLE `class_klarna_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `ukey` (`ukey`);

--
-- Indexen voor tabel `class_languages`
--
ALTER TABLE `class_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_enabled` (`enabled`);

--
-- Indexen voor tabel `class_login_history`
--
ALTER TABLE `class_login_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_auth_name` (`auth_name`),
  ADD KEY `idx_date` (`date_login`);

--
-- Indexen voor tabel `class_manual_return`
--
ALTER TABLE `class_manual_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_mb_return`
--
ALTER TABLE `class_mb_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_messages`
--
ALTER TABLE `class_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_from` (`from`),
  ADD KEY `idx_to` (`to`);

--
-- Indexen voor tabel `class_meta_extension`
--
ALTER TABLE `class_meta_extension`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_mobilpay_products`
--
ALTER TABLE `class_mobilpay_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_mobilpay_return`
--
ALTER TABLE `class_mobilpay_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_modules`
--
ALTER TABLE `class_modules`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `idx_enabled` (`enabled`);

--
-- Indexen voor tabel `class_multicurrency`
--
ALTER TABLE `class_multicurrency`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_news`
--
ALTER TABLE `class_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_new_alerts`
--
ALTER TABLE `class_new_alerts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_alert_id` (`alert_id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_options`
--
ALTER TABLE `class_options`
  ADD KEY `idx_id` (`object_id`),
  ADD KEY `idx_option` (`option`),
  ADD KEY `idx_date` (`date_added`),
  ADD KEY `idx_expires` (`date_expires`);

--
-- Indexen voor tabel `class_packages`
--
ALTER TABLE `class_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_type` (`type`);

--
-- Indexen voor tabel `class_packages_lang`
--
ALTER TABLE `class_packages_lang`
  ADD KEY `idx_id` (`id`),
  ADD KEY `idx_name` (`name`),
  ADD KEY `idx_lang` (`lang_id`);

--
-- Indexen voor tabel `class_pagseguro_return`
--
ALTER TABLE `class_pagseguro_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `ukey` (`ukey`);

--
-- Indexen voor tabel `class_payfast_return`
--
ALTER TABLE `class_payfast_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `ukey` (`ukey`);

--
-- Indexen voor tabel `class_payment_actions`
--
ALTER TABLE `class_payment_actions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ukey` (`ukey`),
  ADD KEY `idx_amount` (`amount`),
  ADD KEY `idx_date` (`date`),
  ADD KEY `idx_user` (`user_id`),
  ADD KEY `idx_processor` (`processor`);

--
-- Indexen voor tabel `class_payment_processors`
--
ALTER TABLE `class_payment_processors`
  ADD KEY `idx_code` (`processor_code`);

--
-- Indexen voor tabel `class_paypal_ipn`
--
ALTER TABLE `class_paypal_ipn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `txn_type` (`txn_type`),
  ADD KEY `payment_status` (`payment_status`),
  ADD KEY `pending_reason` (`pending_reason`),
  ADD KEY `payer_status` (`payer_status`),
  ADD KEY `payment_type` (`payment_type`),
  ADD KEY `retry_at` (`retry_at`),
  ADD KEY `receiver_email` (`receiver_email`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_paytpv_return`
--
ALTER TABLE `class_paytpv_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_payu_return`
--
ALTER TABLE `class_payu_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_price_drop_alert`
--
ALTER TABLE `class_price_drop_alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_price_extra_settings`
--
ALTER TABLE `class_price_extra_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_priorities`
--
ALTER TABLE `class_priorities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_order_no` (`order_no`);

--
-- Indexen voor tabel `class_priorities_lang`
--
ALTER TABLE `class_priorities_lang`
  ADD KEY `idx_id` (`id`),
  ADD KEY `idx_name` (`name`),
  ADD KEY `idx_lang` (`lang_id`);

--
-- Indexen voor tabel `class_ratings`
--
ALTER TABLE `class_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_regions`
--
ALTER TABLE `class_regions`
  ADD KEY `id` (`id`),
  ADD KEY `idx_name` (`name`),
  ADD KEY `idx_lang` (`lang_id`),
  ADD KEY `idx_dep` (`dep`);

--
-- Indexen voor tabel `class_robokassa_return`
--
ALTER TABLE `class_robokassa_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `ukey` (`ukey`);

--
-- Indexen voor tabel `class_rss`
--
ALTER TABLE `class_rss`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_enabled` (`enabled`);

--
-- Indexen voor tabel `class_rules`
--
ALTER TABLE `class_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_saved_searches`
--
ALTER TABLE `class_saved_searches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_date` (`date`),
  ADD KEY `idx_ip` (`ip`);

--
-- Indexen voor tabel `class_scheduled_imports`
--
ALTER TABLE `class_scheduled_imports`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_searches`
--
ALTER TABLE `class_searches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_date` (`date`);

--
-- Indexen voor tabel `class_slugs`
--
ALTER TABLE `class_slugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_type` (`type`),
  ADD KEY `idx_object_id` (`object_id`);

--
-- Indexen voor tabel `class_spam_prevention_log`
--
ALTER TABLE `class_spam_prevention_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexen voor tabel `class_stripe_return`
--
ALTER TABLE `class_stripe_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `ukey` (`ukey`);

--
-- Indexen voor tabel `class_tag_cloud_searches`
--
ALTER TABLE `class_tag_cloud_searches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `no` (`no`);

--
-- Indexen voor tabel `class_temp_import`
--
ALTER TABLE `class_temp_import`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_users`
--
ALTER TABLE `class_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_username` (`username`),
  ADD KEY `idx_group` (`group`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `idx_date` (`registration_date`),
  ADD KEY `idx_contact` (`contact_name`),
  ADD KEY `idx_active` (`active`),
  ADD KEY `store` (`store`),
  ADD KEY `bulk_uploads` (`bulk_uploads`),
  ADD KEY `moderator` (`moderator`),
  ADD KEY `affiliate` (`affiliate`);

--
-- Indexen voor tabel `class_users_packages`
--
ALTER TABLE `class_users_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_date_start` (`date_start`),
  ADD KEY `idx_date_end` (`date_end`),
  ADD KEY `idx_active` (`active`),
  ADD KEY `idx_pending` (`pending`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `user_approved` (`user_approved`);

--
-- Indexen voor tabel `class_user_fields`
--
ALTER TABLE `class_user_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_user_fields_lang`
--
ALTER TABLE `class_user_fields_lang`
  ADD KEY `idx_name` (`name`),
  ADD KEY `idx_lang` (`lang_id`);

--
-- Indexen voor tabel `class_user_groups`
--
ALTER TABLE `class_user_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_user_groups_lang`
--
ALTER TABLE `class_user_groups_lang`
  ADD KEY `idx_id` (`id`),
  ADD KEY `idx_lang_id` (`lang_id`),
  ADD KEY `idx_name` (`name`);

--
-- Indexen voor tabel `class_user_ratings`
--
ALTER TABLE `class_user_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_webxpay_return`
--
ALTER TABLE `class_webxpay_return`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `ukey` (`ukey`);

--
-- Indexen voor tabel `class_whitelist_emails`
--
ALTER TABLE `class_whitelist_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_whitelist_ips`
--
ALTER TABLE `class_whitelist_ips`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_whitelist_phones`
--
ALTER TABLE `class_whitelist_phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `class_zipcodes`
--
ALTER TABLE `class_zipcodes`
  ADD KEY `idx_zip` (`zipcode`),
  ADD KEY `idx_country` (`country`),
  ADD KEY `idx_lat` (`lat`),
  ADD KEY `idx_lon` (`lon`);

--
-- Indexen voor tabel `class__3`
--
ALTER TABLE `class__3`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `class_2co_return`
--
ALTER TABLE `class_2co_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_actions`
--
ALTER TABLE `class_actions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_ads`
--
ALTER TABLE `class_ads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_ads_extension`
--
ALTER TABLE `class_ads_extension`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_ads_pictures`
--
ALTER TABLE `class_ads_pictures`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_affiliates_payments`
--
ALTER TABLE `class_affiliates_payments`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_affiliates_revenue`
--
ALTER TABLE `class_affiliates_revenue`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_auctions`
--
ALTER TABLE `class_auctions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_authorize_return`
--
ALTER TABLE `class_authorize_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_banners`
--
ALTER TABLE `class_banners`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_banners_positions`
--
ALTER TABLE `class_banners_positions`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_bids`
--
ALTER TABLE `class_bids`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_blocked_emails`
--
ALTER TABLE `class_blocked_emails`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_blocked_ips`
--
ALTER TABLE `class_blocked_ips`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_blocked_phones`
--
ALTER TABLE `class_blocked_phones`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_categories`
--
ALTER TABLE `class_categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_cinetpay_return`
--
ALTER TABLE `class_cinetpay_return`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_comments`
--
ALTER TABLE `class_comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_countries`
--
ALTER TABLE `class_countries`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_coupons`
--
ALTER TABLE `class_coupons`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_credits_packages`
--
ALTER TABLE `class_credits_packages`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_credits_return`
--
ALTER TABLE `class_credits_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_currencies`
--
ALTER TABLE `class_currencies`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_custom_pages`
--
ALTER TABLE `class_custom_pages`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_depending_fields`
--
ALTER TABLE `class_depending_fields`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_email_alerts`
--
ALTER TABLE `class_email_alerts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_epay_return`
--
ALTER TABLE `class_epay_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_featured_plans`
--
ALTER TABLE `class_featured_plans`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_fields`
--
ALTER TABLE `class_fields`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_fieldsets`
--
ALTER TABLE `class_fieldsets`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_fortumo_products`
--
ALTER TABLE `class_fortumo_products`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_fortumo_return`
--
ALTER TABLE `class_fortumo_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_hipay_return`
--
ALTER TABLE `class_hipay_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_icepay_ipn`
--
ALTER TABLE `class_icepay_ipn`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_ie_templates`
--
ALTER TABLE `class_ie_templates`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_ie_templates_fields`
--
ALTER TABLE `class_ie_templates_fields`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_instamojo_return`
--
ALTER TABLE `class_instamojo_return`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_invoices`
--
ALTER TABLE `class_invoices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_klarna_return`
--
ALTER TABLE `class_klarna_return`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_login_history`
--
ALTER TABLE `class_login_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_manual_return`
--
ALTER TABLE `class_manual_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_mb_return`
--
ALTER TABLE `class_mb_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_messages`
--
ALTER TABLE `class_messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_meta_extension`
--
ALTER TABLE `class_meta_extension`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_mobilpay_products`
--
ALTER TABLE `class_mobilpay_products`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_mobilpay_return`
--
ALTER TABLE `class_mobilpay_return`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_multicurrency`
--
ALTER TABLE `class_multicurrency`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_news`
--
ALTER TABLE `class_news`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_new_alerts`
--
ALTER TABLE `class_new_alerts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_packages`
--
ALTER TABLE `class_packages`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_pagseguro_return`
--
ALTER TABLE `class_pagseguro_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_payfast_return`
--
ALTER TABLE `class_payfast_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_payment_actions`
--
ALTER TABLE `class_payment_actions`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_paypal_ipn`
--
ALTER TABLE `class_paypal_ipn`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_paytpv_return`
--
ALTER TABLE `class_paytpv_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_payu_return`
--
ALTER TABLE `class_payu_return`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_price_drop_alert`
--
ALTER TABLE `class_price_drop_alert`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_price_extra_settings`
--
ALTER TABLE `class_price_extra_settings`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_priorities`
--
ALTER TABLE `class_priorities`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_ratings`
--
ALTER TABLE `class_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_regions`
--
ALTER TABLE `class_regions`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_robokassa_return`
--
ALTER TABLE `class_robokassa_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_rss`
--
ALTER TABLE `class_rss`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_rules`
--
ALTER TABLE `class_rules`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_saved_searches`
--
ALTER TABLE `class_saved_searches`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_scheduled_imports`
--
ALTER TABLE `class_scheduled_imports`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_searches`
--
ALTER TABLE `class_searches`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_slugs`
--
ALTER TABLE `class_slugs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_spam_prevention_log`
--
ALTER TABLE `class_spam_prevention_log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_stripe_return`
--
ALTER TABLE `class_stripe_return`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_tag_cloud_searches`
--
ALTER TABLE `class_tag_cloud_searches`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_temp_import`
--
ALTER TABLE `class_temp_import`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_users`
--
ALTER TABLE `class_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_users_packages`
--
ALTER TABLE `class_users_packages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_user_fields`
--
ALTER TABLE `class_user_fields`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_user_groups`
--
ALTER TABLE `class_user_groups`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_user_ratings`
--
ALTER TABLE `class_user_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_webxpay_return`
--
ALTER TABLE `class_webxpay_return`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_whitelist_emails`
--
ALTER TABLE `class_whitelist_emails`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_whitelist_ips`
--
ALTER TABLE `class_whitelist_ips`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class_whitelist_phones`
--
ALTER TABLE `class_whitelist_phones`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `class__3`
--
ALTER TABLE `class__3`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
