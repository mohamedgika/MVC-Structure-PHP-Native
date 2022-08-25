
<?php

//PDO

//Insert ==============================================

$dns = "mysql:host=localhost;dbname=souq.com";
$connection = new PDO($dns,"root","");

// $q = $connection->query("INSERT INTO `gategory`(`name`) VALUES ('Samsung Smart Tv')");
// echo $q -> rowCount(); //Output 1

$d = $connection ->prepare("INSERT INTO `gategory`(`name`) VALUES (?)");
$d ->execute(['LG Smart 280']);

//Select ================================================

// $dns = "mysql:host=localhost;dbname=souq.com";
// $connection = new PDO($dns,"root","");

// $q = $connection ->query("SELECT * FROM `gategory`");

// echo "<pre>";
// print_r($q -> fetchAll(PDO::FETCH_ASSOC));



















?>