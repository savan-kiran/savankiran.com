<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 06-03-2016
 * Time: 13:15
 */
class AbstractWritingsPage extends Page
{
    private $content;
    private $num_of_pages;
    private $active_page;
    private $abstract_writings_post;
    private static $PAGE_PREFIX = 'Page ';
    private static $PATH_PREFIX = PATH . 'abstractWritings' . DS . 'page' . DS;

    public function __construct()
    {
        parent::__construct(AbstractWritingsPage::class);
        $this->abstract_writings_post = new AbstractWritingsPost();
    }

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

    /**
     * @return mixed
     */
    public function getNumOfPages()
    {
        return $this->num_of_pages;
    }

    /**
     * @param mixed $num_of_pages
     */
    public function setNumOfPages($num_of_pages)
    {
        $this->num_of_pages = $num_of_pages;
    }

    /**
     * @return mixed
     */
    public function getActivePage()
    {
        return $this->active_page;
    }

    /**
     * @param mixed $active_page
     */
    public function setActivePage($active_page)
    {
        $this->active_page = $active_page;
    }

    private function setupViews() {
        /** Setup content */
        $this->abstract_writings_post->setNumOfPosts(count($this->content));
        $this->abstract_writings_post->setContent($this->content);
    }

    public function show()
    {
        /** Setup secondary nav bar */
        $secondary_nav_bar_contents = array();
        for($i=1; $i<=$this->num_of_pages; $i++) {
            array_push($secondary_nav_bar_contents,
                array(AbstractWritingsPage::$PAGE_PREFIX . $i, AbstractWritingsPage::$PATH_PREFIX . $i, $i));
        }
        $this->setSecondaryNavBarContents($secondary_nav_bar_contents);
        $this->setSecondaryNavBarActivePage($this->active_page);

        parent::show();
    }


    function render_page()
    {
        /** Configure views */
        $this->setupViews();

        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo PATH?>css/abstract_writings.css">
        <?php

        /** Render views */
        $this->abstract_writings_post->render();
    }

}