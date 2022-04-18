<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SingleRoom
 *
 * @author Administrateur
 */
class SingleRoom implements Booking{
     const price=200;
    //put your code here
    public function getPrice(): int {
        return self::price;
    }

    public function getDescription(): string {
        return "Single room booking";
    }

}
