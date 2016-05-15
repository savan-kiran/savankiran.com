<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 15-05-2016
 * Time: 12:21
 */
class AbstractWritingsPost extends CollatedPost
{
    private $content;

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param array $content
     */
    public function setContent(array $content)
    {
        $this->content = $content;
    }

    function render_post($post_num)
    {
        if(isset($this->content)) {
            $this->render_writing($this->content[$post_num]);
        }
    }

    private function render_writing(AbstractWritingDS $writingDS)
    {
        ?>
        <h1 class="writings_title">
            <?php echo $writingDS->getTitle() ?>
        </h1>
        <p class="writings_content">
            <?php echo $writingDS->getWriting() ?>
        </p>
        <?php
    }
}