<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CarBuilder
 *
 * @author Administrateur
 */
class CarBuilder {
    //put your code here
    public $label;
    public $model;
    public $power;
    
    public function __construct($label) {
      $this->label=$label;  
    }
    
    public function model($model): CarBuilder{
        $this->model=$model;
        return $this;
    }
    
    public function power($power): CarBuilder{
        $this->power=$power;
        return $this;
    }
    
    public function build(): CarBuilder{
        /** do custom build here ***/
        return $this;
    }
    
}
