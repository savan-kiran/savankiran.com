<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 08-05-2016
 * Time: 15:05
 */
class HomeModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return bool|mysqli_result
     */
    public function getContent() {
        $content = $this->db->query('SELECT description FROM home WHERE id=1');
        if(!$content) {
            $content = '';
        } else {
            $content = $content->fetch_row()[0];
        }
        return $content;
    }
}