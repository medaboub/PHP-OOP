<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BOOKAdapter
 *
 * @author Administrateur
 */
class BOOKAdapter implements EBOOKInterface{
    //put your code here
    private $book;
    public function __construct(BOOKInterface $book) {
       $this->book=$book;
    }

    public function SlideNext() {
       $this->book->turnPage(); 
    }

}
