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
 * @copyright  Leo Unglaub 2010
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    newsletter_recipients_archive
 * @license    LGPL
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['email']			= array('E-Mail Adresse', 'Die E-Mail Adresse des gekündigten Newsletters.');
$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['archivedDate']		= array('Kündigungsdatum', 'An diesem Datum wurde der Newsletter gekündigt.');
$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['channels']			= array('Newsletter-Kanäle', 'Der gekündigte Account war in diesen Newsletter-Kanälen registriert.');

/**
 * Operations
 */
$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['delete']			= array('löschen', 'Löscht einen alten Newsletter-Empfänger aus dem Archiv');
$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['show']				= array('anzeigen', 'Zeigt Informationen über einen alten Newsletter-Empfänger an');
?>