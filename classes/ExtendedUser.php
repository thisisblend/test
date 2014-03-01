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
class ExtendedUser extends User{
    
    public function setUserName( $newUserName ){
        $this->userName = str_replace( 'a', '', $newUserName );
    }

}
