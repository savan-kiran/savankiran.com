<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 06-03-2016
 * Time: 13:24
 */
class Poems extends Controller
{
    private $poems_page;

    public function __construct()
    {
        parent::__construct();
        $this->poems_page = new PoemsPage();
    }

    public function defaultAction($queryString = '')
    {
        parent::defaultAction($queryString);
        $this->poems_page->show();
    }

}