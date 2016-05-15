<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 08-05-2016
 * Time: 15:05
 */
class HomeModel extends Model
{
    /**
     * Get my (Savan's) introduction
     * @return bool|mysqli_result
     */
    public function getIntroduction() {
        $content = $this->db->query('SELECT introduction FROM home_page WHERE id=1');
        if(!$content) {
            $content = '';
        } else {
            $content = $content->fetch_row()[0];
        }
        return $content;
    }
}