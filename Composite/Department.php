<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Direction
 *
 * @author Administrateur
 */
class Department implements Employee{
    //put your code here
    private $Employees=array();
    
    public function addEmployee(Employee $employee){
        array_push($this->Employees,$employee);
    }
    
    public function removeEmployee(Employee $employee){
        $key=array_search($employee,$this->Employees); 
        if($key>=0){
            unset($this->Employees[$key]);
        }
        
    }
    
    public function getSalary(): int {
        $salary=0;
       if(count($this->Employees)>0) {
           foreach($this->Employees as $value){
               $salary+=$value->getSalary();
           }
       }
       return $salary;
    }

}
