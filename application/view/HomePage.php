<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 04-03-2016
 * Time: 08:18
 */
class HomePage extends Page
{

    private $content;
    private $home_post;

    public function __construct()
    {
        parent::__construct(HomePage::class);
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

    function render_page()
    {
        /** Configure views */
        $this->setupViews();

        /** Render views */
        $this->home_post->render();
    }
}