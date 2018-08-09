<?php
/**
 * Created by PhpStorm.
 * User: Maks
 * Date: 25.07.2018
 * Time: 17:07
 */

class App
{
    protected $db;

    /**
     * Advertisement constructor.
     * @param $db
     */
    public function __construct()
    {
        $this->db = Db::getConnection();
    }
}