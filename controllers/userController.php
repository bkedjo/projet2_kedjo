<?php
require_once('Models/user.php');
class UserController
{
  #get all users
  public function getAllUsers()
  {
    $objUser = new User;
    return $objUser->getUsers();
  }

  #get user by id
  public function getUserById()
  {
    $objUser = new User;
    //validation 
    //   if (session_status() == PHP_SESSION_NONE) {
    //     session_start();
    // }

    // // Assurez-vous que $_SESSION['user'] et $_SESSION['user']['id'] sont définis
    // if (isset($_SESSION['user']) && isset($_SESSION['user']['id'])) {
    //     $id = $_SESSION['user']['id'];
    //     return $objUser->getUserById($id);
    // } else {
    //     // Gérer le cas où l'ID d'utilisateur n'est pas défini dans la session
    //     return null;
    // }
    $id = $_SESSION['user']['id'];
    return $objUser->getUserById($id);
  }


  
 #delete userbyID
  public function DeleteUserById(){
  $objUser = new User;
  $id = isset($_GET['id']) ? $_GET['id'] : null;
 // $id = $_SESSION['user']['id'];
  if($id){
  return $objUser->deleteUser($id);
  }
  return null;
  }




  #create user
  function ajouterUser($userdata){
    $objUser = new User;
   
    //appeler la methode add avec la requet et usedata
    return $objUser->ajouterUser($userdata);


  
  }
  
}



