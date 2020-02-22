<?php
defined('ROOT_PATH') or define('ROOT_PATH', __DIR__ . '/..');
defined('IRATE_ENV') or define('IRATE_ENV', 'dev');
defined('IRATE_DEBUG') or define('IRATE_DEBUG', false);

error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';

(new Irate\System())->run();
