<?php namespace LuisMayta\Youtube\Components;

use Cms\Classes\ComponentBase;
use LuisMayta\Youtube\Classes\YoutubeClient;

class Videos extends ComponentBase 
{

    public function componentDetails()
    {
        return [
            'name'        => 'Latest Videos',
            'description' => 'Show latest videos'
        ];
    }
    public function defineProperties()
    {
        return [
            'max' => [
                'description'       => 'The most amount of todo items allowed',
                'title'             => 'Max items',
                'default'           => 10,
            ]
        ];
    }
    public function onRun()
    {
        $this->page['videos'] = YoutubeClient::instance()->getVideosPortada(2);

    }
    
}
