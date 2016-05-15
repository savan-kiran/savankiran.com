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
    private $home_model;

    public function __construct()
    {
        parent::__construct();
        $this->home_model = new HomeModel();
        $this->home_page = new HomePage();
    }

    public function defaultAction($queryString = '')
    {
        parent::defaultAction($queryString);
        $this->home_page->setContent($this->home_model->getIntroduction());
        $this->home_page->show();
    }

}