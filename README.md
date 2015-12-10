# Example Media Plugin
This is an example Media Plugin, for use with the Joomla project to improve the Media Manager:
https://github.com/joomla-projects/media-manager-improvement

With a Media Plugin you can:
- Add new file types to Joomla (`onMediaBuildFileTypes`)
- Add new file adapters to Joomla (`onMediaBuildFileAdapters`)


## Example for adding new file types
A Media Plugin allows you to add new file types to Joomla. Currently images and videos are supported.
You can for instance add a new file type as such:

```php
class PlgMediaExample
{
    public function onMediaBuildFileTypes($availableFileTypes)
    {
        $availableFileTypes[] = $fileTypeClass;
    }
}

// @todo: Implement $fileTypeClass example properly
```

## Example for adding new file adapters
A Media Plugin allows you to add new file adapters to Joomla. A file adapter allows the Media Manager 
to access files that are not stored in the local filesystem. A file adapter is a Joomla abstraction
of the FlySystem `Adapter` class, which allows for future integration of Dropbox, S3 and so on.

```php
class PlgMediaExample
{
    public function onMediaBuildFileAdapters($availableFileAdapters)
    {
        $availableFileAdapters[] = $fileAdapterClass;
    }
}
```

Currently (December 2015) there is only one adapter `local` (with class `MediaModelFileAdapterLocal`).
However this plugin 
