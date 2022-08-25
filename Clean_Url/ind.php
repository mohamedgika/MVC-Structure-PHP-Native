<?php

// update

// corseupdate.php?id=5    //Not Clean Url

// corse/update/5          // Clean Url

// $url = explode("/",$_GET['q']);  // Divide String to Array


// $class_name = $url[0];
// $method = $url[1];
// $para = $url[2];

// echo $method;


$url = explode("/",$_SERVER['QUERY_STRING']);

$class_name = $url[0];
$method = $url[1];
$para = $url[2];

echo $url[0];



?>