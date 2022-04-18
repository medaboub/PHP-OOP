<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProxyImage
 *
 * @author Administrateur
 */
class ProxyImage implements ImageInterface{
    //put your code here
    protected $filename;
    protected $image;
    public function __construct($filename) {
        $this->filename=$filename;
    }

    public function display() {
        if($this->image===null){
           $this->image=new Image($this->filename);
        }
        $this->image->display();
    }

}
