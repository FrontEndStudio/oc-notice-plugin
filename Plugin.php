<?php namespace Fes\Notice;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return ['Fes\Notice\Components\NoticeList' => 'NoticeList'];
    }

    public function registerSettings()
    {
    }
}
