<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controller;

/**
 * Description of Cla1
 *
 * @author Asus
 */
class Cla1 {
    
    protected $message;
    private $message2;
    public function __construct($message,$message2) {
        $this->message=$message;
        $this->message2=$message2;
    }


    public function func1() {
        return "$this->message "." $this->message2";
    }
}
