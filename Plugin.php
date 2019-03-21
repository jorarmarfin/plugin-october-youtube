<?php namespace LuisMayta\Youtube;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Youtube',
            'description' => 'Show latest videos for chanel',
            'author'      => 'Luis Mayta',
            'icon'        => 'oc-icon-youtube-play',
            'homepage'    => 'https://github.com/jorarmarfin/plugin-october-youtube'
        ];
    }
    public function registerComponents()
    {
        return [
            '\LuisMayta\Youtube\Components\Videos' => 'demovideo'
        ];
    }

    public function registerSettings()
    {
        return [
            'config' => [
                'label'       => 'luismayta.youtube::lang.plugin.name',
                'description' => 'luismayta.youtube::lang.plugin.description',
                'icon'        => 'icon-youtube-play',
                'class'       => 'LuisMayta\Youtube\Models\Settings',
                'order'       => 600
            ]
        ];
    }
}
