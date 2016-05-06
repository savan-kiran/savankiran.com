<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 04-03-2016
 * Time: 08:18
 */
class HomePage extends Page
{
    private static $HOME_SECONDARY_NAVIGATION_BAR = array(
        array('Recent posts', DS . 'home' . DS . 'recents', HomePage::class),
        array('Most viewed posts', DS . 'home' . DS . 'most_viewed', PoemsPage::class)
    );

    private $content;
    private $home_post;

    public function __construct()
    {
        parent::__construct(HomePage::class);
        //$this->setSecondaryNavBarContents(HomePage::$HOME_SECONDARY_NAVIGATION_BAR);
        $this->home_post = new HomePost();
    }

    /**
     * Get the content
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the content to be shown in the content area
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    private function setupViews() {
        /** Setup content */
        $this->home_post->setContent($this->content);
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
        ?>
        <html>
        <body>
        <?php
        parent::show();
        $this->home_post->render();
        ?>
        </body>
        </html>
        <?php
    }
}