<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Darren
 */
class User {
    //put your code here
    
    public $userName;
    
    public function setUserName( $newUserName ){
        $this->userName = $newUserName;
    }

    public function getUserName() {
        return $this->userName;
    }

}
