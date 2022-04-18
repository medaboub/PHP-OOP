<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

spl_autoload_register(function($class){
    include $class .".php";
});

$employee1=new SimpleEmployee(1500);
$employee2=new SimpleEmployee(3000);

$department1 =new Department();
$department1->addEmployee($employee1);

$university=new Department();
$university->addEmployee($employee2);
$university->addEmployee($department1);

$department1->addEmployee(new SimpleEmployee(800));

echo "Hole university salary : {$university->getSalary()}";

//Hole university salary : 5300