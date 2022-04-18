<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Image
 *
 * @author Administrateur
 */
class Image implements ImageInterface{
    //put your code here
    protected $filename;
    public function  __construct($filename) {
        $this->filename = $filename;
        $this->loadFromDisk();
    }
    protected function loadFromDisk() {
        echo "Loading {$this->filename}\n";
    }
    public function display() {
        echo "Display {$this->filename}\n";
    }
}
