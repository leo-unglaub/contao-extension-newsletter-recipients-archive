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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace('pNewLine', 'pNewLine,nra_store_mode', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);

// add the path field if the type is nra_file or both
if ($GLOBALS['TL_CONFIG']['nra_store_mode'] == 'nra_file' || $GLOBALS['TL_CONFIG']['nra_store_mode'] == 'nra_both')
{
	$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace('nra_store_mode', 'nra_store_mode,nra_file_path,nra_log_format', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);
}

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['nra_store_mode'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['nra_store_mode'],
	'inputType'		=> 'select',
	'options'		=> array('nra_both', 'nra_database', 'nra_file'),
	'reference'		=> &$GLOBALS['TL_LANG']['tl_settings'],
	'eval'			=> array('tl_class'=>'w50', 'submitOnChange'=>true)
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['nra_file_path'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['nra_file_path'],
	'inputType'		=> 'text',
	'eval'			=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['nra_log_format'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['nra_log_format'],
	'inputType'		=> 'text',
	'eval'			=> array('tl_class'=>'w50', 'allowHtml'=>true, 'preserveTags'=>true)
)

?>