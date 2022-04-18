<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DoubleRoom
 *
 * @author Administrateur
 */
class DoubleRoom implements Booking{
    const price=500;
    //put your code here
    public function getPrice(): int {
        return self::price;
    }

    public function getDescription(): string {
        return "Double room booking";
    }

}
