<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PingService
 *
 * @author Administrateur
 */
class PingService extends Service{
    //put your code here
    
    public function get(): string {
        return $this->implementation->format("ping");
    }

}
