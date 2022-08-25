<?php
namespace SuperMarket\models;
use SuperMarket\core\db;

class gategorymodel extends db{

    public $table = 'gategory';

    public function selectgategory(){ 
        return $this->select($this->table);
    }
}


?>