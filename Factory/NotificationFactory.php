<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NotificationFactory
 *
 * @author Administrateur
 */
class NotificationFactory {
    //put your code here
    public static function BuildNotification(string $NotificationType){
        $notificationClass=$NotificationType."Notification";
        return new $notificationClass();
    }
}
