<?php

use SensioLabs\Deptrac\Console\Application;

require __DIR__.'/vendor/autoload.php';

if (PHP_VERSION_ID < 70100) {
    echo 'Required at least PHP version 7.1.0, your version: '.PHP_VERSION."\n";
    exit(1);
}

(new Application())->run();
