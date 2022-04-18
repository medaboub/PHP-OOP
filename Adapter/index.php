<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

spl_autoload_register(function($class){
    include $class .".php";
});


$ebook=new EBOOK();
echo $ebook->SlideNext();
//Current page : 1


$book=new BOOK();
$bookAdapter=new BOOKAdapter($book);
echo $book->turnPage();
echo $bookAdapter->SlideNext();
echo $book->turnPage();
//Current page : 1
//Current page : 2
//Current page : 3