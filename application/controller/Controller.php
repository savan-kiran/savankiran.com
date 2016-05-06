<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 21-02-2016
 * Time: 21:40
 */
class Controller {

    public static $DEFAULT_ACTION = 'defaultAction';

    protected $models;

    public function __construct() {

    }

    // Load model class
    protected function load_model($model) {
        if(class_exists($model)) {
            $this->models[$model] = new $model();
        }
    }

    // Get the instance of the loaded model class
    protected function get_model($model) {
        if(is_object($this->models[$model])) {
            return $this->models[$model];
        } else {
            return false;
        }
    }

    /*
     * Default action when no action is specified for a controller
     */
    public function defaultAction($queryString = '') {
        // do nothing in parent class
        // inherited classes must override this method to render their respective views
    }
}