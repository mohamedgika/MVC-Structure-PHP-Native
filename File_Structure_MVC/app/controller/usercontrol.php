<?php

namespace SuperMarket\controller;  // NameProject / File
use SuperMarket\core\veiw;

class usercontrol extends veiw{
    public function user(){
        return $this->veiw("user");
    }
}
?>