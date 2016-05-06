<?php
/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 21-02-2016
 * Time: 21:12
 */
// Load configuration and helper functions
require_once(ROOT . DS . 'config' . DS . 'config.php');
//require_once(ROOT . DS . 'core' . DS . 'functions.php');

$url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';

// Autoload classes
function __autoload($className) {
    if(file_exists(ROOT . DS . 'application' . DS . $className . '.php')) {
        require_once (ROOT . DS . 'application' . DS . $className . '.php');
    } else if (file_exists(ROOT . DS . 'core' . DS . $className . '.php')) {
        require_once(ROOT . DS . 'core' . DS . $className . '.php');
    } else if (file_exists(ROOT . DS . 'application' . DS . 'controller' . DS . $className . '.php')) {
        require_once(ROOT . DS . 'application' . DS . 'controller' . DS . $className . '.php');
    } else if (file_exists(ROOT . DS . 'application' . DS . 'model' . DS . $className . '.php')) {
        require_once(ROOT . DS . 'application' . DS . 'model' . DS . $className . '.php');
    } else if(file_exists(ROOT . DS . 'application' . DS . 'view' . DS . $className . '.php')) {
        require_once(ROOT . DS . 'application' . DS . 'view' . DS . $className . '.php');
    } else if (file_exists(ROOT . DS . 'core' . DS . 'sql.php')) {
        require_once(ROOT . DS . 'core' . DS . 'sql.php');
    }
}

// Route the request
Application::getInstance()->route($url);