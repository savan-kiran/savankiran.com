<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 06-03-2016
 * Time: 10:45
 */
class PrimaryNavBar extends View
{
    private $primary_nav_bar_contents;
    private $active_page;

    /**
     * set primary nav bar contents
     * @param mixed $primary_nav_bar_contents
     */
    function setPrimaryNavBarContents($primary_nav_bar_contents)
    {
        $this->primary_nav_bar_contents = $primary_nav_bar_contents;
    }

    /**
     * set active page in primary nav bar
     * @param mixed $active_page
     */
    function setActivePage($active_page)
    {
        $this->active_page = $active_page;
    }

    function render()
    {
        ?>
        <ul class="primary_nav_bar">
        <?php
        foreach($this->primary_nav_bar_contents as list($nav_bar_content, $nav_bar_content_link, $nav_bar_content_class))
        {
        ?>
            <li class="primary_nav_bar_item">
                <a class="<?php echo $nav_bar_content_class == $this->active_page ? "primary_nav_bar_item_a_active" : "primary_nav_bar_item_a"; ?>" href="<?php echo $nav_bar_content_link; ?>">
                    <?php echo $nav_bar_content; ?>
                </a>
            </li>
        <?php
        }
        ?>
        </ul>
        <?php
    }

}