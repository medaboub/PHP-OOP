<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


spl_autoload_register(function($class){
    include $class .".php";
});

$booking1=new  DoubleRoom();
echo $booking1->getPrice();
echo $booking1->getDescription();

//500Double room booking

$booking2=new WIFI(new SingleRoom());
echo $booking2->getPrice();
echo $booking2->getDescription();

//230Single room booking With WIFI Extension

$booking3=new WIFI(new ExtraBed(new DoubleRoom()));
echo $booking3->getPrice();
echo $booking3->getDescription();

//600Double room booking With Extra Bed Extension With WIFI Extension