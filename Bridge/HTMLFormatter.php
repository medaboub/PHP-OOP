<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HTMLFormatter
 *
 * @author Administrateur
 */
class HTMLFormatter implements Formatter{
    //put your code here
    public function format(string $text): string {
        return "<b>$text</b>";
    }

}
