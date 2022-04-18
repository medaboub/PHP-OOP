<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Car
 *
 * @author Administrateur
 */
class Car {
    //put your code here
    private $label;
    private $model;
    private $power;
    
    public function __construct(CarBuilder $builder) {
       $this->label=$builder->label; 
        $this->model=$builder->model; 
         $this->power=$builder->power; 
    }
    public function getDescription():string{
       return (isset($this->label)?" ".$this->label:'') . 
              (isset($this->model)?" ".$this->model:'')  .
              (isset($this->power)?" ".$this->power:'');
    }
}
