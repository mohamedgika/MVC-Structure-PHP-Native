<?php
namespace SuperMarket\core;

class app{

    private $controller;
    private $method;
    private $para = [];

    public function __construct()
    {
        $this -> url();
        $this -> render();
    }

    private function url(){   //Set

        if(!empty($_SERVER['QUERY_STRING'])){
            $url = explode("/",$_SERVER['QUERY_STRING']);

            //controller
            $this -> controller = isset($url[0]) ? $url[0] : "home"; // ? = if   After ? Execute  : = else Execute

            //method
            $this -> method = isset($url[1]) ? $url[1] : "index";

            //para
            $this -> para = isset($url[2]) ? $url : [];
        }
    }

    private function render(){ //Get
        $controller = "SuperMarket\\controller\\".$this -> controller."control"; // usercontrol 
        if(class_exists($controller)){ //class Found Or Not
            $controller = new $controller;
        }
        if(method_exists($controller , $this -> method)){ 
            call_user_func_array([$controller,$this -> method],$this -> para);
        }
}
}

?>