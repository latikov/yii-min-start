<?php

$yii=dirname(__FILE__).'/../vendor/yiisoft/yii/framework/yii.php';

if (file_exists(dirname(__FILE__).'/../debug.php'))
	require(dirname(__FILE__).'/../debug.php');

require_once($yii);

$local=require(dirname(__FILE__).'/../protected/config/local.php');

$base=require(dirname(__FILE__).'/../protected/config/main.php');

$config=CMap::mergeArray($base, $local);

Yii::createWebApplication($config)->run();