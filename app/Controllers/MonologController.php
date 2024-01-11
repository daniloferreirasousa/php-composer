<?php

namespace App\Controllers;

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

class MonologController
{
    public function createLog($name, $fileName, $text)
    {
        $log = new Logger($name);
        $log->pushHandler(new StreamHandler(__DIR__.'/../../storage/logs/'.$fileName, Level::Debug));

        $log->info($text);
        $log->close();
    }
}