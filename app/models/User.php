<?php


class User
{
    private $db;

    /**
     * User constructor.
     */
    //konstruktor kutsub yhendyuse andmebaasiga
    public function __construct()
    {
        $this->db = new Database();
    }

}