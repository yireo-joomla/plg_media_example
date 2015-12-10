<?php
class PlgMediaExampleFileTypeOpenoffice extends MediaModelFileTypeAbstract implements MediaModelFileTypeInterface
{
	/**
	 * File extensions supported by this file type
	 */
	protected $extensions = array(
		'odt',
	);

	/**
	 * MIME types supported by this file type
	 */
	protected $mimeTypes = array(
		'application/odt',
	);

	/**
	 * Return the file properties of a specific file
	 *
	 * @param string $filePath
	 *
	 * @return array
	 */
	public function getProperties($filePath)
	{
		$properties = array();
		$properties['icon_32'] = 'media/mime-icon-32/openoffice.png';
		$properties['icon_16'] = 'media/mime-icon-16/openoffice.png';

		return $properties;
	}
}