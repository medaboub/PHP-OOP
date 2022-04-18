<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


spl_autoload_register(function($class){
    include $class .".php";
});

$car =new Car((new CarBuilder("Audi"))
        ->model("X5")
        ->power(5)
        ->build());
echo $car->getDescription();

//Audi X5 5