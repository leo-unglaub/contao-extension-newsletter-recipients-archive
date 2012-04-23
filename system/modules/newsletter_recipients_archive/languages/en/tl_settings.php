<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Unglaub 2012
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    newsletter_recipients_archive
 * @license    LGPL
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_settings']['nra_store_mode']	= array('Storage type for the unsubscribed addresses', 'Select the storage technology. You can store the informations in a database of into a file. You also can store the informations in both locations.');
$GLOBALS['TL_LANG']['tl_settings']['nra_file_path']		= array('path to the log file', 'Define where the log file should be stored. If you leave this field empty the extension will use system/logs/newsletter_recipients_archive.log as default.');
$GLOBALS['TL_LANG']['tl_settings']['nra_log_format']	= array('log string format', 'Define the format of the log string. You have the values date, email address, channels. The strings will be replaced by the php function sprintf. If you leave the field empty the default is %s: %s <- %s.');
/**
 * References
 */
$GLOBALS['TL_LANG']['tl_settings']['nra_both']			= 'db and file';
$GLOBALS['TL_LANG']['tl_settings']['nra_database']		= 'database';
$GLOBALS['TL_LANG']['tl_settings']['nra_file']			= 'file';

?>