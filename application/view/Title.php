<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 03-03-2016
 * Time: 08:18
 */
class Title extends View
{
    private $title;
    private $sub_title;
    private $logo;

    /**
     * set title
     * @param mixed $title
     */
    function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * set sub title
     * @param mixed $sub_title
     */
    function setSubTitle($sub_title)
    {
        $this->sub_title = $sub_title;
    }

    /**
     * set logo path
     * @param mixed $logo
     */
    function setLogo($logo)
    {
        $this->logo = $logo;
    }

    function render()
    {
        ?>
        <div class="title_div">
            <div class="title_logo_div">
                <img src="<?php echo $this->logo; ?>" class="logo" />
            </div>
            <div class="title_text_div">
                <p class="title_text"><?php echo $this->title; ?></p>
                <p class="subtitle_text"><?php echo $this->sub_title; ?></p>
            </div>
        </div>
        <?php
    }

}