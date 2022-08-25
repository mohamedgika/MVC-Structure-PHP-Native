<?php

namespace SuperMarket\controller;  // NameProject / File
use SuperMarket\core\veiw;

class homecontrol extends veiw{
    public function home(){
        return $this->veiw("home");
    }
}
?>