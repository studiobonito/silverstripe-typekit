<?php
use Symfony\Component\ClassLoader\ClassMapGenerator;

define('BASE_PATH', realpath(dirname(__DIR__)));
define('FRAMEWORK_PATH', BASE_PATH . '/framework');

if (!file_exists(BASE_PATH . '/vendor/autoload.php')) {
    echo 'You must first install the vendors using composer.' . PHP_EOL;
    exit(1);
}

$loader = require BASE_PATH . '/vendor/autoload.php';

$classMap = ClassMapGenerator::createMap(FRAMEWORK_PATH);
$classMap += ClassMapGenerator::createMap(BASE_PATH . '/cms');
unset($classMap['PHPUnit_Framework_TestCase']);
$loader->addClassMap($classMap);

//TODO: Find a nicer way to mock global methods
function _t($entity, $string = "", $context = "", $injection = "")
{
    return $string;
}
