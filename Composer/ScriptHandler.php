<?php

namespace PP\BundleInstaller;

use Composer\Script\Event;

class ScriptHandler
{
    public static function buildParameters(Event $event)
    {
        $extras = $event->getComposer()->getPackage()->getExtra();

        var_dump($extras);die();
    }
}