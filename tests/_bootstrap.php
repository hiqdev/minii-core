<?php

// ensure we get report on all possible php errors
error_reporting(-1);

define('YII_ENABLE_ERROR_HANDLER', false);
define('YII_DEBUG', true);
$_SERVER['SCRIPT_NAME'] = '/' . __DIR__;
$_SERVER['SCRIPT_FILENAME'] = __FILE__;

$composerAutoload = __DIR__ . '/../vendor/autoload.php';
if (is_file($composerAutoload)) {
    require_once($composerAutoload);
} else {
    require_once(__DIR__ . '/../../../autoload.php');
}

Yii::setAlias('@yiiunit', __DIR__);

require_once(__DIR__ . '/TestCase.php');
