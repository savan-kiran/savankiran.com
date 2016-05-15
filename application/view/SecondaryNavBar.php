<?php
/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 06-03-2016
 * Time: 16:32
 */

class SecondaryNavBar extends View
{
    static $LAYOUT_TYPE_LINEAR = 'linear';
    static $LAYOUT_TYPE_HIERARCHICAL = 'hierarchical';
    static $LAYOUT_WORD_CLOUD = 'word_cloud';

    private $secondary_nav_bar_contents;
    private $layout_type;
    private $active_content;

    public function __construct()
    {
        parent::__construct();
        $this->setLayoutType(SecondaryNavBar::$LAYOUT_TYPE_LINEAR);
    }

    /**
     * set secondary navigation bar contents
     * @param mixed $secondary_nav_bar_contents
     */
    function setSecondaryNavBarContents($secondary_nav_bar_contents)
    {
        $this->secondary_nav_bar_contents = $secondary_nav_bar_contents;
    }

    /**
     * @param mixed $active_content
     */
    function setActiveContent($active_content)
    {
        $this->active_content = $active_content;
    }

    /**
     * set layout type [linear/hierarchical]
     * @param mixed $layout_type
     */
    function setLayoutType($layout_type)
    {
        $this->layout_type = $layout_type;
    }

    function render()
    {
        switch($this->layout_type) {
            case SecondaryNavBar::$LAYOUT_TYPE_LINEAR:
                $this->renderLinear();
                break;

            case SecondaryNavBar::$LAYOUT_TYPE_HIERARCHICAL:
                $this->renderHierarchical();
                break;
        }
    }

    private function renderLinear()
    {
        ?>
        <ul class="secondary_nav_bar">
        <?php
        if(is_array($this->secondary_nav_bar_contents)) {
            foreach ($this->secondary_nav_bar_contents as list($nav_bar_content, $nav_bar_content_link, $nav_bar_content_id)) {
                ?>
                <li class="secondary_nav_bar_item">
                    <a class="<?php echo $nav_bar_content_id == $this->active_content ? "secondary_nav_bar_item_a_active" : "secondary_nav_bar_item_a"; ?>"
                       href="<?php echo $nav_bar_content_link; ?>">
                        <?php echo $nav_bar_content; ?>
                    </a>
                </li>
                <?php
            }
        }
        ?>
        </ul>
        <?php
    }

    private function renderHierarchical()
    {

    }
}