<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 21-02-2016
 * Time: 21:41
 */
abstract class View
{
    function __construct()
    {

    }

    /**
     * Render method to be overridden by inherited classes
     * @return mixed
     */
    abstract function render();
}