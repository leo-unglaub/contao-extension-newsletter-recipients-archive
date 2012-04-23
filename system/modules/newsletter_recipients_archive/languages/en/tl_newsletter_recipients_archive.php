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
$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['email']			= array('Address', 'The email address.');
$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['archivedDate']		= array('unsubscription date', 'The date from the unsubscription.');
$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['channels']			= array('newsletter channels', 'Show a list with all newsletter channels from the recipient.');

/**
 * Operations
 */
$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['delete']			= array('delete', 'delete the archive entry complete');
$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['show']				= array('show', 'show informations about the unsubscription entry');
?>