<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 06-03-2016
 * Time: 13:15
 */
class ResumePage extends Page
{
    private $resume_post;

    public function __construct()
    {
        parent::__construct(ResumePage::class);
        $this->resume_post = new ResumePost();
    }

    function render_page()
    {
        $this->resume_post->render();
    }
}