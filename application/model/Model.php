<?php

/**
 * Created by PhpStorm.
 * User: Savan
 * Date: 21-02-2016
 * Time: 21:41
 */
class Model
{
    protected $db;
    public function __construct()
    {
        $this->db = new MysqliDb(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }
}