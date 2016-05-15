<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 08-05-2016
 * Time: 23:54
 */
class AbstractWritingsModel extends Model
{
    /**
     * @param $page_num
     * @return bool|mysqli_result
     */
    public function getWritingsForPage($page_num) {
        $query = 'SELECT * FROM abstract_writings WHERE id > ' .
            (($page_num - 1) * PageConfig::$ABSTRACT_WRITINGS_PER_PAGE).
            ' AND id <= ' . ($page_num * PageConfig::$ABSTRACT_WRITINGS_PER_PAGE) .
            ' ORDER BY id';
        return $this->db->query($query);
    }

    public function getTotalPages() {
        $query = 'SELECT COUNT(*) FROM abstract_writings';
        $result = $this->db->query($query);
        $total_pages = 0;
        if($result && $result->num_rows > 0) {
            $total_pages = $result->fetch_row()[0] / PageConfig::$ABSTRACT_WRITINGS_PER_PAGE;
        }
        return ceil($total_pages);
    }
}