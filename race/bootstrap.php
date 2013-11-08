<?php
date_default_timezone_set('America/Sao_Paulo');

define('BD', realpath(dirname(__FILE__)));

error_reporting(E_ALL | E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

set_include_path(implode(PATH_SEPARATOR, array(
	BD . '/library/Race/',
	get_include_path()
)));

function autoload($class)
{
	include str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';
}

function namespaceAutoload($class)
{
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
}

//spl_autoload_register('namespaceAutoload');
spl_autoload_register('autoload');
