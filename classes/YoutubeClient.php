<?php namespace LuisMayta\Youtube\Classes;

use \October\Rain\Support\Traits\Singleton;
use LuisMayta\Youtube\Models\Settings;

class YoutubeClient 
{
    use Singleton;

    private $obj;
	private $key;
    private $channel;
    
    public function __construct()
	{
        $settings = Settings::instance();
        $this->key = $settings->api_key;
		$this->channel = $settings->channel_id;
		$url = "https://www.googleapis.com/youtube/v3/search?key=$this->key&channelId=$this->channel&part=snippet,id&order=date&maxResults=9";
		$json = file_get_contents($url);
		$this->obj = json_decode($json, true);
	}
	public function getVideosPortada($cnt)
	{
		$url = "https://www.googleapis.com/youtube/v3/search?key=$this->key&channelId=$this->channel&part=snippet,id&order=date&maxResults=$cnt&type=video";
		$json = file_get_contents($url);
		$this->obj = json_decode($json, true);
        return $this->obj['items'];
	}
	public function getVideos()
	{
        $videos = $this->obj['items'];
		return $videos;
	}
}

