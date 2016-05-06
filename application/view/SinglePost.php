<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 27-03-2016
 * Time: 20:23
 */
abstract class SinglePost extends View
{
    function render()
    {
        ?>
        <div class="single_post_content_area_div">
            <?php
            $this->render_post();
            ?>
        </div>
        <?php
    }

    abstract function render_post();
}