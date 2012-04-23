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
 * Class NewsletterRecipientsArchive
 * Contain methods to handle the recipients archive
 */
class NewsletterRecipientsArchive extends Controller
{
	/**
	 * generate the label
	 *
	 * @param array $row
	 * @param string $label
	 * @return string
	 */
	public function generateLabel($row, $label)
	{
		$strSpan = sprintf('<span style="color:#b3b3b3; padding-left:3px;">(%s)</span>', $this->parseDate($GLOBALS['TL_CONFIG']['datimFormat'], $row['archivedDate']));
		return sprintf('<div style="float:left;"><div class="list_icon" style="background-image:url(\'system/themes/%s/images/member.gif\');">%s %s</div></div>', $this->getTheme(), $row['email'], $strSpan);
	}

	/**
	 * store informations about the unsubscription in the database or a file
	 *
	 * @param array $strEmail
	 * @param array $arrChannels
	 */
	public function storeArchiveEntry($strEmail, $arrChannels)
	{
		$this->import('Database');
		$strChannels = '';

		// prepare the channels to a string
		foreach ($arrChannels as $v)
		{
			$objChannelName = $this->Database->prepare('SELECT title FROM tl_newsletter_channel WHERE id=?')
											 ->execute($v);

			// concat evrythink to a string
			if (empty($strChannels))
				$strChannels .= $objChannelName->title;
			else
				$strChannels .= ', ' . $objChannelName->title;

			unset($objChannelName);
		}

		// prepare the path if he is empty
		if ($GLOBALS['TL_CONFIG']['nra_file_path'] == '')
		{
			$GLOBALS['TL_CONFIG']['nra_file_path'] = 'system/logs/newsletter_recipients_archive.log';
		}

		// prepare the log format if its empty
		if ($GLOBALS['TL_CONFIG']['nra_log_format'] == '')
		{
			$GLOBALS['TL_CONFIG']['nra_log_format'] = '%s: %s <- %s';
		}

		// select the mode and store the informations
		switch ($GLOBALS['TL_CONFIG']['nra_store_mode'])
		{
			case 'nra_database':
				$this->storeInDb($strEmail, $strChannels, time());
				break;
			case 'nra_both':
				$this->storeInDb($strEmail, $strChannels, time());
			case 'nra_file':
				$this->storeInFile($GLOBALS['TL_CONFIG']['nra_file_path'], $strEmail, $strChannels, time());
		}

	}

	/**
	 * store the informations in a log file
	 *
	 * @param string $strLocation
	 * @param <string> $strEmail
	 * @param <string> $strChannels
	 * @param int $intTime
	 */
	protected function storeInFile($strLocation, $strEmail, $strChannels, $intTime)
	{
		$objFile = new File($strLocation);
		$objFile->append(sprintf($GLOBALS['TL_CONFIG']['nra_log_format'], $this->parseDate($GLOBALS['TL_CONFIG']['datimFormat'], $intTime), $strEmail, $strChannels));
		$objFile->close();
	}

	/**
	 * store the informations in the database
	 *
	 * @param string $strEmail
	 * @param string $strChannels
	 * @param int $intTime
	 */
	protected function storeInDb($strEmail, $strChannels, $intTime)
	{
		$arrSet = array
		(
			'email'			=> $strEmail,
			'archivedDate'	=> $intTime,
			'channels'		=> $strChannels
		);

		$this->Database->prepare('INSERT INTO tl_newsletter_recipients_archive %s')
					   ->set($arrSet)
					   ->execute();
	}
}

?>
