<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BookingDecorator
 *
 * @author Administrateur
 */
abstract class BookingDecorator implements Booking{
    //put your code here
    protected $booking;
    
    public function __construct(Booking $booking) {
        $this->booking=$booking;
    }   

}
