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
$GLOBALS['TL_LANG']['tl_settings']['nra_store_mode']	= array('Speicherart der gelöschten NL-Abbonenten', 'Wählen Sie hier die Art der gewünschten Speicherung aus.');
$GLOBALS['TL_LANG']['tl_settings']['nra_file_path']		= array('Speicherort des Log-Files', 'Geben Sie hier den Speicherort des Log-Files an welches für die Datenspeicherung verwendet werden soll. Wenn Sie das Feld leer lassen wird system/logs/newsletter_recipients_archive.log verwendet.');
$GLOBALS['TL_LANG']['tl_settings']['nra_log_format']	= array('Format des Log-Strings', 'Hier können Sie das Format des Log-Strings definieren. Sie haben folgende Platzhalter zur Verfügung: Datum, E-Mail Adresse, Channel. Es wird die PHP-Funktion sprintf() verwendet. Wenn Sie das Feld leer lassen wird %s: %s <- %s verwendet.');

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_settings']['nra_both']			= 'DB und Datei';
$GLOBALS['TL_LANG']['tl_settings']['nra_database']		= 'Datenbank';
$GLOBALS['TL_LANG']['tl_settings']['nra_file']			= 'Datei';

?>