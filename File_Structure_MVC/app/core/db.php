<?php

namespace SuperMarket\core;
use PDO;
use SuperMarket\core\dbhandler;

class db implements dbhandler{

    private $dsn = "mysql:host=localhost;dbname=souq.com";
    protected $connection;

    public function __construct()
    {
        $this->connection = new PDO($this->dsn,"root","");
    }

    
    public function insert($table,$data){

        //Column
        $sql = "INSERT INTO `$table`(";

        foreach ($data as $col => $value) {
            $sql .="`$col`,";
        }
        $sql = rtrim($sql,",");
        $sql .=")VALUES(";

        //Values
        foreach ($data as $col => $value) {
            $sql .=":$col,";
        }
        $sql = rtrim($sql,",");
        $sql .=")";
        // Create data and Execute
        // // sql = INSERT INTO `gategory`(`id`,`name`)VALUES('1','mohamed')
        // $d = $this->connection->prepare($sql);
        // // // data = Array [name] => mohamed , [id] => 50
        // $d->execute($data);
        $this->exec($data,$sql);
    }


    public function update($table,$data){

         $sql = "UPDATE `$table` SET ";

         foreach ($data as $col => $value) {
            if($col != 'id'){
             $sql .="`$col` = :$col,";
            }else{
                $sql = rtrim($sql,",");
                $sql .=" WHERE `$col` = :$col";
            }
         }
         $sql = rtrim($sql,",");
        //  $d = $this->connection->prepare($sql);
        //  $d->execute($data);
        $this->exec($data,$sql);
    }



    public function delete($table,$id){
        $sql = "DELETE FROM `$table` WHERE `id` = :id";
        $data = ['id' =>$id];
        // $d = $this->connection->prepare($sql);
        // $d->execute();
        $this->exec($data,$sql);

    }

    public function select($table){
        $sql ="SELECT * FROM `$table`";
        // $this->exec($data,$sql);
        $sql = $this->connection->query($sql);
        return $sql->fetchAll(PDO::FETCH_ASSOC);

    }

    public function sqlquery($sql){
        //Select Only
        $sql = $this->connection->query($sql);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    private function exec($data,$sql){
        $d = $this->connection->prepare($sql);
      return  $d->execute($data);

    }
}


















?>