<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SimpleEmployee
 *
 * @author Administrateur
 */
class SimpleEmployee implements Employee{
    //put your code here
    private $salary;
    
    public function __construct(int $salary) {
       $this->salary=$salary; 
    }
    public function getSalary(): int {
        return $this->salary;
    }
}
