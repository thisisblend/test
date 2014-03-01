<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include( 'classes/User.php' );
include( 'classes/ExtendedUser.php' );
 
$guest = new User();

$guest->setUserName( 'Darren Roberts' );
echo $guest->getUserName();


$guest2 = new ExtendedUser(); // this class removes the letter a from user name

$guest2->setUserName( 'Darren Roberts' );
echo "<br />New: ".$guest2->getUserName();
