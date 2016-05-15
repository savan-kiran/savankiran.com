<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 15-05-2016
 * Time: 12:54
 */
class AbstractWritingDS
{
    private $id;
    private $title;
    private $writing;
    private $image1;
    private $i_pos1;
    private $image2;
    private $i_pos2;
    private $bg_img;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getWriting()
    {
        return $this->writing;
    }

    /**
     * @param mixed $writing
     */
    public function setWriting($writing)
    {
        $this->writing = $writing;
    }

    /**
     * @return mixed
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * @param mixed $image1
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;
    }

    /**
     * @return mixed
     */
    public function getIPos1()
    {
        return $this->i_pos1;
    }

    /**
     * @param mixed $i_pos1
     */
    public function setIPos1($i_pos1)
    {
        $this->i_pos1 = $i_pos1;
    }

    /**
     * @return mixed
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * @param mixed $image2
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;
    }

    /**
     * @return mixed
     */
    public function getIPos2()
    {
        return $this->i_pos2;
    }

    /**
     * @param mixed $i_pos2
     */
    public function setIPos2($i_pos2)
    {
        $this->i_pos2 = $i_pos2;
    }

    /**
     * @return mixed
     */
    public function getBgImg()
    {
        return $this->bg_img;
    }

    /**
     * @param mixed $bg_img
     */
    public function setBgImg($bg_img)
    {
        $this->bg_img = $bg_img;
    }
}