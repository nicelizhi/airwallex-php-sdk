<?php
declare(strict_types=1);

include_once __DIR__ . '/../.env.php';
require_once __DIR__ . '/../vendor/autoload.php';

if (!isset($variables)) {
    throw new Exception('Environment variables could not been found');
}

foreach ($variables as $key => $value) {
    putenv("$key=$value");
    echo $key."--".$value."\r\n";
}
