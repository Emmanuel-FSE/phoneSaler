<?php

class Cart
{
    public $db =null;
    public function  __construct()
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }
    public function insertCart($params = null, $table = "cart")
    {
        if($this->db->con != null){
            if ($params != null){

            }
        }
    }
}