<?php
require "db.php";

// Controlar
if(isset($_POST['name'])){
$n = $_POST['name'];


// Model -> insert()
$db = new db();

$db -> insert($n);
}
?>