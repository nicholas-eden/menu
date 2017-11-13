<?php

$loader = require_once __DIR__ . "/../vendor/autoload.php";
$loader = new Composer\Autoload\ClassLoader();
//$loader->add('Menu\\', __DIR__);
$loader->add('Menu\\', __DIR__ . "/../src/Menu");
