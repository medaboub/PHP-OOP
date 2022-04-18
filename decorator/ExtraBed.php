<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WIFI
 *
 * @author Administrateur
 */
class ExtraBed extends BookingDecorator{
    //put your code here
    static $price=70;
    
    public function getDescription(): string {
       return $this->booking->getDescription()." With Extra Bed Extension";
    }

    public function getPrice(): int {
      return ($this->booking->getPrice()+ self::$price);
    }
}
