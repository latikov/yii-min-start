<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

defined('LOG_VIEW_NAMES') or define('LOG_VIEW_NAMES',true);
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

function d($var, $andExit = true)
{
	CVarDumper::dump($var, 10, true);
	if($andExit)
		exit;
}
