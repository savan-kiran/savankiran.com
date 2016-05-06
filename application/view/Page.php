<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 05-03-2016
 * Time: 13:07
 */
abstract class Page
{
    /** Generic page properties */
    private $title;
    private $sub_title;
    private $logo;
    private $primary_nav_bar_contents;
    private $secondary_nav_bar_contents;
    private $tree_variant;

    /** Active page and sub page */
    private $active_page;
    private $active_sub_page;

    /** Generic views */
    private $head_view;
    private $title_view;
    private $primary_nav_bar;
    private $secondary_nav_bar;
    private $tree_view;

    /**
     * Page constructor.
     * @param $active_page
     */
    public function __construct($active_page)
    {
        /** Initializing generic information */
        $this->title = PageConfig::$SITE_TITLE;
        $this->sub_title = PageConfig::$SITE_SUB_TITLE;
        $this->logo = PageConfig::$SITE_LOGO_PATH;
        $this->primary_nav_bar_contents = PageConfig::$SITE_PRIMARY_NAVIGATION_BAR;

        /** Initializing generic views */
        $this->title_view = new Title();
        $this->head_view = new Head();
        $this->primary_nav_bar = new PrimaryNavBar();
        $this->secondary_nav_bar = new SecondaryNavBar();
        $this->tree_view = new Tree();

        $this->active_page = $active_page;
    }

    /**
     * Get the secondary navigation bar contents
     * @return mixed
     */
    public function getSecondaryNavBarContents()
    {
        return $this->secondary_nav_bar_contents;
    }

    /**
     * Set the secondary navigation bar contents
     * @param mixed $secondary_nav_bar_contents
     */
    public function setSecondaryNavBarContents($secondary_nav_bar_contents)
    {
        $this->secondary_nav_bar_contents = $secondary_nav_bar_contents;
    }

    /**
     * Set secondary navigation bar's active page
     * @param $active_sub_page
     */
    public function setSecondaryNavBarActivePage($active_sub_page)
    {
        $this->active_sub_page = $active_sub_page;
    }

    /**
     * Get the tree variant
     * @return mixed
     */
    public function getTreeVariant()
    {
        return $this->tree_variant;
    }

    /**
     * Set the variant of the tree to be rendered
     * @param mixed $tree_variant
     */
    public function setTreeVariant($tree_variant)
    {
        $this->tree_variant = $tree_variant;
    }

    private function setupViews()
    {
        /** Setup title view */
        $this->title_view->setTitle($this->title);
        $this->title_view->setSubTitle($this->sub_title);
        $this->title_view->setLogo($this->logo);

        /** Setup primary nav bar contents */
        $this->primary_nav_bar->setPrimaryNavBarContents($this->primary_nav_bar_contents);
        $this->primary_nav_bar->setActivePage($this->active_page);

        /** Setup secondary nav bar contents */
        $this->secondary_nav_bar->setLayoutType(SecondaryNavBar::$LAYOUT_TYPE_LINEAR);
        $this->secondary_nav_bar->setSecondaryNavBarContents($this->secondary_nav_bar_contents);
        $this->secondary_nav_bar->setActiveContent($this->active_sub_page);
    }

    /**
     * Called by controller once the page is setup
     * @return mixed
     */
    public function show()
    {
        /** Configure generic views */
        $this->setupViews();

        /** Render views */
        $this->head_view->render();
        $this->secondary_nav_bar->render();
        $this->tree_view->render();
        $this->title_view->render();
        $this->primary_nav_bar->render();
    }
}