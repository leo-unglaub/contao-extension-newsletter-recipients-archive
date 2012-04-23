-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_newsletter_recipients_archive`
-- 

CREATE TABLE `tl_newsletter_recipients_archive` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `email` varchar(128) NOT NULL default '',
  `archivedDate` int(10) unsigned NOT NULL default '0',
  `channels` blob NULL,
  PRIMARY KEY  (`id`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
