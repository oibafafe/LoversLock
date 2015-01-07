<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

//require __DIR__ . '../vendor/facebook/php-sdk-v4/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
