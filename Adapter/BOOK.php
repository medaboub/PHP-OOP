<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BOOK
 *
 * @author Administrateur
 */
class BOOK implements BOOKInterface{
    //put your code here
    private $page=0;
    const totalPage=30;
    //put your code here
    public function turnPage(){
       /** slide next page **/ 
        if($this->page<self::totalPage){
            $this->page++;
            echo "Current page : {$this->page}";            
        }else{
            echo "Current page : Last page ";    
        }
    }

}
