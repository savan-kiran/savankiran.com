<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 27-03-2016
 * Time: 20:57
 */
class HomePost extends SinglePost
{
    private $content;

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

    function render_post()
    {
        echo $this->content;
    }

}