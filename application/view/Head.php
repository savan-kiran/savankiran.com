<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 03-03-2016
 * Time: 23:31
 */
class Head extends View
{
    function render()
    {
        ?>
        <head>
            <link rel="stylesheet" type="text/css" href="<?php echo PATH?>css/styles.css">
        </head>
        <?php
    }

}