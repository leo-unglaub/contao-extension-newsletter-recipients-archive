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
 * Table tl_newsletter_recipients_archiv
 */
$GLOBALS['TL_DCA']['tl_newsletter_recipients_archive'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'				=> 'Table',
		'enableVersioning'			=> false,
		'closed'					=> true,
		'notEditable'				=> true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'					=> 0,
			'panelLayout'			=> 'filter;sort,search,limit',
		),
		'label' => array
		(
			'fields'				=> array('email'),
			'label_callback'		=> array('newsletter_recipients_archive', 'generateLabel')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'				=> 'act=select',
				'class'				=> 'header_edit_all',
				'attributes'		=> 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'delete' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['delete'],
				'href'				=> 'act=delete',
				'icon'				=> 'delete.gif',
				'attributes'		=> 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['show'],
				'href'				=> 'act=show',
				'icon'				=> 'show.gif'
			)
		)
	),

	// Fields
	'fields' => array
	(
		'email' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['email'],
			'search'				=> true
		),
		'archivedDate' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['archivedDate'],
		),
		'channels' => array
		(
			'label'					=> &$GLOBALS['TL_LANG']['tl_newsletter_recipients_archive']['channels'],
			'search'				=> true
		)
	)
);
?>