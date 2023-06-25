<?php

class Profile extends Controller
{

  public function __construct()
  {
    // if(!isLoggedIn()){
    //   redirect('users/signin');
    // }
    $this->userModel = $this -> model('User');
    $this->panierModel = $this -> model('Panier');
  }

  public function profile()
  {

    $posts = $this -> userModel -> findUserByEmailAndReturnUserData($_SESSION['user_email']);
    $paniers = $this->panierModel->getCountQuantityProdInPanier($_SESSION['user_id']);

    $data = [
      'posts' => $posts,
      'paniers' => $paniers,
    ];
    $this->view('profile/profile', $data);
  }


  public function editeProfile($id){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $user = $this->userModel->gitUserById($id);
      $this -> view('profile/editeProfile',(array) $user);

   }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $data =  $_POST;
      // die(var_dump($data));
      $this->userModel->editeProfile($data, $id);
      redirect('/profile/profile');
   }
  }


  public function createnewUserSession($data)
  {
    $_SESSION['user_firstName'] = $data['firstName'];
    $_SESSION['user_lastName'] = $data['lastName'];
    $_SESSION['user_email'] = $data['email'];
    $_SESSION['user_phone'] = $data['phone'];
  }

}
