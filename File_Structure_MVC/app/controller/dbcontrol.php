<?php
namespace SuperMarket\controller;
use SuperMarket\models\gategorymodel;

class dbcontrol{
    public function db(){

        // $db = new db();
        // $db -> update('gategory',['name'=>"mannnnn",'id'=> 50]);
        // $db ->delete('gategory',53);
        // echo "<pre>";
        // print_r($db->select('gategory'));


        $gategory = new gategorymodel();
        echo "<pre>";
        print_r($gategory->selectgategory());
    }
}

















?>