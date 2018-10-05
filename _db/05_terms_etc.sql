
-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0),
(2, 'Tony\'s Blog', 'tonys-blog', 0),
(3, 'Events', 'events', 0),
(5, 'Primary', 'primary', 0),
(6, 'post-format-image', 'post-format-image', 0),
(7, 'post-format-quote', 'post-format-quote', 0),
(8, 'post-format-aside', 'post-format-aside', 0),
(9, 'Stories', 'stories', 0),
(10, 'News', 'news', 0),
(11, 'cancer', 'cancer', 0),
(12, 'golf', 'golf', 0),
(13, 'Lions', 'lions', 0),
(14, 'Tony Foundation', 'tony-foundation', 0),
(15, 'scramble', 'scramble', 0),
(16, 'Austin', 'austin', 0),
(17, 'golf tournament', 'golf-tournament', 0),
(18, 'connect with us', 'connect-with-us', 0),
(19, 'fundraiser', 'fundraiser', 0),
(20, 'Tony Laudadio', 'tony-laudadio', 0),
(21, 'charity', 'charity', 0),
(22, 'golf tournament fundraiser', 'golf-tournament-fundraiser', 0),
(23, '#DriveAwayCancer', 'driveawaycancer', 0),
(24, 'Cancer sucks', 'cancer-sucks', 0),
(25, 'donate', 'donate', 0),
(26, 'surgery', 'surgery', 0),
(27, 'brother with cancer', 'brother-with-cancer', 0),
(28, 'MD Anderson', 'md-anderson', 0),
(29, '#SaveMuny', 'savemuny', 0),
(30, '#Makeanimpact', 'makeanimpact', 0),
(31, 'Lions Golf Course', 'lions-golf-course', 0),
(32, 'TonyFoundation', 'tonyfoundation', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 3, 0),
(129, 5, 0),
(130, 5, 0),
(131, 5, 0),
(137, 10, 0),
(239, 5, 0),
(240, 5, 0),
(241, 5, 0),
(248, 10, 0),
(249, 3, 0),
(249, 10, 0),
(249, 11, 0),
(249, 12, 0),
(249, 13, 0),
(249, 14, 0),
(249, 15, 0),
(249, 16, 0),
(253, 1, 0),
(253, 3, 0),
(253, 10, 0),
(253, 11, 0),
(253, 14, 0),
(253, 17, 0),
(253, 18, 0),
(253, 19, 0),
(253, 20, 0),
(253, 21, 0),
(253, 22, 0),
(253, 23, 0),
(258, 5, 0),
(266, 9, 0),
(266, 10, 0),
(266, 11, 0),
(266, 14, 0),
(266, 24, 0),
(266, 25, 0),
(266, 26, 0),
(266, 27, 0),
(266, 28, 0),
(275, 3, 0),
(275, 10, 0),
(275, 14, 0),
(275, 19, 0),
(275, 21, 0),
(275, 23, 0),
(275, 29, 0),
(275, 30, 0),
(275, 31, 0),
(278, 3, 0),
(278, 10, 0),
(278, 14, 0),
(278, 17, 0),
(278, 19, 0),
(278, 23, 0),
(278, 29, 0),
(278, 30, 0),
(281, 1, 0),
(291, 1, 0),
(291, 11, 0),
(291, 19, 0),
(291, 23, 0),
(291, 29, 0),
(291, 30, 0),
(291, 31, 0),
(291, 32, 0),
(296, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 4),
(2, 2, 'category', 'General blog posts written by Tony for the Tony Foundation website.', 0, 0),
(3, 3, 'category', 'These posts announce specific events (and will eventually have their own template)', 0, 5),
(5, 5, 'nav_menu', '', 0, 7),
(6, 6, 'post_format', '', 0, 0),
(7, 7, 'post_format', '', 0, 0),
(8, 8, 'post_format', '', 0, 0),
(9, 9, 'category', 'Blog posts about people and families that Tony Foundation has met and/or helped along the way.', 0, 1),
(10, 10, 'category', 'Announcements and newsworthy posts from the Tony Foundation', 0, 7),
(11, 11, 'post_tag', '', 0, 4),
(12, 12, 'post_tag', '', 0, 1),
(13, 13, 'post_tag', '', 0, 1),
(14, 14, 'post_tag', '', 0, 5),
(15, 15, 'post_tag', '', 0, 1),
(16, 16, 'post_tag', '', 0, 1),
(17, 17, 'post_tag', '', 0, 2),
(18, 18, 'post_tag', '', 0, 1),
(19, 19, 'post_tag', '', 0, 4),
(20, 20, 'post_tag', '', 0, 1),
(21, 21, 'post_tag', '', 0, 2),
(22, 22, 'post_tag', '', 0, 1),
(23, 23, 'post_tag', '', 0, 4),
(24, 24, 'post_tag', '', 0, 1),
(25, 25, 'post_tag', '', 0, 1),
(26, 26, 'post_tag', '', 0, 1),
(27, 27, 'post_tag', '', 0, 1),
(28, 28, 'post_tag', '', 0, 1),
(29, 29, 'post_tag', '', 0, 3),
(30, 30, 'post_tag', '', 0, 3),
(31, 31, 'post_tag', '', 0, 2),
(32, 32, 'post_tag', '', 0, 1);
