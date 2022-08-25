<?php

define('BS',DIRECTORY_SEPARATOR); // Define Back Slash 
define('ROOT',dirname(__dir__)); // ROOT

//Root File 
define('MVC','MVC');

//File Project
define('file',ROOT.BS);

// File App
define('APP',file."app".BS);
define('MODELS',APP."models".BS);
define('CONTROLLER',APP."controller".BS);
define('VEIWS',APP."veiws".BS);
define('CORE',APP."core".BS);
define('VENDOR',ROOT.BS.'vendor'.BS);

// echo VENDOR;

// require CORE."app.php";
require_once VENDOR."autoload.php";

$app = new SuperMarket\core\app();



?>