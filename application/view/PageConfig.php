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
    static $SITE_LOGO_PATH = 'images' . DS . 'logo.jpg';

    static $SITE_PRIMARY_NAVIGATION_BAR = array(
        array('Home', 'home', HomePage::class),
        array('Resume', 'resume', ResumePage::class),
        array('Poems', 'poems', PoemsPage::class)
    );
}