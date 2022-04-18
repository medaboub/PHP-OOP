<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

spl_autoload_register(function($class){
    include $class .".php";
});


$pingService=new PingService(new TextFormatter());
echo $pingService->get();

// ping

$pingService=new PingService(new HTMLFormatter());
echo $pingService->get();

//<br>ping</br>