<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 01-03-2016
 * Time: 22:32
 */
class Home extends Controller
{
    private $home_page;

    public function __construct()
    {
        parent::__construct();
        $this->home_page = new HomePage();
    }

    public function defaultAction($queryString = '')
    {
        parent::defaultAction($queryString);
        $this->home_page->show();
    }

}