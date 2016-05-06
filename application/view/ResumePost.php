<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 05-05-2016
 * Time: 23:39
 */
class ResumePost extends SinglePost
{
    function render_post()
    {
        ?>
        <a href="https://in.linkedin.com/in/savankiran" target="_blank">
            Linkedin profile
        </a>
        <br/>
        <a href="<?php echo 'docs' . DS . 'SavanKiran.pdf' ?>" target="_blank">
            Resume
        </a>
        <?php
    }

}