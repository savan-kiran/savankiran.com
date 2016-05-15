<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 06-03-2016
 * Time: 13:24
 */
class AbstractWritings extends Controller
{
    private $abstract_writings_page;
    private $abstract_writings_model;

    public function __construct()
    {
        parent::__construct();
        $this->abstract_writings_model = new AbstractWritingsModel();
        $this->abstract_writings_page = new AbstractWritingsPage();
    }

    public function defaultAction($queryString = 1)
    {
        $this->page($queryString);
    }

    public function page($queryString = 1)
    {
        parent::defaultAction($queryString);

        $writings_pages = $this->abstract_writings_model->getTotalPages();
        $writings = array();

        if($writings_pages > 0) {
            $writingsFromSQL = $this->abstract_writings_model->getWritingsForPage($queryString);

            if ($writingsFromSQL && $writingsFromSQL->num_rows > 0) {
                for ($i = 0; $i < $writingsFromSQL->num_rows; $i++) {
                    $data = $writingsFromSQL->fetch_row();
                    if (!is_null($data)) {
                        $writing = new AbstractWritingDS();
                        $writing->setId($data[0]);
                        $writing->setTitle($data[1]);
                        $writing->setWriting($data[2]);
                        $writing->setImage1($data[3]);
                        $writing->setIPos1($data[4]);
                        $writing->setImage2($data[5]);
                        $writing->setIPos2($data[6]);
                        $writing->setBgImg($data[7]);
                        array_push($writings, $writing);
                    }
                }
            }
            $writingsFromSQL->free();
        }

        $this->abstract_writings_page->setNumOfPages($writings_pages);
        $this->abstract_writings_page->setActivePage($queryString);
        $this->abstract_writings_page->setContent($writings);
        $this->abstract_writings_page->show();
    }
}