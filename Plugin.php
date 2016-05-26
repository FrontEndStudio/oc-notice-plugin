<?php namespace Fes\Notice;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Fes\Notice\Components\NoticeByCategory' => 'noticeByCategory',
            'Fes\Notice\Components\NoticeBySection' => 'noticeBySection',
            'Fes\Notice\Components\NoticeList' => 'noticeList'
        ];
    }

    public function registerPageSnippets()
    {
        return [
            'Fes\Notice\Components\NoticeByCategory' => 'noticeByCategory',
            'Fes\Notice\Components\NoticeBySection' => 'noticeBySection',
            'Fes\Notice\Components\NoticeList' => 'noticeList'
        ];
    }

    public function registerSettings()
    {
    }
}
