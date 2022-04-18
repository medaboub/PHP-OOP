<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomNotification
 *
 * @author Administrateur
 */
class CustomNotification implements Notification{
    //put your code here
    public function notify() {
       echo "new Custom  Notification Content"; 
    }

}
