<?php namespace LuisMayta\Youtube\Models;

use October\Rain\Database\Model;

/**
 * Builder settings model
 *
 * @package luismayta\Youtube
 * @author Luis Mayta
 *
 */
class Settings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'luismayta_youtube_settings';

    public $settingsFields = 'fields.yaml';

}