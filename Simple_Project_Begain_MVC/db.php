<?php
//Model 

class db{

    private $connect;

    public function __construct(){
        $this -> connect = new mysqli("localhost","root","","souq.com");
    }

    public function insert($name){
        $this -> connect ->query("INSERT INTO `gategory`(`name`) VALUES ('$name')");
        return $this -> connect -> affected_rows;
    }

    public function __destruct(){
        $this-> connect -> close();
    }

}






?>