<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 06-03-2016
 * Time: 13:20
 */
class PageConfig
{
    static $SITE_TITLE = 'Savan Kiran';
    static $SITE_SUB_TITLE = 'World through my eyes';
    static $SITE_LOGO_PATH = PATH . 'images' . DS . 'logo.jpg';

    static $SITE_PRIMARY_NAVIGATION_BAR = array(
        array('Home', PATH . 'home', HomePage::class),
        array('Resume', PATH . 'resume', ResumePage::class),
        array('Abstract Writings', PATH . 'abstractWritings', AbstractWritingsPage::class)
    );

    static $ABSTRACT_WRITINGS_PER_PAGE = 5;
}