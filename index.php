<?php
/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 21-02-2016
 * Time: 21:45
 */
// Directory separator is set up here because separators are different on Linux and Windows operating systems
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__) . DS . 'htdocs' /* Appending with htdocs to be removed before deployment */));
require_once(ROOT . DS . 'core' . DS . 'bootstrap.php');
