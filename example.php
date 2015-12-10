<?php
include_once 'type.php';
include_once 'adapter.php';

class PlgMediaExample extends JPlugin
{
    public function onMediaBuildFileTypes(&$availableFileTypes)
    {
        $fileTypeClass = new PlgMediaExampleFileTypeOpenoffice;
        $availableFileTypes[] = $fileTypeClass;
    }

    public function onMediaBuildFileAdapters(&$availableFileAdapters)
    {
        $config = JFactory::getConfig();

        if ($config->get('ftp_enable') == 0)
        {
            return false;
        }

        $fileAdapterClass = new PlgMediaExampleFileAdapterFtp;
        $availableFileAdapters[] = $fileAdapterClass;
    }
}

