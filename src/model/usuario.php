<?php

namespace App\model;

class Usuario {
    private $name;
    private $pass;

    public function getName() {
        return $this ->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getPass() {
        return $this ->pass;
    }
    public function setPass ($pass) {
        $this-> pass = $pass;
    }

}