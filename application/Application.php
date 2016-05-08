<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 21-02-2016
 * Time: 21:40
 */
class Application {

    private static $DEVELOPMENT_ENVIRONMENT = true;

    private static $sInstance;

    function __construct() {
        $this->set_reporting();
        $this->remove_magic_quotes();
        $this->unregister_globals();
    }

    public static function getInstance() {
        if(!isset(Application::$sInstance)) {
            Application::$sInstance = new Application();
        }
        return Application::$sInstance;
    }

    private function set_reporting() {
        if (Application::$DEVELOPMENT_ENVIRONMENT == true) {
            error_reporting(E_ALL);
            ini_set('display_errors','On');
        } else {
            error_reporting(E_ALL);
            ini_set('display_errors','Off');
            ini_set('log_errors', 'On');
            ini_set('error_log', ROOT.DS.'tmp'.DS.'logs'.DS.'error.log');
        }
    }

    private function strip_slashes_deep($value) {
        $value = is_array($value) ? array_map(array($this,'strip_slashes_deep'), $value) : stripslashes($value);
        return $value;
    }

    private function remove_magic_quotes() {
        if ( get_magic_quotes_gpc() ) {
            $_GET    = $this->strip_slashes_deep($_GET);
            $_POST   = $this->strip_slashes_deep($_POST);
            $_COOKIE = $this->strip_slashes_deep($_COOKIE);
        }
    }

    private function unregister_globals() {
        if (ini_get('register_globals')) {
            $array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
            foreach ($array as $value) {
                foreach ($GLOBALS[$value] as $key => $var) {
                    if ($var === $GLOBALS[$key]) {
                        unset($GLOBALS[$key]);
                    }
                }
            }
        }
    }

    public function route($url) {
        // Split the URL into parts
        $url_array = explode('/', $url);
        array_shift($url_array);

        // The first part of the URL is the controller name
        $controller = isset($url_array[0]) ? $url_array[0] : '';
        array_shift($url_array);

        // The second part is the method name
        $action = isset($url_array[0]) ? $url_array[0] : '';
        array_shift($url_array);

        // The third part are the parameters
        $query_string = $url_array;

        // if controller is empty, redirect to default controller
        if(empty($controller)) {
            $controller = $this->default_controller();
        }

        // if action is empty, redirect to index page
        if(empty($action)) {
            $action = Controller::$DEFAULT_ACTION;
        }

        $controller = ucwords($controller);
        if(class_exists($controller)) {
            $controller_obj = new $controller();

            if ((int)method_exists($controller, $action)) {
                call_user_func_array(array($controller_obj, $action), $query_string);
            } else {
                /* Error Generation Code Here */
            }
        }
    }

    private function default_controller() {
        return Home::class;
    }
}