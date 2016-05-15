<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 15-05-2016
 * Time: 12:23
 */
abstract class CollatedPost extends View
{
    private $num_of_posts = 1;

    /**
     * Get number of posts
     * @return int
     */
    public function getNumOfPosts()
    {
        return $this->num_of_posts;
    }

    /**
     * Set number of posts
     * @param int $num_of_posts
     */
    public function setNumOfPosts($num_of_posts)
    {
        $this->num_of_posts = $num_of_posts;
    }

    function render()
    {
        for($i=0; $i<$this->num_of_posts;$i++) {
            ?>
            <div class="single_post_content_area_div">
                <?php
                $this->render_post($i);
                ?>
            </div>
            <?php
        }
    }

    abstract function render_post($post_num);
}