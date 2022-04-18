<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Service
 *
 * @author Administrateur
 */
abstract class Service  {
    //put your code here
    protected  $implementation;
    
    public function __construct(Formatter $implementation)
    {
        $this->implementation=$implementation;
    }  

    abstract public function get(): string;
}
