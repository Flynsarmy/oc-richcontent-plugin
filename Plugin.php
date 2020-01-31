<?php

namespace Flynsarmy\RichContent;

use Backend\Widgets\Form;
use Cms\Classes\Content;
use Event;
use System\Classes\PluginBase;

/**
 * RichContent Plugin Information File.
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'RichContent',
            'description' => 'Displays CMS Content markup as a richeditor if the filename ends in ".rich.htm"',
            'author'      => 'Flynsarmy',
            'icon'        => 'icon-file-text-o',
        ];
    }

    public function boot()
    {
        Event::listen('backend.form.extendFields', function (Form $form) {
            // Only modify CMS - Content forms
            if (!is_object($form->model) || !$form->model instanceof Content) {
                return;
            }

            // Make sure our target field exists
            $field = $form->getField('markup');
            if (!$field) {
                return;
            }

            // Only modify existing content fields with filename ending in '.rich.htm'
            $fileName = $form->model->fileName;
            if (substr($fileName, -9) != '.rich.htm') {
                return;
            }

            // Convert to a richeditor
            $field->config['type'] = $field->config['widget'] = 'richeditor';
        });
    }
}
