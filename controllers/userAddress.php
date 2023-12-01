<?php
require_once('Models/user.php');
    
    class UserRole{
        #create address
  function ajouterUserAddress($addressParams){
    $objUser = new User;
    return $objUser->ajouterUserAddress( $addressParams);
   
            
}
    }