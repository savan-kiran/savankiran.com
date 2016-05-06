<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 06-03-2016
 * Time: 13:23
 */
class Resume extends Controller
{
    private $resume_page;

    public function __construct()
    {
        parent::__construct();
        $this->resume_page = new ResumePage();
    }

    public function defaultAction($queryString = '')
    {
        parent::defaultAction($queryString);
        $this->resume_page->show();
    }

}