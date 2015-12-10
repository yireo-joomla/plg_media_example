# Example Media Plugin
This is an example Media Plugin, for use with the Joomla project to improve the Media Manager:
https://github.com/joomla-projects/media-manager-improvement

With a Media Plugin you can:
- Add new file types to Joomla (`onMediaBuildFileTypes`)


## Example for adding new file types
A Media Plugin allows you to add new file types to Joomla. Currently images and videos are supported.
You can for instance add a new 

```php
class PlgMediaExample
{
    public function onMediaBuildFileTypes($availableFileTypes)
    {
        $availableFileTypes[] = $fileTypeClass;
    }
}
```
