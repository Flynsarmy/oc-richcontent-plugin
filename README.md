# Rich Content

This October CMS plugin conditionally converts the markup field in CMS - Content area to a richeditor field. This is useful, for example, when you have a CMS - Page with dynamic content on it and you just want to insert a bit of WYSIWYG text easily.

This plugin differs from other WYSIWYG plugins in that they're all or nothing - you can either choose to have ALL Content entries be a WYSIWYG or none of them. This plugin lets you pick and choose.

## Installation

* `git clone` to */plugins/flynsarmy/richcontent*
* `php artisan plugin:refresh Flynsarmy.RichContent`

## Usage

* Create a CMS - Content with a filename `test.rich.htm`
* Hit save
* Close and re-open `test.rich.htm`

## Licence

The Rich Content plugin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).