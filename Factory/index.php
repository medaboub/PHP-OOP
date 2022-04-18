<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


spl_autoload_register(function($class){
    include $class .".php";
});

/** when JSON Likes Notification arrive {'type':'Likes'} **/
$notification= NotificationFactory::BuildNotification("Likes");
$notification->notify();

//Likes Notification Content

/** when new custom notification arrive **/
$notification= NotificationFactory::BuildNotification("Custom");
$notification->notify();

//new Custom Notification Content