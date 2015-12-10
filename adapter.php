<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_media
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Ftp as Adapter;

/**
 * Media Manager model to abstract the usage of local file actions
 */
class PlgMediaExampleFileAdapterFtp extends MediaModelFileAdapterLocal implements MediaModelFileAdapterInterface
{
	/**
	 * Return a filesystem handler
	 *
	 * @return Filesystem
	 */
	public function getHandler()
	{
		$config = JFactory::getConfig();

		$filesystem = new Filesystem(new Adapter([
			'host'     => $config->get('ftp_host'),
			'username' => $config->get('ftp_user'),
			'password' => $config->get('ftp_pass'),
			'port'     => $config->get('ftp_port'),
			'root'     => $config->get('ftp_root'),
			'passive'  => true,
			'timeout'  => 30,
		]));

		return $filesystem;
	}

	/**
	 * Return a unique hash identifying this file
	 *
	 * @return mixed
	 */
	public function getHash()
	{
		return parent::getHash();
	}

	/**
	 * Detect the MIME type of a specific file
	 *
	 * @return string
	 */
	public function getMimeType()
	{
		return parent::getMimeType();
	}
}